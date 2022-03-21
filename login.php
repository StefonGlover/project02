<?php include("header.php");?>
<div id="container">
    <div id="form-spacing">
    <h1>Login</h1>
    <br>
    <p>Please fill in this form to login.</p>
    <hr><br>
    <form action="login-submit.php" method="post">
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="Login">
        <br>
    </form>
    </div>
</div>
<?php include("footer.php");?>