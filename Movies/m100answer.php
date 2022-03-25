<?php 
    session_start();

?>

<html>
<head>
<link rel = "stylesheet" href = "../style.css">
</head>
<body class = "questionBackground">
    <div class = "questionDiv">

        <?php
            //Should recieve push from the input answer and determine if it is correct or not
            //There, you determine what is printed out
            //Then, you get their total points from the server, add/sub their total, and write their total back in the server

            include_once "../common.php";
            $str = "how to train a dragon";
            $score = 100;
            if($str == strtolower($_POST["answer"])) {
                addScore($score);
                echo "<div class = 'questionDiv'>".
                "<h2>That is Correct!</h2>".
                "You gain 100 points".
                "</div>";
            } else {
                subScore($score);
                echo "<div class = 'questionDiv'>".
                "<h2>That is Incorrect!</h2>".
                "You lose 100 points".
                "</div>";
            }
            echo "<div class = 'goBackDiv'>".
            "<h3><a href = '../jeopardyBoard.php' class = 'blinking'>Go Back to Board</h3>".
            "</div>";
        ?>
    </div>
</body>
</html>