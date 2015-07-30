<?php
session_start();
session_unset($_SESSION['sess_user']);
session_unset($_SESSION['username']);
session_destroy();
//echo $_POST['logout'];
?>