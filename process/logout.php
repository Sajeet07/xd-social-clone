<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['username']);

header('Location: ../index.php?msg=logout');
?>
