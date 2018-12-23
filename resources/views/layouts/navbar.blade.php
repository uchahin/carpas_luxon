<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estyles.css') }}" />

    <title>Luxon</title>

  </head>

  <body data-spy="scroll" data-target="#navbar" data-offset="76">
           <!-- HEADER -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark .navbar-custom sticky-top">
      <a class="navbar-brand" href="#">
        <img src= "{{ asset('css/images/luxonlogo.png') }}" alt="Luxon"> 
          Luxon
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="#comunicate" class="btn btn-outline-light" data-toggle="modal" data-target="#modalComunicate">Contactar</a>
            <!--  <a class="nav-link text-jal" href="#">Contactanos</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicios">Carpas estructurales</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Entarimados</a>
          </li>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pistas de baile</a>
          </li>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Estrados</a>
          </li>
        </ul>
      </div>
  </nav>
  <!-- HEADER -->

  <!-- COUROSEL -->
    <main id="main">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause = "false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('css/images/carpa1.png') }}" alt="carpa1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('css/images/carpa2.jpg') }}" alt="carpa2">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('css/images/carpa3.png') }}" alt="carpa3">
          </div>
          <div class="overlay">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-md-right">
                  <h1> Carpas Luxon </h1>
                  <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla</p>
                <a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#modalComunicate">Contactar</a>
                </div>  
          </div>
        </div>
      </div>
    </main>
  <!-- COUROSEL -->


   <!-- CARDS -->


<section id="servicios" class="mt-4 mb-4">
    <div class="contai">
      <div class="row">
        <div class="col  text-center text-uppercase">
          <small>Conoce nuestros</small>
            <h2>Servicios</h2>
              <div class="row">
                <div class="col-md-4 mb-4">                
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('css/images/carpasestructurales.jpg') }}" alt="Carpas estructurales">
                    <div class="card-body">
                      <h5 class="card-title">Carpas estructurales</h5>
                      <p class="card-text">orem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 mb-4 ">                
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('css/images/Entarimados.jpg') }}" alt="Entarimados">
                    <div class="card-body">
                      <h5 class="card-title">Entarimados</h5>
                      <p class="card-text">orem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 mb-4">                
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('css/images/pistas.jpg') }}" alt="Pistas de baile">
                    <div class="card-body">
                      <h5 class="card-title">Pistas de baile</h5>
                      <p class="card-text">orem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 mb-4">                
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('css/images/Estrados.jpg') }}" alt="Estrados">
                    <div class="card-body">
                      <h5 class="card-title">Estrados</h5>
                      <p class="card-text">orem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">                
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('css/images/planeador.jpg') }}" alt="Planeador">
                    <div class="card-body">
                      <h5 class="card-title">Planeador de eventos</h5>
                      <p class="card-text">orem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 mb-4">                
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('css/images/Banquetes.jpg') }}" alt="Banquetes">
                    <div class="card-body">
                      <h5 class="card-title">Banquetes</h5>
                      <p class="card-text">orem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

   <!-- CARDS -->

    <!-- FORM -->

    <section id="comunicate" class="pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col text-uppercase text-center">
            <small>Comunicate con</small>
              <h2>NOSOTROS</h2> 
          </div> 
        </div>                       
          <div class="row">
            <div class="col text-center">
              Comunicate con nosotros para aclararte cualquier duda.
            </div>
          </div>
          <div class="row">
            <div class="col col-md-10 offset-md-1 col-lg-8 col-md-2 offset-lg-2 pt-2">
              <form>
                <div class="form-row">
                  <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" placeholder="Nombre">
                  </div>
                  <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" placeholder="Apellido">
                  </div>
                </div>
                  <div class="form-row">
                    <div class="form-group col">
                      <textarea name="text" class="form-control form-control-lg" placeholder="No dudes en escribirnos"></textarea>
                      <small class="form-text text-muted text-center ">
                        No olvides contactarnos.
                      </small>
                    </div>
                  </div>
              <div class="form-row">
                 <div class="col">
                 <button type="button " class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="top" title="Envia tus comentarios">Enviar</button>
                 </div>
              </div>
              </form>
             </div>          
     </section>


    <!-- FORM -->
   

    <!-- Modal -->
          <div class="modal fade" id="modalComunicate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Contactanos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   <form>
                     <div class="form-row">
                      <div class="form-group col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Nombre">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Apellido">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Correo electronico">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Numero de telefono">
                      </div>
                    </div>
                      <div class="form-row">
                        <div class="form-group col">
                          <textarea name="text" class="form-control form-control-lg" placeholder="¿Cual es tu duda?"></textarea>
                          <small class="form-text text-muted text-center ">
                            Carpas Luxon, Av. Miguel Hidalgo #349 Col. Tlacote el Bajo, 76230 Querétaro
                          </small>
                           <small class="form-text text-muted text-center ">
                            Celular 442 338 3239
                          </small>
                        </div>
                      </div>
                    </div>
                  </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </div>
          </div>

    <!-- Modal -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="{{ asset('resources/js/index.js') }}"></script>
  </body>
</html>