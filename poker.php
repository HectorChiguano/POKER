<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKER</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
    <header class="titulo">
        POKER
    </header>
    <div id="cartaJugador">

        <?php
            
            require('funciones.php');

           
            // for($i=1;$i<=10;$i++){
            //     "<img id='cartas' src='imagenes/".$j.".PNG'/>";
            // }

            // variable que recoge los valores del array de cartas
            $cartas=crearCartas();
     
             
            // variable que recoge los valores del array del tipo de carta
            $tipo=tipoCarta();

            $cartaTipo=cartasTipo($cartas,$tipo);

            echo "<br>";
            echo "<br>";

            //mostramos todas las barajas ordenadas 
            // foreach($cartaTipo as $indice=>$valor){

            //     echo "<img id='cartas' src='imagenes/".$valor.".PNG'/>";
            // }
            
            // el metodo shuffle desordena un array
            //shuffle($cartaTipo);       
            
            //mostramos las barajas desordenadas
            foreach($cartaTipo as $indice=>$valor){

                echo "<img id='cartas' src='imagenes/".$valor.".PNG'/>";
            }      
        
            echo "<br>";

            $especial=tipoCartaEspecial();

            // variable que recoge las cartas especiales J Q K
            $cartasEspeciales=cartasEspeciales($tipo, $especial);
            
            foreach($cartasEspeciales as $indice=>$valor){

                echo "<img id='cartas' src='imagenes/".$valor.".PNG'/>";
            }   
           // var_dump($cartasEspeciales);
            
            // $mano=manoCarta();
            
            // for($i=1;$i<=count($mano);$i++){
            //    echo $mano[$i]." ";
            // }
            // echo "<br>";
            // var_dump($mano);

            // echo "<br>";
            // for($i=1;$i<=count($mano);$i++){
            //     for($x=0;$x<count($tipoCarta);$x++){
            //         if($mano[$i]==$tipoCarta[$x]){
            //             echo "<img id='cartas' src='imagenes/".$mano[$i].$tipoCarta[$x].".PNG'/>";
            //         }
                
            //     } 
            // }
            

        ?>

        

    </div>
    
</body>
</html>