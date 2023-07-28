<?php
$login = $_POST["login"];
$senha = $_POST["senha"];

$senha = base64_encode($senha);

$sql = "SELECT nome FROM usuarios WHERE login = '$login' AND senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);
$num_linhas = mysqli_num_rows($resultado);

if ($num_linhas != 0) {
    $nome = mysqli_fetch_row($resultado);

    session_start();
    $_SESSION['nome'] = $nome[0];
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    if ($login == "admin") {
        if ($senha == base64_encode('123456')) {
            $newURL = "/pages/change_password";
            header("Location: .$newURL.php");
            die();
        } else {
            $newURL = "/pages/homepage_admin";
            header("Location: .$newURL.php");
            die();

        }

    } else {
        $newURL = "/pages/homepage_user";
        header("Location: .$newURL.php");
        die();
    }


} else {
    header("Refresh: 0");
    echo '<script type="text/javascript">
        window.onload = function () { alert("Nenhum usuário foi encontrado!"); } 
    </script>';
}
?>