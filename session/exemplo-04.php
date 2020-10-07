<?php

session_id('nn92urc92kir74kp6ds60adr6i');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>