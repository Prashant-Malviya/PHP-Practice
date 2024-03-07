<?php

// global scope 

// $number1 = 30;

// function testing(){
//     $number2 = 10;
//     echo $number2;
// }

// testing();

// echo $number1;


// static 
// $number1 = 30;

// function testing(){
//     $number2 = 10;
//    echo $number2. "<br>";

//     $number2--;
// }

// echo $number1 . "<br>";

// testing();
// testing();
// testing();
// testing();

// $number2 = 700;

// echo $number2 ."<br>";

// data types 
// strings 
// $language1 = "php";
// $language2 = "Html";
// echo $language1 ."<br>";
// echo $language2 ."<br>";
// echo var_dump($language2); // var_dump is used to see the number of characters along with the data type of the variable

// // integers 
// $num = -1;
// echo $num;


class Fruits{
    public $name;
    public $colors;

    public function setname($name){
        $this -> name=$name;
    }
    public function getname(){
        return $this->name;
    }
}
$apple = new Fruits();
$apple->setname("apple");
echo $apple->getname();
?>