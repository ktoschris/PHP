<html>
<body>

<center>
<?php

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$id = $_POST["id"];

$user = $query->selectUser($id);
var_dump($user);


echo $user[0]->name;
?>

    <form class="" action="/edituser" method="post">

        <div class="form-group">
            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
        </div>

        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="UserName">
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="email">
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="password">
        </div>

        <div class="form-group">
            <input type="number" name="usertype" id="usertype" class="form-control" placeholder="usertype">
        </div>



        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit">
        </div>

    </form>



</body>
</html>