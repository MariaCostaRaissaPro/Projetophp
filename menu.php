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
        <a class="navbar-brand" href="index.php" style="color:white; font-weight: bold;">INÍCIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"style="color:white; font-weight: bold;">
                        MINHA CONTA
                    </a>
                    <ul class="dropdown-menu"  style="background-color: #198754;">
                        <li><a class="dropdown-item" href="formCliente.php"style="color:white; font-weight: bold; background-color: #198754;" >CLIENTE</a></li>
                        <li>
                            <hr class="dropdown-divider" >
                        </li>
                        
                        <li><a class="dropdown-item" href="formAdm.php"style="color:white; font-weight: bold; background-color: #198754;">ADM</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color:white; font-weight: bold;">
                        CATEGORIAS
                    </a>
                    <ul class="dropdown-menu"  style="background-color: #198754;">
                        <li><a class="dropdown-item" href="consultafruta.php"  style="background-color: #198754; color:white; font-weight: bold;" >FRUTAS</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="consultaverdura.php"  style="background-color: #198754; color:white; font-weight: bold;">VERDURAS</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="consultalegumes.php"  style="background-color: #198754; color:white; font-weight: bold;">LEGUMES</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultaimagemfiltro.php" style="color:white; font-weight: bold;">BUSCAR PRODUTOS</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="quemsomos.php" style="color:white; font-weight: bold;">QUEM SOMOS?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajuda.php" style="color:white; font-weight: bold;">AJUDA?</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="formUsu.php"style="color:white; font-weight: bold;">CADASTRE-SE</a>
                </li>

            </ul>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="border:black;">
     
            </form>
        </div>
    </div> 
</nav>
