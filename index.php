<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Login Page</title>
</head>
<body class="centro">

    <!-- TITULO -->
    <H1> Wiki de Departamentos </H1> <br/> <br/> <br/>
    <!-- LOGO -->
    <image src="image/logo.png" width="20%" height="20%"> <br/> <br/>

    <!-- FORMULARIO DE LOGIN -->
    <form method="post" action="login.php">
    <p> Nome: <input type="text" name="nome"> </p>
    <p> Senha: <input type="password" name="senha"> </p>
    <input type="submit" value="Logar">
    <input type="reset" value="Limpar">
    </form>


</body>
</html>