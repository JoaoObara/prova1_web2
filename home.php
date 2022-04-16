<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <title>Home Page</title>
</head>
<body>
    
    <!-- IMAGEM QUE REPRESENTRA A EMPRESA -->
    <container class="gridlogo"> 
        <img src="image/logo.png" width="90%" height="95%">
    </container>
    
    <container class="gridimg">
        <img src="image/empresa.jpg" width="95%" height="100%">   
    </container>
    
    
    <!-- SOMENTE PARA EVITAR ERROS NO GRID -->
    <nav class="grid"> 
        <ul>  <b>Nevagação:</b>
            <li><a href="index.php"> Sair </a></li>
        </ul> 
    </nav>


    <main class="grid">
        <!-- TITULO -->
    <H1 class="titulo" > Wiki de Departamentos</H1>

        <!-- PARAGRAFO COM A FUNCAO DA EMPRESA -->

        <p>
        <b>Função da empresa:</b>
        <br />&nbsp A empresa tem como função ajudar seus clientes a lidar com suas finanças
         e os aconselhar em seus investimentos. Também faz parte desse serviço informar sobre 
         as tendências econômicas, as mudanças na legislação e os riscos associados.</p>
         <br /> <br />
            
        <!-- FORMULARIO  -->
        <form method="post" action="departament.php">
            <b> Escolha um departamento </b>
            <select name="departamentos">     
                <option>Departamento: </option>
                <option>Setor Administrativo</option>
                <option>Setor Financeiro</option>
                <option>Recursos Humanos</option>
                <option>Setor Comercial</option>
                <option>Setor Operacional</option>
            </select> 
            <input type="submit" value="Buscar">
        </form>
    </main>


    <!-- SOMENTE PARA EVITAR ERROS NO GRID -->
    <container class="gridx"> </container> 


    <footer class="grid">
    <!-- DATA E HORA  -->
    <?php
        $data = date("d/m/Y"); //DATA DO SISTEMA
        $time = date("h:i:s"); //HORA DO SISTEMA
        print "<h3>Data e hora de acesso ao sistema: $data $time </h3>";?>
    </footer>

</body>
</html>