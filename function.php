<?php
// function with returning value
function average($math,$eng,$urdu,$isl,$sst){
  $A=$math + $eng + $urdu + $isl + $sst;
  return $A;
}
$total= average(80,75,60,85,75);

echo "average is".$total%100;

?>