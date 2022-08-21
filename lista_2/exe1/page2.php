<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_GET['videoid'])) {
            $videoID = 'https://www.youtube.com/embed/' . $_GET['videoid'];
            echo "<iframe src='$videoID' frameborder='0' width='640' height='380'>". 'teste' . "</iframe>";
        }
    
    ?>
    
</body>
</html>