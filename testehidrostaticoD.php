<?php include 'conexaomysql.php' ?>

<?php

  # Executa a query desejada 
  // total testado do dia
  $sql = "
    SELECT count(num) as num
    FROM sgq_chi_reg.rg_th 
    WHERE th_dt = curdate();"; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  #prapara array
  $total = '';

  # Exibe os registros na tela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaltesteHD = $total . '' . $dados['num'] . '';
  }

?>