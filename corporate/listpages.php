<?php
foreach (glob("*.*") as $filename) {
    echo "<a href='http://" . $_SERVER['HTTP_HOST'] ."/corporate/".$filename."'>".$filename."</a><br />";
}
?>