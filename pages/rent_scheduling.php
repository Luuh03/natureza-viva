<?php
    session_start();
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
                            <li><a href="../index.php">Sair</a></li>
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

            <div class="box">
                <table>
                    <tr>
                        <td><h3> Auditório</h3></td>
                        <td> Rua:</td>
                    </tr>
                    <tr>
                        <td>Dia e Horário</td>
                    </tr>
                    <tr>
                        <td>Alugado por:</td>
                    </tr>
                </table>
            </div>
            <br>
        </main>
    </body>

</html>