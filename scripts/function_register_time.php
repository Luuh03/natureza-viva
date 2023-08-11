<?php
$data = $_POST["data"];
$hora = $_POST["hora"];
$espaco = $_POST["espaco"];

$sql = "SELECT * FROM natureza_viva.agendamentos WHERE idespaco = $espaco and dataagendamento = '$data' and hora = '$hora';";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) != 0) {
    header("Refresh: 0");
    echo '<script type="text/javascript">
        window.onload = function () { alert("Este espaço já tem esse horário cadastrado!"); } 
    </script>';
} else {
    $sql = "INSERT INTO natureza_viva.agendamentos (idespaco, dataagendamento, hora, estado) VALUES ('$espaco', '$data', '$hora', 'D')";

    $resultado = mysqli_query($conexao, $sql);

    header("Refresh: 0");
    echo '<script type="text/javascript">
        window.onload = function () { alert("Horário cadastrado com sucesso."); } 
    </script>';
}

?>