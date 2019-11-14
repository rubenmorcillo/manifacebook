<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City
{


    /**
     * @ORM\Column(type="string")
     * @var User[]
     */
    private $personas;



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


    public function __construct(array $personas)
    {
        $this->personas = $personas;
    }

}