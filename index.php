<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="css/estilo.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg" >
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="logo.jpg" alt="Logo" width="100" height="90" >
    MULTITRABAJOS HN
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ACERCA DE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICIOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">HOGAR</a></li>
            <li><a class="dropdown-item" href="#">BELLEZA</a></li>
            <li><a class="dropdown-item" href="#">TECNICOS</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACTOS</a>
        </li>
        <form class="d-flex" >
        <input class="form-control me-2" type="search" placeholder="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form>
      
      </ul>
      <span class="material-symbols-outlined" class="icon"> person </span>
      <i class="bi bi-cart-plus-fill"></i>
    </div>
  </div>
</nav>

<!--CARRUSEL-->
<div class="container" style="margin-bottom: 1%">
     <div class="borde">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="true"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
              <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="3"
              aria-label="Slide 4"
            ></button>
            <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/jar.jpg" class="d-block w-100 " alt="imagen" width="50" />
              </div>
              <div class="carousel-item">
                <img src="img/refri.jpg" class="d-block w-100 " alt="imagen" width="50" />
              </div>
              <div class="carousel-item">
                <img src="img/elec.jpg" class="d-block w-100 " alt="imagen" width="50" />
              </div>
              
              
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
  <!--lo mas vendido-->
 <section>
   <div class="container" style="margin-bottom: 1%">
     <div class="borde">
        <H2 class="centro"> NUESTROS SERVICIOS MAS SOLICITADOS</H2>
        <div class="col-12 col-md-12 col-lg-9">
            <div class="row">
              <div
                class="card posimagenes col-6 col-sm-6 col-md-3 col-lg-3"
                style="width: 14rem; height: 20rem"
              >
                <img src="img/jar2.jpg" class="card-img-top" alt="" />
                <div class="card-body">
                  <h5 class="card-title">Titulo 1</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
              <div
                class="card posimagenes col-6 col-sm-6 col-md-3 col-lg-3"
                style="width: 14rem; height: 25rem"
              >
                <img src="img/refri.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Titulo 1</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
             
              <div
                class="card posimagenes col-6 col-sm-6 col-md-3 col-lg-3"
                style="width: 14rem; height: 25rem"
              >
                <img src="img/elec.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Titulo 1</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
</section>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
