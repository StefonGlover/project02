<?php 
function addScore($score) {
    $_SESSION["score"] = $_SESSION["score"] + $score;
 }
 
 function subScore($score) {
     $_SESSION["score"] = $_SESSION["score"] - $score;
  }
?>