<?php
//var_dump($_SESSION);
if($_SESSION["login"] != "ktos")
{
    header("Location: http://example.com/login");
}

?>
<?php require 'partials/masterhead.php' ?>

<?php require 'partials/navbar.php'; ?>

<div class="container">
    <div class="item-a">
        <h1>Strona glowna</h1>
    </div>

    <div class="item-b">
        <h2>Zarządaj</h2>
        <center>
        <form class="" action="/addfirma" method="post">
            <input type="text" name="firmaname" id="firmaname" placeholder="Name">
            <input type="text" name="firmaadres" id="firmaadres" placeholder="Adress">
            <input type="text" name="firmaNIP" id="firmaNIP" placeholder="NIP">

            <input type="submit"  value="Add">
        </form>

        <br>

        <form class="" action="/showuser" method="post">
            <input type="number" name="id" id="id" placeholder="id">
            <input type="submit"  value="Show">
        </form>

            <?php require 'functions/showfirmy.php' ?>

            <button>click me</button>

            <p id="result">
                dupadupa
            </p>

        </center>
    </div>



</div>

<?php require 'partials/footer.php'; ?>