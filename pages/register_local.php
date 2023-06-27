<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link type="text/css" rel="stylesheet" href="../styles/style.css" />
    <link type="text/css" rel="stylesheet" href="../styles/style_register_local.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php" ><img src="../images/natureza_logo.png" alt="logo"></a></li>
                <li><a href="">Gerenciar Aluguel</a></li>
                <li><a href="">Gerenciar Horários</a></li>
                <li><a href="">Gerenciar Espaços</a></li>
                <li><a href="">Consultar Agendamentos</a></li>
            </ul>
        </nav>
    </header>

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
                <input type="text" name="numero" required>

                <center>
                    <button type="submit">
                        Iniciar sessão
                    </button>
            </form>
        </div>

    </main>
</body>

</html>