<?php
    //verifica se o forulario foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        //obtem o nome do usuario e a senha digitados
        $nomeUsuario = $_POST['nomeUsuario'];
        $senha = $_POST['senha'];

    if ($nomeUsuario === 'leticia' && $senha === '12345678'){
        echo "Login bem sucedido! Bem vindo $nomeUsuario";
    }else{ 
        echo "Usuario ou senha incorretos";
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</head>


<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <div class="col">
                <nav class="navbar bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Pagina de login</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <a class="nav-link" href="#">Features</a>
                                <a class="nav-link" href="#">Pricing</a>
                                <a class="nav-link disabled">Disabled</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-1">
                &nbsp;
            </div>
       </div>
    </div>


        <div class="container text-center">
            <div class="row">

                <div class="col-1">
                    &nbsp;
                </div>


                <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                            <label for="floatingInputGroup1">Username</label>
                        </div>
                </div>


                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                    </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
                        </div>
                            <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                    Must be 8-20 characters long.
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                </div>

                <div class="col-1">
                &nbsp;
                </div>

           </div>
        </div>


</body>
</html>