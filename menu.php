<?php
session_start();
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == 'teste' && $senha == 'teste') {
        $_SESSION['nome'] = 'José Elias';
    } else {
        $_SESSION['msg'] = 'Usuário ou senha incorretos';
        header("Location: index.php");
        exit;
    }
} else if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Usuário logado: <?php echo $_SESSION['nome']?></h1> 
    <div>
        <a href="menu.php"> Home </a> |
        <a href="logout.php"> Sair </a>
    </div>
</body>
</html>