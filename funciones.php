<?php

// $jugadores=array(
//     'jugador1'=>,
//     'jugador2'=>,
//     'jugador3'=>,
//     'jugador4'=>
// );



//var_dump($jugadores);

//funcion que me crea 10 numeros comprovando que no 
// esten repetidas
function crearCartas(){
    
    $numeros=array();

    for($i=1;$i<=10;$i++){
        $aleatorio=rand(1,10);
        if(in_array($aleatorio, $numeros)){
            while(in_array($aleatorio, $numeros)){
                $aleatorio=rand(1,10);
            }
            $numeros[$i]=$aleatorio;
        }else{
            $numeros[$i]=$aleatorio;
        }
    }
        return $numeros;
}

// funcion que crea un array con los tipos
// corazon , diamante, trebol, picas

function tipoCarta(){

    return $tipoCarta=array('C','D','P','T');
}

function tipoCartaEspecial(){

    return $cartaEspecial=array('J','Q','K');

}

//funcion que asocia el numero con un tipo 

function cartasTipo($cartasCreadas,$tipoCarta){
    $cartaTipo=array();

    //como 
    sort($cartasCreadas);
    
    for($j=0;$j<count($tipoCarta);$j++){ 
        //echo $tipoCarta[$j];
        for($i=0;$i<count($cartasCreadas);$i++){
         //echo $cartasCreadas[$i]." ";
            $aux=$tipoCarta[$j]; 
            $cartaTipo[$i]=$cartasCreadas[$i].$aux;
            
            array_push($cartaTipo,$cartaTipo[$i]);
          // echo "<img id='cartas' src='imagenes/".$cartaTipo[$i].".PNG'/>";
        }
       
    }
   return $cartaTipo;  
}


//funcion que devuelve un array con las cartas especiales

function cartasEspeciales($tipo, $especial){

    
    $cartaEspecial=array();
    for($j=0;$j<count($tipo);$j++){ 
        
        //echo $tipo[$j];
        foreach($especial as $indice=>$valor){
            //echo $valor."<br>";
            $cartaEspecial[$j]=$valor.$tipo[$j];
           // echo "<img id='cartas' src='imagenes/".$cartaEspecial[$j].".PNG'/>";
            array_push($cartaEspecial, $cartaEspecial[$j]);
        }
       
    }

    return $cartaEspecial;

}


function manoCarta(){

    $mano;

    for($i=1;$i<=11;$i++){
        $aleatorio=rand(1,52);
        if(in_array($aleatorio, $mano)){
            while(in_array($aleatorio, $mano)){
                $aleatorio=rand(1,52);
            }
            $mano[$i]=$aleatorio;
        }else{
            $mano[$i]=$aleatorio;
        }
        
        
    }
    return $mano;
}


?>