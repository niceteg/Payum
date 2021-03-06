<?php
namespace Payum\Examples\Entity;

use Doctrine\ORM\Mapping as ORM;

use Payum\Model\ArrayObject as BaseArrayObject;

/**
 * @ORM\Entity
 */
class ArrayObject extends BaseArrayObject
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     * @var integer $id
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}