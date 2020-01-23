<?php


namespace AppBundle\Controller;


use AppBundle\Entity\City;
use AppBundle\Form\Type\CityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends Controller
{

    /**
     * @Route("/ciudad/{id}", name="una_ciudad")
     */
    public function ciudadAction(City $city)
    {
        return $this->render('default/city.html.twig', [ 'ciudad' => $city]);
    }

    /**
     * @Route("/ciudad",name="registrarCiudad")
     */
    public function indexAction(Request $request)
    {
        $city = new City();
        $formulario = $this->createForm(CityType::class,$city);
        $formulario->handleRequest($request);

        if($formulario->isSubmitted() and $formulario->isValid()){
            try {
                $em= $this->getDoctrine()->getManager();//esto es la clase que se encarga de hacer cosas de base de datos

                $em->persist($city);
                $em->flush();
                $this->addFlash('exito', 'La ciudad ha sido introducida correctamente');
                return $this->redirectToRoute('homepage');
            }catch (\Exception $e){
                $this->addFlash('error', 'La ciudad introducida ya existe');
            }

        }
        return $this->render('default/formularioCity.html.twig', [
            'form'=>$formulario->createView()

        ]);


    }



}