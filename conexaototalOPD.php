<?php include 'conexaopg.php' ?>

<?php

  // total ordem de producao do dia
  $sql = "SELECT COALESCE(X.Q, 0) AS Q FROM (SELECT SUM(o.c2_quant) AS Q
    FROM ordem_producao AS o INNER JOIN produto p ON o.c2_produto = p.b1_cod
    WHERE p.b1_desc LIKE '%VASO DE PRESS%' AND CAST(o.C2_EMISSAO AS DATE) = current_date AND o.c2_local = '04'
	) AS X
  ";

  $result=pg_query($conexao, $sql) or die("Erro na query");
    if (!$result) {
      echo "Um erro ororreu.\n";
      exit;
    }
    
    $arr = pg_fetch_array($result, 0, PGSQL_NUM);
     $totalopD = $arr[0] . "\n";

     //echo $totalopD;

?>