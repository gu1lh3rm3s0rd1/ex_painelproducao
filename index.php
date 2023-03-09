<?php include 'testeestanquiedadeD.php' ?>
<?php include 'testeestanquiedadeS.php' ?>
<?php include 'testehidrostaticoD.php' ?>
<?php include 'testehidrostaticoS.php' ?>
<?php include 'testepressurizacaoD.php' ?>
<?php include 'testepressurizacaoS.php' ?>
<?php include 'vasosproduzidosD.php' ?>
<?php include 'vasosproduzidosS.php' ?>
<?php include 'conexaototalOPD.php' ?>
<?php include 'conexaototalOPS.php' ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Analise de Producao</title>
      <!-- link rel="stylesheet" href="index.css" -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- meta http-equiv="refresh" content="60; url=index.php" -->
      <style>
           @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800|Poppins&display=swap');

            * {
               margin: auto;
               padding: auto;
               box-sizing: border-box;
            }

            body {
               padding: 4px;
               width: 100%;
               min-width: 200px;
               max-width: 950px;
               margin: auto;
            }

            .logo {
               display: flex;
               max-width: 950px;
            }

            .cards {
               max-width: 950px;
               text-align: center;
               padding: 30px;
            }

            .services {
               display: flex;
               align-items: center;
               text-align: center;
               max-width: 950px;
            }

            .content {
               display: flex;
               flex-wrap: wrap;
               flex: 1;
               width: 100%;
               max-width: 185px;
               min-width: 150px;
               margin: 5px;
               padding: 20px;
               border: 2px solid black;
               border-radius: 4px;
            }

            .content > * {
               flex: 1 1 100%;
            }

            .content h1 {
               font-size: 13.5px;
               font-family: 'Segoe UI', sans-serif;
               margin: 5px 0;
               letter-spacing: 1px;
               text-transform: uppercase;
               border: 1px solid black;
               border-radius: 4px;
            }

            .content h2 {
               font-size: 13px;
               font-family: 'Arial', sans-serif;
               margin: 5px 0;
               letter-spacing: 1px;
               text-transform: uppercase;
            }

            @media (max-width: 950px) {
               .services{
                  display: flex;
                  flex-direction: column;
               }
            }
      </style>
   </head>
   <body>
      <!-- LOGO CHIAPERINI -->
         <div style="display: flex;">
               <center><img src="imagem/LOGO SEM FUNDO 2.png" alt="logo" width="100%" height="90px"></center>
         </div>
      <!-- CARTOES/ETIQUETAS -->
      <div class="cards">
         <div class="services">
            <div class="content content-1">
               <div class="fab">
                     <img src="imagem/LOGO ORDEM PRODUCAO.png" alt="">
                     <h2>PRODUCAO(op)</h2>
               </div>
                  <h1>ordens producao abertas HOJE</h1>
                  <h2><?php echo $totalopD; ?></h2>
                  <h1>total op ULT. 7 dias</h1>
                  <h2><?php echo $totalopS; ?></h2>
            </div>
            <div class="content content-2">
               <div class="fab">
                     <img src="imagem/LOGO PRODUCAO.png" alt="">
                     <h2>VASOS</h2>
               </div>
                  <h1>vasos produzidos hoje</h1>
                  <h2><?php echo $totalproduzidosD; ?></h2>
                  <h1>PRODUZIDOS ULT. 7 dias</h1>
                  <h2><?php echo $totalproduzidosS; ?></h2>
            </div>
            <div class="content content-3">
               <div class="fab">
                     <img src="imagem/LOGO TESTE ESTANQUIEDADE.png" alt="">
                     <h2>ESTANQUIEDADE</h2>
               </div>
                  <h1>testes estanquIEdade hoje</h1>
                  <h2><?php echo $totaltesteED; ?></h2>
                  <h1>testados ULT. 7 dias</h1>
                  <h2><?php echo $totaltesteES; ?></h2>
            </div>
            <div class="content content-4">
               <div class="fab">
                     <img src="imagem/LOGO TESTE HIDROSTATICO.png" alt="">
                     <h2>HIDROSTATICO</h2>
               </div>
                  <h1>testes hidrostaticos hoje</h1>
                  <h2><?php echo $totaltesteHD; ?></h2>
                  <h1>TESTADOS ULT. 7 dias</h1>
                  <h2><?php echo $totaltesteHS; ?></h2>
            </div>
            <div class="content content-5">
               <div class="fab">
                     <img src="imagem/LOGO TESTE PRESSURIZACAO.png" alt="">
                     <h2>PRESSURIZACAO</h2>
               </div>
                  <h1>testes PRESSURIZACAO hoje</h1>
                  <h2><?php echo $totaltestePD; ?></h2>
                  <h1>testados ULT. 7 dias</h1>
                  <h2><?php echo $totaltestePS; ?></h2>
            </div>
         </div>
      </div>
   </body>
</html>