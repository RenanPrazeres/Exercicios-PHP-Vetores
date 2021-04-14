<?php

function ehPrimo(int $numero){

    for($i = 2; $i <= $numero; $i++){

        $resto = $numero / $i;

        if($resto == 0){
            return "Não é Primo";
        }

    }
        return "É Primo";
}

echo ehPrimo(7);

?>