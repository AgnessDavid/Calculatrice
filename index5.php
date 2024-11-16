<?php
session_start();

$nombreD = 50;
$message = "";

// Initialiser le compteur de tentatives dans la session
if (!isset($_SESSION['tentatives'])) {
  $_SESSION['tentatives'] = 0;
}

if (isset($_POST['Envoyer'])) {
  $Nombre = (int) $_POST['Nombre'];
  $_SESSION['tentatives']++; // Incrémenter le nombre de tentatives stocké en session

  if ($Nombre < $nombreD) {
    $message = "Ce nombre est plus grand";
  } elseif ($Nombre > $nombreD) {
    $message = "Ce nombre est plus petit";
  } else {
    $message = "FÉLICITATIONS ! VOUS AVEZ TROUVÉ LE BON NOMBRE en " . $_SESSION['tentatives'] . " tentatives";
    $_SESSION['tentatives'] = 0; // Réinitialiser les tentatives après réussite
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

  <?php if ($_SESSION['tentatives'] > 0) : ?>
    <h3>Nombre de tentatives : <?php echo $_SESSION['tentatives']; ?> </h3>
  <?php endif; ?>

</body>

</html>