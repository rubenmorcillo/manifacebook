<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 14/11/2019
 * Time: 19:26
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="muro")
 */
class Muro
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ColectivoLocal", mappedBy="muro")
     * @var ColectivoLocal
     */
    private $colectivo;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $data;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ColectivoLocal
     */
    public function getColectivo()
    {
        return $this->colectivo;
    }

    /**
     * @param ColectivoLocal $colectivo
     * @return Muro
     */
    public function setColectivo($colectivo)
    {
        $this->colectivo = $colectivo;
        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return Muro
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }


}