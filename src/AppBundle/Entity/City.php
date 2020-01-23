<?php


namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City
{
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="integer")
     * @Assert\Length(min="5", max="5",minMessage="El código postal debe tener 5 dígitos", maxMessage="El código postal debe tener 5 dígitos")
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

    public function __toString()
    {
        return 'id: '.$this->getId();
    }


}