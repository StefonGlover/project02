<?php include("header.php");?>
<div id="container">
    <div id="form-spacing">
    <h1>Player's Information</h1>
    <br>
    <p>Please fill in this form to play.</p>
    <hr><br>
    <form action="play-submit.php" method="post">
        <label for="fname"><b>First Name</b></label><br>
        <input type="text" name="fname"><br>
        <label for="lname"><b>Last Name</b></label><br>
        <input type="text" name="lname"><br>
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email"><br>

        <input type="submit" name="submit" value="Let's Play">
        <br>
    </form>
    </div>
</div>
<?php include("footer.php");?>