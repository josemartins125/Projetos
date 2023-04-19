

<?php
$nome_fogo = file_get_contents("api/files/fogo/nome.txt");
$nome_Mov = file_get_contents("api/files/Mov/nome.txt");
$nome_Temp = file_get_contents("api/files/Temp/nome.txt");
$nome_Mov2 = file_get_contents("api/files/Mov2/nome.txt");
$nome_Luzes = file_get_contents("api/files/Luzes/nome.txt");

$nome_atuadorWindow = file_get_contents("api/files/atuadorWindow/nome.txt");
$nome_atuadorLamp = file_get_contents("api/files/atuadorLamp/nome.txt");
$nome_atuadorAlarme= file_get_contents("api/files/atuadorAlarme/nome.txt");
$nome_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/nome.txt");
$nome_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/nome.txt");
$nome_porta1 = file_get_contents("api/files/porta1/nome.txt");
$nome_porta2 = file_get_contents("api/files/porta2/nome.txt");

 $i = 0;
 $a = 1;
 

/*------------------------------------- */
/*------------------------------------- CAMERA3*/ 

$valor_fogo = file_get_contents("api/files/fogo/valor.txt");
$hora_fogo = file_get_contents("api/files/fogo/hora.txt");
$nome_fogo = file_get_contents("api/files/fogo/nome.txt");
$log_fogo = file_get_contents("api/files/fogo/log.txt");
$nomefile_fogo = file_get_contents("api/files/fogo/nomefile.txt");

/*------------------------------------- fogo*/ 

$valor_Mov = file_get_contents("api/files/Mov/valor.txt");
$hora_Mov = file_get_contents("api/files/Mov/hora.txt");
$nome_Mov = file_get_contents("api/files/Mov/nome.txt");
$log_Mov = file_get_contents("api/files/Mov/log.txt");
$nomefile_Mov = file_get_contents("api/files/Mov/nomefile.txt");

$valor_Mov2 = file_get_contents("api/files/Mov2/valor.txt");
$hora_Mov2 = file_get_contents("api/files/Mov2/hora.txt");
$nome_Mov2 = file_get_contents("api/files/Mov2/nome.txt");
$log_Mov2 = file_get_contents("api/files/Mov2/log.txt");
$nomefile_Mov2 = file_get_contents("api/files/Mov2/nomefile.txt");

$valor_Luzes = file_get_contents("api/files/Luzes/valor.txt");
$hora_Luzes = file_get_contents("api/files/Luzes/hora.txt");
$nome_Luzes = file_get_contents("api/files/Luzes/nome.txt");
$log_Luzes = file_get_contents("api/files/Luzes/log.txt");
$nomefile_Luzes = file_get_contents("api/files/Luzes/nomefile.txt");

$valor_Temp = file_get_contents("api/files/Temp/valor.txt");
$hora_Temp = file_get_contents("api/files/Temp/hora.txt");
$nome_Temp = file_get_contents("api/files/Temp/nome.txt");
$log_Temp = file_get_contents("api/files/Temp/log.txt");
$nomefile_Temp = file_get_contents("api/files/Temp/nomefile.txt");
/*------------------------------------- Mov*/ 

$valor_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/valor.txt");
$hora_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/hora.txt");
$nome_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/nome.txt");
$estado_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/estado.txt");
$log_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/log.txt");
$nomefile_atuadorAspersor = file_get_contents("api/files/atuadorAspersor/nomefile.txt");

/* --------------------------------------------fogo*/
$valor_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/valor.txt");
$hora_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/hora.txt");
$nome_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/nome.txt");
$estado_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/estado.txt");
$log_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/log.txt");
$nomefile_atuadorAlarme = file_get_contents("api/files/atuadorAlarme/nomefile.txt");

/* --------------------------------------------Fechadura*/
$valor_atuadorWindow = file_get_contents("api/files/atuadorWindow/valor.txt");
$hora_atuadorWindow = file_get_contents("api/files/atuadorWindow/hora.txt");
$nome_atuadorWindow = file_get_contents("api/files/atuadorWindow/nome.txt");
$estado_atuadorWindow = file_get_contents("api/files/atuadorWindow/estado.txt");
$log_atuadorWindow = file_get_contents("api/files/atuadorWindow/log.txt");
$nomefile_atuadorWindow = file_get_contents("api/files/atuadorWindow/nomefile.txt");
/* --------------------------------------------atuadorAc*/
$valor_atuadorLamp = file_get_contents("api/files/atuadorLamp/valor.txt");
$hora_atuadorLamp = file_get_contents("api/files/atuadorLamp/hora.txt");
$nome_atuadorLamp = file_get_contents("api/files/atuadorLamp/nome.txt");
$estado_atuadorLamp = file_get_contents("api/files/atuadorLamp/estado.txt");
$log_atuadorLamp = file_get_contents("api/files/atuadorLamp/log.txt");
$nomefile_atuadorLamp = file_get_contents("api/files/atuadorLamp/nomefile.txt");

