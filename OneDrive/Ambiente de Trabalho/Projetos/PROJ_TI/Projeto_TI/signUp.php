<?php
session_start();
$Fail=""; /*Definicao standart da mensagem de erro*/
?>

<?php


/*Codigo para adicionar utilizadores, verifica se já existe utilizador com username igual no ficheiro userDetails.txt*/


if(isset($_POST['submit_btn']))
{
    $check = 0;
    $username = $_POST['name'];
    $password = $_POST['pwd'];
    
    $search = $username;           
        $lines = file("api/files/users/userDetails.txt");
        $found = false;
        foreach($lines as $line) {
          if(strpos($line, $search) !== false) {
            $Fail = "Conta já existente/Erro";
            $check = 1;
            
            
          }
        }
          if($found) {
            $_SESSION["name"] = $_POST['name'];
            
            
          }
          
           if($check == 0){
          $text = $username . " " . $password . "\n";
        $fp = fopen("api/files/users/userDetails.txt", 'a+');
       
          if(fwrite($fp, $text))  {
           
       
          }
       fclose ($fp);  
       header( "refresh:0; url= index.php" );  
       } 
    }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SignUp-Projeto TI </title>
    <link rel="stylesheet" type="text/css" href="signUp.css">  
</head>
<body >

  <form action = "signUp.php" method = "post"> <!-- POST METHOD para login -->

    <div class="login-box">
        <img src="images/avatar.png" class="avatar" alt = "Avatar">
        <h1>Sign Up Here</h1>
          <div class="Warning"> <?php echo $Fail ?> </div> <!-- Print da mensagem de erro que apenas está definida se o nome/pass estiver errado -->
        
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required>
            <input type="submit" name="submit_btn" value="Create Account">
            <a class="nav-link-active" aria-current="page" href="index.php"> Voltar</a>
    
    </div>
    
</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


