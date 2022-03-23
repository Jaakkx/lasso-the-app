<?php

namespace App\Controller;

use App\Entity\AssociationUser;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="app_registration")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RegistrationController.php',
        ]);
    }

    /**
     * @Route("/register", name="register")
     * @param Request $request
     * @param CsrfTokenManagerInterface $csrfTokenManager
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function register(Request $request, CsrfTokenManagerInterface $csrfTokenManager,
                             UserPasswordHasherInterface $userPasswordHasher, SerializerInterface $serializer): Response
    {
        $params = json_decode($request->getContent(), true);
        //dd($params);

        /*$results = $serializer->serialize(
            $params,
            'json'
        );*/

        //return new JsonResponse($results, 200, [], true);

        if(!isset($params['lastName']) || empty($params['lastName'])){
            throw new HttpException(400, 'missing parameter');
        }

        if(!isset($params['userName']) || empty($params['userName'])){
            throw new HttpException(400, 'missing parameter');
        }

        if(!isset($params['password']) || empty($params['password'])){
            throw new HttpException(400, 'missing parameter');
        }

        if(!isset($params['email']) || empty($params['email'])){
            throw new HttpException(400, 'missing parameter');
        }

        // tester avec la premiere ou 2e ligne
        // peut etre avoir un id en parametre
        // $token = $csrfTokenManager->getToken('register');
        //$token = new CsrfToken('register', $request->attributes->get('token'));
        /*if (!$csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException('CSRF Token is not valid.');
        }*/
        $entityManager = $this->getDoctrine()->getManager();
        $existingUser = $entityManager->getRepository(User::class)->findOneByEmail($params['email']);
        $results = [];
        if(null == $existingUser){

            $user = new User();
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $params['password']
                )
            );
            $user->setLastName($params['lastName']);
            $user->setUserName($params['userName']);
            $user->setEmail($params['email']);

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            $returnArray = [
                'id' =>$user->getId(),
                'email'=>$user->getEmail(),
                'lastName'=>$user->getLastName(),
                'userName'=>$user->getUserName()
            ];


            $results = $serializer->serialize(
                $returnArray,
                'json'
            );
        }
        return new JsonResponse($results, 200, [], true);
    }


    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @param CsrfTokenManagerInterface $csrfTokenManager
     * @param UserPasswordHasherInterface $hasher
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function login(Request $request,CsrfTokenManagerInterface $csrfTokenManager,
                          UserPasswordHasherInterface $hasher, SerializerInterface $serializer): Response
    {
        $params = json_decode($request->getContent(), true);
        if(!isset($params['password']) || empty($params['password'])){
            throw new HttpException(400, 'missing parameter');
        }

        if(!isset($params['email']) || empty($params['email'])){
            throw new HttpException(400, 'missing parameter');
        }

        // tester avec la premiere ou 2e ligne
        // peut etre avoir un id en parametre
        $token = $csrfTokenManager->getToken('register');
        //$token = new CsrfToken('register', $request->attributes->get('token'));
        if (!$csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException('CSRF Token is not valid.');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $existingUser = $entityManager->getRepository(User::class)->findOneByEmail($params['email']);

        if($existingUser == null) throw new HttpException(400, 'unknown email');
        else $user= $existingUser;

        if(!$hasher->isPasswordValid($user, $params['password'])){
            throw new HttpException(400, 'invalid password');
        }

        $returnArray = [
            'id' => $user->getId(),
            'password' => $user->getPassword(),
            'lastName' => $user->getLastName(),
            'firstName' => $user->getUserName(),
            'email' => $user->getEmail()
        ];
        $resultats = $serializer->serialize(
            $returnArray,
            'json'
        );

        return new JsonResponse($resultats, 200, [], true);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout() {
        //retour à la page de connexion
        return $this->render('index.html.twig');
    }

}
