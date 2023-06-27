<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
                        <li><a href="../index.php">Sair</a></li>
                    </ul>
                </li>
                <li><a href="./rent_space.php">Alugar Espaço</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Locais Disponíveis:</h1><br>

        <div class="box">
            <table>
                <tr>
                    <td>
                        <h3> Auditório</h3>
                    </td>
                    <td> Rua:</td>
                </tr>
                <tr>
                    <td>Dia e Horário:</td>
                </tr>
            </table>
        </div>
    </main>
</body>

</html>