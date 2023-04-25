<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Votação</title>
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
                        <a class="navbar-brand" href="#">Votação</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                           
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
                <h1>Enquete</h1>
                <?php
                $voto = $_POST["voto"];

                #abre o arquivo para leitura e escrita
                if(!empty($voto)){
                    $arquivo = fopen('votos.txt', 'a+');

                #escreve o voto no arquivo 
                fwrite($arquivo, $voto . "\n");

                echo "Voto registrado com sucesso!";

                }else{
                    echo "Selecione uma opção de voto";
                }
                ?>
                
                <h2>Opções de voto</h2>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                        <label class="btn btn-secondary" for="option1">Opção 1</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-secondary" for="option2">Opção 2</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                        <label class="btn btn-secondary" for="option3">Opção 3</label>

                        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                        <label class="btn btn-secondary" for="option4">Opção 4</label>

                        <button class="btn btn-primary" type="submit" name="submit">Enviar Voto</button>
                    </form>
                
                <?php
                //verifica se a opção foi marcada
                    if(isset($_POST['options'])){
                        echo "<H1>" . $_POST['options'] . "</H1>";
                 }
                
                ?>

            </div>

            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>

</body>
</html>

