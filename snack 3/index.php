<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso 
numero più di una volta
*/
?>
<?php 
        $arrRandomNumber = [];
        while (count($arrRandomNumber) < 15) {
            $newRundomNumber= rand(1, 15);
            if (!in_array($newRundomNumber, $arrRandomNumber)) {
                $arrRandomNumber[] = $newRundomNumber;
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Numeri casuali</h1>
    <ol>
        <?php 
            for ($i = 0; $i < count($arrRandomNumber); $i++) {
                echo "<li>$arrRandomNumber[$i]</li>";
            }
        ?>
    </ol>
</body>
</html>