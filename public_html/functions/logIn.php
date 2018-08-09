<html>
<body>
 <?php
// require './bstrap.php';
 $pdo = Connection::make();
 $query =  new QuerryBuilder($pdo);  // = require 'bstrap.php';*/

 $username=$_POST["username"];
 $password=$_POST["password"];

/*
  if(password_verify($password, $hashed_password))
      {
         echo "haslo zahaszowane";
         echo $hashed_password;
      }
*/
     $user = $query->selectAll($username,$password);
     $user = $user[0];

    var_dump($user);
    var_dump($password);
    //var_dump($hashed_password);




 if(isset($user)/*[1] == `*/){

        $_SESSION["login"] = $username;
        $_SESSION["isLoggedIn"] = 1;
        var_dump($user);
        var_dump($_SESSION);
        echo "You are logged in as: <br>";
        echo $_SESSION["login"];


     header("Location: /register");

 }
 else
 {
     $_SESSION["login"] = "dupa";
     $_SESSION["isLoggedIn"] = 0;
     var_dump($_SESSION);
     echo "przyps";

 }


 ?>



</body>
</html>