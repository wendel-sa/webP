<?php 

if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['senha']) && !empty($_POST['senha'])){

    require '../conexao/conexao.php';
    require 'usuario.php';

    $u = new Usuario();
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: ../Views/Cursos.html");
        }

    }else{
        header("Location: ../Views/login.php");

    }

}else{
    $_SESSION['loginErro'] = "login ou senha incorreto";
    header("Location: ../Views/login.php");
}


?>