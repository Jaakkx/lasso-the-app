<?php

namespace App\Controller;

use App\Entity\AssociationUser;
use App\Entity\Question;
use App\Entity\QuestionUser;
use App\Entity\User;
use App\Repository\AssociationRepository;
use App\Repository\QuestionRepository;
use App\Repository\QuestionUserRepository;
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
    public function getRandomQuestion(QuestionRepository $questionRepository, UserRepository $userRepository, $userId,
                                      QuestionUserRepository $questionUserRepository, SerializerInterface $serializer){

        // quand arrive sur page d'accueil avec une question
        // génère un tableau de question

        $questions = $questionRepository->findAll();
        $user = $userRepository->findOneById($userId);

        if($user->getQuestionsUser()->isEmpty()){
            //dd("coucou");
            $results = $serializer->serialize(
                $questions,
                'json'
            );

            return new JsonResponse($results, 200, [], true);
        }
        else{
            foreach ($user->getQuestionsUser() as $ques){
                foreach ($questions as $question_total){
                    //$questions_without_questionUser['questions'] = [];
                    if($ques->getLibelleAlreadyAnswer() == $question_total->getLibelle()){
                        // retourne un tableau avec toutes les autres questions qui ne sont pas dans getQuestionsUser
                        // remove la question deja répondu
                        unset($questions[$question_total->getId()-1]);
                    }
                }
            }
            $results = $serializer->serialize(
                $questions,
                'json'
            );

            return new JsonResponse($results, 200, [], true);
        }
        // si questionUser est vide => renvoie tout
        // si questionUser est pas vide => comparer question avec questionuser => prendre que les question qui sont pas dans questionUser
    }

    /**
     * @Route("/update/ranking/{userId}/{questionId}/{swipe}", name="app_update_ranking")
     * @param SerializerInterface $serializer
     * @param $questionId
     * @param $userId
     * @param $swipe
     * @param EntityManagerInterface $entityManager
     * @param UserRepository $userRepository
     * @param QuestionRepository $questionRepository
     * @param AssociationRepository $associationRepository
     * @return JsonResponse
     */
    public function updateRanking(SerializerInterface $serializer, $questionId, $userId, $swipe, EntityManagerInterface $entityManager,
                                  UserRepository $userRepository,QuestionRepository $questionRepository, AssociationRepository $associationRepository)
    {


        // recupérer la question affichée
        $questionSelected = $questionRepository->findOneById($questionId);

        // si appuie sur btn gauche
        // question reste à 0 => toutes les assos impliquées reste à leur valeur actuelle (vérifier quelle assos impliquées avec type et detail type dans table Question)

        // si appuie sur btn droit
        $associations = $associationRepository->findAll();
        $user = $userRepository->find($userId);


        if ($user->getAssociationUsers()->isEmpty()){
            foreach ($associations as $assos) {

                $associationUser = new AssociationUser();
                $associationUser->setAssociationName($assos->getName());
                $associationUser->setScoreUpdateUser($assos->getScore());
                $associationUser->setAssociationId($assos->getId());
                $associationUser->setAssociationDescription($assos->getDescription());

                $associationUser->addUser($user);

                $user->addAssociationUser($associationUser);

                $entityManager->persist($associationUser);
                $entityManager->persist($user);
                $entityManager->flush();
            }
        }

        if($swipe == 'right') {
            $type = $questionSelected->getType();
            if ($type == 0) {
                $detailType = $questionSelected->getDetailType();
                if ($detailType == 'General') { // toutes assos c'est + 1
                    foreach ($user->getAssociationUsers() as $assosUser) {
                        // modifier le score de l'association dans la table associationUser + 1
                        $assosUser->setScoreUpdateUser($assosUser->getScoreUpdateUser() + 1);
                        $entityManager->persist($assosUser);
                        $entityManager->flush();
                    }
                }
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'Enfants');
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'Sante');
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'Aide a la personne');
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'Seniors');
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'Animaux');
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'Ecologie');
                $this->updateScoreCategory($detailType, $associations, $user, $entityManager, 'International');
            }
            else{
                $detailType = $questionSelected->getDetailType();
                $this->updateScoreAssos($detailType, $associations, $user, $entityManager, 'Les sauveteurs en mer');
                $this->updateScoreAssos($detailType, $associations, $user, $entityManager, '30 millions d\'amis');
                $this->updateScoreAssos($detailType, $associations, $user, $entityManager, 'SPA');
                $this->updateScoreAssos($detailType, $associations, $user, $entityManager, 'Unicef');
                $this->updateScoreAssos($detailType, $associations, $user, $entityManager, 'GreenPeace');
            }
        }

        $this->addQuestionUser($user, $questionSelected, $entityManager, $serializer);

        // question augmente de 1 => toutes les assos impliquées calcule le score actuel + 1 (vérifier quelle assos impliquées avec type et detail type dans table Question)
        //finsi

        // insérer cette question dans la table des questionUser (l'inserer aussi dans questions => tableau de users)
        // update de tout les scores des assos pour l'utilisateur
        // afficher une nouvelle question en vérifiant quelle n'est pas dans la table QuestionUser (appel de getRamdomQuestion)
        // redirect vers la page actuel => page accueil avec question

        //faire attention a se que ca actualise le score de l'assos uniquement pour l'utilisateur et pas pour toutes les assos

        return $this->json([
            'message' => 'sucess',
        ]);

    }


    function addQuestionUser($user, $questionSelected, $entityManager, $serializer){
        $questions = $entityManager->getRepository(Question::class)->findAll();
        if ($user->getQuestionsUser()->isEmpty()) {
            $questionUser = new QuestionUser();
            $questionUser->setLibelleAlreadyAnswer($questionSelected->getLibelle());

            $user->addQuestionsUser($questionUser);
            $questionUser->addUser($user);

            $entityManager->persist($user);
            $entityManager->persist($questionUser);
            $entityManager->flush();
        } else {
            //verifie que la question selected nest pas dans la liste des questionUser
            $tabQuestion = [];
            $tab = [];
            foreach ($user->getQuestionsUser() as $question){
                    if($question->getLibelleAlreadyAnswer() == $questionSelected->getLibelle()){
                        $tab['libelle'] = $question->getLibelleAlreadyAnswer();
                        array_push($tabQuestion, $tab);
                    }
            }
            //dd($tabQuestion);
            if(empty($tabQuestion)){
                $questionUser = new QuestionUser();
                $questionUser->setLibelleAlreadyAnswer($questionSelected->getLibelle());

                $user->addQuestionsUser($questionUser);
                $questionUser->addUser($user);

                $entityManager->persist($user);
                $entityManager->persist($questionUser);
                $entityManager->flush();

                $results = $serializer->serialize(
                    $questionSelected,
                    'json'
                );
                return new JsonResponse($results, 200, [], true);
            }
        }

        return $this->json([
            'message' => 'sucess',
        ]);
    }

    function updateScoreCategory($detailType, $associations, $user, $entityManager, $category){
        if($detailType == $category) { // toutes assos c'est + 1
            $tabAssosCat = [];
            $tab = [];
            foreach ($associations as $assos){
                foreach ($assos->getCategory() as $assosCat){
                    if($assosCat->getLibelle() == $category){
                        $tab['name'] = $assos->getName();
                        array_push($tabAssosCat, $tab);
                    }
                }
            }
            foreach ($tabAssosCat as $tabAssos){
                foreach ($user->getAssociationUsers() as $assosUser) {
                    if($tabAssos['name'] == $assosUser->getAssociationName()){
                        // modifier le score de l'association dans la table associationUser + 1
                        $assosUser->setScoreUpdateUser($assosUser->getScoreUpdateUser() + 1);
                        $entityManager->persist($assosUser);
                        $entityManager->flush();
                    }
                }
            }
        }
    }

    function updateScoreAssos($detailType, $associations, $user, $entityManager, $assosName){

        if ($detailType == $assosName) { // toutes assos c'est + 2
            $tabAssosName = [];
            $tab = [];
            foreach ($associations as $assos) {
                if ($assos->getName() == $assosName) {
                    $tab['name'] = $assos->getName();
                    array_push($tabAssosName, $tab);
                }
            }
            foreach ($tabAssosName as $tabAssos) {
                foreach ($user->getAssociationUsers() as $assosUser) {
                    if ($tabAssos['name'] == $assosUser->getAssociationName()) {
                        // modifier le score de l'association dans la table associationUser + 2
                        $assosUser->setScoreUpdateUser($assosUser->getScoreUpdateUser() + 2);
                        $entityManager->persist($assosUser);
                        $entityManager->flush();
                    }
                }
            }
        }
    }


    /**
     * @Route("/ranking/{userId}", name="app_ranking")
     * @param SerializerInterface $serializer
     * @param $userId
     * @param UserRepository $userRepository
     * @param AssociationRepository $associationRepository
     * @return JsonResponse
     */
    public function getRanking(SerializerInterface $serializer, $userId, UserRepository $userRepository, AssociationRepository $associationRepository){

        // quand clique sur icone classement

        // récupération de tout les scores des assos pour l'utilisateur
        // récupération de la liste ou tableau des 3 assos avec le score le plus élevé
        // affichage du classement (tableau des 3 assos)
        $user = $userRepository->findOneById($userId);

        if($user->getAssociationUsers()->isEmpty()){
            return $this->json([
                'message' => 'pas de classement disponible car vous navez pas encore répondu à une question',
            ]);
        }
        else{
            $tabScore = [];
            $tab = [];
            $association = $associationRepository->findAll();


            foreach ($user->getAssociationUsers() as $assosUser) {
                $tab['score'] = $assosUser->getScoreUpdateUser();
                $tab['associationId'] = $assosUser->getAssociationId();
                $tab['association'] = $assosUser->getAssociationName();
                $tab['description'] = $assosUser->getAssociationDescription();
                array_push($tabScore, $tab);
            }

        }

        sort($tabScore);
        $tab2 = array_chunk($tabScore, 3);
        $tab_final = $tab2[6];
        $results = $serializer->serialize(
            $tab_final,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }

}
