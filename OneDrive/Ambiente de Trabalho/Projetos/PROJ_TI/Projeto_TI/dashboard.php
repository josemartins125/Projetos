

<?php

?>



<?php
/*Definir variaveis usadas nas funcoes*/ 

$estFogo = NULL;
$estMov = NULL;
$estMov2 = NULL;
$estLuzes = NULL;
$estTemp = NULL;


$warnFogo = NULL;
$warnMov = NULL;
$warnMov2 = NULL;
$warnLuzes = NULL;
$warnTemp = NULL;








$warn_atuadorAlarme=NULL;
$warn_atuadorWindow=NULL;
$warn_atuadorLamp=NULL;
$warn_atuadorTermostato=NULL;
$warn_atuadorAspersor=NULL;
$warn_atuadorporta1=NULL;
$warn_atuadorporta2=NULL;

/*-----------------------------------------SENSORES*/

$valor_fogo = file_get_contents("api/files/fogo/valor.txt");
$hora_fogo = file_get_contents("api/files/fogo/hora.txt");
$nome_fogo = file_get_contents("api/files/fogo/nome.txt");
$estado_fogo = file_get_contents("api/files/fogo/estado.txt");
$warnings_fogo = file_get_contents("api/files/fogo/warnings.txt");
$log_fogo = file_get_contents("api/files/fogo/log.txt");

$valor_Mov = file_get_contents("api/files/Mov/valor.txt");
$hora_Mov = file_get_contents("api/files/Mov/hora.txt");
$nome_Mov = file_get_contents("api/files/Mov/nome.txt");
$estado_Mov = file_get_contents("api/files/Mov/estado.txt");
$warnings_Mov = file_get_contents("api/files/Mov/warnings.txt");
$log_Mov = file_get_contents("api/files/Mov/log.txt");

$valor_Mov2 = file_get_contents("api/files/Mov2/valor.txt");
$hora_Mov2 = file_get_contents("api/files/Mov2/hora.txt");
$nome_Mov2 = file_get_contents("api/files/Mov2/nome.txt");
$estado_Mov2 = file_get_contents("api/files/Mov2/estado.txt");
$warnings_Mov2 = file_get_contents("api/files/Mov2/warnings.txt");
$log_Mov2 = file_get_contents("api/files/Mov2/log.txt");



$valor_Luzes = file_get_contents("api/files/Luzes/valor.txt");
$hora_Luzes = file_get_contents("api/files/Luzes/hora.txt");
$nome_Luzes = file_get_contents("api/files/Luzes/nome.txt");
$estado_Luzes = file_get_contents("api/files/Luzes/estado.txt");
$warnings_Luzes = file_get_contents("api/files/Luzes/warnings.txt");
$log_Luzes = file_get_contents("api/files/Luzes/log.txt");



$valor_Temp = file_get_contents("api/files/Temp/valor.txt");
$hora_Temp = file_get_contents("api/files/Temp/hora.txt");
$nome_Temp = file_get_contents("api/files/Temp/nome.txt");
$estado_Temp = file_get_contents("api/files/Temp/estado.txt");
$warnings_Temp = file_get_contents("api/files/Temp/warnings.txt");
$log_Temp = file_get_contents("api/files/Temp/log.txt");







/* -----------------------------------------ATUADORES */


$nome_atuador2 = file_get_contents("api/files/atuadorAlarme/nome.txt");
$warnings_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/warnings.txt");

$nome_atuador3 = file_get_contents("api/files/atuadorAspersor/nome.txt");
$warnings_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/warnings.txt");

$nome_atuador4 = file_get_contents("api/files/atuadorLamp/nome.txt");
$warnings_atuadorLamp = file_get_contents("api/files/atuadorLamp/warnings.txt");

$nome_atuador5 = file_get_contents("api/files/atuadorTermostato/nome.txt");
$warnings_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/warnings.txt");

