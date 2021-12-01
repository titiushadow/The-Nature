<?php
 
 if(isset($_POST['submit']))
 {

    include_once('config.php');

    $nome = $_POST['nome'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Fale_conosco = $_POST['Fale_conosco'];

    $result = mysqli_query($conexao, "INSERT INTO formulario (nome,Telefone,Email,Fale_conosco) VALUES ('$nome','$Telefone','$Email','$Fale_conosco')");
 }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>The Nature</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


  
    <main class="container">
        <h2>Envie sugestões de animais</h2>

       
            
        <form action="cadastro.php" method="POST">

            <div class="input-field">
                <input type="text" name="nome" id="nome"
                    placeholder="Seu nome">
                <div class="underline"></div>
            </div>

           

            <div class="input-field">
                <input type="Telefone" name="Telefone" id="Telefone"
                    placeholder="Telefone">
                <div class="underline"></div>
            </div>
            <br>
            
            <div class="input-field">
                <input type="E-mail" name="Email" id="Email"
                    placeholder="E-mail">
                <div class="underline">
                </div>
            </div>
            <br>
          
                <div class="div class="form-group></div>
                  <label for=""></label>
                  <textarea class="form-control" placeholder="Envie aqui a sugestão" name="Fale_conosco" id="Fale_conosco" rows="3"></textarea>
                
                </div>
                <div class="underline"></div>
            </div>
            </div>
            <br>
            <button name="submit" type="submit" class="btn btn-success">Enviar</button> 

        </form>

       
                      
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>