
// CLASS AND OBJECT THIS KEYWORD IN OOP PHP
class Fruit{

    public $color;

    public function setColor($color){
        $this->color = $color;  
    }

    publiC funtion getColor(){
        return $this->color;
    }



}

$banana = new Fruit();

$banana->color = 'yellow';
echo $banana->color;

$apple = new Fruit();

$apple->setColor('green');
echo $apple->getColor();




// CHAIN METHOD

class Car{

    public $tank;

    public function fill($fuel){

        $this->tank += $fuel;
        return $this;
    }

    public function ride($fuel){

        $miles = $fuel;

        $gallons = $miles/50;
        $this->tank -=($gallons);
        return $this;
    }
}

$mercedezBenz = new Car();

$fuelConsumption = $mercedezBenz->fill(10)->ride(40)->tank;
echo $fuelConsumption;



// CONSTRUCTOR IN OOP USING GETTER AND SETTER

class Book{

    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        echo $this->name." <br/>";;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        echo $this->price." <br/>";;
    }

}

$chemistry = new Book('Advance chemistry book',500);

$mathematics = new Book('Beginners guide',1000);

$chemistry->getName();

$mathematics->getName();




// ENCAPSULATION AND INHERITANCE

class Laptop{

    public $color;

    private $processor;

    protected $motherBoard;


}

$dell  = new Laptop();

$dell->color = "gray";
echo $dell->color;


class Mac extends Laptop{

    function getColor(){
        echo $this->color."<br>";
    }

}

$mac2012 =  new Mac();

$mac2013 = new Mac('color');
$mac2013->getColor();


$mac2012->color="harsh";
echo $mac2012->color;



class Mother{

    public $eyeCount = 2;


}

class Child extends Mother{

    public funtion getEyeCount(){
        return $this->eyeCount."<br>";
    }

}

$child = new Child();
$child->getEyeCount();


INTERFACES

class Mail{

    public function sendMail();
}

class Mailable implements Mail{

    public function sendMail($logMessage,$unLogMessage){

        $total = $logMessage + $unLogMessage;

        return $total;
    }
}

$sumMail = new Mailable(10,5);

$answer = $sumMail->sendMail();

echo $answer;


ABSTRACT CLASS
 
abstract class MyAbstractClass{

    abstract function abstractClass(){
        
    }
} 









