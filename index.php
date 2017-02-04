<?php
require 'common.php';
include 'functions.php';
require 'src/Render.php';

CheckSession($_SESSION['user'], "login.php");
RenderPage("main.php");
?>