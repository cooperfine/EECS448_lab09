<?php
  
  $total = 0;
  $q1 = $_POST["name"];
  $q2 = $_POST["hours"];
  $q3 = $_POST["location"];
  $q4 = $_POST["baseball"];
  $q5 = $_POST["animal"];
  
  if($q1 == "cooper") {$total = $total + 20;}
  if($q2 == "24") {$total = $total + 20;}
  if($q3 == "Kansas") {$total = $total + 20;}
  if($q4 == "Royals") {$total = $total + 20;}
  if($q5 == "Elephant") {$total = $total + 20;}
  
 
  echo "Total Score: " .$total. "\n";

  if($total > 50) {echo "You PASSED! Have a cookie! \r\n";}
  else {echo "Sorry! You failed!";}
  echo "<br>";
  echo "<br>";  

  echo "Question 1 correct answer: cooper";
  echo "<br>";
  echo "You answered: " .$q1;
  echo "<br>";  
  echo "<br>";  
  echo "Question 2 correct answer: 24";
  echo "<br>";  
  echo "You answered: " .$q2;
  echo "<br>";
  echo "<br>";  
  echo "Question 3 correct answer: Kansas";
  echo "<br>";
  echo "You answered: " .$q3;
  echo "<br>";
  echo "<br>";  
  echo "Question 4 correct answer: Royals";
  echo "<br>";  
  echo "You answered: " .$q4;
  echo "<br>";
  echo "<br>";  
  echo "Question 5 correct answer: Elephant";
  echo "<br>";
  echo "You answered: " .$q5;
?>
