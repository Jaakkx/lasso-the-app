<?php

namespace App\Controller;

use App\Entity\Association;
use App\Entity\Category;
use App\Entity\Question;
use App\Entity\User;
use App\Repository\CategoryRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LassoController extends AbstractController
{

    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/lasso", name="app_lasso")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/LassoController.php',
        ]);
    }


    /**
     * @Route("/lasso/data", name="app_lasso_data")
     */

    public function addData(CategoryRepository $categoryRepository): Response
    {
        /**
         * exemple ajout question
         */

        /*$question3 = new Question();
        $question3
            ->setLibelle('Souhaitez-vous venir en aide aux Haïtiens après les catastrophes naturelles ?')
            ->setType(1)
            ->setDetailType('Unicef');
        $this->entityManager->persist($question3);
        $this->entityManager->flush();

        $question = new Question();
        $question
            ->setLibelle('Construire des écoles en Afrique est primordial selon vous ?')
            ->setType(1)
            ->setDetailType("Unicef");
        $this->entityManager->persist($question);
        $this->entityManager->flush();

        $question1 = new Question();
        $question1
            ->setLibelle('Penses-tu que le nucléaire est une ressource durable et écologique ?')
            ->setType(1)
            ->setDetailType("GreenPeace");
        $this->entityManager->persist($question1);
        $this->entityManager->flush();

        $question2 = new Question();
        $question2
            ->setLibelle('Crois-tu en la science pour résoudre les problèmes climatiques ?')
            ->setType(1)
            ->setDetailType("GreenPeace");
        $this->entityManager->persist($question2);
        $this->entityManager->flush();

        $question4 = new Question();
        $question4
            ->setLibelle('Crois-tu en l’Homme pour résoudre les problèmes climatiques ?')
            ->setType(1)
            ->setDetailType('GreenPeace');
        $this->entityManager->persist($question4);
        $this->entityManager->flush();*/


        /**
         * exemple ajout association
         */
        /*$assoc = new Association();
        $assoc
            ->setName('Petit frère des pauvres')
            ->setDescription("Depuis 1946, les Petits Frères des Pauvres luttent contre l'isolement et la solitude des personnes âgées, prioritairement les plus démunies. Par nos actions, nous recréons des liens leur permettant de reprendre goût à la vie et faire partie du monde qui les entoure. Vivre tout simplement.")
            ->setWebsite('https://www.petitsfreresdespauvres.fr')
            ->setAdress("44 Rue de la Chine, 75020 Paris")
            ->setPhoneNumber('08 00 47 47 88')
            ->setPicture('https://www.petitsfreresdespauvres.fr/src/images/logo-red-retina.png')
            ->setCreationDate(new DateTime('1946-04-19 00:00:00'))
            ->setScore(100);

        $categorie4 = $categoryRepository ->findOneByLibelle('Humanitaire');
        $categorie2 = $categoryRepository ->findOneByLibelle('Seniors');
        $categorie3 = $categoryRepository ->findOneByLibelle('Sante');
        //$categorie1 = $categoryRepository ->findOneByLibelle('Seniors');


        $assoc ->addCategory($categorie4);
        $assoc ->addCategory($categorie2);
        $assoc ->addCategory($categorie3);
        //$assoc ->addCategory($categorie1);
        $this->entityManager->persist($assoc);
        $this->entityManager->flush();*/

        //dd($question);

        // DATA, code_statut HTTP, tableau de contexte , json : true
        //return new JsonResponse($user, 200, [], true);
    }
}
