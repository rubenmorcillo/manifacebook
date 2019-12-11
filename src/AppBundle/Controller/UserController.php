<?php

namespace AppBundle\Controller;

use AppBundle\Repository\CityRepositoy;
use AppBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/user", name="listar_user")
     */
    public function listarAction(UserRepository $userRepository,CityRepositoy $cityRepository)
    {
        $users = $userRepository->findAll();
        $city = $cityRepository->findAll();
        return $this->render('default/index.html.twig', [
            'usuarios' => $users,
            'ciudades' => $city
        ]);
    }
}
