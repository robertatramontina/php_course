<!DOCTYPE html>
<html>
<head>
  <title> | PROGRAMADORES | </title>
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
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Ficha 3 - Exercício 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="home.php#">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="clientes.php">Clientes</a>
        </li>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="clientes_programadores.php">Clientes-Programadores</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    </header>
    <section>
    <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">ID Cliente</th>
      <th scope="col">Nome Cliente</th>
      <th scope="col">E-mail Cliente</th>
      <th scope="col">Profissão Empregado</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //ligar À base de dados clientes_php
    $ligacao = new mysqli('localhost', 'root', '', 'clientes_php');

    //criar a query à BD
    //nesta situação vamos listar tudo (*) empregado
    $consulta = $ligacao->prepare("SELECT * from clientes where profissao_clientes = 'Programador'");

    //executar a consulta à BD
    $consulta->execute();

    //Obter o resultado da consulta à BD
    $resultado = $consulta->get_result();

    //se o resultado obtiver resposta positiva da BD (recebe linhas com informação)
    if($resultado->num_rows > 0)
    {
        echo "<tr>";
        while($linha = $resultado->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$linha['id_clientes']."</td>
            <td>".$linha['nome_clientes']."</td>
            <td>".$linha['email_clientes']."</td>
            <td>".$linha['profissao_clientes']."</td>";
            echo "</tr>";
        }
    }
    else
    {
        echo "Não existe nada para listar.";
    }

    ?>

  </tbody>
</table>
    </section>

           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>                
</body>
</html>