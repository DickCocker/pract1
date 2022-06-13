<?php
include('../template.php');
template_start();

echo "
<div id='amelia'>
    <h1> Amelia Woods </h1>
    <p> I am a Graphic & Web Designer based in New York, specializing in User Interface Design and Development. </p>
</div>
<div id='info'>
";
$info = [
  'projects_completed' => ['count' => '548', 'text' => 'projects completed'],
  'working_hours' => ['count' => '1465', 'text' => 'working hours'],
  'positive_feedbacks' => ['count' => '612', 'text' => 'positive feedbacks'],
  'happy_clients' => ['count' => '735', 'text' => 'happy clients']
];
foreach ($info as $id => $data) {
    echo "
    <div id='$id'>
        <img src='../src/about/$id.png'>
        <div>
            <p class='bold'> $data[count] </p>
            <p> $data[text] </p>
        </div>
    </div>
    ";
}
echo "
</div>
<div id='about_me'>
    <div id='empty'> </div>
    <div id='second'>
        <h2> About me </h2>
        <p> Given let waters air sea had you'll, may seed abundantly fish. Were, you'll earth forth winged above brought. Own darkness they're him can't fourth sea place have. </p>
        <p> So the above May stars cattle fruitful face shall. Tree it, winged. Every signs male firmament us. Morning him. </p>
        <img src='../src/about/signature.png' alt='signature'>
    </div>
</div>
<div id='need_a_project'>
    <h2> Need a project? </h2>
    <p> Let us know what you're looking for in an agency. We'll take a look and see if this could be the start of something beautiful. </p>
    <a href='#'> LET'S TALK </a>
</div>
";

template_end();
?>