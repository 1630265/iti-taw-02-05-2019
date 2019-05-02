<?php
//funciones sin propiedades
function saludo (){
    echo "Hola, soy alumno de ITI <br>";
}

saludo();


//funcion con parametro
function despedida($adios){
    echo $adios, "<br>";
}

despedida("Adios, me voy <br>");

function retorno ($retornar){
    return $retornar;
}

echo retorno("Funciones");

?>