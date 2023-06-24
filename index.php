<?php
    function login() {
        include "./scripts/connection.php";

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $senha = base64_encode($senha);

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

        $resultado = mysqli_query($conexao, $sql); 
        $num_linhas = mysqli_num_rows($resultado);

        echo $num_linhas;
    }
    if(empty($_POST["login"])){  ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>     
        <link type="text/css" rel="stylesheet" href="./styles/style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    </head>
    <body>


    <div class="landing_page">
        <div class="logo_container">
            <img src="./images/logo_landing.png" alt="logo">
        </div>

        <div class="form_container">

                <form method="post">
                    <p>Login:</p>
                    <input type="text" name="login" required>
                    <p>Senha:</p>
                    <input type="password" name="senha" required>

                    <center>
                    <button type="submit">
                        Iniciar sessão
                    </button>
                </form>
                <h3>Não possui uma conta ainda?<br>
                <a href="./pages/register.php">Clique aqui para se cadastrar.</a></h3>
                </center>
        </div>
    </div>
    <?php
            } else { 
            login();
            } 
        ?>
    </body>
</html>