<?php
function sequenciaCrescente($numeros) {
  $crescente = false;

  for ($i = 0;$i < count($numeros);$i++) {
    $contador = 0;

    $arrayAuxiliar = $numeros;
    unset($arrayAuxiliar[$i]);

    $arrayAuxiliarString = implode(',', $arrayAuxiliar);
    $arrayAuxiliar = explode(",", $arrayAuxiliarString);

    foreach ($arrayAuxiliar as $key => $value) {
      if (isset($arrayAuxiliar[$key + 1])) {
        $prox = $arrayAuxiliar[$key + 1];
       } else {
        $prox = null;
       }

      if (!is_null($prox) && $value < $prox) {
        $contador++;
      }
    };

    if ($contador + 1 == count($arrayAuxiliar)) {
      $crescente = true;
    }
  }

  if($crescente) {
    echo "<p>" . implode(", ", $numeros) . " &#8594; Verdadeiro</p>";
  } else {
    echo "<p>" . implode(", ", $numeros) . " &#8594; Falso</p>";
  }

  return $crescente;
 }
?>


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência crescente</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="content">
      <?php
        sequenciaCrescente([1, 3, 2, 1]);
        sequenciaCrescente([1, 3, 2]);
        sequenciaCrescente([1, 2, 1, 2]);
        sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);
        sequenciaCrescente([1, 1, 2, 3, 4, 4]);
        sequenciaCrescente([1, 4, 10, 4, 2]);
        sequenciaCrescente([10, 1, 2, 3, 4, 5]);
        sequenciaCrescente([1, 1, 1, 2, 3]);
        sequenciaCrescente([0, -2, 5, 6]);
        sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
        sequenciaCrescente([40, 50, 60, 10, 20, 30]);
        sequenciaCrescente([1, 1]);
        sequenciaCrescente([1, 2, 5, 3, 5]);
        sequenciaCrescente([1, 2, 5, 5, 5]);
        sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);
        sequenciaCrescente([1, 2, 3, 4, 3, 6] );
        sequenciaCrescente([1, 2, 3, 4, 99, 5, 6] );
        sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45] );
        sequenciaCrescente([3, 5, 67, 98, 3] );
      ?>
    </div>
  </body>
</html>