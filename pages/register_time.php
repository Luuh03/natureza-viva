<?php
session_start();
if ($_SESSION['login'] == 'admin') {
    function cadastraHorario()
    {
        include "../scripts/connection.php";
        include "../scripts/function_register_time.php";
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
                                    <li><a href="../scripts/logoff.php">Sair</a></li>
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
                        <?php
                        include "../scripts/connection.php";

                        $sql = "SELECT nomeespaco, id FROM natureza_viva.locais";
                        $resultado = mysqli_query($conexao, $sql);

                        if (mysqli_num_rows($resultado) != 0) {
                            echo "<h2>Espaço salão de festa:
                                    <select name='espaco'>";

                            while ($lugar = mysqli_fetch_row($resultado)) {
                                echo "<option value='$lugar[1]'>$lugar[0]</option>";
                            }

                            echo "</select>
                                </h2>

                                <label>Data:</label>
                                <input type='date' name='data' required><br>
                                <label>Hora:</label>
                                <input type='time' name='hora' required><br>

                                <center>
                                <button type='submit'>
                                    Cadastrar
                                </button>";
                        } else {
                            echo "<h2>Nenhum espaço foi encontrado no sistema! Não será possível cadastrar nenhum horário.</h2>
                                    <h2><a href='./register_local.php'>Clique aqui para cadastrar um espaço.</a></h2>";
                        }
                        ?>
                    </form>
                </div>
            </main>
            <?php
    } else {
        cadastraHorario();
    }
} else {
    include "../scripts/logoff.php";
}
?>
</body>

</html>