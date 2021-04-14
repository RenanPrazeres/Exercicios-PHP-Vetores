<?php 

function getMaiorMenor(array $inteiros){

    $maior = $inteiros[0];
    $menor = $inteiros[0];

    foreach($inteiros as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
            if($numero < $menor){
                $menor = $numero;
            }
                
    }
    return [
        "maior" => $maior,
        "menor" => $menor
    ];
}

$vetor = [100, 99, 65, 1001, 2, 3];
print_r(getMaiorMenor($vetor));

?>