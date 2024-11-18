<?php

if (isset($_POST['Envoyer'])) {
    $Users = htmlspecialchars(trim($_POST['Nom_utilisateur']));
    $MDP = sha1($_POST['Mot_de_passe']);
    $errors = [];

    // Vérification des règles de mot de passe
    if (strlen($MDP) < 8) {
        $errors[] = "Le code doit contenir au moins 8 caractères";
    }
    if (!preg_match("/[A-Z]/", $MDP)) {
        $errors[] = "Le code doit contenir au moins une lettre majuscule";
    }
    if (!preg_match("/[a-z]/", $MDP)) {
        $errors[] = "Le code doit contenir au moins une lettre minuscule";
    }
    if (!preg_match("/[0-9]/", $MDP)) {
        $errors[] = "Le code doit contenir au moins un chiffre";
    }
    if (!preg_match("/[§!@#$%&*]/", $MDP)) {
        $errors[] = "Le code doit contenir au moins un caractère spécial (parmi §!@#$%&*)";
    }

    if (empty($errors)) {
        $message = "Mot de passe est sécurisé !";
    } else {
        $message = "Mot de passe n'est pas sécurisé : " . implode(", ", $errors);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrôle de mot de passe</title>
</head>

<body>

    <h1>Contrôle de mot de passe</h1>

    <form action="" method="POST">
        <label for="Nom_utilisateur">Nom d'utilisateur : </label>
        <input type="text" name="Nom_utilisateur" required placeholder="Entrez votre nom">
        <br>

        <label for="Mot_de_passe">Mot de passe : </label>
        <input type="password" name="Mot_de_passe" required placeholder="Entrez votre mot de passe">
        <br>

        <button type="submit" name="Envoyer">Envoyer</button>
    </form>

    <?php
    // Affichage des messages de validation
   
 if(isset($message))
 {

 echo "<p>$message</p>";

 if(!empty($errors))
 {

    echo"<ul>";
 foreach($errors as $error)
 {

  echo"<li>$error</li>";

 }
 
}

echo "</ul>";
 }

    
    ?>



</body>

</html>