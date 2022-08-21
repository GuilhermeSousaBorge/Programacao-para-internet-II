<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Pagina 1</title>
</head>
<body>
    <div class="parent" style="grid-template-columns: repeat(<?php echo $_GET['colunas']?>, 1fr);grid-template-rows: repeat(<?php echo $_GET['linhas']?>, 1fr);">
        <?php
            $n = 1;
            if(isset($_GET['linhas']) or isset($_GET['colunas'])){
                for ($i=0; $i < $_GET['linhas']; $i++) { 
                    for ($j=0; $j < $_GET['colunas']; $j++) { 
                        echo "<div class='tabela'>" . $n . "</div>";
                        $n++;
                    }
                }
            }
        ?>
    </div>
</body>
</html>