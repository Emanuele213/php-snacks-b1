<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una 
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti 
“Accesso negato”
*/
?>

<?php
    if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        $pos_at = strpos($mail, '@');
        $checkEmail = is_numeric($pos_at) && is_numeric(strpos($mail, '.', $pos_at));
        
        if (strlen($name) > 3 && $checkEmail && is_numeric($age)) {
            $message = "Accesso consentito";
        } else {
            $message = "Accesso negato";
        }
    } else {
        $message = "Inserisci le credenziali";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <p><?= $message ?></p>
        <form action="" method="GET" class="form-container">
            <input type="text" name="name" id="" placeholder="Inserisci il tuo nome">
            <input type="mail" name="mail" id="" placeholder="Inserisci la tua e-mail">
            <input type="number" name="age" id="" placeholder="Inserisci la tua età">
            <button type="submit">Accedi</button>
        </form>
    </div>
</body>
</html>