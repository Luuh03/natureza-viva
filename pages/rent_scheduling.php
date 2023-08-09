<?php
session_start();
if ($_SESSION['login'] == 'admin') {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Consultar Agendamentos</title>
        <link type="text/css" rel="stylesheet" href="../styles/style.css" />
        <link type="text/css" rel="stylesheet" href="../styles/style_homepage_admin.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav>
                <ul id="menu">
                    <li><a><img src="../images/natureza_logo.png" alt="logo"></a>
                        <ul>
                            <li><a href="./homepage_admin.php">Início</a></li>
                            <li><a href="../scripts/logoff.php">Sair</a></li>
                        </ul>
                    </li>
                    <li><a href="./homepage_admin.php">Gerenciar Aluguel</a></li>
                    <li><a href="./register_local.php">Cadastrar Espaço</a></li>
                    <li><a href="./register_time.php">Cadastrar Horário</a></li>
                    <li><a href="./rent_scheduling.php">Consultar Agendamentos</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Agendamentos:</h1><br>

            <?php
            include "../scripts/connection.php";

            $sql = "SELECT a.dataagendamento,
                                a.hora,
                                l.tipo,
                                l.nomeespaco,
                                l.rua,
                                l.numero,
                                u.nome
                        FROM
                                natureza_viva.agendamentos a
                        INNER JOIN
                                natureza_viva.usuarios u
                        ON a.idusuario = u.id
                        INNER JOIN
                                locais l
                        ON a.idespaco = l.id
                        GROUP BY a.id";

            $resultado = mysqli_query($conexao, $sql);

            while ($requisicoes = mysqli_fetch_row($resultado)) {
                echo "<div class='box'>
                            <table>
                                <tr>
                                    <td>
                                        <h3>$requisicoes[2]: $requisicoes[3]</h3>
                                    </td>
                                    <td>$requisicoes[4] Nº $requisicoes[5]</td>
                                </tr>
                                <tr>
                                    <td>Dia e Horário: $requisicoes[0]  $requisicoes[1]</td>
                                </tr>
                                <tr>
                                    <td>Alugado por: $requisicoes[6]</td>
                                </tr>
                            </table>
                        </div>";
            }
            ?>

            <br>
        </main>
        <?php
} else {
    include "../scripts/logoff.php";
}
?>
</body>

</html>