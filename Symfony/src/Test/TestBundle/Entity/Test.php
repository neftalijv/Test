<?php

namespace Test\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\TestBundle\Entity\TestRepository")
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="intTest", type="integer")
     */
    private $intTest;

    /**
     * @var string
     *
     * @ORM\Column(name="stringTest", type="string", length=50)
     */
    private $stringTest;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intTest
     *
     * @param integer $intTest
     * @return Test
     */
    public function setIntTest($intTest)
    {
        $this->intTest = $intTest;
    
        return $this;
    }

    /**
     * Get intTest
     *
     * @return integer 
     */
    public function getIntTest()
    {
        return $this->intTest;
    }

    /**
     * Set stringTest
     *
     * @param string $stringTest
     * @return Test
     */
    public function setStringTest($stringTest)
    {
        $this->stringTest = $stringTest;
    
        return $this;
    }

    /**
     * Get stringTest
     *
     * @return string 
     */
    public function getStringTest()
    {
        return $this->stringTest;
    }
}
