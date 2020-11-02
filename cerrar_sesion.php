<?php
session_start(); 
session_destroy(); // destruye la sessión
header ('location: ./'); // relocaliza
?>