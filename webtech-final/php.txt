<?php
echo "Hello World";
?>

<?php
$name = "Alif";
$age = 30;
$cgpa = 3.00;
$isStudent = true;


var_dump($name);
var_dump($age);
var_dump($cgpa);
var_dump($isStudent);
?>

<?php
$first = "Asif";
$last = "Mahmud";

echo $first . " " . $last;
?>

<?php
$marks = 72;

if($marks >= 80){
    echo "A+";
 } elseif($marks >= 70){
    echo "A";
 } elseif($marks >= 60){
    echo "A-";
 } else{
    echo "Below A-";
 }
?>