<?php
session_start();
require '../src/Database.php';
require '../src/Render.php';
require '../src/Format.php';
require '../functions.php';

$Render = new Render;

$CategoryID = $_GET['id'];

$Render::SiteHead("../");
?>
