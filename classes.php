<?php

class Car
{
    public function __construct($model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color)
    {
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->enginePower = $enginePower;
        $this->enginelType = $engineType;
        $this->bodyType = $bodyType;
        $this->color = $color;
    }
    
    public function checkTheEnvironmentalFriendliness ($engineType)
    {
        if ($engineType === 'electric') {
            echo 'This car is eco-friendly';
        } else {
            echo 'This car is not eco-friendly';
        }
    }
}

$HondaCivic = new Car('Honda Civic Type R', 2017, 6500, 'gas', 'hatchback', 'red');
checkTheEnvironmentalFriendliness($HondaCivic->engineType);
$TeslaModelS = new Car('Tesla Model S P100D','2016','568', 'electric ', 'hatchback', 'black');
checkTheEnvironmentalFriendliness($TeslaModelS->engineType);

class TV
{
    public function __construct($model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $numberOfChannels, $remoteControl, $internetConnection, $smartTv)
    {
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->screenType = $screenType;
        $this->isDigital = $isDigital;
        $this->screenSize = $screenSize;
        $this->numberOfColors = $numberOfColors;
        $this->numberOfChannels = $numberOfChannels;
        $this->remoteControl = $remoteControl;
        $this->internetConnection = $internetConnection;
        $this->smartTv = $smartTv;
    }
    
    public function SelectChannel($numberOfChannels)
    {
        echo 'Выберите канал от 1 до ' . $numberOfChannels;
    }
}

$beryozka215 = new TV('Beryozka-215', 1976, 'kinescope', false, 24, 2, 8, true, false, false);
SelectChannel($beryozka215->numberOfChannels);
$samsungUE55MU7000U = new TV('Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, 1000, true, true, true );
SelectChannel($samsungUE55MU7000U->numberOfChannels);

class BallPen
{
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;
    
    public function write ($inkColor)
    {
        if (is_null($inkColor) === true){
            echo 'В ручке нет чернил';
        } else {
            echo 'Ручка пишет цветом ' . $inkColor;
        }
    }
}

$parkerPen = new BallPen;
$parkerPen->bodyColor = 'gold';
$parkerPen->size = 13;
$parkerPen->withButton = true;
$parkerPen->inkColor = 'black';
write($parkerPen->inkColor);

$erichKrausePen = new BallPen;
$erichKrausePen->bodyColor = 'white';
$erichKrausePen->size = 15;
$erichKrausePen->withButton = false;
$erichKrausePen->inkColor = 'blue';
write($erichKrausePen->inkColor);

class Duck
{
    public $age;
    public $name;
    public $size;
    public $color;
    public $voice;
    public $voiceCount;
    
    public function voice($voice, $voiceCount)
    {
        for ($i = 0; $i < $voiceCount; $i++) {
            echo $voice . "!!! ";    
        }
    }
}

$duck = new Duck;
$duck->age = 2;
$duck->size = 'large';
$duck->color = 'brown';
$duck->voice = 'KRIA';
$duck->voiceCount = 3;
voice($duck->voice, $duck->voiceCount);

$litteDuck = new Duck;
$litteDuck->age = 0.1;
$litteDuck->size = 'small';
$litteDuck->color = 'yellow';
$litteDuck->voice = 'kria';
$litteDuck->voiceCount = 1;
voice($litteDuck->voice, $litteDuck->voiceCount);

class Product
{
    public function __construct($category, $name, $price, $validity, $tax, $discount)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->validity = $validity;
        $this->tax = $tax;
        $this->discount = $discount;
    }
}

$phpStorm = new Product('programs', 'phpStorm', 'thing', 199.00, 0, 0);
$phpStorm->validity = 1;

$cheesburger = new Product('food', 'Чизбургер Де Люкс', 'thing', 119, 18, 5);
$cheesburger->producer = 'KFC';
$cheesburger->expirationDate = '24.04.2018';