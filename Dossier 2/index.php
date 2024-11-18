<?php 

$NombreA = "10";
$NombreB = "12";


$Addition = " $NombreA + $NombreB ";
$Soustraction = " $NombreA - $NombreB ";
$Multiplication = " $NombreA * $NombreB ";
$Division = " $NombreA / $NombreB ";


echo $Addition;
echo $Soustraction;
echo $Multiplication;
echo $Division; 

?>


/* Les fonctions */

<?php 

function Addition($a,$b){

    return $a + $b ;
}

$resultat = Addition(10,5);
echo "La somme est : " .$resultat;

?>

<?php 

function Sous($a,$b){
return $a - $b;
}

function Mult($a, $b) {
return $a * $b;
}

function Div($a, $b) {

    if($b != 0 ){
        return $a / $b;
    } else {
  return " Impossible";

    }

}


$NombreA = 10;
$NombreA = 10;

echo Sous($NombreA,$NombreB);
echo Mult($NombreA, $NombreB);
echo Div($NombreA, $NombreB);


?>

