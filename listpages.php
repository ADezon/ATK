<?php
foreach (glob("*.*") as $filename) {
    echo "<a href='http://www.atelecom.dev/".$filename."'>".$filename."</a><br />";
}
?>