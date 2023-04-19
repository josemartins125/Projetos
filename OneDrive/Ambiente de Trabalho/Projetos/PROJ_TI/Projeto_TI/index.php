<?php

session_start();

$Fail = " "; 
/*Autenticacao dos utilizador atravez do ficheiro userDetails*/
if(isset($_POST['username']) && isset($_POST['password'])){
$UserName = $_POST['username'];
$PassWord = $_POST['password'];

$search = $UserName." ".$PassWord;             
$lines = file("api/files/users/userDetails.txt");
$found = false;

      foreach($lines as $line) {
      if(strpos($line, $search) !== false) {
        
        $_SESSION["username"] = $_POST['username'];
        header( "refresh:0; url= dashboard.php" );
        $found = true;
      }
    }
      if($found == false) {
        $Fail = "Autenticação Falhada/Erro";
      }
  
}


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Login-Projeto TI </title>
    <link rel="stylesheet" type="text/css" href="index.css">  
     
</head>
    <body>

    <form action = "index.php" method = "post"> <!-- POST METHOD para login -->

        <div class="login-box">
            <img src="images/avatar.png" class="avatar" alt = "Avatar">
            <h1>Login Here</h1>
              <div class="Warning"> <?php echo $Fail ?> </div> <!-- Print da mensagem de erro que apenas está definida se o nome/pass estiver errado -->
            
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" name="submit" value="Login">
                <a class="nav-link-active" aria-current="page" href="signUp.php"> Sign Up</a>
        
        </div>
        
    </form>
        
</body>
</html>