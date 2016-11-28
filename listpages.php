<?php
foreach (glob("*.*") as $filename) {
    echo "<a href='http://" . $_SERVER['HTTP_HOST'] ."/".$filename."'>".$filename."</a><br />";
}
?>