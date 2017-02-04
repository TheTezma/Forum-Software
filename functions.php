<?php

function CheckSession($session, $url) {
	if(empty($session)) {
		header("Location: $url");
		die("Redirecting to $url");
	}
}

function RenderPage($page) {
	include_once 'views/'.$page.'';
}

function Render($data) {
	echo htmlentities($_SESSION['user'][$data], ENT_QUOTES, 'UTF-8');
}

?>