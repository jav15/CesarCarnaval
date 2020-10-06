<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/icono3.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cesar Carnaval Comprar Libro</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
<style type="text/css">
  .bg-trans{

     background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  }
  #mdialTamanio{
      width: 90% !important;
    }
    .iframetama{
      width: 100%;
      height: 600px;
      background-color: #000;
    }
    .formulario{
		width: 50%;
    }
   .opacityform{
  background-color:rgb(192,192,192);
}
.text-left{
	text-align: left;

}
.colort{

	    color: #fed136 !important; 

}
.hr2 {
  background-color: blue;
}
</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a href="index.php" class="navbar-brand js-scroll-trigger " href="index.php"><img src="img/logo.png" class="img-fluid" width="260px" height="50px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="casa museo.html">Casa Museo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="index.php#portfolio">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="documentales.html">Documentales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="index.php#about">Folletos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="index.php#team">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#contact">Contáctame</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  
<?php
if (isset($_POST['v_codigo'])) {
$codigo2 = $_POST['v_codigo'];
if ($codigo2=="cmupd") {
	$nombre2="Cesar Martínez Un Personaje";
	$v_image="img/portfolio/01-thumbnail.jpg";
	$v_autor="Leidy Llach Cepeda";
}elseif ($codigo2=="hdmc") {
	$nombre2="Historia Del Disfraz La Marichucha";
	$v_image="img/portfolio/02-thumbnail.jpg";
	$v_autor="Cesar Martínez Lara - Leidy Llach";
}elseif ($codigo2=="lcecdb") {
	$nombre2="La Cumbia en el Carnaval de Barranquilla";
	$v_image="img/portfolio/03-thumbnail.jpg";
	$v_autor="Leidy Llach - Cesar Martínez Lara";
}elseif ($codigo2=="csoc") {
	$nombre2="Libro Cátedra Suroccidente";
	$v_image="img/portfolio/04-thumbnail.jpg";
	$v_autor="Cesar Martínez Lara";
}elseif ($codigo2=="jsc") {
	$nombre2="Historia de Joselito Carnaval";
	$v_image="img/portfolio/05-thumbnail.jpg";
	$v_autor="Cesar Martínez Lara";
}elseif ($codigo2=="dzdr") {
	$nombre2="Danzas de Relación y Especiales";
	$v_image="img/portfolio/06-thumbnail.jpg";
	$v_autor="Cesar Martínez Lara - Melissa Martinez Castillo";
}elseif ($codigo2=="cnd") {
  $nombre2="Camino a las Nuevas Feminidades";
  $v_image="img/portfolio/07-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara";}
  elseif ($codigo2=="ddsc") {
  $nombre2="Historia Del Disfraz de El Descabezado";
  $v_image="img/portfolio/08-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara - Jorge Martinez Lara";}
  elseif ($codigo2=="ltr") {
  $nombre2="Líderes de la Tradición en el Carnaval de Barranquilla";
  $v_image="img/portfolio/09-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara - Jorge Martinez Lara";}
  elseif ($codigo2=="dcn") {
  $nombre2="Historia de las Danzas de Congo en el Carnaval de Barranquilla";
  $v_image="img/portfolio/10-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara";}
  elseif ($codigo2=="mv") {
  $nombre2="La Música Vallenta y sus Juglares";
  $v_image="img/portfolio/11-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara";}
    elseif ($codigo2=="ctb") {
  $nombre2="Cátedra Carnaval de Barranquilla";
  $v_image="img/portfolio/12-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara - Mary Alsina Quintero";}
 elseif ($codigo2=="rmb") {
  $nombre2="Historia Del Rey Momo";
  $v_image="img/portfolio/13-thumbnail.jpg";
  $v_autor="Cesar Martínez Lara";}
elseif ($codigo2=="dzc") {
  $nombre2="Danzas, Comparsas y Disfrazes";
  $v_image="img/portfolio/14-thumbnail.jpg";
  $v_autor="Cesar Martínez - Eva Herrera - Clemente Mendoza";}
  elseif ($codigo2=="ids") {
  $nombre2="La Identidad Sexual en el Ser Humano";
  $v_image="img/portfolio/15-thumbnail.jpg";
  $v_autor="Cesar Martínez ";}
}else{
  echo "No hay Variable";
  header('Location: index.php');
}
?>
  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Adquiere tu Libro</h2>
      
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
        
        </div>
       
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link">
            <div class="">
            
            </div>
            <img class="img-fluid" src=<?php echo $v_image ?> >
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $nombre2; ?></h4>
            <p class="text-muted"><?php echo $v_autor; ?></p>
           <hr class="hr2">
           <a href="https://api.whatsapp.com/send?phone=+573016398326&text=Cesar Carnaval, quiero adquirir un libro!">
<button class="btn  btn-success">Comprar libro <i class="fab fa-whatsapp"></i></button></a>

          </div>

        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
        
        </div>
       
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contáctame</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Tu Nombre*" required="required" data-validation-required-message="Por favor escribe tu nombre.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Tu Email *" required="required" data-validation-required-message="Por favor escribe tu email.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Tu teléfono *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Tu Mensaje *" required="required" data-validation-required-message="Por favor escribe tu Mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
               <div class="iframetama">
                 <iframe class="iframetama" src="magazine/slider.html" allowfullscreen></iframe>
               <a href="compra.html">
                <button class="btn btn-primary"  type="button">
                  <i class="fab fa-readme"></i>
                  Seguir leyendo</button> </a>
          </div>
         </div>
    </div>
  </div>
  <div class="modal fade" id="elIDdelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
               <div class="iframetama">
                 <iframe class="iframetama" src="libros/marichucha/slider.html" allowfullscreen></iframe>
               
                <button class="btn btn-primary"  type="button">
                  <i class="fab fa-readme"></i>
                  Seguir leyendo</button> 
          </div>
         </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
               <div class="iframetama">
                 <iframe class="iframetama" src="libros/la_cumbia_en_el_carnaval_de_barranquilla/slider.html" allowfullscreen></iframe>
               
                <button class="btn btn-primary"  type="button">
                  <i class="fab fa-readme"></i>
                  Seguir leyendo</button> 
          </div>
         </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
               <div class="iframetama">
                 <iframe class="iframetama" src="libros/catedra_suroccidente/slider.html" allowfullscreen></iframe>
               
                <button class="btn btn-primary"  type="button">
                  <i class="fab fa-readme"></i>
                  Seguir leyendo</button> 
          </div>
         </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
               <div class="iframetama">
                 <iframe class="iframetama" src="libros/joselito_carnaval/slider.html" allowfullscreen></iframe>
               
                <button class="btn btn-primary"  type="button">
                  <i class="fab fa-readme"></i>
                  Seguir leyendo</button> 
          </div>
         </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
               <div class="iframetama">
                 <iframe class="iframetama" src="libros/danzas_de_relacion/slider.html" allowfullscreen></iframe>
               
                <button class="btn btn-primary"  type="button">
                  <i class="fab fa-readme"></i>
                  Seguir leyendo</button> 
          </div>
         </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
