<?php


namespace App\Controller;


use App\Entity\Association;
use App\Entity\Category;
use App\Entity\Favoris;
use App\Repository\AssociationRepository;
use App\Repository\CategoryRepository;
use App\Repository\FavorisRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class AssociationController extends AbstractController
{

    /**
     * @Route("/association", name="app_association")
     * @param AssociationRepository $associationRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getAssociations(AssociationRepository $associationRepository,SerializerInterface $serializer): JsonResponse
    {

        // affiche toutes les associations

        $assos = $associationRepository->findAll();

        $tab_final = [];
        foreach ($assos as $asso){
            $tab = [];
            $tab['id'] = $asso->getid();
            $tab['name'] = $asso->getName();
            $tab['description'] = $asso->getDescription();
            $tab['npaCode'] = $asso->getNpaCode();
            $tab['picture'] = $asso->getPicture();
            $tab['adress'] = $asso->getAdress();
            $tab['phoneNumber'] = $asso->getPhoneNumber();
            $tab['website'] = $asso->getWebsite();
            $tab['creationDate'] = $asso->getCreationDate();
            $tab['categories'] = [];
            foreach($asso->getCategory() as $category){
                array_push($tab['categories'], $category->getLibelle());
            }
            array_push($tab_final, $tab);
        }

        $results = $serializer->serialize(
            $tab_final,
            'json'
        );

        return new JsonResponse($results, 200, [], true);

    }

    /**
     * @Route("/association/{id}", name="app_association_id")
     * @param AssociationRepository $associationRepository
     * @param SerializerInterface $serializer
     * @param $id
     * @return JsonResponse
     */
    public function getAssociationById(AssociationRepository $associationRepository, SerializerInterface $serializer, $id): JsonResponse
    {

        // affiche l'association via l'id
        $assos = $associationRepository->findOneById($id);

        $tab = [];
        foreach($assos->getCategory() as $asso){
            $asso->getLibelle();
            array_push($tab, $asso->getLibelle());
        }

        $returnArray = [
            'id' =>$assos->getId(),
            'name'=>$assos->getName(),
            'description'=>$assos->getDescription(),
            'npa'=>$assos->getNpaCode(),
            'picture'=>$assos->getPicture(),
            'adress'=>$assos->getAdress(),
            'phoneNumber'=>$assos->getPhoneNumber(),
            'webSite'=>$assos->getWebsite(),
            'creationDate'=>$assos->getCreationDate(),
            'categorie'=>$tab
        ];

        $results = $serializer->serialize(
            $returnArray,
            'json'
        );

        return new JsonResponse($results, 200, [], true);

    }

    /**
     * @Route("/assos/fav/{userId}", name="app_association_id_fav")
     * @param AssociationRepository $associationRepository
     * @param UserRepository $userRepository
     * @param $userId
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getFavorisAssos(AssociationRepository $associationRepository, FavorisRepository $favorisRepository,
                                    UserRepository $userRepository, $userId, SerializerInterface $serializer): JsonResponse
    {
        $user = $userRepository->findOneById($userId);

        $user->getUserFav();

        //dd($user->getUserFav());

        $tab_final = [];
        if($user->getUserFav()->isEmpty()){
            dd("test");
            foreach ($user->getFavoris() as $favoris) {

                $tab = [];
                $tab['id'] = $user->getFavoris()->getId();
                $tab['state'] = $user->getFavoris()->getState();
                $tab['association'] = $user->getFavoris()->getAssociations()->getName();
                array_push($tab, $tab_final);

            }
            dd($tab);
            $results = $serializer->serialize(
                $tab_final,
                'json'
            );
            return new JsonResponse($results, 200, [], true);
        }
        else{
            return $this->json([
                'message' => 'pas de favoris',
            ]);
        }

    }

    /**
     * @Route("/association/favoris/add/{userId}/{associationId}", name="app_association_add_id")
     * @param UserRepository $userRepository
     * @param $userId
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     * @param $associationId
     * @param AssociationRepository $associationRepository
     * @return JsonResponse
     */
    public function addFavorisAssos(UserRepository $userRepository, $userId, SerializerInterface $serializer,
                                    EntityManagerInterface $entityManager, $associationId, AssociationRepository $associationRepository): JsonResponse
    {

        //dd("oui");
        $user = $userRepository->findOneById($userId);
        $assos = $associationRepository->findOneById($associationId);

        if($user->getFavoris() == NULL){
            dd("test4");
            $favoris = new Favoris();
            $favoris->setState(1);

            $favoris->setAssociations($assos);
            $favoris->addUser($user);
            $user->setFavoris($favoris);

            $entityManager->persist($user);
            $entityManager->persist($favoris);
            $entityManager->flush();

            $returnArray = [
                'id' =>$favoris->getId(),
                'state'=>$favoris->getState(),
                'association'=>$favoris->getAssociations()->getName(),
            ];

            $results = $serializer->serialize(
                $returnArray,
                'json'
            );

            return new JsonResponse($results, 200, [], true);
        }
        else{
            //dd('test');
            //dd($user->getFavoris()->getAssociations()->getName());
            //foreach ($user->getFavoris()->getAssociations() as $fav){
                if($user->getFavoris()->getAssociations()->getName() == $assos->getName()){
                    if($user->getFavoris()->getState() == true){
                        dd("test1");
                        return $this->json([
                            'message' => 'association déjà dans vos favoris !',
                        ]);
                    }else{
                        dd("test2");
                        $user->getFavoris()->getAssociations()->setState(1);
                        $entityManager->persist($user->getFavoris());
                        $entityManager->flush();

                        $returnArray = [
                            'id' =>$user->getFavoris()->getId(),
                            'state'=>$user->getFavoris()->getState(),
                            'association'=>$user->getFavoris()->getAssociations()->getName(),
                        ];

                        $results = $serializer->serialize(
                            $returnArray,
                            'json'
                        );
                    }
                }
                else{
                    //dd("test3");
                    $favoris = new Favoris();
                    $favoris->setState(1);

                    $favoris->setAssociations($assos);
                    $favoris->addUser($user);
                    $user->setFavoris($favoris);

                    $entityManager->persist($user);
                    $entityManager->persist($favoris);
                    $entityManager->flush();

                    $returnArray = [
                        'id' =>$favoris->getId(),
                        'state'=>$favoris->getState(),
                        'association'=>$favoris->getAssociations()->getName(),
                    ];

                    $results = $serializer->serialize(
                        $returnArray,
                        'json'
                    );

                }
            }
        //}
        dd("rien");
        //return new JsonResponse($results, 200, [], true);
    }

    /**
     * @Route("/association/favoris/remove/{userId}", name="app_association_remove_id")
     * @param AssociationRepository $associationRepository
     * @param UserRepository $userRepository
     * @param $userId
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function removeFavorisAssos(AssociationRepository $associationRepository, UserRepository $userRepository,
                                       $userId, SerializerInterface $serializer): JsonResponse
    {
        $user = $userRepository->findOneById($userId);
        $user->getFavoris();
    }
}