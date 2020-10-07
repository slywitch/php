<?php

//session_start();

require_once("config.php");

//session_unset($_SESSION[]);

unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy;

?>