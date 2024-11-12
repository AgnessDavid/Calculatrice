<?php 

if(isset($_POST['Envoyer']))
{

$Mail = htmlspecialchars(trim($_POST['Mail']));

$errors = [];


if( strlen($Mail) < 5 ) {

    $errors[] = "L'email doit contenir au moins 5 caractères";

}

if(!strpos($Mail,"@") || !strpos($Mail,"."))
{

    $errors[] = "L'email doit contenir au moins un'@' et un '.' ";
}

if(preg_match("/\s/",$Mail)){


        $errors[] = "L'email doit contenir au moins un'@' et un '.' ";

}


if(empty($errors)){

$message = "Adresse e-mail valide";

} else {

$message = "Adresse e-mail n'est pas valide" . implode(".",$errors);

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

<label for="Mail">e-mail : </label>
<input type="email" name="Mail" placeholder="Entrer votre mot de passe" required>

<button type="submit" name="Envoyer">Envoyer</button>


</form>



<?php 

if(isset($message)){

echo "$message";

if(!empty($errors)){


echo "<ul> ";

foreach($errors as $error){

echo "<li>$error</li>";

}

echo " </ul>";

}

}

?>




</body>
</html>