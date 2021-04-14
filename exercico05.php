<?php

$listaCidades = [
    1 => "Carapicuiba",
    2 => "Barueri",
    3 => "Itapevi",
    4 => "Osasco",
    4 => "Santana de Parnaiba",
    6 => "Cotia",
    7 => "Sao Paulo",
    8 => "Jandira"
];




?>




<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
    <link rel="stylesheet" href="./styles-global.css" />
</head>
<body>

<form method="Post" action="processaCidades.php">

<div class="input-group">
<label for="nome"> Digite seu nome:  </label>
<input type="text" name="nome" id="nome" required/>

<select id="Cidades" autofocus name="Cidades" required>
    <option value="">SELECIONE</option>
    
    <?php

    foreach($listaCidades as  $chave => $Cidades) {
        ?>
        <option value="<?= $chave ?>" ><?= $Cidades ?></option>
    <?php
    }
    ?>

</select>
</div>

<button>Enviar</button>

<?php

$nome = isset($_post["nome"]) ? $_post["nome"] : "";
$cidade = isset($_post["cidade"]) ? $_post["cidade"] : "";

if($nome != "" && $cidade != ""){
    ?>

<h3> óla <?= $nome ?>, de <?= $cidades[$cidade] ?>, seja Bem Vindo </h3>
<?php
}
?>

</body>
</html>