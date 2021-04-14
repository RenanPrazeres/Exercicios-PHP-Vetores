<?php

function getKeys(array $vetor) {
    $chaves[] = [];

    foreach($vetor as $key => $value) {
        $chaves[] = $key;
    }
    return $chaves;
}

?>