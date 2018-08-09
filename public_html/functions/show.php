<html>
<body>
<?php
$query = require 'bstrap.php';



$user = $query->selectAllusers();
var_dump($user[0][0]->email);

for($i=0;$i<$user[1];$i++)
{
    echo $user[0][$i]->name;
    echo "<br>";
}

echo "Number of accounts: ";
echo $user[1];


?>



</body>
</html>