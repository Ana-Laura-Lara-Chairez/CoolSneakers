<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ERROR</title>

  <link rel="icon" href="img/logo.png" type="image/png">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

  <!--Box icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/error.css">


</head>

<body>
  <section>
    <nav class="nav">
      <div class="nav__center container">
        <div class="nav__logo">
          <a href="index.php"><img class="logotipo" src="img/logo.png" alt=""></a>
        </div>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a  href="index.php">Inicio</a></li>
          <li><a href="productos.html">Productos</a></li>
          <li><a href="php/contacto.php">Contacto</a></li>
          <li><a href="php/registrar.php">Registrar</a></li>
          <li><a href="php/login.php">Iniciar sesión</a></li>
          <li><a href="ayuda.html">Ayuda</a></li>
        </ul>

        </input>
      </div>

    </nav>
  </section>

  <div class="container-error">
    <img src="img/img1.svg" alt="">
    <h1>La página que ha solicitado no se encuentra disponible</h1>
    <div class="boton">
      <a href="index.html"><button>Volver atras</button></a>
    </div>
  </div>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Cool Sneakers</h4>
          <li>Gracias por tu visita. Te esperamos pronto!</li>
        </div>
        <div class="footer-col">
          <h4>Visitar sección</h4>
          <a href="productos.html">Productos</a></li>
          <a href="php/registrar.php">Registrar</a></li>
          <a href="php/login.php">Iniciar sesión</a></li>
        </div>
        <div class="footer-col">
          <h4>¿Necesitas ayuda?</h4>
          <a href="ayuda.html">Ayuda</a></li>
        </div>
        <div class="footer-col">
          <h4>Contáctate con nosotros</h4>
          <li>Exprésanos tus sugerencias y comentarios.
            <br><br>
            <a href="php/contacto.php">Contacto</a>
          </li>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>