<?php
if($_SESSION["login"] == "ktos")
{
    header("Location: http://example.com/");
}
?>
<?php require 'partials/masterhead.php' ?>

<?php require 'partials/navbar.php'; ?>

<div class="container">
    <h2>Register</h2>
    <form class="" action="/functions/registeruser.php" method="post">
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="User Name">
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="email">
        </div>

        <div class="form-group">
            <input type="number" name="usertype" id="usertype" class="form-control" placeholder="usertype">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register">
        </div>


    </form>

</div>

<?php require 'partials/footer.php'; ?>