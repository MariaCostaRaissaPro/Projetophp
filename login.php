
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
  <title>Frutas - SR Alimentos</title>
  <style>
	 main {background-image: url("img/logosc.jpg");}
    </style>
</head>



<html>
<head>
    <title>Login</title>
</head>
<header>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" style="background-color: #198754;">
        <a class="navbar-brand" href="index.php" style="color:white;">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color:white;">
                        Minha conta
                    </a>
                  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrodeimagem.php"style="color:white;">Cadastro de imagem</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="consultaimagem.php"style="color:white;">Consulta de imagem</a>
                </li>
                

                 <li class="nav-item">
                    <a class="nav-link" href="cadastro.php"style="color:white;">Cadastro</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="login.php"style="color:white;">Login</a>
                </li>
               
            </ul>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div> 
</nav>

</header>
<main class="bd-content p-5" id="content" role="main">
   
    <div style="text-align:center">
        <h2  style="text-align:center" >Login</h2>
        <form method="post" action="autenticar.php" style="border: 1px solid black; width: 200px; margin: auto;">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required><br><br>
            
            <input type="submit" value="Login">
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
   
</main>

<footer class="bg-success text-light py-4">

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h3>Informações de Contato</h3>
      <p><i class="bi bi-geo-alt"></i> Rua Dona Maria Julia Barbosa de Lima , 5 - Arceburgo-MG</p>
      <p><i class="bi bi-telephone"></i> (35) 99159-7710</p>
      
    </div>
    
    <div class="col-md-4">
      <h3>Siga-nos na Rede Social</h3>
      <a href="#" class="bi bi-instagram me-3"></a>
      <a style="color: white" href="https://instagram.com/sralimentos_?igshid=MzRIODBiNWFIZA==" class="bi bi-instagram">@sralimentos_</a>
    </div>

  </div>
</div>
</footer>


</html>


