<?php


namespace AppBundle\Controller;


use AppBundle\Entity\City;
use AppBundle\Form\Type\CityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends Controller
{
    /**
     * @Route("/ciudad",name="registrarCiudad")
     */
    public function indexAction(Request $request)
    {
        $city = new City();
        $formulario = $this->createForm(CityType::class,$city);
        $formulario->handleRequest($request);
        // replace this example code with whatever you need
        $error = false;
        if($formulario->isSubmitted() and $formulario->isValid()){
            try {
                $em= $this->getDoctrine()->getManager();//esto es la clase que se encarga de hacer cosas de base de datos

                $em->persist($city);
                $em->flush();

            }catch (Exception $e){
               $error = true;
            }finally{
                return $this->render('default/formularioCity.html.twig', [
                    'form'=>$formulario->createView(),
                    'error' => $error
                ]);
            }

        }else{
            return $this->render('default/formularioCity.html.twig', [
                'form'=>$formulario->createView(),
                'error' => $error = false
            ]);
        }


    }
}