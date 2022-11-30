<?php
$valor = $_GET ['valor'];


if($valor>=1){
    echo"esse número é positivo";
}
else if($valor <0){
    echo"esse número é negativo";
    
}
else {
   echo "esse número é neutro";
    
}
?>