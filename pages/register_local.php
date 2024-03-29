<?php
session_start();
if ($_SESSION['login'] == 'admin') {
    function registrarlugar()
    {

        include "../scripts/connection.php";
        $tipo = $_POST["tipo"];
        $nomeespaco = $_POST["nomeespaco"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];

        $sql = "INSERT INTO natureza_viva.locais (tipo, nomeespaco, cidade, bairro, rua, numero) VALUES";
        $sql .= "('$tipo', '$nomeespaco', '$cidade', '$bairro', '$rua', '$numero')";

        $resultado = mysqli_query($conexao, $sql);

        header("Refresh: 0");
    }

    if (empty($_POST["tipo"])) { ?>


        <!DOCTYPE html>
        <html>

        <head>
            <title>Cadastrar Espaço</title>
            <link type="text/css" rel="stylesheet" href="../styles/base_page.css" />
            <link type="text/css" rel="stylesheet" href="../styles/style.css" />
            <link type="text/css" rel="stylesheet" href="../styles/style_register_local.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
        </head>

        <body>
            <nav>
                <ul class="menu">
                    <li><img src="../images/natureza_logo.png" alt="logo">
                        <ul>
                            <li><a href="./homepage_admin.php">Início</a></li>
                            <li><a href="../scripts/logoff.php">Sair</a></li>
                        </ul>
                    <li><a href="./homepage_admin.php">Gerenciar Aluguel</a></li>
                    <li><a href="./register_local.php">Cadastrar Espaço</a></li>
                    <li><a href="./register_time.php">Cadastrar Horário</a></li>
                    <li><a href="./rent_scheduling.php">Consultar Agendamentos</a></li>
                </ul>
            </nav>

            <main>
                <h1>Cadastrar Espaço</h1><br>

                <div class="container">

                    <form method="post">
                        <label>Tipo:</label>
                        <input type="text" name="tipo" required><br>
                        <label>Nome do espaço:</label>
                        <input type="text" name="nomeespaco" required><br>
                        <label>Cidade:</label>
                        <input type="text" name="cidade" required><br>
                        <label>Bairro:</label>
                        <input type="text" name="bairro" required><br>
                        <label>Rua:</label>
                        <input type="text" name="rua" required><br>
                        <label>Número:</label>
                        <input type="number" name="numero" required>

                        <center>
                            <button type="submit">
                                Registrar
                            </button>
                    </form>
                </div>

            </main>
            <?php
    } else {
        registrarlugar();
    }
} else {
    include "../scripts/logoff.php";
}
?>
</body>

</html>