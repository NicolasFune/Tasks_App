<?php

    if(isset($_GET['login'])){
        echo '
        <div id="login-alert"class="alert alert-danger alert-dismissible fade show" role="alert">

            <strong>E-mail e/ou Senha incorretos</strong>
            
            <button id="login-btn-alert" type="button" class="btn btn-close" data-dismiss="alert" aria-label="Close">
            
            </button>
        </div>
        ';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/tasks.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Tasks App - Login</title>
</head>
<body class="d-flex text-white justify-content-between flex-column  " style="background-image: linear-gradient( #65a8f5 , #2d80e2  ); background-repeat: no-repeat; height: 100vh;">
    
    <div class="container flex-column  pt-5 mt-5 h-75 align-items-center justify-content-center mw-75" >

        <h1 class="text-white text-center mb-5" style="font-family: 'login-medium';">Sing In</h1>

        <form class="text-white" action="http://localhost/Tasks_App/php/login.php" method="post">
            <div class="form-group ">
                <label for="email-value" style="font-family: 'login-bold'; font-size: .8rem;">E-mail</label>
                <div class="input-group shadow ">
                    <div class="input-group-prepend ">
                      <span class="input-group-text text-white" style="background-color: #65a8f5 ;border: transparent; border-radius: 5px 0 0 5px;"><i class="bi bi-envelope-fill"></i></span>
                    </div>
                    <input type="email" class="form-control text-white" name="email-value" aria-describedby="emailHelp" placeholder="Enter email" style="background-color: #65a8f5 ;border: transparent; font-family: 'login-medium';">
                </div>
                
            </div>
            <div class="form-group mt-4">
                <label for="password-value"style="font-family: 'login-bold';font-size: .8rem;">Password</label>
                <div class="input-group shadow " >
                    <div class="input-group-prepend">
                      <span class="input-group-text text-white" style="background-color: #65a8f5 ;border: transparent;border-radius: 5px 0 0 5px;"><i class="bi bi-key-fill"></i></span>
                    </div>
                    <input type="password" class="form-control text-white" name="password-value" placeholder="Enter Password" style="background-color: #65a8f5 ;border: transparent;font-family: 'login-medium';">
                </div>
                
            </div>

            <div class="container w-100 d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-light w-50 m-5 shadow" role="button" aria-label="Entrar na Conta" style="border-radius: 100px;color: #2d80e2 ; font-family: 'login-medium';"> Entrar</button>
            </div>
            
        </form>
    </div>
    <div class="container d-flex justify-content-center align-items-end h-25 mb-5">
        <h5 class=" d-inline-block h-25 p-0 m-0 pt-0" style="font-family: 'login-medium'; font-size: .8rem; line-height: 1rem;">Ainda não tem uma conta?</h5>
        <a class="nav-link text-white d-inline-block h-25 py-0  " href="php/register.php" style="font-family: 'login-bold';font-size: .9rem; line-height: 1rem;">Registre-se</a>
    </div>
    
    <script src="bootstrap-5/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>
</html>