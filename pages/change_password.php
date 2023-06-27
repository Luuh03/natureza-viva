<?php
    function change_password() {
        include "./scripts/connection.php";

        $senha = $_POST["senha"];
        $senhaConfirmacao = $_POST["senhaConfirmacao"];

        if($senha == $senhaConfirmacao) {
            $senha = base64_encode($senha);

            session_start();
            $sql = "SELECT id FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($conexao, $sql);
            $nome = mysqli_fetch_row($resultado);

            $sql = "UPDATE `trabalho_dwe`.`usuarios` SET `senha` = 'patatu' WHERE (`id` = '7');";

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

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

        $resultado = mysqli_query($conexao, $sql); 
        $num_linhas = mysqli_num_rows($resultado);

        

    }
    if(empty($_POST["login"])){  ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Mudança de senha</title>
        <link type="text/css" rel="stylesheet" href="../styles/style.css" />
        <link type="text/css" rel="stylesheet" href="../styles/style_change_password.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <img src="../images/natureza_logo.png" alt="Logo marca da ONG Natureza Viva">

        <h1>Mudança de Senha</h1>
        <div class="form_container">
            <form method="post">
                <p>Senha:</p>
                <input type="text" name="senha" required>
                <p>Confirmar senha:</p>
                <input type="password" name="senhaConfirmacao" required>
                <center>
                    <button type="submit">
                        Alterar Senha
                    </button>
                </center>
            </form>
        </div>
        <?php
                } else { 
                change_password();
                } 
            ?>
    </body>

</html>