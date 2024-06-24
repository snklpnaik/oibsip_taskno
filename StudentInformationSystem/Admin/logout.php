<?php
session_start();
unset($_SESSION['lid']);
session_destroy();
header("location:index.php?sankalp=".sha1('sankalpnaik'));
?>