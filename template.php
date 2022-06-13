<?php
$page = mb_substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI'])-2);
if (empty($page)) {
	$page = 'home';
}
$pages = [
	'home',
	'about',
	'work',
	'process',
	'services',
	'testimonials',
	'contact'
];
$href = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];

function template_start() {
	global $href;
	global $pages;
	global $page;
	echo "
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title> Home </title>
		<link rel='stylesheet' href='../template.css'>
";
if ($page == 'home') {
	echo "<link rel='stylesheet' href='../style.css'>";
}
else {
	echo "<link rel='stylesheet' href='../$page/style.css'>";
}
echo "
		<meta name='viewport' content='width=device-width, initial-scale=1'>
	</head>
	<body>
		<header>
			<a href='$href'>
				<svg id='logo' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31' height='25' viewBox='0 0 31 25'> <image id='logo' width='31' height='25' xlink:href='data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAZCAYAAADJ9/UkAAACIUlEQVRIicWWMUscURSF725kEPzAjQiCRRIQK0kliEUKU5oUwSaQ1kZsQsA/ELC2ipWFrd0WWmybxoBgmqRKl6QLghDyVuKywXDhrLzovNk3IubCMnPvOeeeee/dWaYBfDKzx3b38blpZuP/wdhj3M1fK+mb2aKZ3c/4taX5pWs7U7coH7v0BdrABfAeaFQ9LrAsbg94oavny0N0DfV3bjsGpoGfAlYrGowBX8XbVG1TudfHKrSr4rnP9FVwXeApMJVosCXOF2BUtVHlXt9K6KbU1znrZYQm8EGEvRJ8HugLX7qCLanu+HyJdk+492+mtmau7AyBEeCj6rsJ7a5w541E9XhG5kqNI/K1MwQ2VPsBTCR0E8Kdt2GJGRlm/s8ZAo+ArvJXVWLHxetKd21Gch4gPsND3XcytR3xD1MzktNkcIaXK8nUxTuVnJFhTfwMz9XgqKb2SLrz1Ix4lI+9mYUQTs1sR+kC8CTT2HkLSnfU52YBnGgVJ5nm2fzkyqNY0e0k8G6IseOTSlequNkB7Gs1f4CZhPGMcOft5/TOWbnHSzM7Ez/1ynWEn4l/O+YhhN9mtqZ0FngT48pnla6Jf7sBHEevUEvGreiVPK5jmLvtg3imL5HCzA5UO1DeF54d9+qQe71etyjcx56a2YOiKFrR+b4NIWT9BQ+i8pMpFcA3N4/g7yGEh3X71N32QTw3swslfvX87gLY1pBt38jVzP4C6ti8UAIE7mwAAAAASUVORK5CYII='/> </svg>
			</a>
			<ul>
	";
	foreach ($pages as $p) {
		if ($p == $page) {
			echo '<li class="selected">';
		}
		else {
			echo '<li>';
		}
		if ($p == 'home') {
			echo "<a href='$href'>";
		}
		else {
			echo "<a href='$href/$p/'>";
		}
		echo mb_strtoupper($p) . '</a> </li>';
	}
	echo "
			</ul>
		</header>
		<section>
	";
}
function template_end () {
	echo "
		</section>
		<footer>
			<div id='credits'>
			<h3> Piroll Design, Inc. </h3>
			<p> &copy 2017 Piroll. All right reserved. <p>
			<p> Designed by robirurk. </p>
			</div>
			<div id='contacts'>
				<p> hello@pirolltheme.com </p>
				<p> +44 987 065 908 </p>
			</div>
			<div id='links'>
				<ul>
					<li> <a href='#'> Projects </a> </li>
					<li> <a href='#'> About </a> </li>
					<li> <a href='#'> Services </a> </li>
					<li> <a href='#'> Carrer </a> </li>
				</ul>
				<ul>
				<li> <a href='#'> News </a> </li>
				<li> <a href='#'> Events </a> </li>
				<li> <a href='#'> Contact </a> </li>
				<li> <a href='#'> Legals </a> </li>
				</ul>
			</div>
			<div id='social_media'>
				<ul>
					<li> <a href='#'?> Facebook </a> </li>
					<li> <a href='#'?> Twtter </a> </li>
					<li> <a href='#'?> Instagram </a> </li>
					<li> <a href='#'?> Dribbble </a> </li>
				</ul>
			</div>
		</footer>
		<script src='script.js'></script>
	</body>
</html>
	";
}
?>