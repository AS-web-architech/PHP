<?php
  #indexed array 
  $fruits=array("apple","mango","banana","grapes","pineapple");
  echo $fruits[2]."<br>"; #output banana
  
  #invoke array by using loop:
  
//    for($i=0;$i < count($fruits) ;$i++){
//     echo $fruits[$i]."<br>";
//    }

#invoke array by using foreach loop:
    foreach($fruits as $row ){
        echo $row."<br>";
    }


#associative array:

$country=array(
  "italy" => "rome",
  "belgium"=> "brussels",
  "denmark"=>"copenhagen",
  "spain"=>"madrid",
  "united kingdom"=>"london"
);
echo $country["italy"]."<br>";


#using foreach loop 

foreach($country as $keys => $values ){
    echo $keys."=>".$values."<br>";
}


#multidimensional array:

$country=array(
    "italy" => array("rome","milan","turin") ,
    "belgium"=> array("brussels","burges","") ,
    "denmark"=> array("copenhagen","odense","Aalborg") ,
  );
    

  #invoke array function by foreachloop;

  foreach($country as $keys => $variables){
    echo $keys."=>"."<br>";
     foreach($variables as $values ){
        echo $values.","."<br>";
     }
  }








?>