<?php
include_once("Product.php");

/**
 * Fridge entity class
 * Class Fridge
 * @package Shop\
 */
class Fridge extends Product
{
    private $model = '';
    private $capacity = 0;

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
}