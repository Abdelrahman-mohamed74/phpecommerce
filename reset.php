<?php
session_start();
include('includes/conn.php');
session_unset();
session_destroy();
header('Location:login.php');
?>