$nome_atuador6 = file_get_contents("api/files/atuadorWindow/nome.txt");
$warnings_atuadorWindow = file_get_contents("api/files/atuadorWindow/warnings.txt");

$nome_atuador8 = file_get_contents("api/files/porta1/nome.txt");
$warnings_atuadorporta1 = file_get_contents("api/files/porta1/warnings.txt");

$nome_atuador9 = file_get_contents("api/files/porta2/nome.txt");
$warnings_atuadorporta2 = file_get_contents("api/files/porta2/warnings.txt");



/*----------------------------------------------Atuadores*/



/*
-Esta função, quando chamada, Atribui um 'badge' diferente para cada tipo de input.
Se o nosso .txt não possui nenhuma das strings definidas temos o erro Null/Undefined,
neste caso a nova mensagem de erro é devolvida por ponteiro.
IMPORTANTE!!!!!: Apenas São Admitidas 3 Opcoes para Esta funcao, qualquer outra String Irá dar Null/Erro
-Ativo
-Desativo
-Suspenso
Estas opções não são case sensitive!
- Api Funcional, mas opcional para esta funcionalidade
*/
/*--------------------------------------PORTA */
function DefineEstado(&$var,$est){
if($var == 'Ativo')
{
    $est = 'bg-success';
}
else if($var == 'Suspenso')
{
    $est = 'bg-warning';
}
else if($var == 'Desativo')
{
  $est = 'bg-danger';
}
else{
    $est = 'bg-primary';
    $var = "Null/Undefined";
}
return $est;
}
/*
-Este codigo transforma os conteudos do file .txt -> warnings de cada sensor para um INT
de seguida atribui um badge diferente dependendo do intervalo a que o nosso numero inteiro pertence;
-NOTA!: Em caso default("Por exemplo Sao apenas inseridas palavras no .txt logo não existe numero inteiro para extrair")
O codigo atribui à variavel o valor : 0;
-Numeros negativos Dão Null/Undefined. Neste caso a variavel que representa a 
mensagem é devolvida por ponteiro com a nova mensagem de erro;
-Api Funcional, mas opcional para esta funcionalidade
*/ 
/*--------------------------CAM1*/
function DefineWarnings(&$var,$warn){
$var = (int) $var;

if(($var >=0) && ($var <= 1))
  {
      $warn = 'bg-success';
  }
  else if(($var >1) && ($var <= 5))
  {
      $warn = 'bg-warning';
  }
  else if($var > 5)
  {
     $warn = 'bg-danger';
  }

else{
    $warn = 'bg-primary';
    $var = "Null/Undefined";
}
return $warn;
}
/*Esta funcao devolve a primeira linha de cada log.txt------*/
function WriteTableDate($i){
  $lines = file("api/files/$i/log.txt");//file in to an array
  echo $lines[0];
  }

?>
<?php
	session_start();
    if( !isset($_SESSION['username']) ){
        header( "refresh:5; url=index.php" );
        die( "Acesso restrito!" );
    }
      /*Chamada e atribuição das funcoes para o estado e os Warnings */
    $estFogo=DefineEstado($estado_fogo,$estFogo) ;
    $estMov =DefineEstado($estado_Mov,$estMov);
    $estMov2 = DefineEstado($estado_Mov2,$estMov2);
    $estLuzes = DefineEstado($estado_Luzes,$estLuzes);
    $estTemp = DefineEstado($estado_Temp,$estTemp);





    $warnFogo=DefineWarnings($warnings_fogo,$warnFogo);
    $warnMov=DefineWarnings($warnings_Mov,$warnMov);
    $warnMov2 = DefineWarnings($warnings_Mov2,$warnMov2);
    $warnLuzes = DefineWarnings($warnings_Luzes,$warnLuzes);
    $warnTemp = DefineWarnings($warnings_Temp,$warnTemp);


    $warn_atuadorAlarme=DefineWarnings($warnings_atuadorAlarme,$warn_atuadorAlarme);
    $warn_atuadorWindow=DefineWarnings($warnings_atuadorWindow,$warn_atuadorWindow);
    $warn_atuadorLamp=DefineWarnings($warnings_atuadorLamp,$warn_atuadorLamp);
    $warn_atuadorTermostato=DefineWarnings($warnings_atuadorTermostato,$warn_atuadorTermostato);
    $warn_atuadorAspersor=DefineWarnings($warnings_atuadorAspersor,$warn_atuadorAspersor);
    $warn_atuadorporta1=DefineWarnings($warnings_atuadorporta1,$warn_atuadorporta1);
    $warn_atuadorporta2=DefineWarnings($warnings_atuadorporta2,$warn_atuadorporta2);



