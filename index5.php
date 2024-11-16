<?php
session_start();

$NombreD = 50;
$message = "";

 if(!isset($_SESSION['tentatives'])){

  $_SESSION['tentatives'] = 0;

 }


  if(isset($_POST['Envoyer'])){

    $Nombre = (int) $_POST['Nombre'];
    $_SESSION['tentatives']++;

   if($Nombre < $NombreD ) {

   $message = "C'est un nombre plus grand";

   } elseif($Nombre > $NombreD) {

    $message = "C'est un nombre plus petit";

   } else {

   $message = "BRAVO vous avez réussi en " .$_SESSION['tentatives']. "tentavites";
   $_SESSION['tentatives'] = 0;

   }


  }




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du nombre mystère</title>
</head>

<body>

    <h1>Formulaire</h1>

    <form action="" method="post">
        <label for="Nombre">Entrer un nombre : </label>
        <input type="number" name="Nombre" placeholder="Entrer un numéro" required>
        <button type="submit" name="Envoyer">Envoyer</button>
    </form>

    <label for="Resultat">Résultat</label>
    <input type="text" value="<?php echo htmlspecialchars($message); ?>" style="height: 100px; width: 900px;">

  <?php if($_SESSION['tentatives'] > 0)  : ?>
 
    <h3>Nombre de tentatives : <?php echo $_SESSION['tentatives']; ?> </h3>

  <?php endif; ?> 

</body>

</html>