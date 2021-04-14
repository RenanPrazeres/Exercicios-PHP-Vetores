<?php

function estaContido(array $vetor, array $vetorContido){
    
    foreach($vetorContido as $valorVetor1){
        $encontrado = false;
        foreach($vetor as $valorVetor2 ) {
            if($valorVetor1 == $valorVetor2){
                $encontrado = true;
                continue;
            }
        }
        if(!$encontrado){
            return false;
        }
        $vetor1 = [1, 3,5];
        $vetor2 = [1,2];
        if(estaContido($vetor1, $vetor2)){
            echo "Sim, está contido";
        }else{
            echo "Não, não está contido";
        }
    }

}
// [1,2,3,4,5,6]
//[2,4,7]
?>