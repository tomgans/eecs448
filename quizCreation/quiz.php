<?php

$q1 - $_POST["q1"];
$q2 - $_POST["q2"];
$q3 - $_POST["q3"];
$q4 - $_POST["q4"];
$q5 - $_POST["q5"];

echo "Question 1: What is my favorite sports team?</br>";
echo "Your answer: " . $q1 . "</br>";
echo "Correct answer: Kansas City Chiefs</br></br>";

echo "Question 2: What is my favorite food?</br>";
echo "Your answer: " . $q2 . "</br>";
echo "Correct answer: Cheese Burger</br></br>";

echo "Question 3: What is my favorite animal?</br>";
echo "Your answer: " . $q3 . "</br>";
echo "Correct answer: Monkey</br></br>";

echo "Question 4: What is my favorite city?</br>";
echo "Your answer: " . $q4 . "</br>";
echo "Correct answer: Kansas City</br></br>";

echo "Question 5: What is my dogs name?</br>";
echo "Your answer: " . $q5 . "</br>";
echo "Correct answer: Chowder</br></br>";

$grade = 0;
if($q1 == "Kansas City Chiefs"){
    $grade++;
}
if($q2 == "Cheese Burger"){
    $grade++;
}
if($q3 == "Monkey"){
    $grade++;
}
if($q4 == "Kansas City"){
    $grade++;
}
if($q5 == "Chowder"){
    $grade++;
}
$perc = $grade / 5 * 100;
echo "</br> Number Correct: " . $grade . "/5";
echo "</br>" . $perc . "%";

?>
