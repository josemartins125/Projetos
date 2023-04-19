<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");


    header('Content-Type: text/html; charset=utf-8');
    $request = $_SERVER['REQUEST_METHOD'];
    
    if($request == "POST"){
        echo "AQUI";
        print_r($_POST);
        if (isset($_POST['valor']) && isset($_POST['nome'])) {
            file_put_contents('files/'.$_POST['nome'].'/valor.txt', $_POST['valor']);
            file_put_contents('files/'.$_POST['nome'].'/hora.txt', $_POST['hora']);
            /*Os Warnings e Os Estados Não São inputs obrigatorios------------------*/
            file_put_contents('files/'.$_POST['nome'].'/estado.txt', $_POST['estado']);
            file_put_contents('files/'.$_POST['nome'].'/warnings.txt', $_POST['warnings']);
            /*--------------------------------------------------------------------- */
            file_put_contents('files/'.$_POST['nome'].'/log.txt', $_POST['hora'].";".$_POST['valor'].PHP_EOL, FILE_APPEND);
        } else {
            http_response_code(400);
        }
        
    } elseif ($request == "GET") {
        if (isset($_GET["nome"])){
            if (is_dir("files/".$_GET['nome'])){
                echo file_get_contents("files/".$_GET['nome']."/valor.txt");
            } else {
                http_response_code(404);
            }
        } else {
            http_response_code(400);
        }
        
    } else {
        http_response_code(400);
    }
?>