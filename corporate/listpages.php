<?php
echo 'Pages on this theme: ' . "<br><br>";
$destiny = (gethostname() == 'G750JX') ? 'http://www.at.dev/corporate/' : 'http://clientes.king-eclient.com/landing/corporate/';

foreach (glob("*.*") as $filename) {
    echo "<a href='" . $destiny . $filename ."'>". $filename . "</a><br />";
}
