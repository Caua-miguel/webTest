<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Aula3</title>
</head>

<style>
  table{
    border-collapse: collapse;
  }
  td{
    border: 1px solid black
  }

  .ex7{
      background-color: aqua;
  }

  .ex8{
      background-color: palevioletred;
  }
</style>

<body>

<div class="ex7">

    <p>
        Ex 7 - Lista
    </p>
    <?php
    echo "<table><tr>";
    for($i=1; $i<=10; $i++){
        echo "<td>$i</td>";
    }
    echo "</tr></table>";
    ?>

    <p>
        Pares
    </p>

    <?php
    echo "<table><tr>";
    for($i=1; $i<=10; $i++){

        if ($i % 2 == 0){
            echo "<td>$i</td>";
        }
    }
    echo "</tr></table>";
    ?>


</div>

<div class="ex8">

    <p>
        Ex 8
    </p>

    <?php

    $curso = ["nome" => "Sistemas de Informação", "data" => "01/07/2022", "carga horária" => "00 horas", "local" => "IFSC"];

    foreach ($curso as $key => $value) {

        echo "<br>$key do curso:<br><br>" . $value . "<br>";
    }

    ?>
</div>

</body>
</html>