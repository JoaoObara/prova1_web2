<?php
    // CARREANDO DADOS DO FORMULARIO
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if ($nome == 'fernando' and $senha == 'espiral22'){
       header('Location: home.php');
       exit();
    } else {
        header('Location: index.php');
        exit();
    }
?>