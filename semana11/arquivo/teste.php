<?php 
    function dividir($x, $y){
        if($y == 0){
           throw new Exception('Divisão por zero...');
        }else{
            $resultado = $x/$y;
            return $resultado;
        }
        
    };

    try{
        echo dividir(10, 0);
    }catch (Exception $e){
         echo 'Exceção capturada: '. $e->getMessage() . "\n";
    }
    
?>