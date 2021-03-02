<?php
    include "../conexao/conexao.php";

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha =filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //$genero =filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

    $query = "INSERT INTO alunos(nome, email, senha) VALUES (:nome, :email, :senha)";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    //$stmt->bindParam(':genero', $genero);
    
    if($stmt->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Cadastro realizado com sucesso</p>";
        header("Location: ../Views/pagina_inicial.html");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Cadastro não foi realizado com sucesso</p>";
        header("Location: ../Views/index.html");
    }    
    

?>
    
    
