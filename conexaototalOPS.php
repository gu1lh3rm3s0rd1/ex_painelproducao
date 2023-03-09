<?php include 'conexaopg.php' ?>

<?php

  // total ordem de producao dos ultimos 7 dias
  $sql = "SELECT TO_CHAR(SUM(o.c2_quant), '9G999')
  FROM ordem_producao o
  INNER JOIN produto p ON o.c2_produto = p.b1_cod
  WHERE p.b1_desc LIKE '%VASO DE PRESS%' AND CAST(o.C2_EMISSAO AS DATE) >= current_date - 7 AND o.c2_local = '04'
  "; 

  $result=pg_query($conexao, $sql) or die(' Erro na query:');
    if (!$result) {
      echo "Um erro ororreu.\n";
      exit;
    }
    
    $arr = pg_fetch_array($result, 0, PGSQL_NUM);
    $totalopS = $arr[0] . "\n";

?>