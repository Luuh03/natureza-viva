<?php
$senha = $_POST["senha"];
$senhaConfirmacao = $_POST["senhaConfirmacao"];

if ($senha == $senhaConfirmacao) {
    session_start();
    $senha = base64_encode($senha);

    $login = $_SESSION['login'];
    $senhaAntiga = $_SESSION['senha'];

    $sql = "SELECT id FROM usuarios WHERE login = '$login' AND senha = '$senhaAntiga'";
    $resultado = mysqli_query($conexao, $sql);
    $id = mysqli_fetch_row($resultado);

    $sql = "UPDATE trabalho_dwe.usuarios SET senha = '$senha' WHERE id = '$id[0]'";

    $_SESSION['senha'] = $senha;

    $resultado = mysqli_query($conexao, $sql);

    $newURL = "/homepage_admin";
    header("Location: .$newURL.php");

    die();
} else {

    header("Refresh: 0");
    echo '<script type="text/javascript">
            window.onload = function () { alert("As senhas são diferentes!"); } 
        </script>';

}
?>