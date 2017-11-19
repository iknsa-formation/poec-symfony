<?php
session_start();
// On détruit notre session
session_destroy();
header("location:index.php");

?>