?>



<!DOCTYPE html>

<html lang="en">
<head>


<style>
  /*Style para os Switches dos Atuadores, Não funciona em dashboard.css */
  .switch {
    position: relative;
    display: inline-bMov;
    width: 60px;
    height: 34px;
  }
  
  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:valor + .slider {
    background-color: #2196F3;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:valor + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
  </style>
    <title>Serviço de Vigilância Inteligente</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="dashboard.css"> 

</head>

<body> 


    <br>
    <br>
    <div class="fixed-header" style="background-color: 	rgba(48,48,48,0.4);">
        <div class = "index"> 
            <a class="nav-link-active" aria-current="page" href="dashboard.php"> Home</a>
            <a class="nav-link-active" aria-current="page" href="historico.php"> Histórico </a>
            <a class="nav-link-active" aria-current="page" href="Logout.php"> Logout</a>
        </div>
    </div>
    <div class="container" style ="border-left: 6px solid rgb(26, 112, 170)">
        
           <h1> Olá Utilizador </h1>
           <p>Bem vindo</p>

    </div>
    
    <div class="container">
    <div class="row">
                <div class="col-sm-2">
                    <img src="images/light.png"  style="width:175px" alt="Icon">
                </div>
                <div class="col-sm-3">
                  <div class="text-center">
                  <br>
						            <p><b>Ultima Atualização:</b> <?php WriteTableDate("Luzes") ?></p>
                        <p><a href="historico.php"> Histórico</a></p>
                        <p><span class="badge bg-secondary"><?php echo $nome_Luzes; ?></span> <span class="badge bg-primary"><?php echo "Valor: ",$valor_Luzes;?></span></p>
						      </div>
                    
                </div>


                <div class="col-sm-2">
                    <img src="images/temperature.png"  style="width:175px" alt="Icon">
                </div>
                <div class="col-sm-3">
                  <div class="text-center">
                  <br>
						        <p><b>Ultima Atualização:</b> <?php WriteTableDate("Temp") ?></p>
                    <p><a href="historico.php"> Histórico</a></p>
                    <p><span class="badge bg-secondary"><?php echo $nome_Temp; ?></span>  <span class="badge bg-primary"><?php echo "Valor: ",$valor_Temp;?></span></p>
						      </div>
                    
                </div>
                
        </div>
        <br>
        
        <div class="row">
                <div class="col-sm-2">
                    <img src="images/fire.png"  style="width:175px" alt="Icon">
                </div>
                
                <div class="col-sm-3">
                <div class="text-center">
                    <br>
						<p><b>Ultima Atualização:</b> <?php WriteTableDate("fogo") ?></p>
                        <p><a href="historico.php"> Histórico</a></p>
                        <p><span class="badge bg-secondary"><?php echo $nome_fogo;?></span> <span class="badge bg-primary"><?php echo "Valor: ",$valor_fogo;?></span></p>
                        
					  	</div>
            </div>
        
            <div class="col-sm-2">
                    <img src="images/motion.png"  style="width:175px" alt="Icon">
                </div>
                <div class="col-sm-3">
                <div class="text-center">
                    <br>
						<p><b>Ultima Atualização:</b> <?php WriteTableDate("Mov2") ?></p>
                        <p><a href="historico.php"> Histórico</a></p>
                        <p><span class="badge bg-secondary"><?php echo $nome_Mov2; ?></span> <span class="badge bg-primary"><?php echo "Valor: ",$valor_Mov2;?></span></p>
						</div>     
                </div>
          </div>
        <br>
        <div class="row">
                
                <div class="col-sm-2">
                 
                <div class="row" style="height: 69%;text-align: center;padding: 5% 0;">
                      <div class = "col-md-3">

                    </div>
                    </div>

                </div>
        </div>
        <div class="row">
                <div class="col-sm-2">
                    <img src="images/motion.png"  style="width:175px" alt="Icon">
                </div>
                
                <div class="col-sm-3">
                <div class="text-center">
                    <br>
                    
						<p><b>Ultima Atualização:</b> <?php WriteTableDate("Mov") ?></p>
                        <p><a href="historico.php"> Histórico</a></p>
                        <p><span class="badge bg-secondary"><?php echo $nome_Mov; ?></span> </span> <span class="badge bg-primary"><?php echo "Valor: ",$valor_Mov;?></span></p>
						</div>
                    </div>
                
                    </div>
      
        <br>
        <br>
        <!-- ATUADORES -->
      <div class="text-center" ><h1>Atuadores</h1> </div>
        <div class="row" style="height: 100%;text-align: center;padding: 1% 0;border:3px solid rgba(57, 104, 162, 0.6);">
                    <div class = "col-md" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                    <a style="font-weight: bold;"> <?php echo $nome_atuador2; ?></a>
                      <br>
                    <img src="images/alarmm.png"  style="width:175px" alt="Icon">
                    <br>
                     
                      <button class="btn btn-success" onClick="clickActivate2()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate2()">Default</button>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorAlarme;?>"><?php echo $warnings_atuadorAlarme; ?></span></p> 
                        
                    </div>
                    <div class = "col-md">
                    <a style="font-weight: bold;"> <?php echo $nome_atuador3; ?> </a>
                      <br>
                    <img src="images/sprinkler.png"  style="width:175px" alt="Icon">
                    <br>
                    <button class="btn btn-success" onClick="clickActivate3()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate3()">Default</button>
                        </label>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorAspersor;?>"><?php echo $warnings_atuadorAspersor; ?></span></p> 
                           </div>
                        </div>
                        <div class="row" style="height: 100%;text-align: center;padding: 1% 0;border:3px solid rgba(57, 104, 162, 0.6);">
                        <div class = "col-md" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                      <a style="font-weight: bold;"> <?php echo $nome_atuador4; ?> </a>
                      <br>
                      <img src="images/lamp.png"  style="width:175px" alt="Icon">
                      <br>
                  
                      <button class="btn btn-success" onClick="clickActivate4()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate4()">Default</button>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorLamp;?>"><?php echo $warnings_atuadorLamp; ?></span></p> 
                        </div>
                        <div class = "col-md" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                      <a style="font-weight: bold;"> <?php echo $nome_atuador5; ?> </a>
                      <br>
                      <img src="images/thermostato.png"  style="width:175px" alt="Icon">
                      <br>
                      
                      <button class="btn btn-success" onClick="clickActivate5()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate5()">Default</button>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorTermostato;?>"><?php echo $warnings_atuadorTermostato; ?></span></p>
                        </div> 
                          <div class = "col-md" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                      <a style="font-weight: bold;"> <?php echo $nome_atuador6; ?> </a>
                      <br>
                      <img src="images/window.png"  style="width:175px" alt="Icon">
                      <br>
                      <button class="btn btn-success" onClick="clickActivate6()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate6()">Default</button>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorWindow;?>"><?php echo $warnings_atuadorWindow; ?></span></p> 
                          </div>
                          </div>
                        <div class="row" style="height: 100%;text-align: center;padding: 1% 0;border:3px solid rgba(57, 104, 162, 0.6);">
                        <div class = "col-md" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                      <a style="font-weight: bold;"> <?php echo $nome_atuador8; ?> </a>
                      <br>
                      <img src="images/door-closed.png"  style="width:175px" alt="Icon">
                      <br>
                      <button class="btn btn-success" onClick="clickActivate8()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate8()">Default</button>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorporta1;?>"><?php echo $warnings_atuadorporta1; ?></span></p> 
                    </div>
                    <div class = "col-md" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                      <a style="font-weight: bold;"> <?php echo $nome_atuador9; ?> </a>
                      <br>
                      <img src="images/door-closed.png"  style="width:175px" alt="Icon">
                      <br>
                      <button class="btn btn-success" onClick="clickActivate9()">Activate</button> <button class="btn btn-danger" onClick="clickDectivate9()">Default</button>
                        <p><a href="historico.php"> Histórico</a> <span class="badge <?=$warn_atuadorporta2;?>"><?php echo $warnings_atuadorporta2; ?></span></p> 
                    </div>                 
                </div>
                <br>
                <br>
                <div class="row" style="height: 100%;text-align: center;padding: 1% 0;border:3px solid rgba(57, 104, 162, 0.6);">
                      <div class = "col-md-4" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                      
                      <br>
                      <img src="images/camera.png"  style="width:175px" alt="Icon">
                      <br>
                      <br>
                    
                        <p><a href="historicoCamera.php"> Histórico</a>
                    </div>
                    <div class = "col-md-8" style="border-right:3px solid rgba(57, 104, 162, 0.6);">
                    <div class="card-header">
						
                          <div class="text-center">
                          <b>Webcam</b>
                          </div>
                        
                        </div>
                        <div class="card-body">
                          
                          <div class="text-center">				
                          <?php
                              echo "<img src='Python\opencv_image.png?id=".time()."' style='width:40%'>"
                            ?>
                          </div>
                    <div>
                    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
    //------------------------------------------------------------------//
    function clickActivate2(){
      var formData = new FormData();
      formData.append('nome', 'atuadorAlarme');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')
      

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate2(){
      var formData = new FormData();
      formData.append('nome', 'atuadorAlarme');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate3(){
      var formData = new FormData();
      formData.append('nome', 'atuadorAspersor');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')
     

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate3(){
      var formData = new FormData();
      formData.append('nome', 'atuadorAspersor');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate4(){
      var formData = new FormData();
      formData.append('nome', 'atuadorLamp');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate4(){
      var formData = new FormData();
      formData.append('nome', 'atuadorLamp');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate5(){
      var formData = new FormData();
      formData.append('nome', 'atuadorTermostato');
      formData.append('valor', '3')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate5(){
      var formData = new FormData();
      formData.append('nome', 'atuadorTermostato');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate6(){
      var formData = new FormData();
      formData.append('nome', 'atuadorWindow');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate6(){
      var formData = new FormData();
      formData.append('nome', 'atuadorWindow');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate7(){
      var formData = new FormData();
      formData.append('nome', 'atuadorWire');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate7(){
      var formData = new FormData();
      formData.append('nome', 'atuadorWire');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate8(){
      var formData = new FormData();
      formData.append('nome', 'porta1');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate8(){
      var formData = new FormData();
      formData.append('nome', 'porta1');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
    function clickActivate9(){
      var formData = new FormData();
      formData.append('nome', 'porta2');
      formData.append('valor', '1')
      formData.append('estado', 'Ativo')
      formData.append('warnings', '0')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    function clickDectivate9(){
      var formData = new FormData();
      formData.append('nome', 'porta2');
      formData.append('valor', '0')
      formData.append('estado', 'Desativo')
      formData.append('warnings', '1')

      fetch("api/api.php",
            {
                method: "POST",
                body: formData,
            })
            .then(function(res){ console.log(res) })
            // .then(function(data){ alert( JSON.stringify( data ) ) })
          }
    //------------------------------------------------------------------//
		
		</script>

  </body>


</html>
