<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
*/
?>
<?php
    $arrSquadScore = [
        [
            'home' => [
                'name' => 'Vibo Valentia',
                'score' => 16,
            ],
            'away' => [
                'name' => 'Catanzaro',
                'score' => 56,
            ],
        ],
        [
            'home' => [
                'name' => 'San Gregorio',
                'score' => 91,
            ],
            'away' => [
                'name' => 'Sant\'Onfrio',
                'score' => 36,
            ],
        ],
        [
            'home' => [
                'name' => 'Piscopio',
                'score' => 42,
            ],
            'away' => [
                'name' => 'Cessaniti',
                'score' => 74,
            ],
        ],
        [
            'home' => [
                'name' => 'Tropea',
                'score' => 60,
            ],
            'away' => [
                'name' => 'Briatico',
                'score' => 54,
            ],
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Toneo di basket</h1>
    <ul>
        <?php
            $arr_match_length = count($arrSquadScore);
            for ($i = 0; $i < $arr_match_length; $i++) {
                $squad = $arrSquadScore[$i];
                $home = $squad['home'];
                //ucfirst: restituisce una stringa con il primo carattere stringmaiuscolo
                $homeName = ($home['name']);
                $homeScore = $home['score'];
                $away = $squad['away'];
                $nameAway = ($away['name']);
                $scoreAway = $away['score'];
                echo "<li>$homeName - $nameAway | $homeScore - $scoreAway</li>";
            }
            
        ?>
    </ul>
</body>
</html>