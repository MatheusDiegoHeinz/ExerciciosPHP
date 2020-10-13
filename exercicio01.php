<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exercicio 01</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1> Criar uma página que exiba uma sequência de 50 linhas: </h1>
    <?php
      $num = 1;
      while ($num <= 50) {
          echo"Essa é a linha " .$num. "</br>";
          $num++;
      }
    ?>
  </body>
</html>