/* --------------------------------------------atuadorLamp*/

$valor_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/valor.txt");
$hora_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/hora.txt");
$nome_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/nome.txt");
$estado_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/estado.txt");
$log_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/log.txt");
$nomefile_atuadorTermostato = file_get_contents("api/files/atuadorTermostato/nomefile.txt");


$valor_porta1 = file_get_contents("api/files/porta1/valor.txt");
$hora_porta1 = file_get_contents("api/files/porta1/hora.txt");
$nome_porta1o = file_get_contents("api/files/porta1/nome.txt");
$estado_porta1 = file_get_contents("api/files/porta1/estado.txt");
$log_porta1 = file_get_contents("api/files/porta1/log.txt");
$nomefile_porta1 = file_get_contents("api/files/porta1/nomefile.txt");


$valor_porta2 = file_get_contents("api/files/porta2/valor.txt");
$hora_porta2 = file_get_contents("api/files/porta2/hora.txt");
$nome_porta2 = file_get_contents("api/files/porta2/nome.txt");
$estado_porta2 = file_get_contents("api/files/porta2/estado.txt");
$log_porta2 = file_get_contents("api/files/porta2/log.txt");
$nomefile_porta2 = file_get_contents("api/files/porta2/nomefile.txt");

/* --------------------------------------------ATUADORES */

/*Definição Standart das variaveis gerais*/
$nome_Display = $nome_fogo ;
$nomefile_Display = $nomefile_fogo;
$log_Display = $log_fogo;



 $lines = file("api/files/".$nomefile_Display."/log.txt");

/*Este codigo Interpreta o Botao escolhido pelo name ="buttonx", dependendo do input este da às variaveis gerais
os valores desejado, assim podemos ter apenas um historico para todos os sensores
*/


if(isset($_POST['button1'])) {

	$nome_Display =$nome_fogo ;
	$nomefile_Display = $nomefile_fogo;
	$nome_Display_Value = $valor_fogo;
	$log_Display =$log_fogo;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}

if(isset($_POST['button2'])) {

	$nome_Display =$nome_Mov ;
	$nomefile_Display = $nomefile_Mov;
	$log_Display =$log_Mov;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button3'])) {

	$nome_Display =$nome_porta1 ;
	$nomefile_Display = $nomefile_porta1;
	$log_Display =$log_porta1;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button4'])) {

	$nome_Display =$nome_atuadorLamp ;
	$nomefile_Display = $nomefile_atuadorLamp;
	$log_Display =$log_atuadorLamp;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button5'])) {

	$nome_Display =$nome_atuadorWindow ;
	$nomefile_Display = $nomefile_atuadorWindow;
	$log_Display =$log_atuadorWindow;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button6'])) {

	$nome_Display =$nome_atuadorTermostato ;
	$nomefile_Display = $nomefile_atuadorTermostato;
	$log_Display =$log_atuadorTermostato;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button7'])) {

	$nome_Display =$nome_porta2 ;
	$nomefile_Display = $nomefile_porta2;
	$log_Display =$log_porta2;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button8'])) {

	$nome_Display =$nome_atuadorAspersor ;
	$nomefile_Display = $nomefile_atuadorAspersor;
	$log_Display =$log_atuadorAspersor;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button9'])) {

	$nome_Display =$nome_atuadorAlarme;
	$nomefile_Display = $nomefile_atuadorAlarme;
	$log_Display =$log_atuadorAlarme;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button10'])) {

	$nome_Display =$nome_Mov2;
	$nomefile_Display = $nomefile_Mov2;
	$log_Display =$log_Mov2;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button11'])) {

	$nome_Display =$nome_Temp ;
	$nomefile_Display = $nomefile_Temp;
	$log_Display =$log_Temp;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}
if(isset($_POST['button12'])) {

	$nome_Display =$nome_atuadorLuzes ;
	$nomefile_Display = $nomefile_Luzes;
	$log_Display =$log_Luzes;
	$lines = file("api/files/".$nomefile_Display."/log.txt");
}

