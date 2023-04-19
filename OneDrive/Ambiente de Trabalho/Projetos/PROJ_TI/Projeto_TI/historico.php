<?php

/*Definir variaveis usadas nas funcoes*/ 
$estFogo = NULL;
$estMov = NULL;
$estMov2 = NULL;
$estLuzes = NULL;
$estTemp = NULL;


$est_atuadorWindow=NULL;
$est_atuadorLamp=NULL;
$est_atuadorTermostato=NULL;
$est_atuadorAlarme=NULL;
$est_atuadorAspersor=NULL;
$est_porta1=NULL;
$est_porta2=NULL;


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
$warn_porta1=NULL;
$warn_porta1=NULL;



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
/*----------------------------------------------------------------------------- */
/* -----------------------------------------CAMERA 1,CAMERA 2,CAMERA 3*/

$valor_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/valor.txt");
$hora_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/hora.txt");
$nome_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/nome.txt");
$estado_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/estado.txt");

/* --------------------------------------------fogo*/
$valor_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/valor.txt");
$hora_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/hora.txt");
$nome_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/nome.txt");
$estado_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/estado.txt");
/* --------------------------------------------Fechadura*/
$valor_atuadorWindow = file_get_contents("api/files/atuadorWindow/valor.txt");
$hora_atuadorWindow = file_get_contents("api/files/atuadorWindow/hora.txt");
$nome_atuadorWindow = file_get_contents("api/files/atuadorWindow/nome.txt");
$estado_atuadorWindow = file_get_contents("api/files/atuadorWindow/estado.txt");
/* --------------------------------------------atuadorWindow*/
/* --------------------------------------------atuadorAc*/
$valor_atuadorLamp = file_get_contents("api/files/atuadorLamp/valor.txt");
$hora_atuadorLamp = file_get_contents("api/files/atuadorLamp/hora.txt");
$nome_atuadorLamp = file_get_contents("api/files/atuadorLamp/nome.txt");
$estado_atuadorLamp = file_get_contents("api/files/atuadorLamp/estado.txt");
/* --------------------------------------------atuadorLamp*/

$valor_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/valor.txt");
$hora_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/hora.txt");
$nome_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/nome.txt");
$estado_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/estado.txt");

/*---------------------------------------------------------------------------*/
$valor_porta1 = file_get_contents("api/files/porta1/valor.txt");
$hora_porta1 = file_get_contents("api/files/porta1/hora.txt");
$nome_porta1 = file_get_contents("api/files/porta1/nome.txt");
$estado_porta1 = file_get_contents("api/files/porta1/estado.txt");

$valor_porta2 = file_get_contents("api/files/porta2/valor.txt");
$hora_porta2 = file_get_contents("api/files/porta2/hora.txt");
$nome_porta2 = file_get_contents("api/files/porta2/nome.txt");
$estado_porta2 = file_get_contents("api/files/porta2/estado.txt");

/* Explicada em dashboard.php-------------------------------------------- */
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


	/*Chamada das funcoes para o estado e os Warnings */
    $estFogo=DefineEstado($estado_fogo,$estFogo) ;
	$estMov=DefineEstado($estado_Mov,$estMov);
	$estLuzes=DefineEstado($estado_Luzes,$estLuzes);
	$estMov2=DefineEstado($estado_Mov2,$estMov2);
	$estTemp=DefineEstado($estado_Temp,$estTemp);
	

	
	$est_atuadorAspersor=DefineEstado($estado_atuadorAspersor,$est_atuadorAspersor);
	$est_atuadorWindow=DefineEstado($estado_atuadorWindow,$est_atuadorWindow);
	$est_atuadorLamp=DefineEstado($estado_atuadorLamp,$est_atuadorLamp);
	$est_atuadorTermostato=DefineEstado($estado_atuadorTermostato,$est_atuadorTermostato);
	$est_atuadorAlarme=DefineEstado($estado_atuadorAlarme,$est_atuadorAlarme);

	$est_porta1=DefineEstado($estado_porta1,$est_porta1);
	$est_porta2=DefineEstado($estado_porta2,$est_porta2);

?>


<!DOCTYPE html>

<html lang="en">
<head>

    <title>Historico</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
	<link rel="stylesheet" href="dashboard.css"> 

</head>

