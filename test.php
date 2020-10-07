<?php
include_once("Cart.php");
include_once("Laptop.php");
include_once("Mouse.php");
include_once("Fridge.php");
include_once("Product.php");
include_once("Customer.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$costumer1 = new Customer("Jan", "Kowalski");
$costumer2 = new Customer("Kacper", "Prus");
$costumer3 = new Customer("Marek", "Kamiński");

$laptop1 = new Laptop(1, 5000, 'Lenovo'); //czy przez konstruktor
$laptop1->setModel("Legion");
$laptop1->setRam(32);

$fridge1 = new Fridge(2, 3000, 'LG');
$fridge1->setModel("e56546");
$fridge1->setCapacity(400);

$mouse1 = new Mouse(3, 300, 'Razer');
$mouse1->setModel("Chroma");
$mouse1->setWeight(42);

$costumer1->getCart()->addProduct($laptop1);
$costumer2->getCart()->addProduct($fridge1);
$costumer3->getCart()->addProduct($mouse1);

$costumer1->showCustomer();
$costumer2->showCustomer();
$costumer3->showCustomer();

//echo "<br>";
//
//echo "Cart " . $cart1->getId() .": ";
//echo var_dump($cart1->getProducts()) . "<br><br>";
//echo "Cart " . $cart2->getId() .": ";
//echo var_dump($cart2->getProducts()) . "<br><br>";
//
//$cart1->migrationCart($cart2); //array marge ???
//
//echo "Cart " . $cart1->getId() .": ";
//echo var_dump($cart1->getProducts()) . "<br><br>";
//echo "Cart " . $cart2->getId() .": ";
//echo var_dump($cart2->getProducts()) . "<br><br>";

//echo var_dump($cart1->getProduct(0));


//echo var_dump($cart1->getProducts()) . "<br>";
//echo "Cena razem: " . $cart1->getProductsPrice() . " zł" . "<br>";
//echo "Ilość produktów: " . $cart1->getProductsNum() . "<br><br>";
//
//$cart1->deleteProduct(3);
//echo var_dump($cart1->getProducts()) . "<br>";
//echo "Cena razem: " . $cart1->getProductsPrice() . " zł" . "<br>";
//echo "Ilość produktów: " . $cart1->getProductsNum() . "<br><br>";
//
//$cart1->addProduct($mouse1);
//echo var_dump($cart1->getProducts()) . "<br>";
//echo "Cena razem: " . $cart1->getProductsPrice() . " zł" . "<br>";
//echo "Ilość produktów: " . $cart1->getProductsNum() . "<br><br>";
?>
</body>
</html>