<?php
session_start();
if ($_SESSION['login'] == 'admin') {
    function cadastraHorario()
    {
        include "../scripts/connection.php";
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        $espaco = $_POST["espaco"];

        $sql = "INSERT INTO agendamentos (idespaco, dataagendamento, hora, estado) VALUES ('$espaco', '$data', '$hora', 'D')";

        $resultado = mysqli_query($conexao, $sql);

        header("Refresh: 0");
    }
    if (empty($_POST["data"])) { ?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Cadastrar Horário</title>
            <link type="text/css" rel="stylesheet" href="../styles/style.css" />
            <link type="text/css" rel="stylesheet" href="../styles/style_register_time.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
        </head>

        <body>
            <header>
                <nav>
                    <ul>
                        <ul id="menu">
                            <li><a><img src="../images/natureza_logo.png" alt="logo"></a>
                                <ul>
                                    <li><a href="./homepage_admin.php">Início</a></li>
                                    <li><a href="../index.php">Sair</a></li>
                                </ul>
                            <li><a href="./homepage_admin.php">Gerenciar Aluguel</a></li>
                            <li><a href="./register_local.php">Cadastrar Espaço</a></li>
                            <li><a href="./register_time.php">Cadastrar Horário</a></li>
                            <li><a href="./rent_scheduling.php">Consultar Agendamentos</a></li>
                        </ul>
                </nav>
            </header>

            <main>
                <h1>Cadastrar Horário</h1><br>

                <div class="container">

                    <form method="post">
                        <h2>Espaço salão de festa:
                            <select name="espaco">
                                <?php
                                include "../scripts/connection.php";

                                $sql = "SELECT nomeespaco, id FROM locais";
                                $resultado = mysqli_query($conexao, $sql);

                                while ($lugar = mysqli_fetch_row($resultado)) {
                                    echo "<option value='$lugar[1]'>$lugar[0]</option>";
                                }
                                ?>
                            </select>
                        </h2>
                        <label>Data:</label>
                        <input type="date" name="data" required><br>
                        <label>Hora:</label>
                        <input type="time" name="hora" required><br>

                        <center>
                            <button type="submit">
                                Cadastrar
                            </button>
                    </form>
                </div>
            </main>
            <?php
    } else {
        cadastraHorario();
    }
} else {
    session_destroy();
    header("location: ../index.php");
}
?>
</body>

</html>