<body> 
	<br>
    <br>
	<div class="fixed-header" style="background-color: 	rgba(48,48,48,0.4);">
		<div class = "index"> 
        
        	<a class="nav-link-active" aria-current="page" href="dashboard.php"> Voltar</a>
		
   		</div>
	</div>  
    
	<div class="container" style ="border-left: 6px solid rgb(26, 112, 170)">
	
	    <div class="card-header">
						
						
		<b>Tabela de Sensores/Atuadores > Geral </b>  
			
						
						
	    </div>
	</div>	
	
		

	<div class="container">
		<div class="dropdown">
  			<button class="dropbtn">Historico de Acessos</button>
  				<div class="dropdown-content">
  				<a href="historico.php">Geral</a>
  				<a href="historico1.php">Historico Dispositivos</a>

  
 	 </div>
</div>
	    <div class="card-body">
		
		    <table class="table">
		
		        <thead>
			        <tr style="color :rgb(40, 154, 230);">
      
				        <th scope="col">Tipo de Dispositivo IoT</th>
				        <th scope="col">Valor</th>
				        <th scope="col">Ultima Atualização</th>
				        <th scope="col">Estado</th>
			        </tr>
  
		        </thead>
		
		        <tbody>
    

			        <tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_fogo; ?></th>
				        <td><?php echo $valor_fogo; ?></td>
				        <td><?php echo $hora_fogo; ?></td>
				        <td><span class="badge <?=$estFogo;?>"><?php echo $estado_fogo;?></span></td>
			        </tr>
			
			        <tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_Mov; ?></th>
				        <td><?php echo $valor_Mov; ?></td>
				        <td><?php echo $hora_Mov; ?></td>
				        <td><span class="badge <?=$estMov;?>"><?php echo $estado_Mov;?></span></td>
			        </tr>

					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_Mov2; ?></th>
				        <td><?php echo $valor_Mov2; ?></td>
				        <td><?php echo $hora_Mov2; ?></td>
				        <td><span class="badge <?=$estMov2;?>"><?php echo $estado_Mov2;?></span></td>
			        </tr>

					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_Temp; ?></th>
				        <td><?php echo $valor_Temp; ?></td>
				        <td><?php echo $hora_Temp; ?></td>
				        <td><span class="badge <?=$estTemp;?>"><?php echo $estado_Temp;?></span></td>
			        </tr>

					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_Luzes; ?></th>
				        <td><?php echo $valor_Luzes; ?></td>
				        <td><?php echo $hora_Luzes; ?></td>
				        <td><span class="badge <?=$estLuzes;?>"><?php echo $estado_Luzes;?></span></td>
			        </tr>
					
					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_atuadorWindow; ?></th>
				        <td><?php echo $valor_atuadorWindow; ?></td>
				        <td><?php echo $hora_atuadorWindow; ?></td>
				        <td><span class="badge <?=$est_atuadorWindow;?>"><?php echo $estado_atuadorWindow;?></span></td>
			        </tr>


					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_atuadorLamp; ?></th>
				        <td><?php echo $valor_atuadorLamp; ?></td>
				        <td><?php echo $hora_atuadorLamp; ?></td>
				        <td><span class="badge <?=$est_atuadorLamp;?>"><?php echo $estado_atuadorLamp;?></span></td>
			        </tr>


					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_atuadorAlarme; ?></th>
				        <td><?php echo $valor_atuadorAlarme; ?></td>
				        <td><?php echo $hora_atuadorAlarme; ?></td>
				        <td><span class="badge <?=$est_atuadorAlarme;?>"><?php echo $estado_atuadorAlarme;?></span></td>
			        </tr>

					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_porta1; ?></th>
				        <td><?php echo $valor_porta1; ?></td>
				        <td><?php echo $hora_porta1; ?></td>
				        <td><span class="badge <?=$est_porta1;?>"><?php echo $estado_porta1;?></span></td>
			        </tr>

					<tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php echo $nome_porta2; ?></th>
				        <td><?php echo $valor_porta2; ?></td>
				        <td><?php echo $hora_porta2; ?></td>
				        <td><span class="badge <?=$est_porta2;?>"><?php echo $estado_porta2;?></span></td>
			        </tr>
					
					
		        </tbody>
		    </table>
	    </div>
		
</div>
	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
        
</html>
