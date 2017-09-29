<?php
  echo "Question 1: What is the Wookie home planet?<br>";
  echo "You answer: ".$_POST['q1r']."<br>";
  echo "Correct answer: Kashyyyk<br><br>";

  echo "Question 2: On what planet did Lando run a Tibanna mining operation?<br>";
  echo "You answer: ".$_POST['q2r']."<br>";
  echo "Correct answer: Bespin<br><br>";

  echo "Question 3: What planet's chief technology allows them to clone entire armies?<br>";
  echo "You answer: ".$_POST['q3r']."<br>";
  echo "Correct answer: Kamino<br><br>";

  echo "Question 4: On what planet was the Imperial Senate housed?<br>";
  echo "You answer: ".$_POST['q4r']."<br>";
  echo "Correct answer: Coruscant<br><br>";

  echo "Question 5: What location was given by Leia as the location of the secret Rebel base?<br>";
  echo "You answer: ".$_POST['q5r']."<br>";
  echo "Correct answer: Dantooine<br><br>";

  $numCorrect = 0;
  if ($_POST['q1r'] == "Kashyyyk") {
    $numCorrect++;
  }
  if ($_POST['q2r'] == "Bespin") {
    $numCorrect++;
  }
  if ($_POST['q3r'] == "Kamino") {
    $numCorrect++;
  }
  if ($_POST['q4r'] == "Coruscant") {
    $numCorrect++;
  }
  if ($_POST['q5r'] == "Dantooine") {
    $numCorrect++;
  }
  if ($numCorrect != 1) {
    echo "You answered $numCorrect questions correctly.<br><br>";
  } else {
    echo "You answered $numCorrect question correctly.<br><br>";
  }

  $percentCorrect = ($numCorrect / 5) * 100;
  $percentCorrectStr = (string)$percentCorrect."%";
  echo "You answerd $percentCorrectStr of the questions correctly";
 ?>
