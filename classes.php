<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.04.2018
 * Time: 18:20
 */

class Car
{
    public function __construct($model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color)
    {
        $this -> model = $model;
        $this -> yearOfIssue = $yearOfIssue;
        $this -> enginePower = $enginePower;
        $this -> enginelType = $engineType;
        $this -> bodyType = $bodyType;
        $this -> color = $color;
    }
}

$HondaCivic = new Car('Honda Civic Type R', 2017, 6500, 'gas', 'hatchback', 'red');
$TeslaModelS = new Car('Tesla Model S P100D','2016','568', 'electric ', 'hatchback', 'black');

class TV
{
    public function __construct($model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, $internetConnection, $smartTv )
    {
        $this -> model = $model;
        $this -> yearOfIssue = $yearOfIssue;
        $this -> screenType = $screenType;
        $this -> isDigital = $isDigital;
        $this -> screenSize = $screenSize;
        $this -> numberOfColors = $numberOfColors;
        $this -> remoteControl = $remoteControl;
        $this -> internetConnection = $internetConnection;
        $this -> smartTv = $smartTv;
    }
}

$beryozka215 = new TV('Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false);
$samsungUE55MU7000U = new TV('Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true );

class BallPen
{
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;
}

$parkerPen = new BallPen;
$parkerPen->bodyColor = 'gold';
$parkerPen->size = 13;
$parkerPen->withButton = true;
$parkerPen->inkColor = 'black';

$erichKrausePen = new BallPen;
$erichKrausePen->bodyColor = 'white';
$erichKrausePen->size = 15;
$erichKrausePen->withButton = false;
$erichKrausePen->inkColor = 'blue';




class Duck
{
    public $age;
    public $name;
    public $size;
    public $color;
    public $voice = 'kria';
    public function sayCria($voice){
        echo $voice;
    }
    public function fly(){
        echo 'Duck is flying now';
    }
    public function swim(){
        echo 'Duck is swimming now';
    }
}

$duck = new Duck;
$duck->age = 2;
$duck->size = 'large';
$duck->color = 'brown';

$litteDuck = new Duck;
$litteDuck->age = 0.1;
$litteDuck->size = 'small';
$litteDuck->color = 'yellow';

class Product {
    public function __construct($category, $name, $price, $tax, $discount)
    {
        $this -> category = $category;
        $this -> name = $name;
        $this -> price = $price;
        $this -> tax = $tax;
        $this -> discount = $discount;
    }
}

$phpStorm = new Product('programs', 'phpStorm', 199.00, 0, 0);
$cheesburger = new Product('food', 'Чизбургер Де Люкс', 119, 18, 5);
$cheesburger->producer = 'KFC';
$cheesburger->expirationDate = '24.04.2018';