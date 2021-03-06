<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/grid.css">

    <title> Departamento</title>
</head>

<body>

    <!-- LOGO -->
    <container class="gridlogo">
        <img src="image/logo.png" width="90%" height="95%">
    </container>
    <!-- IMAGEM QUE REPRESENTRA A EMPRESA -->
    <container class="gridimg">
        <img src="image/empresa.jpg" width="95%" height="100%">
    </container>


    <!-- VOLTAR A PAGINA INICIAL -->
    <nav class="grid"> 
        <ul>  <b>Navegação:</b>
            <li><a href="home.php"> Paginal Inicial </a> </li>
            <li><a href="index.php"> Sair </a></li>
        </ul> 
    </nav>


    <!-- TRATAMENTO DE ESCOLHA -->
    <main class="grid">
        <!-- TITULO -->
        <H1 class="titulo"> Wiki de Departamentos</H1>

        <?php
        $escolha = $_GET["departamentos"];

        switch ($escolha) {
            case "Setor Administrativo":
                print "<h1> $escolha </h1>
                <p> &nbsp &nbsp &nbsp O Setor Administrativo responde ao planejamento estratégico da empresa, o que inclui a atribuição de tarefas e,
                 também, a análise estratégica de dados. Com isso, torna-se uma área fundamental para a tomada de decisão focada no
                  crescimento sustentável e coletivo da organização. Não à toa, é o setor que mais se assemelha às funções do coração: 
                  ele bombeia todas as tarefas de maneira coordenada
                 para que os objetivos sejam atingidos continuamente. 
                 </p>";
                break;
            case "Setor Financeiro":
                print "<h1> $escolha </h1>
                <p> &nbsp &nbsp &nbsp O financeiro é uma das principais áreas de uma empresa — e, talvez, uma que tem as maiores cobranças, literalmente.
                 Geralmente, é um setor complementar ou acoplado ao administrativo, já que todas as decisões estão profundamente alinhadas
                  à necessidade de capital para o investimento.
                Além disso, o financeiro cuida da gestão do fluxo de caixa e da saúde financeira da empresa. Entre outras atividades, como:
                <br>•	gestão de recursos e contas;
                <br>•	controle da tesouraria;
                <br>•	investimentos e riscos;
                <br>•	gestão de contas e impostos;
                <br>•	pagamentos;
                <br>•	planejamento financeiro. <br>
                Vale destacar ainda que a apresentação dos resultados está por conta desse setor. O que apenas reforça a importância em contar
                 com uma equipe altamente qualificada para que o 
                 </p>";
                break;
            case "Recursos Humanos":
                print "<h1> $escolha </h1>
                <p> &nbsp &nbsp &nbsp O setor de Recursos Humanos é um dos setores chave da empresa. Afinal de contas, o departamento tem adquirido mais e mais 
                relevância na tomada de decisões-chave e estratégicas. Em parte, porque o valor da gestão de pessoas tem mostrado o quanto 
                isso influencia, diretamente, na melhora coletiva da organização e de uma série de índices, como:
                <br>•	produtividade;
                <br>•	motivação;
                <br>•	engajamento;
                <br>•	absenteísmo;
                <br>•	turnover.<br>
                Entre outros dados que contribuem para a identificação de atividades que podem resolver conflitos e prevenir eventuais problemas 
                sem falar, é claro, nas responsabilidades tradicionais do departamento, como a admissão e demissão de funcionários, a seleção e 
                o recrutamento e a atenção às exigências e leis trabalhistas.
                Vale destacar também que o RH está cada vez mais alinhado a questões extra corporativas visando o bem-estar dos profissionais.
                </p>";
                break;
            case "Setor Comercial":
                print "<h1> $escolha </h1>
                <p> &nbsp &nbsp &nbsp É uma das principais áreas da nossa empresa porque, além de cuidar a relação com o cliente e do processo de vendas, o 
                marketing costuma fazer parte do departamento — ainda que indiretamente. O enfoque do setor é a realização dos clientes e 
                dos prospectos. Trata-se de um departamento com ação de destaque, já que planeja ações externas, mas preocupa-se com o que 
                ocorre internamente também. O que permite ações em conjunto com o próprio RH.
                Além disso, há a comunicação da empresa. Embora não faça parte do setor comercial, atua de maneira similar ao que citamos 
                do marketing — segue anexada indiretamente, já que as suas ações são focadas na resposta do consumidor, para as ações 
                externas e dos colaboradores para as campanhas internas.
                </p>";
                break;
            case "Setor Operacional":
                print "<h1> $escolha </h1>
                <p> &nbsp &nbsp &nbsp Para muitas organizações — em especial, no setor industrial —, o setor operacional é uma das principais áreas de uma 
                empresa. Afinal, é o departamento que cria forma e volume para organizações que comercializam produtos para os clientes.
                Isso engloba também as gestões de estoque, logística e maquinário. São, portanto, muitas vertentes que demandam profissionais 
                qualificados para que o fluxo de trabalho transcorra sem imprevistos.
                </p>";
                break;
            default:
                header("Location: home.php");
                break;
        }
        ?>
    </main>

    <!-- SOMENTE PARA EVITAR ERROS NO GRID -->
    <container class="gridx"> </container>


    <!-- DATA E HORA  -->
    <footer class="grid">
        <?php
        $data = date("d/m/Y"); //DATA DO SISTEMA
        $time = date("h:i:s"); //HORA DO SISTEMA
        print "<h3>Data e hora de acesso ao sistema: $data $time </h3>"; ?>
    </footer>
</body>

</html>