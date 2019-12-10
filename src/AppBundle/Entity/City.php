<?php


namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City
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
     * @var User[]
     */
    private $personas;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ColectivoLocal",mappedBy="ciudad")
     * @var ColectivoLocal[]
     */
    private $colectivos;


    public function __construct()
    {
        $this->personas = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $personas
     * @return City
     */
    public function setPersonas($personas)
    {
        $this->personas = $personas;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * @return ColectivoLocal[]
     */
    public function getColectivos()
    {
        return $this->colectivos;
    }

    /**
     * @param ColectivoLocal[] $colectivos
     * @return City
     */
    public function setColectivos($colectivos)
    {
        $this->colectivos = $colectivos;
        return $this;
    }

}