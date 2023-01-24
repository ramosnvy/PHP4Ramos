<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php

// Sanitização
//Funções (filter_input - Filter_var)
//FILTER_SANITIZE_SPECIAL_CHARS
//FILTER_SANITIZE_INT
//FILTER_SANITIZE_EMAIL
//FILTER_SANITIZE_URL


if(isset($_POST['enviar-formulario'])){

    $erros = [];


    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
    if(filter_var(!$idade, FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }

    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    if(filter_var(!$email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email inválido";
    }

    }

    if(!empty($erros)){
        foreach ($erros as $erro){
            echo "<li> $erro </li>";
        }
    } else {
        echo "Cadastrado com sucesso";
    }
}

?>


<form method="post" action="<?php  echo $_SERVER['PHP_SELF']; ?>">
    <label for="nome"> Nome: </label>
    <input type="text" name="nome">
    <label for="idade"> Idade: </label>
    <input type="text" name="idade">
    <label for="email"> E-mail: </label>
    <input type="email" name="email">
    <button type="submit" name="enviar-formulario"> Enviar</button>
</form>

</body>
</html>