
<?php

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$firmy = $query->selectAllfirmy();

echo "<center><table>";
foreach ($firmy as $result)
    {
        echo "<tr><td>$result->id</td><td>$result->nazwa</td><td>$result->adres</td><td>$result->NIP</td>
        <td>
            <form class=\"\" action='/editfirmaview?id={$result->id}'  method=\"post\">
            
             <input type=\"hidden\" name=\"nazwa\" id=\"nazwa\" class=\"form-control\" value=\" <?php echo $result->nazwa;?>\">
             <input type=\"hidden\" name=\"adres\" id=\"adres\" class=\"form-control\" value=\"<?php echo $result->adres;?>\">
             <input type=\"hidden\" name=\"NIP\" id=\"NIP\" class=\"form-control\" value=\"<?php echo $result->NIP;?>\">
             
             <input type=\"submit\" class=\"btn btn-primary\" value=\"Edit\">
            </form>
        </td></tr>";
    }
echo "</table>";



?>

