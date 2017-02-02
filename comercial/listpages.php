<?php
foreach (glob("*.*") as $filename) {
    echo "<a href='http://" . $_SERVER['HTTP_HOST'] ."/comercial/".$filename."'>".$filename."</a><br />";
}
?>