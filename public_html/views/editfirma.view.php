<?php require 'partials/masterhead.php' ?>

<?php require 'partials/navbar.php'; ?>
<?php
    $pdo = Connection::make();
    $query = new QuerryBuilder($pdo);


    $id = $_GET["id"];

    $firma = $query->selectFirma($id);
    $firma = $firma[0];
    //die(var_dump($firma));
?>
    <div class="container">

    <form class="" action='/editfirma?id=<?= $firma->id; ?>' method="post">

        <input type="text" name="nazwa" id="nazwa" class="form-control" placeholder=" <?php echo $firma->nazwa;?>">
        <input type="text" name="adres" id="adres" class="form-control" placeholder="<?php echo $firma->adres;?>">
        <input type="text" name="NIP" id="NIP" class="form-control" placeholder="<?php echo $firma->NIP;?>">

        <input type="submit" class="btn btn-primary" value="Edit">
    </form>
    </div>

<?php require 'partials/footer.php'; ?>