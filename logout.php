<?php

session_start();
unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);
session_destroy();

header('Location: index.php');

?>