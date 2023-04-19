

<!DOCTYPE html>

<html lang="en">
<head>

    <title>Historico Camera</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
	<link rel="stylesheet" href="dashboard.css"> 

</head>

<body> 
<br>
    <br>
	<div class="fixed-header" style="background-color: 	rgba(48,48,48,0.4);">
		<div class = "index"> 
        
        	<a class="nav-link-active" aria-current="page" href="dashboard.php"> Home</a>	
			<a class="nav-link-active" aria-current="page" href="dashboard.php"> Voltar</a>
		
   		</div>
	</div>  
  <div class="container" style ="border-left: 6px solid rgb(26, 112, 170)">
	
  <div class="card-header">		
        
  <b>Historico de Imagens >  </span></b> 
          
  </div>
</div>	

<br>

<div class="container">
        <div class="row">
                <div class="col-sm-2">

                <?php
                  $i = 0;
                  $dir = "\UniformServer\UniServerZ\www\Projeto\Python";

                  // Open a directory, and read its contents
                  if (is_dir($dir)){
                    if ($dh = opendir($dir)){
                      
                        while (($file = readdir($dh)) !== false){
                          if(($file != ".") and ($file != "..") and ($file != "capturaWebcamOpenCV.py")) {
                           
                          ?>
                          <img src="Python/<?php echo $file; ?>"  style="width:175px" alt="Icon">
                          <?php echo "Image : ".$i; ?>
                          
                          <?php
                          $i++;
                        }
                      }
                        closedir($dh);
                        
                    }
                  }
                
                  ?>
                  
                    
                </div>     
         
    	</div>  

</div>

<br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
        
</html>
