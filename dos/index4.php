<?php

if(isset($_POST['Envoyer']))

 {

   $Tel = $_POST['Tel'];
   $errors = [];

     if(strlen($Tel) != 10){

    $errors[] = "Le numero de téléphone doit comporter au moins 10 chiffres ";

    }

      if(strpos($Tel,"06|07")){

       $errors[] = "Le numero de téléphone doit commencer par 06 ou 07 ";

   }

     if(!ctype_digit($Tel)){

     $errors[] = "Le numero de téléphone doit composer de chiffre ";

     }


if(empty($errors)){

$message = "Numéro de téléphone valide";

} else {

$message = "Numéro de téléphone invalide" .implode(".",$errors);

}


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



    <h1>FORMULAIRE</h1>

    <form action="" method="POST">

        <label for="Tel">Numéro de téléphone : </label>
        <input type="text" name="Tel" placeholder="Entrer votre numéro de téléphone" required>

        <button type="submit" name="Envoyer">Envoyer</button>


    </form>


<?php 

if(isset($message)){

  echo "$message";

  if(!empty($errors)){

   echo "<ul>";

   foreach($errors as $error) {

    echo "$error";

   }

    echo "</ul>";

  }

} 


?>


</body>
</html>