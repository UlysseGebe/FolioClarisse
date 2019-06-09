<?php

$title = 'Creative Designer';
$position = 'relative';
preg_match('/[1-9]*$/', $q, $matches);
$number = $matches[0];
$total = '7';

if ($number == '1') {
    $title = 'Visual Design';
    $text = ['Visual','Design'];
    $image = 'modelHyphen';
    $context = 'We created a user flow experience for a Kickstarter project that did not yet have a website of its own : Hyphen, a modern earphone brand.</br>We designed mock-ups of several pages, including the home and basket one.';
    $year = 'Early 2019';
    $team = 'Nemo Fazakerley&nbsp;&nbsp;&nbsp;&nbsp;[ Project manager ]</br>
    Coline Animbo&nbsp;&nbsp;&nbsp;&nbsp;[ UI Designer ]</br>
    Victor de Chalambert&nbsp;&nbsp;&nbsp;&nbsp;[ Marketing expert ]</br>
    Clarisse Croset&nbsp;&nbsp;&nbsp;&nbsp;[ UX designer ]';
    $role = 'As the user experience designer, I created the user purchase flow experience, from the basket page until the last purchase confirmation one.';
    $images = [];
}
else if ($number == '2') {
    $title = 'Creative Illustration';
    $text = ['eative','Illustr'];
    $image = 'womann';
    $images = [];
}
else if ($number == '3') {
    $title = 'Lines Photography';
    $text = ['',''];
    $image = 'colors';
    $images = [];
}
else if ($number == '4') {
    $title = 'Spatial Journey';
    $text = ['',''];
    $image = 'space';
    $images = [];
}
else if ($number == '5') {
    $title = 'Playful Bubbles';
    $text = ['',''];
    $image = 'bubbleScroll';
    $images = [];
}
else if ($number == '6') {
    $title = 'Immersive Experience';
    $text = ['',''];
    $image = 'freestate';
    $images = [];
}
else if ($number == '7') {
    $title = 'Modern TakeOver';
    $text = ['',''];
    $image = 'papabear';
    $images = [];
}
else {
    include '../views/pages/404.php';
}

include '../views/pages/project.php';