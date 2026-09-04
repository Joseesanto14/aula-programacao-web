<?php session_start(); ?>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1>Tela de Login Zika</h1>
    <form action="menu.php" method="POST">
        <fieldset>
            <legend>Dados de usuário</legend>
            <table>
                <tbody>
                    <?php if (isset($_SESSION['msg'])) { ?>
                        <tr><td colspan="2" style="color: red;">
                            <?php echo $_SESSION['msg']; ?> </td></tr>
                            <?php 
                                session_destroy();
                            } ?>
                    <tr>
                        <td>Usuário:</td>
                        <td><input type="text" name="usuario"/></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"> <button type="submit" value="Entrar"> Entrar </button></td>
                    </tr>
                </tbody>
            </table>
            
        </fieldset>
    </form>
</body>
</html>