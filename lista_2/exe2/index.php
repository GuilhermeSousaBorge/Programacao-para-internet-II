<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['usuario']) and isset($_POST['senha']) and isset($_POST['sexo']) and isset($_POST['profissao']) and isset($_POST['cidade']) and isset($_POST['estado']) and isset($_POST['descricao'])){
        echo "<p> Usuario: ". $_POST['usuario'] . "</p>";
        echo "<p> Senha: ". $_POST['senha'] . "</p>";
        echo "<p> Sexo: ". $_POST['sexo'] . "</p>";
        echo "<p> Profissao(oes): <br>";
        foreach($_POST['profissao'] as $k => $v){
            echo $v . "<br>"; 
        }
        echo "</p>";
        echo "<p> Cidade: ". $_POST['cidade'] . "</p>";
        echo "<p> Estado: ". $_POST['estado'] . "</p>";
        echo "<p> Descriçao: ". $_POST['descricao'] . "</p>";
    }
?>
<button onclick="myFunction()">Voltar</button>

<script>
function myFunction() {
location.replace("form.html")
}
</script>
</body>
</html>
