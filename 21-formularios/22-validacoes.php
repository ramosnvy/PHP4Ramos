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

// VALIDAÇÕES
//Funções (filter_input - Filter_var)
//FILTER_VALIDATE_INT
//FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_FLOAT
//FILTER_VALIDATE_IP
//FILTER_VALIDATE_URL

if(isset($_POST['enviar-formulario'])){
    $erros = [];
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
            $erros[] = "Idade precisa ser um número";
    }
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "O email precisa ser validado";
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
    <label for="idade"> Idade: </label>
    <input type="text" name="idade">
    <label for="email"> E-mail: </label>
    <input type="email" name="email">
    <button type="submit" name="enviar-formulario"> Enviar</button>
</form>

</body>
</html>