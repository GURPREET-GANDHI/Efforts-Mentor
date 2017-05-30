<?php
include('./functions_inc.php');
session_start();
session_destroy();
header("Location: index.php");
?>