<?php

namespace AppBundle\Controller;

use AppBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/user", name="listar_user")
     */
    public function listarAction(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        return $this->render('default/index.html.twig', [
            'usuarios' => $users
        ]);
    }
}
