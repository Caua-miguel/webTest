<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Aula3</title>
</head>

<style>

    .ex9{
       background-color: lightgray;
    }
    img{
        padding: 3px;
        width: 200px;
        height: 200px;
    }

</style>

<body>

    <h1>Galeria de imagens</h1>

<div class="ex9">

    <?php

        $imagens = ["01" => "imagem01.jpg", "02" => "imagem02.jpg", "03" => "imagem03.jpg", "04" => "imagem04.jpg", "05" => "imagem05.jpg", "06" => "imagem06.jpg"];

        foreach ($imagens as $key => $value) {
            echo "<img src='assents/$value'>";
        }

    ?>

</div>

</body>
</html>