<?php 
//DESCOMPONER UN NUMERO SIN UTILIZAR VECTORES NI ARRAYS
function descomponer($numero) {    
        $veces=0;   
        $numerox = 0;
        $numeroy = 0; 
        $cantidad = digitos($numero);
        $mitad=floor($cantidad/2);
        for ($i = $cantidad - 1; $i > 0; $i--) {
            $aux = (potencia(10, $i));
            $aux2 = $aux * 10;            
            $numerox = floor($numero % $aux2 / $aux);
           //  echo "El numero A-".$numerox."</br>";
            if ($i == 1) {
                $numerox = floor($numero%$aux);                
             //   echo "El numero A-".$numerox."</br>";   
            }
            if($i>=$mitad){
             //   echo "El numero A-".$numerox."</br>";      
                for ($r = $cantidad - 1; $r > 0; $r--) {
                    $aux3 = (potencia(10, $r));
                    $aux4 = $aux3 * 10;            
                    $numeroy = floor($numero % $aux4 / $aux3);
                    //comparacion aqui
                    if($r<$mitad){
                        if($numerox==$numeroy){
                            $veces=$veces+1;
                            break;//para no contar de mas
                        }
                    //echo "El numero B-".$numeroy."</br>";
                    if ($r == 1) {
                    $numeroy = floor($numero%$aux3);                
                    //echo "El numero B-".$numeroy."</br>";   
                        if($numerox==$numeroy){
                            $veces=$veces+1;
                        }
                    }

                }
                    //fin de la comparacion aqui            
        }

            }


            }

            if($veces>=3){

                echo "es valido la inserccion". $veces;
            }else{

                echo "no es valido la inserccion";
            }


        } 
        
    function digitos($numero) {
        $cantidad = 0;
        $valor = 1;
        for ($i=0; $i <15; $i++) { 
            $aux = (potencia(10, $i));
            if ($valor <= $numero && $aux - 1 >= $numero) {
                $cantidad = $i;
                break;
            } else {
                $valor = $aux;
            }
        }
        return $cantidad;
    }



  function potencia($base,$exponente) {
        $sol = 1;
        for ($i=0; $i <$exponente; $i++) { 
            $sol = $sol * $base;
        }        
        return $sol;
    }
?>
