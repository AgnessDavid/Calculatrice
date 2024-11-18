<?php 

$Nombre = 100;

for($i = 0; $i <= $Nombre; $i++){

if($i % 2 == 0){

    echo $i ."<br>";
}

}

?>


/* Les tableaux */

<?php 

$Fruits = ["dfh","fdshqsdf","hfqsfhgsfdh"];

foreach($Fruits as $Fruit){
echo $Fruit;
}

$LongF = "";

foreach ($Fruits as $Fruit) {
   
if(strlen($Fruit) > strlen($LongF)){

$LongF = $Fruit;

}

}

echo $LongF;

?>