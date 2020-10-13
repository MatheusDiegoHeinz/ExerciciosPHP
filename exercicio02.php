<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exercicio 02</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1> Criar um programa que gera um array bidimensional de 10x4 com valores aleatório (rand(0,100)). Após a criação desse array o programa deve exibir uma página HTML com os valores identificando cada uma das posições do Array </h1>
    <?php
      $marcondes = array();
      $quebra = "</br>";
      for ($i = 0; $i <= 10; $i++){
          $marcondes = array(random_int(0,100),random_int(0,100),random_int(0,100),random_int(0,100).$quebra);

          print_r($marcondes);
      }

    ?>
  </body>
</html>