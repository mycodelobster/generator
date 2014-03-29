<?php
$name = $argv[1];

unlink("../application/controllers/".$name.".php");
unlink("../application/models/".$name."_model.php");

unlink("../application/views/".$name."/listing.php");
unlink("../application/views/".$name."/add.php");
unlink("../application/views/".$name."/update.php");
unlink("../application/views/".$name."/detail.php");
rmdir("../application/views/".$name);

?>