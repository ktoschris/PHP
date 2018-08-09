<html>
<body>
<?php

$query = require '../bstrap.php';
//$pdo;
//$query = new QuerryBuilder($pdo);

/*if($_SESSION["isLoggedIn"] == 0)
{
*/
//przypisanie wartości z forma z index.view.php
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $usertype=$_POST["usertype"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query->registerUser($username, $email, $hashed_password, $usertype);

    header("Location: /");
/*}
else
{
    echo "you are already registered";
}

*/

?>



</body>
</html>