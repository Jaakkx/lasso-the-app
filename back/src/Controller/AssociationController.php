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
     * @param CategoryRepository $categoryRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getAssociation(AssociationRepository $associationRepository,CategoryRepository $categoryRepository,SerializerInterface $serializer): JsonResponse
    {

        // affiche toutes les associations
        //$associations = $entityManager->getRepository(Association::class)->findAll();
        $category = $categoryRepository->findOneById(1);
        //$association = $associations->getCategory();

        //dd($associations);
        //dd($associations);
        $results = $serializer->serialize(
            $category,
            'json',
            array('groups' => array('association_group'))
        );

        return new JsonResponse($results, 200, [], true);


        return $this->json([
            'message' => 'A resoudre',
            'path' => 'src/Controller/RegistrationController.php',
        ]);
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
        $associations = $associationRepository->findById($id);
        //dd($associations);
        /*$results = $serializer->serialize(
            $associations,
            'json'
        );*/


        //return new JsonResponse($results, 200, [], true);

        return $this->json([
            'message' => 'A resoudre',
            'path' => 'src/Controller/RegistrationController.php',
        ]);
    }
}