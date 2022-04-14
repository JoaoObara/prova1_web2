<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Home Page</title>
</head>
<body class="centro">
    <!-- IMAGEM QUE REPRESENTRA A EMPRESA -->
    <img src="image/empresa.jpg"><br/>

    <!-- PARAGRAFO COM A FUNCAO DA EMPRESA -->
    <h1>Função da empresa</h1>
    <p> Esta empresa é voltada ....</p>

    <!-- DATA E HORA  -->
    <?php
        $data = date("d/m/Y"); //DATA DO SISTEMA
        $time = date("h:i:s"); //HORA DO SISTEMA
        print "Data e hora do sistema: $data $time";
    ?>

    <!-- FORMULARIO  -->
    <form method="post" action="departament.php">
        <select name="departamentos">
        <option>Escolha um departamento</option>
        <option>Setor Administrativo</option>
        <option>Setor Financeiro</option>
        <option>Recursos Humanos</option>
        <option>Setor Comercial</option>
        <option>Setor Operacional</option>
        </select> 
        <input type="submit" value="Buscar">
    </form>
</body>
</html>