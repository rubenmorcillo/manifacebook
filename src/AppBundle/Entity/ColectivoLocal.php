<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 14/11/2019
 * Time: 19:18
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="colectivo_local")
 */
class ColectivoLocal
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(nullable=false)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City")
     * @var City
     */
    private $ciudad;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinTable(name="miembro_colectivo")
     * @var User[]
     */
    private $miembros;


    public function __construct()
    {
        $this->miembros = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ColectivoLocal
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return User[]
     */
    public function getMiembros()
    {
        return $this->miembros;
    }

    /**
     * @param User[] $miembros
     * @return ColectivoLocal
     */
    public function setMiembros($miembros)
    {
        $this->miembros = $miembros;
        return $this;
    }

    /**
     * @return City
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param City $ciudad
     * @return ColectivoLocal
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
        return $this;
    }





}