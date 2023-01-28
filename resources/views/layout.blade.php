<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <title>Layout bootstrap</title>
</head>
<body>
<header>
    <div class="jumbotron encabezado">
        <img src="img/icon/batman.png" class="iconobatman" alt="">
        <h1 class="display-4 textoencabezado">Bienvenido a narnia</h1>
        <p class="lead textoencabezado">Ayudenme estoy atrapado</p>
        @yield('paginaPrincipal')
      </div>
      
   
</header>
<main class="container">
    @yield('contenidoPrincipal')
</main>

<footer>
    <div class="jumbotron jumbotron-fluid piepagina">
        <div class="container">
          <h1 class="display-4">&copy; Quien soy?</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          @yield('numeroPagina')
        </div>
      </div>
    
</footer>
    
    
</body>
</html>