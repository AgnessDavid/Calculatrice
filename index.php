<?php


if (isset($_POST['Calculer'])) {

    $Nombre1 = $_POST['Nombre1'];

    $Nombre2 = $_POST['Nombre2'];

    $Operation = $_POST['Operation'];

    $resultat = "";


    switch ($Operation) {

        case 'Addition':
            $resultat = $Nombre1 + $Nombre2;
            break;

        case 'Soustraction':
            $resultat = $Nombre1 - $Nombre2;
            break;


        case 'Multiplication':
            $resultat = $Nombre1 * $Nombre2;
            break;


        case 'Division':

            if ($Nombre2 != 0) {

                $resultat = $Nombre1 / $Nombre2;
            } else {

                $resultat = "Erreur ce nombre ne peut pas être divisé par 2";
            }
            break;
    }


    $message =  $resultat;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Calculatrice</h1>

    <form action="" method="post">

        <label for="Nombre1">Nombre1</label>
        <input type="number" name="Nombre1" required placeholder="Entrer le premier nombre">
        <br>
        <label for="Nombre2">Nombre2</label>
        <input type="number" name="Nombre2" required placeholder="Entrer le deuxième nombre">
        <br>

        <label for="Operation">Operation</label>
        <select name="Operation">
            <option value="Addition">Addition</option>
            <option value="Soustraction">Soustraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <br>
        <button type="submit" name="Calculer">Resultat : </button>

        <label for="Resultat">Resultat</label>
        <input type="text" value="<?php if (isset($resultat))  echo $resultat; ?>">

    </form>



</body>

</html>