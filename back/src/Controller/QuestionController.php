<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
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
     * @Route("/random/question", name="app_random_question")
     * @param QuestionRepository $questionRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getRandomQuestion(QuestionRepository $questionRepository, SerializerInterface $serializer){

        // quand arrive sur page d'accueil avec une question

        // génère aléatoirement une question entre 1 et 45
        $questions = $questionRepository->findById(rand(1,45));

        $results = $serializer->serialize(
            $questions,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }

    /**
     * @Route("/update/ranking/{$questionId}", name="app_update_ranking")
     * @param SerializerInterface $serializer
     * @param $questionId
     * @param QuestionRepository $questionRepository
     * @return JsonResponse
     */
    public function updateRanking(SerializerInterface $serializer, $questionId, QuestionRepository $questionRepository){


        // recupérer la question affichée (en params ?)
        //$questionSelected = $questionRepository->findOneById();

        // si appuie sur btn gauche
        // question reste à 0 => toutes les assos impliquées reste à leur valeur actuelle (vérifier quelle assos impliquées avec type et detail type dans table Question)
        // finsi

        // si appuie sur btn droit
        // question augmente de 1 => toutes les assos impliquées calcule le score actuel + 1 (vérifier quelle assos impliquées avec type et detail type dans table Question)
        //finsi

        // insérer cette question dans la table des questionUser (l'inserer aussi dans questions => tableau de users)
        // update de tout les scores des assos pour l'utilisateur
        // afficher une nouvelle question en vérifiant quelle n'est pas dans la table QuestionUser (appel de getRamdomQuestion)
        // redirect vers la page actuel => page accueil avec question


        //faire attention a se que ca actualise le score de l'assos uniquement pour l'utilisateur et pas pour toutes les assos


        $results = [];
        $results = $serializer->serialize(
            $results,
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
