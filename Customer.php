<?php

/**
 * Customer management class
 * Class Customer
 * @package Shop\
 */
class Customer
{
    private $firstName = '';
    private $surname = '';
    private $cart;

    /**
     * Customer constructor.
     * @param string $firstName
     * @param string $surname
     */
    public function __construct(string $firstName, string $surname)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->cart = new Cart();
    }


    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }


    public function getCart():Cart
    {
        return $this->cart;
    }

    /**
     * Method responsible for showing Customer information
     */
    public function showCustomer():void
    {
        echo $this->firstName . " " . $this->surname . "<br>Cart: <br>"   ;
        echo var_dump($this->cart) . "<br><br>";
    }

}