<?php
include_once("AddableInterface.php");

/**
 * Product entity class
 * Class Product
 * @package Shop\
 */
abstract class Product implements AddableInterface
{
    private $id = 0;
    private $price = 0;
    private $name = '';

    /**
     * Product constructor.
     * @param int $id
     * @param int $price
     * @param string $name
     */
    public function __construct(int $id, int $price, string $name)
    {
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId():int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id):void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPrice():int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price):void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name):void
    {
        $this->name = $name;
    }


}