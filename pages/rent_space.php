<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Alugar Espaço</title>
    <link type="text/css" rel="stylesheet" href="../styles/style.css" />
    <link type="text/css" rel="stylesheet" href="../styles/style_homepage_user.css" />
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
                        <li><a href="./homepage_user.php">Início</a></li>
                        <li><a href="../scripts/logoff.php">Sair</a></li>
                    </ul>
                </li>
                <li><a href="./rent_space.php">Alugar Espaço</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Locais Disponíveis:</h1><br>

        <?php
        include "../scripts/connection.php";

        $sql = "SELECT a.dataagendamento,
                            a.hora,
                            l.tipo,
                            l.nomeespaco,
                            l.rua,
                            l.numero
                    FROM
                            natureza_viva.agendamentos a
                    INNER JOIN
                            natureza_viva.locais l
                    ON a.idespaco = l.id
                    GROUP BY a.id";

        $resultado = mysqli_query($conexao, $sql);

        while ($agendamento = mysqli_fetch_row($resultado)) {
            echo "<div class='box'>
                        <table>
                            <tr>
                                <td>
                                    <h3>$agendamento[2]: $agendamento[3]</h3>
                                </td>
                                <td>$agendamento[4] Nº $agendamento[5]</td>
                            </tr>
                            <tr>
                                <td>Dia e Horário: $agendamento[0]  $agendamento[1]</td>
                            </tr>
                        </table>
                    </div>";
        }
        ?>
        <br>
    </main>
</body>

</html>