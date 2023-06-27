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
                <li><a><img src="../images/natureza_logo.png" alt="logo"></a></li>
                <li><a href="./homepage_admin.php">Gerenciar Aluguel</a></li>
                <li><a href="./register_local.php">Cadastrar Espaço</a></li>
                <li><a href="./register_time.php">Cadastrar Horário</a></li>
                <li><a href="#">Consultar Agendamentos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Cadastrar Horário</h1><br>

        <div class="container">

            <form method="post">
                <h2>Espaço salão de festa:</h2>
                <label>Data:</label>
                <input type="text" name="tipo" required><br>
                <label>Hora:</label>
                <input type="text" name="nomeespaco" required><br>

                <center>
                    <button type="submit">
                        Cadastrar
                    </button>
            </form>
        </div>

    </main>
</body>

</html>