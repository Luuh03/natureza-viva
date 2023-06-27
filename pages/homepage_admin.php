<?php
    session_start();
?>
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
                <ul>
                    <li><a><img src="../images/natureza_logo.png" alt="logo"></a></li>
                    <li><a href="./homepage_admin.php">Gerenciar Aluguel</a></li>
                    <li><a href="./register_local.php">Cadastrar Espaço</a></li>
                    <li><a href="./register_time.php">Cadastrar Horário</a></li>
                    <li><a href="#">Consultar Agendamentos</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Olá <?php echo $_SESSION['nome'] ?></h1><br>

            <h2>Agendamentos aguardando confirmação:</h2>

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
                        <td id="botao1"><button id="confirmar">Confirmar</button></td>
                    </tr>
                </table>
            </div>

            <h2>Agendamentos em aberto:</h2>

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
                    <tr>
                        <td id="botao2"><button id="abrir">Abrir Ocorrência</button></td>
                        <td id="botao2"><button id=confirmar>Fechar Aluguel</button></td>
                    </tr>
                </table>      
            </div>
            <br>
        </main>
    </body>

</html>