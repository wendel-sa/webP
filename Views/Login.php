<?php 
    session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Ninbus Login</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/Login.css" />
</head>

<body>
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../Views/index.html" class="text-gray">Nimbus</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            
            <div class="social text-gray">
                <!--Imagens fixas, adc um botão e aumentar o espaçamento depois-->
                <img src="../assets/img/gmail.png" width="24" height="25">
                <img src="../assets/img/instagram.png" width="24" height="25">
                <img src="../assets/img/whatsapp.png" width="24" height="25">
            </div>
        </div>
    </nav>
    <div class="container">
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <div class="content">
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
                <form method="post" action="../crudphp/logar.php">
                    <h1>Login</h1>

                    <p>
                        <label for="email">E-mail</label>
                        <input id="email" name="email" required="required" type="email" placeholder="ex. contato@htmlecsspro.com" />
                    </p>

                    <p>
                        <label for="senha">Senha</label>
                        <input id="senha" name="senha" required="required" type="password" placeholder="ex. senha" />
                    </p>

         

                    <p>
                        <input type="submit" value="Logar" />
                    </p>

                    <p class="link">
                        Ainda não tem conta?
                        <a href="#paracadastro">Cadastre-se</a>
                    </p>
                </form>
            </div>

            <!--FORMULÁRIO DE CADASTRO-->
            <div id="cadastro">
                
                <form method="post" action="../crudphp/cadastro.php">
                    <h1>Cadastro</h1>

                    <p>
                        <label for="nome_cad">Seu nome</label>
                        <input id="nome" name="nome" required="required" type="text" placeholder="nome" />
                    </p>

                    <p>
                        <label for="email_cad">Seu e-mail</label>
                        <input  id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com" />
                    </p>

                    <p>
                        <label for="senha_cad">Sua senha</label>
                        <input id="senha" name="senha" required="required" type="password" placeholder="ex. 1234" />
                    </p>


                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link is-medium">Enviar</button>
                        </div>
                    </div>

                    <p class="link">
                        Já tem conta?
                        <a href="#paralogin"> Ir para Login </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>