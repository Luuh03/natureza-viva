<?php
function change_password()
{
    include "../scripts/connection.php";
    include "../scripts/update_password.php";        
}
if (empty($_POST["senha"])) { ?>
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