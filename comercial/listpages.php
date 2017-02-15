<?php

$destiny = (gethostbyname() == 'G750JX') ? 'http://www.at.dev/comercial/' : 'http://clientes.king-eclient.com/landing/comercial/';

foreach (glob("*.*") as $filename) {
    echo "<a href='" . $destiny . $filename ."'>". $filename . "</a><br />";
}
?>