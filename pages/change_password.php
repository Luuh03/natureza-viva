<?php
    function change_password() {
        include "./scripts/connection.php";

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $senha = base64_encode($senha);

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

        $resultado = mysqli_query($conexao, $sql); 
        $num_linhas = mysqli_num_rows($resultado);

        if($login == "admin" && $senha == "123456"){
            $newURL = "/pages/change_password";
            header("Location: .$newURL.php");

            die();
        }

    }
    if(empty($_POST["login"])){  ?>
<!DOCTYPE html>
<html>

    <head>
        <title></title>
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
                <input type="text" name="login" required>
                <p>Confirmar senha:</p>
                <input type="password" name="senha" required>
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