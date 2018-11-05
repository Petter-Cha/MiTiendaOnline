<?php session_start();

require 'Admin/config.php';
require 'functions.php';

session_destroy();
header('Location: '.RUTA.'index.php');
?>