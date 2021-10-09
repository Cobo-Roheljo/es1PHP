<!DOCTYPE html>
<html>
    <body>

    <table border= "1px">
    <tr>

    <?php

$media = 0;
$somma = 0;
$conta = 0;

    echo"<h1> Tabella con numeri divisibili per tre tra 0 e 100";

    for ($i=0; $i < 100; $i++) {

        if($i%3 == 0){

            echo "<td>$i</td>";

            $conta++;

            $somma += $conta;
        }
    }

    $media = $somma/$conta;



?>
    </tr>

    </table>

    <?php

      echo "La qta di numeri divisibili per tre sono: $conta";

      echo "<br>La media e': $media";
    ?>

    </body>
</html>
