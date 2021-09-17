<!DOCTYPE html>
<html lang="pt-br">


<head>   
   
  <meta charset="UTF-8">  
   
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  
  <title>Farmácia do Zé</title>
</head>

<body>

  <div class="container text-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">FARMAZE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url('../Home')?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PDV</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Remédios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?php echo base_url('../RemedioController/inserirRemedio')?>">Cadastrar</a></li>
                <li><a class="dropdown-item" href="#">Consultar/Alterar/Exclui</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                <li><a class="dropdown-item" href="#">Consultar/Alterar/Exclui</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuários
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?php echo base_url('../UsuarioController/inserirUsuario')?>">Cadastrar</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('../UsuarioController/visualizarTodosUsuarios')?>">Listar Todos</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('../UsuarioController/visualizarCodUsuario')?>">Pesquisar por Código</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>