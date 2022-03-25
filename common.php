<?php 
function addScore($score) {
    $_SESSION["score"] = $_SESSION["score"] + $score;
 }
 
 function subScore($score) {
     $_SESSION["score"] = $_SESSION["score"] - $score;
  }

  function decrementQuestions(){
    $_SESSION["qNums"] = $_SESSION["qNums"] - 1;
  }

  function logoutPlayer() {
    session_start();
    session_unset();
    session_destroy();
  }
?>
