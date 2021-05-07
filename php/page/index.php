<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="../../css/style.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/animate.css"/>
  <link rel="icon" href="../../img/valorant-logo.png"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <?php include '../content/navbar.php'; ?>

  <div class="parallax-container">
    <div class="parallax"><img src="../../img/valorant-parallax-1.jpg"></div>
  </div>


  <div class="row mb0" id="jeu">
    <div class="col s12 color black white-text">
      <h1>Valorant</h1>
      <h2>Le FPS le plus attendu de la décennie</h2>
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="../../img/valorant-parallax-2.jpg"></div>
  </div>

  <div class="row mb0 wow">
    <div class="col s8 offset-s2">
      <div class="col s12">
        <h3 class="center-align grey-darken3">Un jeu énervé</h3>
      </div>

      <div class="infos" id="more">
        <div class="col s3 center-align pl0">
          <i class="material-icons large grey-darken3-text">play_arrow</i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col s3 center-align">
          <i class="material-icons large grey-darken3-text">people</i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col s3 center-align">
          <i class="material-icons large grey-darken3-text">show_chart</i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col s3 center-align pr0">
          <i class="material-icons large grey-darken3-text">favorite</i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>
      <div class="row">
        <iframe class="col l12 m12 s12" height="500px" src="https://www.youtube.com/embed/g8amyzDHOKw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <div class="galerie" id="galerie">
    <div class="carousel carousel-slider center">
      <div class="carousel-fixed-item center">
        <h3 class="center-align white-text">Quelques images du gameplay</h2>
        </div>
        <div class="carousel-item item-1 center" href="#one!"></div>
        <div class="carousel-item item-2 center" href="#two!"></div>
        <div class="carousel-item item-3 center" href="#three!"></div>
        <div class="carousel-item item-4 center" href="#four!"></div>
      </div>
    </div>

    <div class="row" id="pre-inscri">
      <div class="col offset-l3 s12 m12 l6">
        <h4 class="center-align">Préinscrivez-vous</h4>
        <div class="row">
          <a class="btn waves-effect waves-light col offset-l4 l4 s12 btn-large red modal-trigger" href="#modal1">M'inscrire</a>
        </div>
      </div>
    </div>


      <div id="modal1" class="row color black modal bottom-sheet">
        <div class="modal-content ">
          <h4>Prévenez-moi de la sortie</h4>
          <div class="col s6 offset-s3 input-field">
            <input class="white-text" type="text" id="first_name" name="first_name" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="col s6 offset-s3 input-field">
            <input class="white-text" type="text" id="last_name" name="last_name" class="validate">
            <label for="">Last Name</label>
          </div>
          <div class="col s6 offset-s3 input-field">
            <input class="white-text" type="text" id="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="col s6 offset-s3">
            <textarea id="message" class="white-text" placeholder="Message" name="message" rows="8" cols="80"></textarea>
          </div>
          <button  id="submit" class=" center waves-effect waves-light btn"><i class="material-icons left">send</i></button>
        </div>

    </div>

    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <div class="container">
          © 2014 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/wow.min.js"></script>
    <script type="text/javascript">
    new WOW().init();

    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.parallax').parallax();
      $('.modal').modal();
      M.updateTextFields();
    });
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });



    </script>
    <script type="text/javascript">

    $('button#submit').click(function(){

      $.ajax({
        type: "POST",
        url: "../action/save_contact.php",
        data: {
          first_name:$("#first_name").val(),
          last_name:$("#last_name").val(),
          email: $("#email").val(),
          message: $("#message").val(),
        },

      });

    });
    </script>

  </body>
  </html>
