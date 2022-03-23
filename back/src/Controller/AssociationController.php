<?php


namespace App\Controller;


use App\Entity\Association;
use App\Entity\Category;
use App\Repository\AssociationRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManager;
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

        // affiche toutes les associations
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
}