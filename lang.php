<?php
//Lectura de Cookie
if (isset($_COOKIE['idioma'])) {
    if ($_COOKIE['idioma'] == "es") {
        $idioma = "es";
    }else if ($_COOKIE['idioma'] == "en") {
        $idioma = "en";
    }
} else {
    $idioma = "en";
}
///Lectura de Cookie

///
if ($idioma == "en") {
    //Ingles
    $setlang = array(
        'inicio' => "Home"
    );
}else if ($idioma == "es") {
    // Español
    $setlang = array(
      'inicio' => "Inicio"
    );
}else {
    //No Definido
    $setlang = array(
      'inicio' => " "
    );
}
?>
<?php //echo $setlang['inicio']; ?>
