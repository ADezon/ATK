<?php

echo 'Pages on this theme: ' . "<br><br>";
$destiny = (gethostname() == 'G750JX') ? 'http://www.at.dev/comercial/' : 'http://clientes.king-eclient.com/landing/comercial/';

foreach (glob("*.*") as $filename) {
    echo "<a href='" . $destiny . $filename ."'>". $filename . "</a><br />";
}
?>