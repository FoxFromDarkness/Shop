<?php

    include_once("AddableInterface.php");

/**
 * Shopping cart management class
 * Class Cart
 * @package Shop\
 */
class Cart
{
    private $products = [];

    /**
     * The method responsible for adding the product to the cart
     * @param AddableInterface $product
     */
    public function addProduct(AddableInterface $product):void
    {
        $this->products[$product->getId()] = $product;
    }

    /**
     * The method responsible for removing the product from the cart
     * @param int $id
     */
    public function deleteProduct(int $id):void
    {
        unset($this->products[$id]);
    }

    /**
     * The method responsible for returning cart of products
     * @return array
     */
    public function getProducts():array
    {
        return $this->products;
    }

    /**
     * The method responsible for returning product
     * @param int $id
     * @return Product
     */
    public function getProduct(int $id):Product
    {
        return $this->products[$id];
    }

    /**
     *  Method responsible for returning the quantity of products in the cart
     * @return int
     */
    public function getProductsNum():int
    {
        return count($this->products);
    }

    /**
     * Method responsible for returning the total amount of the cart
     * @return int
     */
    public function getProductsPrice():int
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }

    /**
     * Method responsible for Cart migration (A -> B)
     * @param Cart $migratingCart
     */
    public function migrationCart(Cart $migratingCart):void
    {
        $this->products = array_merge($this->products, $migratingCart->products);
        $migratingCart->clearCart();
    }

    /**
     * Method responsible for removing products from the Cart
     */
    public function clearCart():void
    {
        unset($this->products);
        $this->products = [];
    }

}