/*Esta funcao vai a cada linha do nosso log.txt e transforma todos os $delimiters em espaços (" ") para que o explode
consiga detetar todas as palavras.
De seguida separa utilizado o explode separa a data da hora e do valor,
De seguida envia um echo da data enquanto passa a $hora e o $valor por um ponteiro, para ser mostrada
 posteriormente por um echo $hora / echo $valor*/
 function WriteTableDate(&$hour,&$i,&$nomefile_Display,&$value){
/*Define os Delimitadores:(" " e ;) para o explode*/
	$delimiters = [' ',';'];

	$lines = file("api/files/".$nomefile_Display."/log.txt");//file in to an array
/*str_replace transforma todos os $delimiters em espaços, assim o explode pode detetar todas as palavras. */
	$newline = str_replace($delimiters, $delimiters[0], $lines);

	$datelines= explode(" ", $newline[$i]);
	/*Echo do primeiro vetor (Data)*/
	echo $datelines[0]; //line 2 
	/*Guarda o segundo vetor em variavel (Hora)*/
	$hour = $datelines[1];
	/*Guarda o terceiro vetor em variavel (Value)*/
	$value = $datelines[2];
	$i++;
	}
	
	/*Simples contador para dar o index de acesso*/
	function IndexNumber(&$a){
		echo $a;
		$a++;
	}	

	
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
        
        	<a class="nav-link-active" aria-current="page" href="dashboard.php"> Home</a>	
			<a class="nav-link-active" aria-current="page" href="historico.php"> Voltar</a>
		
   		</div>
	</div>  
    
	<div class="container" style ="border-left: 6px solid rgb(26, 112, 170)">
	
	    <div class="card-header">		
						
			<b>Tabela de Sensores > <span class="badge bg-primary"> <?php echo $nome_Display ?> </span></b> 
							
	    </div>
	</div>	
	
		

	<div class="container">
		<!-- Definicao dos botoes para escolher o tipo de informacao demonstrada -->
	<form method="post">
		<div class="dropdown">
  		<button class="dropbtn">Historico de Acessos</button>
  			<div class="dropdown-content">
 				<a href="historico.php"> Geral</a>
  				<p><input class="btn btn-outline-primary" type="submit" name="button1" value=<?php echo $nomefile_fogo; ?>></p>
  				<p><input class="btn btn-outline-primary" type="submit" name="button2" value=<?php echo $nomefile_Mov; ?>></p>
  				<p><input class="btn btn-outline-primary" type="submit" name="button3" value=<?php echo $nomefile_porta1; ?>></p>
  				<p><input class="btn btn-outline-primary" type="submit" name="button4" value=<?php echo $nomefile_atuadorLamp; ?>></p>
  				<p><input class="btn btn-outline-primary" type="submit" name="button5" value=<?php echo $nomefile_atuadorWindow; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button6" value=<?php echo $nomefile_atuadorTermostato; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button7" value=<?php echo $nomefile_porta2; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button8" value=<?php echo $nomefile_atuadorAspersor; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button9" value=<?php echo $nomefile_atuadorAlarme; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button10" value=<?php echo $nomefile_Mov2; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button11" value=<?php echo $nomefile_Temp; ?>></p>
				<p><input class="btn btn-outline-primary" type="submit" name="button12" value=<?php echo $nomefile_Luzes; ?>></p>
  				</div>
			</div>
		</form>
	    <div class="card-body">
		
		    <table class="table">
		
		        <thead>
			        <tr style="color :rgb(40, 154, 230);">
      
				        <th scope="col">Index de Acessos</th>
				        <th scope="col">Data de Atualização</th>
				        <th scope="col">Hora de Acesso</th>
						<th scope="col">Valor do Acesso</th>

			        </tr>
  
		        </thead>
		
		        <tbody>
					<!-- Chamada das funcoes para mostrar as tabelas, aqui utilizamos o foreach 
					para atualizar o numero de linhas no log.txt
				-->
    					<?php foreach ($lines as $item): ?>
					
			        <tr style="color :rgb(255, 255, 255);">
				        <th scope="row"><?php IndexNumber($a) ?>º</th>
                        
				        <td><?php WriteTableDate($hour,$i,$nomefile_Display,$value)?></td>
				        <td><?php echo $hour ?></td> 
						<td><?php echo $value ?></td> 
			        </tr>

						<?php endforeach; ?>	
					
		        </tbody>
		    </table>
	    </div>
		
		<br>
		
</div>
   	
	
        
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
        
</html>
