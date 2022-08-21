<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mural de recados</title>
</head>
<body>
    <div class="container">
        <div class="btnAddMessage">
            <div class="messages"> <?php echo $numeroMensagens?></div>
            <form action="form.html" method="get">
                <input type="submit" value="Adicione uma mensagem">
            </form>
        </div>
        <div class="mensages">
        <?php
            include('connection.php');
            global $numeroMensagens;
            $numeroMensagens = 1;
            $stmt = $conn-> prepare("SELECT nome, data, mensagem FROM recados");
            $stmt-> execute();
            $result = $stmt->fetchAll(PDO::FETCH_BOTH);
            foreach($result as $r){
                echo $r['nome']. ' (' . $r['data']. ')' . '<br>';
                echo $r['mensagem'] .'<br>';
                $numeroMensagens +=1;
            }
        ?>
        </div>
    </div>
    <?php
        include('connection.php');
        if (isset($_POST['nome']) and isset($_POST['message'])) {
            $nome = $_POST['nome'];
            $mesage = $_POST['message'];
            $data = date("Y-m-d H:i:s");
            if ($nome == null or $mesage == null) {
                echo 'Campos nulos';
            }else{
                try {
                    $stmt = $conn->prepare('INSERT INTO recados (nome, data, mensagem) VALUES(?,?,?)');
                    $stmt->execute([$nome, $data, $mesage]);
                    echo $stmt->rowCount();
                }catch(PDOException $e) {
                    echo 'Error: ' . $e->getMessage();
                }

            }
        }
    ?>
</body>
</html>