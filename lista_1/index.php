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
    <div class="parent">
         <?php
            $numeros[] = array();
            $cor_azul = 0;
            $cor_vermelha = 0;
            $cor_verde = 0;
            $cor_amarela = 0;
            for ($i=1; $i <= 100; $i++) {
                //$numeros[] = $i;
                $selecionado = rand(1, 3);
                 
                if ($selecionado == 1 and $cor_azul < 10) {
                    echo "<div class='azul'>$i</div>";
                    $cor_azul += 1;
                }elseif($selecionado == 2 and $cor_vermelha < 10){
                    echo "<div class='vermelho'>$i</div>";
                    $cor_vermelha += 1;
                }elseif ($selecionado == 3 and $cor_verde < 10) {
                    echo "<div class='verde'>$i</div>";
                    $cor_verde += 1;
                }else{
                    echo "<div class='amarelo'>$i</div>";
                    $cor_amarela += 1;
                }
            }
            // foreach ($numeros as $value) {
            //     $selecionado = rand(1, 4);
                
            //     if ($selecionado == 1 and $cor_amarela <= 70) {
            //         echo "<div class='amarelo'>$value</div>";
            //         $cor_amarela += 1;
            //     }elseif ($selecionado == 2 and $cor_azul <= 10) {
            //         echo "<div class='azul'>$value</div>";
            //         $cor_azul += 1;
            //     }elseif($selecionado == 3 and $cor_vermelha <= 10){
            //         echo "<div class='vermelho'>$value</div>";
            //         $cor_vermelha += 1;
            //     }elseif ($selecionado == 4 and $cor_verde <= 10) {
            //         echo "<div class='verde'>$value</div>";
            //         $cor_verde += 1;
            //     }
            // }
            
         ?>
    </div>
</body>
</html>