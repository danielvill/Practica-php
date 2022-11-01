<?php
   // Este ejercicio muestra los valores de una suma pero por lo visto no se ejecuta como me gustaria para
   // Para la implementacion de esta calculadora 
   $primer = $_POST['num1'];
   $segundo = $_POST['num2'];
   $i=0;
   
   $mostsum = ['sum'];
   $mostres = ['res'];
   $mostmul = ['mul'];
   $mostdiv = ['div'];
   
   switch ($i){
     case 0:
        
        if($mostsum){
            $tercero = suma($primer,$segundo); 
            echo "Este es el valor de la sumas". "</br>" . $tercero."</br>";
           }
           break;
     case 1:
        if($mostres){
            $tercero = resta($primer,$segundo); 
            echo "Este es el valor de la resta". "</br>" . $tercero."</br>";
           }
           break;
     case 2:
        if($mostmul){
            $tercero = multi($primer,$segundo); 
            echo "Este es el valor de la Multiplicacion". "</br>" . $tercero."</br>";
           }
        break;

     case 3:
        if($mostdiv){
            $tercero = divi($primer,$segundo); 
            echo "Este es el valor de la Division". "</br>" . $tercero."</br>";
           }
        break;

   }
   
   function suma($valor1,$valor2){
               
       $resultado = $valor1+$valor2;
       return $resultado;

      
   }
   function resta($valor1,$valor2){
               
    $resultado = $valor1-$valor2;
    return $resultado;

   
}
    function multi($valor1,$valor2){
               
    $resultado = $valor1*$valor2;
    return $resultado;

   
}
    function divi($valor1,$valor2){
               
    $resultado = $valor1/$valor2;
    return $resultado;

   
}


?>