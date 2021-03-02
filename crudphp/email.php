<?php 


include "../conexao/conexao.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$msg =filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
//$genero =filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

$query = "INSERT INTO emails(nome, email, msg) VALUES (:nome, :email, :msg)";

$stmt = $db->prepare($query);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':msg', $msg);
//$stmt->bindParam(':genero', $genero);

if($stmt->execute()){
    $_SESSION['msg'] = "<p style='color:green;'>Cadastro realizado com sucesso</p>";
    header("Location: ../Views/pagina_inicial.html");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro não foi realizado com sucesso</p>";
    header("Location: ../Views/index.html");
}    






/*  Código correto para enviar email mas precisa de um STMP ou Hospedagem


if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST[$nome]);
    $email = addslashes($_POST[$email]);
    $msg = addslashes($_POST[$msg]);



    $enviar = "relben.marcal@aluno.ifsertao-pe.edu.br";
    $assunto = "Contato Nimbus";
    $body = "Nome: ".$nome. "\r\n"; 
    $body = "Email: ".$email. "\r\n";
    $body = "Mensagem: ".$msg. "\r\n";
    
    $header = "From: relbenlucasm@gmail.com"."\r\n".
    "Reply-to".$email."\r\n"."X=Mailer:PHP/".phpversion();
    
    if(mail($enviar, $assunto, $body, $header)){
        echo("Email enviado");

    }else{
        echo("O email não pode ser enviado");
    }


}
*/
  


?>