<?php
  function printseguro($segimgv, $segtitlev, $segtextv, $seglinkv){
    echo "<div class='col-xs-12 col-md-4 segurohome'>\n";
    echo "\t\t\t<center>\n";
    echo "\t\t\t\t<div class='segimgcont'><img src='" . $segimgv . "'></div>\n";
    echo "\t\t\t\t<h2>$segtitlev</h2>\n";
    echo "\t\t\t\t<p>\n\t\t\t\t\t" . $segtextv . "\n\t\t\t\t</p>\n";
    echo "\t\t\t\t<a href='" . $seglinkv . "'>Leer Mas ...</a>\n";
    echo "\t\t\t\t<br><br>\n";
    echo "\t\t\t\t<center><button class='btn btn-primary btn-lg'>Comprar</button></center>\n";
    echo "\t\t\t</center>\n";
    echo "\t\t</div>\n";
  }
?>
