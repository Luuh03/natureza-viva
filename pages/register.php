<?php
    function registrar(){
        include "../scripts/connection.php";

        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $senhaConfirmacao = $_POST["senhaConfirmacao"];

        if($senha == $senhaConfirmacao) {
            $senha = base64_encode($senha);

            $sql = "INSERT INTO natureza_viva.usuarios (nome, login, senha) VALUES";
            $sql.= "('$nome', '$login', '$senha')";

            $resultado = mysqli_query($conexao, $sql); 

            $newURL = "./index";
            header("Location: .$newURL.php");

            die();
        } else {

            header("Refresh: 0");
            echo '<script type="text/javascript">
                window.onload = function () { alert("As senhas são diferentes!"); } 
            </script>'; 

        }
    }
    if(empty($_POST["nome"])){  ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>     
        <link type="text/css" rel="stylesheet" href="../styles/style.css"/>
        <link type="text/css" rel="stylesheet" href="../styles/style_register.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    </head>
    <body>


        <div class="landing_page">
            <div class="content_container">
                <table>
                    <tr>
                        <td colspan="2"><h1>Faça parte da ONG Natureza Viva</h1></td>
                    </tr>
                    <tr>
                        <td><p>O meio ambiente nos abraça desde o berço, é hora de o abraçarmos também. Cultivar amor pela terra que nos permite respirar, pelo verde da esperança, criar uma relação de mutualismo e sermos o nosso melhor juntos.</p></td>
                        <td><img src="../images/Cadastro.png" alt="Imagem com 4 ícones da cabeça aos ombros de pessoas negras, loira e asiática. Os ícones fazem um tipo de cruz, dois na vertical e dois na horizontal."></td>
                    </tr>
                </table>
                
            </div>

            <div class="form_container">
                <form method="post" id="register">
                    <p>Nome:</p>
                    <input type="text" name="nome" required>
                    <p>Login:</p>
                    <input type="text" name="login" required>
                    <p>Senha:</p>
                    <input type="password" name="senha" required>
                    <p>Confirmar senha:</p>
                    <input type="password" name="senhaConfirmacao" required>

                    <center>
                    <button type="submit">
                        Cadastrar
                    </button>
                </form>
                <h3>Já possui uma conta?<br>
                <a href="../index.php">Clique aqui para fazer o login.</a></h3>
                </center>
            </div>
        </div>
        <?php
            } else { 
            registrar();
            } 
        ?>
    </body>
</html>