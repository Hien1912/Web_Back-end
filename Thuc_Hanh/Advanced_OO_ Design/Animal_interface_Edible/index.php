<?php
    
    // interface Edible

    interface Edible {
        public function howToEat();
    }

    //  abstract class Animal

    abstract class Animal {
        abstract public function makeSound();
    }

    // abstract class Fruit implements Edible

    abstract class Fruit implements Edible {
    }

    // class Apple extends Fruit

    class Apple extends Fruit {
        public function howToEat()
        {
            return "Apple could be slided";
        }
    }

    // class Orange extends Fruit

    class Orange extends Fruit{
        public function howToEat()
        {
            return "Orange could be juiced";
        }
    }

    // class Tiger extends Animal

    class Tiger extends Animal{
        public function makeSound()
        {
            return "Tiger: roarrrrr!";
        }
    }

    // class Chicken extends Animal implements Edible

    class Chicken extends Animal implements Edible {
        public function makeSound()
        {
            return "Chicken: cluck-cluck!";
        }

        public function howToEat()
        {
            return "could be fried";
        }
    }

    // Test class animal
    
    $animals[0] = new Tiger();
    $animals[1] = new Chicken();

    foreach ($animals as $animal) {
        echo $animal->makeSound(). ' ';
        if ($animal instanceof Chicken) {
            echo $animal->howToEat(). ' ';
        }
    }

    // Test class fruits

    $fruits[0] = new Apple();
    $fruits[1] = new Orange();

    foreach ($fruits as $fruit) {
        echo $fruit->howToEat() . '<br>';
    }
?>