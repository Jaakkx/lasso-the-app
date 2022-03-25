<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }

    /**
     * @Route("/user/{userId}", name="app_user_id")
     * @param $userId
     * @param UserRepository $userRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function getProfil($userId, UserRepository $userRepository, SerializerInterface $serializer): JsonResponse
    {
        $user = $userRepository->findOneById($userId);

        //dd($user);
        $returnArray = [
            'id' =>$user->getId(),
            'userName'=>$user->getUserName(),
            'lastName'=>$user->getLastName(),
            'email'=>$user->getEmail(),
            'password'=>$user->getPassword(),
        ];

        $results = $serializer->serialize(
            $returnArray,
            'json'
        );

        return new JsonResponse($results, 200, [], true);
    }

}
