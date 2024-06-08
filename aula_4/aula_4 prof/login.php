<!DOCTYPE html>
<html>
<head>
    <title> | Aula IV | </title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>.btn-color{
    background-color: #0e1c36;
    color: #fff;
    
  }

  .profile-image-pic{
    height: 200px;
    width: 200px;
    object-fit: cover;
  }



  .cardbody-color{
    background-color: #ebf2fa;
  }

  a{
    text-decoration: none;
  }


  </style>
</head>
<body>
<?php
    $erro = "";

    if(isset($_POST['login']))
    {
        //$erro = "Carreguei no botão";
        if(empty($_POST['utilizador']) || empty($_POST['password']))
        {
            $erro = "*Os campos são de preenchimento obrigatório!";
        }
        else
        {
            //$erro = "OK";
            if($_POST['password'] == 12345)
            {
                //$erro = "OK";
                header("Location: home.php");
            }
            else
            {
                $erro = "*Utilizador e/ou password incorretos!";
            }
        }
    }

?>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Registar Entrada</h2>
        <div class="text-center mb-5 text-dark">PHP 2024</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="text-center">
              <img src="imagens/cinel.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="utilizador" name="utilizador">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="login">Validar Dados</button></div>
            <div class="text-center"> 
                    <span> <?php echo $erro; ?> </span>
            </div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark"><a href="#" class="text-dark fw-bold"> CRIAR CONTA</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>                
</body>
</html>