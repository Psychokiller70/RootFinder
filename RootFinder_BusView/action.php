<?php
$file = 'action.php';
$fp = fopen($file, 'a');

fwrite($fp, $username);
?>
<?php

file_put_contents("username.txt","".$username = $_GET['username']. "\n", FILE_APPEND);
?>