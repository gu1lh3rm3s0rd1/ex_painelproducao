<?php include 'conexaomysql.php' ?>

<?php

  # Executa a query desejada 
  // total produzido do dia
  $sql = "
    SELECT count(ser) as ser
    FROM sgq_chi_reg.rg_ser 
    WHERE dt = curdate();"; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  #prapara array
  $total = '';

  # Exibe os registros na tela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalproduzidosD = $total . '' . $dados['ser'] . '';
  }

?>