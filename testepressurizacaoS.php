<?php include 'conexaomysql.php' ?>

<?php

  # Executa a query desejada 
  // total testado ultimos sete dias
  $sql = "
    SELECT replace(format(X.num, 0), ',', '.') AS num
    FROM 
    (
    select count(num) as num 
    FROM sgq_chi_reg.rg_th 
    where cast(dt_hora as DATE) >= date_sub(curdate(),INTERVAl 7 day)
    ) AS X;"; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  #prapara array
  $total = '';

  # Exibe os registros na tela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaltestePS = $total . '' . $dados['num'] . '';
  }

?>