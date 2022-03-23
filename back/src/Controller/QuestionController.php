<?php

namespace App\Controller;

use App\Entity\AssociationUser;
use App\Entity\QuestionUser;
use App\Repository\AssociationRepository;
use App\Repository\QuestionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question", name="app_question")
     * @param QuestionRepository $questionRepository
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function getQuestion(QuestionRepository $questionRepository, SerializerInterface $serializer): Response
    {

        // affiche toutes les questions
        $questions = $questionRepository->findAll();

        $results = $serializer->serialize(
            $questions,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }

    /**
     * @Route("/random/question/{userId}", name="app_random_question")
     * @param QuestionRepository $questionRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getRandomQuestion(QuestionRepository $questionRepository, SerializerInterface $serializer){

        // quand arrive sur page d'accueil avec une question

        // génère aléatoirement une question entre 1 et 45
        $questions = $questionRepository->findById(rand(1,5));

        // si questionUser est vide => renvoie tout
        // si questionUser est pas vide => comparer question avec questionuser => prendre que les question qui sont pas dans questionUser

        $results = $serializer->serialize(
            $questions,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }

    /**
     * @Route("/update/ranking/{userId}/{questionId}/{swipe}", name="app_update_ranking")
     * @param SerializerInterface $serializer
     * @param $questionId
     * @param QuestionRepository $questionRepository
     * @return JsonResponse
     */
    public function updateRanking(SerializerInterface $serializer, $questionId, $userId, $swipe, EntityManagerInterface $entityManager,
                                  UserRepository $userRepository,QuestionRepository $questionRepository, AssociationRepository $associationRepository){


        // recupérer la question affichée (en params ?)
        $questionSelected = $questionRepository->findOneById($questionId);

        // si appuie sur btn gauche
        // question reste à 0 => toutes les assos impliquées reste à leur valeur actuelle (vérifier quelle assos impliquées avec type et detail type dans table Question)
        // finsi

        // si appuie sur btn droit
        $associations = $associationRepository->findAll();
        $user = $userRepository->find($userId);


       /* if(empty($user->getQuestionsUser())) {
            $questionUser = new QuestionUser();
            $questionUser->setLibelleAlreadyAnswer($questionSelected->getLibelle());
        }
        else{
            dd('verifie que la question selected nest pas das la liste des questionuser');
            dd('si pas dans question => créer question');

            dd("add questionselected to question user");
            $questionUser = new QuestionUser();
            $questionUser->setLibelleAlreadyAnswer($questionSelected->getLibelle());

            dd('sinon genère une autre question ou erreur');
        }*/

        if($swipe == 'right'){
            $type = $questionSelected->getType();
            if($type == 0){
                $detailType = $questionSelected->getDetailType();
                if($detailType == 'General'){ // toutes assos c'est + 1
                    foreach ($associations as $assos){

                        if($user->getAssociationUsers()->isEmpty()){

                            $associationUser = new AssociationUser();
                            $associationUser->setAssociationName($assos->getName());
                            $updateScore = $assos->getScore() + 1;
                            $associationUser->setScoreUpdateUser($updateScore);
                            $associationUser->addUser($user);

                            $user->addAssociationUser($associationUser);

                            $entityManager->persist($associationUser);
                            $entityManager->persist($user);
                            $entityManager->flush();

                        }
                        else {
                            foreach ($user->getAssociationUsers() as $assosUser) {
                                if ($assos->getName() == $assosUser->getAssociationName()) {
                                    // modifier le score de l'association dans la table associationUser + 1
                                    $assosUser->setScoreUpdateUser($assosUser->getScoreUpdateUser()+1);
                                    $entityManager->persist($assosUser);
                                    $entityManager->flush();

                                } else {
                                    $associationUser = new AssociationUser();
                                    $associationUser->setAssociationName($assos->getName());
                                    $updateScore = $assos->getScore() + 1;
                                    $associationUser->setScoreUpdateUser($updateScore);
                                    $associationUser->addUser($user);

                                    $user->addAssociationUser($associationUser);

                                    $entityManager->persist($associationUser);
                                    $entityManager->persist($user);
                                    $entityManager->flush();
                                }
                            }
                        }
                    }
                }
                elseif($detailType == 'Enfants'){;
                    foreach ($associations as $assos){
                        foreach ($assos->getCategory() as $category){
                            if ($category->getLibelle() == 'Enfants'){
                                if($user->getAssociationUsers()->isEmpty()){

                                    $associationUser = new AssociationUser();
                                    $associationUser->setAssociationName($assos->getName());
                                    $updateScore = $assos->getScore() + 1;
                                    $associationUser->setScoreUpdateUser($updateScore);
                                    $associationUser->addUser($user);

                                    $user->addAssociationUser($associationUser);

                                    $entityManager->persist($associationUser);
                                    $entityManager->persist($user);
                                    $entityManager->flush();

                                }
                                else {
                                    foreach ($user->getAssociationUsers() as $assosUser) {
                                        if ($assos->getName() == $assosUser->getAssociationName()) {
                                            // modifier le score de l'association dans la table associationUser + 1
                                            $assosUser->setScoreUpdateUser($assosUser->getScoreUpdateUser()+1);
                                            $entityManager->persist($assosUser);
                                            $entityManager->flush();

                                        } else {
                                            $associationUser = new AssociationUser();
                                            $associationUser->setAssociationName($assos->getName());
                                            $updateScore = $assos->getScore() + 1;
                                            $associationUser->setScoreUpdateUser($updateScore);
                                            $associationUser->addUser($user);

                                            $user->addAssociationUser($associationUser);

                                            $entityManager->persist($associationUser);
                                            $entityManager->persist($user);
                                            $entityManager->flush();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }


        // question augmente de 1 => toutes les assos impliquées calcule le score actuel + 1 (vérifier quelle assos impliquées avec type et detail type dans table Question)
        //finsi

        //$questionUser = new QuestionUser();

        // insérer cette question dans la table des questionUser (l'inserer aussi dans questions => tableau de users)
        // update de tout les scores des assos pour l'utilisateur
        // afficher une nouvelle question en vérifiant quelle n'est pas dans la table QuestionUser (appel de getRamdomQuestion)
        // redirect vers la page actuel => page accueil avec question


        //faire attention a se que ca actualise le score de l'assos uniquement pour l'utilisateur et pas pour toutes les assos


        $results = $serializer->serialize(
            $questionSelected,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }


    /**
     * @Route("/ranking", name="app_ranking")
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getRanking(SerializerInterface $serializer){

        // quand clique sur icone classement

        // récupération de tout les scores des assos pour l'utilisateur
        // récupération de la liste ou tableau des 3 assos avec le score le plus élevé
        // affichage du classement (tableau des 3 assos)

        $results = [];
        $results = $serializer->serialize(
            $results,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }

}
