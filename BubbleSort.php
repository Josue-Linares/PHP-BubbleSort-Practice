<?php
//Que es un algoritmo?
//es una serie de instrucciones ordenadas orientadas con el mismo fin
function BubbleSort($array){

$resulArray = $array;
$arrayLength = count($resulArray)-1;
//este (-1) va para que pueda pueda comparar sin dar error
$car = true;

while($car){
    //tenemos que cambiar el valor a false de nuestra vareable $car
    $car = false;
    //aqui comienza el bucle para ordenar:
    //inciamos un for
    for($i = 0; $i < $arrayLength; $i++)
    //comenzamos a validar
    //ese simbolo > es para ordenar de mayor a menor o viceversa
    if($resulArray[$i] > $resulArray[$i+1]){
        //creamos un auxiliar que nos permite establecer el punto de inicio de forma fija
        $aux = $resulArray[$i];
        //el algoritmo BubbleSort lee los parametros de 2 en 2 
        //por lo cual la lectura debe ser siempre par y gracias al -1 colocado anteriormente esto es posible
        $resulArray[$i] = $resulArray[$i+1];
        //aqui repetimos el proceso pero haciendo que se agregue el siguiente en el auxiliar y asi sucesivamente
        //hasta que el array este ordenado con el BublleSort
        $resulArray[$i+1] = $aux;
        //hacemos verdadera nuestra var para que el proceso se repita constantemente y asi logremos obtener los resultados esperados
        $car = true;
    }
    
}
//retornamos el valor de nuestro array result
return $resulArray;
}
//añadimos informacion a nuestro array y lo mostramos todo con un print_r
$array1 = [10,3,45,6,49,3,2];
print_r(BubbleSort($array1));
//code BY Josue-Linares
?>