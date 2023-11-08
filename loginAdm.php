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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>LOGIN ADM - Sr Alimentos</title>
  <style>
    body {
      background-image: url("imglogo/logosc.jpg");
      background-size: cover;
    }

    .conteudo
    {
      min-height : calc(100vh - 180px);
    }

    footer
    {
      height: 180px;
    }

    #cadastro {
        text-align: center;
        border: 4px solid white ;
        color: white;
        font-size: 100px;
        font-weight: bold;
        
    }
    .cadastro {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }




  </style>
</head>

<body>
  <?php include 'menuadm2.php'; ?>


  <?php include 'conexao.php'; ?>
  <?php
    session_start();
   
    if(empty($_POST["email"]) || empty($_POST["senha"]))  
    {  
         $message = '<label>Sem email e senha</label>';  
    }  
    else  
    {  


          $query = "SELECT * FROM adm WHERE email = :email AND senha = :senha";  
          $statement = $conn->prepare($query);  
          $statement->execute(  
              array(  
                    'email'     =>     $_POST["email"],  
                    'senha'     =>     $_POST["senha"]  
              )  
          );  
          $count = $statement->rowCount();  
          echo $count;
          if($count > 0)  
          {  
            header("Location: indexAdm.php");
          }  
          else  
          {  
            echo "ADM não encontrado";
          }  
    }
?>
</body>
</html>

