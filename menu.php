<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <title>SR Alimentos ADM</title>
</head>


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
                    <ul class="dropdown-menu"  style="background-color: #198754;">
                        <li><a class="dropdown-item" href="formCliente.php" >Cliente</a></li>
                        <li>
                            <hr class="dropdown-divider" >
                        </li>
                        
                        <li><a class="dropdown-item" href="formAdm.php">ADM</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color:white;">
                        Categorias
                    </a>
                    <ul class="dropdown-menu"  style="background-color: #198754;">
                        <li><a class="dropdown-item" href="frutas.php" >Frutas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="verduras.php">Verduras</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="legumes.php">Legumes</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultaimagemfiltro.php"style="color:white;">Buscar produto</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="quemsomos.php"style="color:white;">Quem somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajuda.php"style="color:white;">Ajuda?</a>
                </li>
            </ul>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="border:black;">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div> 
</nav>
