<?php


session_start();


unset($_SESSION["auth"]);

return header("Location: index.php");