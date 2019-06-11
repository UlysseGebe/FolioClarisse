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
    $team = '
    Nemo Fazakerley&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ Project manager ]</br>
    Coline Animbo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ UI Designer ]</br>
    Victor de Chalambert [ Marketing expert ]</br>
    Clarisse Croset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ UX designer ]';
    $role = 'As the user experience designer, I created the user purchase flow experience, from the basket page until the last purchase confirmation one.';
    $images = ['logoHyphen','hyphen_macbookpro13'];
    $next = ['Creative Illustration', '2'];
}
else if ($number == '2') {
    $title = 'Creative Illustration';
    $text = ['eative','Illustr'];
    $image = 'womann';
    $context = 'Some illustrations I made for artistic or work purposes';
    $year = ' 2019';
    $role = 'As the user experience designer, I created and imagined the user purchase flow experience, from the basket page until the last purchase confirmation one.';
    $next = ['Lines Photography', '3'];
    $images = ['womannBlue'];
}
else if ($number == '3') {
    $title = 'Lines Photography';
    $text = ['lines','curves'];
    $image = 'colors';
    $context = 'I’ve always loved capturing ordinary spontaneity while simultaneously playing with lines and colors.';
    $year = 'Since 2012';
    $role = 'Photographer';
    $images = ['photo0','photo1','photo2','photo3','photo4','photo5','photo6','photo7','photo8','photo9','photo10','photo12','photo13','photo14','photo15','photo16','photo17','photo18','photo19','photo20','photo21','photo22','photo23','photo24','photo25','photo26','photo27','photo28','photo29','photo30','photo31','photo32','photo33','photo34'];
    $next = ['Spatial Journey', '4'];
}
else if ($number == '4') {
    $title = 'Spatial Journey';
    $text = ['spatial','journe'];
    $image = 'space';
    $context = 'The request was to imagine, create and develop an immersive and interactive experience around a particular theme : The human and the planet.</br>We decided to illustrate an eventual journey to the Moon and highlight the inequalities that it would engenders.';
    $year = '2018';
    $team = '
    Gauthier Burias&nbsp;&nbsp;&nbsp;&nbsp;[ Project manager ]</br>
    Matthias Gander&nbsp;&nbsp;&nbsp;&nbsp;[ Lead developer ]</br>
    Ulysse Geberowicz&nbsp;&nbsp;&nbsp;&nbsp;[ Content creator ]</br>
    Clarisse Croset&nbsp;&nbsp;&nbsp;&nbsp;[ UX designer ]</br>
    Théo Jullien&nbsp;&nbsp;&nbsp;&nbsp;[ UI designer ]</br>';
    $role = 'As the user experience designer, I worked close with the developer to facilitate the user experince and navigation';
    $images = ['homee','final_macbookpro15_front','rocket_macbookpro15_front','ships','capinship'];
    $next = ['Playful Bubbles', '5'];
    $launch = ['website','https://matthiasgdr.fr/humanity-and-planets/?fbclid=IwAR3S2nFGO3XWd5dweH50Dn2bBYvFueWM4NyAa8zJBJXw97Ezg6Vad0GuBt0'];
}
else if ($number == '5') {
    $title = 'Playful Bubbles';
    $text = ['playful','bubble'];
    $image = 'bubbleScroll';
    $context = 'I invented this desktop game for a development assignement in which we had to conceive an original little game using Javascript.';
    $year = '2018';
    $role = 'I designed and developed this project in less than a week using Canvas in Javascript. </br>Many thanks to Florian Brunet who helped me solve some issues.';
    $images = ['gameMockup'];
    $next = ['Immersive Experience', '6'];
    $launch = ['game','#'];
}
else if ($number == '6') {
    $title = 'Immersive Experience';
    $text = ['imme','rsive'];
    $image = 'freestate';
    $context = 'Our team had nine days to conceive and delevop and immersive user experience around a product of our choice from the platform Kickstarter. We chose to build this experience on the Freestate, multi purpose shoes.';
    $year = '2018';
    $team = 'Alphonse Bouy&nbsp;&nbsp;&nbsp;&nbsp;[ Project manager ]</br>
    Youssef Ben Henda&nbsp;&nbsp;&nbsp;&nbsp;[ UI Designer ]</br>
    Corentin Boulanouar&nbsp;&nbsp;&nbsp;&nbsp;[ Developer ]</br>
    Clarisse Croset&nbsp;&nbsp;&nbsp;&nbsp;[ UX designer ]';
    $role = 'As the user experience designer, I worked with the user interface designer to imagine a way to captivate and entertain the user. I also created some content.';
    $images = ['freestatee_macbookpro15_front'];
    $next = ['Modern TakeOver', '7'];
    $launch = ['website','http://app.alphonsebouy.fr/kickstarter/'];
}
else if ($number == '7') {
    $title = 'Modern TakeOver';
    $text = ['odern','takeov'];
    $image = 'papabear';
    $context = 'In a week’s time, our team completely redesigned and developed a modern version of Douce de Po’s website. </br>Some of our engagement strategies were selectioned by the creator of the brand herself.';
    $year = '2017';
    $team = 'Jules Guesnon&nbsp;&nbsp;&nbsp;&nbsp;[ Project manager ]</br>
    Lou Gloagen&nbsp;&nbsp;&nbsp;&nbsp;[ Marketing expert ]</br>
    Claire Guyot&nbsp;&nbsp;&nbsp;&nbsp;[ Designer ]</br>
    Louis Lemoine&nbsp;&nbsp;&nbsp;&nbsp;[ Developer ]</br>
    Clarisse Croset[ Project manager ]';
    $role = 'As the project manager, I supervised the schedule and the methodology of the project while helping and motivating my colleagues.';
    $images = ['doucedepo_macbookpro15_front'];
    $next = ['Visual Design', '1'];
}
else {
    include '../views/pages/404.php';
}

include '../views/pages/project.php';