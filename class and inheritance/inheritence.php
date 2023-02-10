<?php
// Create a class called "Person" that has properties for first name, last name, and age.
//  Add methods for getting and setting each of these properties.
echo "<h3>person class output :</h3>";
class person{
    public $firstName,$lastName,$age;
    function __construct($fname,$lname,$age){
        $this->firstName=$fname;
        $this->lastName=$lname;
        $this->age=$age;

    }
    function getdata(){
        echo " first name"."=". $this->firstName."<br>";
       echo" last name"."=". $this->lastName."<br>";
       echo "age"."=". $this->age."<br>";

    }
}


$p1=new person("areeba","shafi","20");
$p1->getdata();
echo "<br>";
$p2=new person("aiman","anwar","20");
$p2->getdata();
echo "<br>";
$p3=new person("maheen","khan","20");
$p3->getdata();
echo "<br>";
echo "<br>";

// ⦁	Create another class called "Employee" that inherits from the "Person" class. 
// Add a property for the employee's job title and a method for getting and setting it.
echo "<h3>person class subchild  output:</h3>";
class Employee extends person{
   public  $jobtitle;
   function  storeData($jobtitle){
    $this->jobtitle=$jobtitle;
   }
   function getdata(){
    echo " first name"."=".$this->firstName."<br>";
    echo " last name"."=".$this->lastName."<br>";
    echo "age"."=".$this->age."<br>";
    echo " jobtitle"."=".$this->jobtitle."<br>";
   }
}

$emp=new Employee("areeba","shafi","20");
$emp->storeData("teacher");
$emp->getdata();
echo "<br>";
echo "<br>";
// ⦁	Create a class called "Car" that has properties for make, model, year, and color. Add methods for getting and setting each of these properties.
echo "<h3>class car output :</h3>";

class Car{
    public $model,$year,$color;

function __construct($modelname,$modelyear,$color){
    $this->model=$modelname;
    $this->year=$modelyear;
    $this->color=$color;

}
function getdata(){
   echo "model name"."=".$this->model."<br>";
   echo "model year"."=".$this->year."<br>";
   echo "model color"."=".$this->color."<br>";
}

}
$car=new Car("sportscar","2020","red");
$car->getdata();
echo "<br>";
echo "<br>";
// ⦁	Create a class called "BankAccount" that has properties for the account balance and owner. Add methods for depositing and withdrawing money from the account.
echo "<h3>bankacoount class   output:</h3>";

class bankAccount{
    public $balance=0,$owner;
    function __construct($name){
     $this->owner=$name;
    }
    function deposit($amount){
      $this->balance+=$amount;

    }
    function withdrew($amount){
      $this->balance-=$amount;
        
    }
    function getdata(){
       echo "balance"." = ".$this->balance."<br>";
       echo "name"." = ".$this->owner."<br>";

    }
}
 $client=new bankAccount("areeba");
 $client->deposit(8000);
 $client->withdrew(5000);
 $client->getdata();
echo "<br>";
echo "<br>";
//  ⦁	Create a class called "Rectangle" that has properties for the length and width. Add methods for calculating the area and perimeter of the rectangle.

class rectangle {
    public $length,$width,$area,$perimeter;
    function __construct($length,$breadth){
      $this->length=$length;
      $this->width=$breadth;
    }
    function area($length,$breadth){
      
      $this->area=bcmul($length,$breadth);

    }
    function perimeter($length,$breadth){
      $this->perimeter=2*($length+$breadth);
    }
    function getdataA(){
        echo "length"."=".$this->length."<br>";
        echo "width"."=".$this->width."<br>";
        echo "area"."=".$this->area."<br>";
    }
    function getdataP(){
        echo "length"."=".$this->length."<br>";
        echo "width"."=".$this->width."<br>";
        echo "perimeter"."=".$this->perimeter."<br>";
    }
}
echo "<h3>calculating  area  output:</h3>";

$area=new rectangle(20,30);
$area->area(20,30);
$area->getdataA();
echo "<br>";echo "<br>";
echo "<h3>calculating  perimeter  output:</h3>";
$p=new rectangle(20,30);
$p->perimeter(20,30);
$p->getdataP();






?>
