<?php

  # Substitua abaixo os dados, de acordo com o banco criado
  $user = "scada";
  $password = "scada";
  $database = "sgq_chi_reg";

  # O hostname deve ser sempre localhost ou IP do servidor
  $hostname = "192.168.0.25";

  # Conecta com o servidor de banco de dados
  $conexao = mysqli_connect( $hostname, $user, $password, $database ) or die( ' Erro na conexão ' );

?>