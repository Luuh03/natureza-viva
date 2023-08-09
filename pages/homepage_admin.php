<?php
session_start();
if ($_SESSION['login'] == 'admin') { ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Página Inicial</title>
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
            <h1>Olá
                <?php echo $_SESSION['nome'] ?>
            </h1><br>

            <h2>Agendamentos aguardando confirmação:</h2>

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
                WHERE a.estado = 'R'
                GROUP BY a.id";

            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) != 0) {
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
                                <tr>
                                    <td id='botao2'><button id='abrir'>Alterar</button></td>
                                    <td id='botao2'><button id=confirmar>Excluir</button></td>
                                </tr>
                            </table>
                        </div>";
                }
            } else {
                echo "<center><h3>Nenhum espaço foi requisitado ainda!</h3></center>";
            }

            ?>

            <h2>Agendamentos em aberto:</h2>

            <div class="box">
                <table>
                    <tr>
                        <td>
                            <h3>Auditório</h3>
                        </td>
                        <td>Rua:</td>
                    </tr>
                    <tr>
                        <td>Dia e Horário</td>
                    </tr>
                    <tr>
                        <td>Alugado por:</td>
                    </tr>
                    <tr>
                        <td id="botao2"><button id="abrir">Abrir Ocorrência</button></td>
                        <td id="botao2"><button id=confirmar>Fechar Aluguel</button></td>
                    </tr>
                </table>
            </div>
            <br>
        </main>
        <?php
} else {
    include "../scripts/logoff.php";
}
?>
</body>

</html>