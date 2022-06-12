<?php
include('template.php');
template_start();

echo "
<div id='text'>
	<h1> UI/UX & Graphic Designer </h1>
	<p> I am a Graphic & Web Designer based in New York, specializing in User Interface Design and Development. </p>
</div>

<div id='work'>
";
$works = array_slice(scandir(getcwd() . '/src/works/'), 2);
foreach (range(0, 11) as $i) {
	echo "
	<div class='works' id='work$i'>
	";
	echo "<img src='../src/works/$works[$i]' alt='$works[$i]'>";
	echo "</div>";
}
echo "
</div>
";

template_end();
?>