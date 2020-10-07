<?php
include_once("Product.php");

/**
 * Laptop entity class
 * Class Laptop
 * @package Shop\
 */
class Laptop extends Product
{
    private $model = '';
    private $ram   = 0;

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
    public function getRam(): int
    {
        return $this->ram;
    }

    /**
     * @param int $ram
     */
    public function setRam(int $ram): void
    {
        $this->ram = $ram;
    }


}