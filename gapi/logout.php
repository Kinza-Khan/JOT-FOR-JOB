<?php
require "config.php";
session_destroy();
echo "<script>location.assign('index.php')</script>";
?>