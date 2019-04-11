<?php
include ('Animal/Chicken.php');
include ('Animal/Tiger.php');
include ('Fruits/Apple.php');
include ('Fruits/Orange.php');
$animals[1]=new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound(). '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat(). '<br> ';
    }
}
$fruit[0] = new Orange();
$fruit[1] = new Apple();
foreach ($fruit as $fruits){
    echo $fruits->howtoEat()."<br>";
}