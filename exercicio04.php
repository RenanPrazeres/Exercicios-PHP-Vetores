<? php

function  deletarElemento ($vetor, $deletar){

    foreach ($vetor as $chave => $del){

        if ($del == $deletar){
            não definido ($veto [$chave]);

            return  $vetor;
        }
    }
    return false;
}

$vetor = [1, 56, 9 , "Pedro" , "Laura" ];

$novoVetor = deletarElemento ($vetor, "Pedro");

print_r ($novoVetor);
?>