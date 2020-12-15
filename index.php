<?php
    require_once 'classes/Funcionario.class.php';

    $objFunc = new Funcionario();

    if(isset($_POST['email']) && empty($_POST['email']) || isset($_POST['senha']) && empty($_POST['senha'])):
       $mensagem = 'Atenção, verifique os campos !';
    elseif(isset($_POST['btLogar'])):
        $objFunc->logaFuncionario($_POST);
    endif;

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login Rouparia Carioca</title>

    <link href="assets/css/login.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Login Rouparia Carioca</title>



</head>
<body class="text-center">

<main class="form-signin">
    <form action="" method="post">
        <img class="mb-4" src="assets/img/logo-nova2-597x222.png" alt="logo" width="300" >

         <legend>Login</legend>

        <hr>

        <img id="img-2" src="assets/img/email.png">
        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">

            <br>

        <img id="img-2" src="assets/img/key.png">
        <input style="margin-bottom: 15px;" type="password" id="senha" name="senha" class="form-control" placeholder="Senha">

        <button style="margin-bottom: 10px;"  class="w-100 btn btn-lg btn-primary" name="btLogar" type="submit">Entrar</button>

        <?php if(isset($_GET["login"]) == "error"){ ?>
            <div class="alert alert-danger alert-block alert-aling" role="alert">Senha ou E-mail incorreto!</div>
        <?php } ?>

        <?php if(isset($mensagem)){ ?>
            <div class="alert alert-danger alert-block alert-aling" role="alert"><?= $mensagem ?></div>
        <?php }?>
        <p class="mt-5 mb-3 text-muted">&copy; <a style="text-decoration: none" href="https://www.roupariacarioca.com.br" target="_blank">www.roupariacarioca.com.br</a> - 2020</p>
    </form>
</main>

</body>
</html>
