<?php
require('header.php');
?>
<main>
<!-- Content -->

<div class="container-flex">
  <div class="row">
    <div class="col-md-12 encabezado">
      <img src="assets/img/logonotext.svg">
      <h1>
        Por que tu seguro debería ser<br> seguro aquí y en china.
      </h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <button>SOLICITAR COTIZACIÓN</button>
    </div>
  </div>
  <div class="row nuestracarterainicio text-center">
    <h2>Nuestra Cartera de Seguros</h2>
    <br><br>
    <nav>
      <div class="container">
        <a href="">Personales</a>
        <a href="">Empresariales</a>
        <a href="">Familiares</a>
        <a href="">Fianzas</a>
        <a href="">Inmuebles</a>
        <a href="">Otros bienes</a>
        <a href="">Autos</a>
      </div>
    </nav>
  </div>
  <!--Seguros-->
    <div class="container">
      <div class="row">
        <!--Seguro-->
          <?php
          printseguro(
            "assets/img/seggastmedicos.svg",
            "Gastos Medicos",
            "aLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "ellink"
          );
          ?>
        <!--/Seguro-->
        <!--Seguro-->
          <?php
          printseguro(
            "assets/img/pru.svg",
            "Seguro de Auto",
            "bLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "ellink"
          );
          ?>
        <!--/Seguro-->
        <!--Seguro-->
          <?php
          printseguro(
            "assets/img/segfamiliar.svg",
            "Seguro Familiar",
            "cLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "ellink"
          );
          ?>
        <!--/Seguro-->
        <!--Seguro-->
          <?php
          printseguro(
            "assets/img/segincendios.svg",
            "Seguro Contra Incendios",
            "dLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "ellink"
          );
          ?>
        <!--/Seguro-->
        <!--Seguro-->
          <?php
          printseguro(
            "assets/img/segfrauderobo.svg",
            "Seguro Contra Fraude Y Robo",
            "eLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "ellink"
          );
          ?>
        <!--/Seguro-->
        <!--Seguro-->
          <?php
          printseguro(
            "assets/img/segdental.svg",
            "Seguro Dental",
            "fLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            "ellink"
          );
          ?>
        <!--/Seguro-->
      </div>
      <div class="row">
        <div class="col-xs-12">
          <center><button class='btn btn-primary btn-lg btn-vtls'>VER TODOS LOS SEGUROS</button></center>
          <br><br><br>
        </div>
      </div>
    </div>
  <!--/Seguros-->
  <div class="container-flex" id="contacto">
    <div class="row">
      <div class="cont-contact">
        <center><h2>CONTACTO</h2></center>
        <form class="formcontact" action="index.html" method="post">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <input type="text" name="name" placeholder="Nombre">
              <input type="email" name="email" placeholder="Email">
              <input type="tel" name="phone" placeholder="Teléfono">
            </div>
            <div class="col-xs-12 col-md-6">
              <textarea name="message" placeholder="Mensaje"></textarea>
            </div>
          </div>
          <center>
            <a href="#">Encuéntranos en Facebook</a>
            <br>
            <br>
            <input type="submit" class="btn btn-primary btn-lg">
          </center>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- /Content -->
</main>
<?php
require('footer.php');
?>
