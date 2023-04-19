
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo " recebido um post "; 
   
   if(isset($_FILES['imagem'])){
         print_r($_FILES['imagem']);
         save_file($_FILES['imagem']['tmp_name']);
         echo("|");
         echo($_FILES['imagem']['tmp_name']); 
         echo("|");
         echo($_FILES['imagem']['type']);
         echo("|");
         echo($_FILES['imagem']['size']);
         
   }
}

function save_file($sourcefile){
if(move_uploaded_file($sourcefile,"Python\face.jpg")){
    echo "Foi Realizado com sucesso";
    }else{
        echo "Ocorreu um erro no upload";
    }
}
?>

