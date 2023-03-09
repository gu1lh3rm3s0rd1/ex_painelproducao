<?php include 'conexaomysql.php' ?>

<?php

  # Executa a query desejada
  // total produzido ultimos setes dias
  $sql = "
  SELECT replace(format(X.ser, 0), ',', '.') AS ser
  FROM
  (
  SELECT count(ser) AS ser 
  FROM sgq_chi_reg.rg_ser 
  where dt >= date_sub(curdate(),INTERVAl 7 day)
  ) AS X;";

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:');

  #prapara array
  $total = '';

  # Exibe os registros na tela
  while ($dados = mysqli_fetch_array( $consulta )) {
    $totalproduzidosS = $total . '' . $dados['ser'] . '';
  }

?>