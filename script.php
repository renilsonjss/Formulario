<?php

    $nome = $_REQUEST["nome"];
    $telefone = $_REQUEST["telefone"];

?>

<?php

    session_start();

    $_SESSION["nome"] = $nome;
    $_SESSION["telefone"] = $telefone;

    echo "Variáveis de sessão definidas";

?>

<html>
    <body>

        <a href="script_2.php"><br>Visualizar variáveis</a>

    </body>
</html>