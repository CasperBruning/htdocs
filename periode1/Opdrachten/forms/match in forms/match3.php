<?php
$daynum = date("N");
$result = match($daynum){
    "1" => "Het is vandaag maandag" . "<hr>" . "Laugh on Monday, laugh for danger.",
    "2" => "Het is vandaag dinsdag" . "<hr>" . "Laugh on Tuesday, kiss a stranger.",
    "3" => "Het is vandaag woensdag" . "<hr>" . "Laugh on Wednesday, laugh for a letter.",
    "4" => "Het is vandaag donderdag" . "<hr>" . "Laugh on Thursday, something better.",
    "5" => "Het is vandaag vrijdag" . "<hr>" . "Laugh on Friday, laugh for sorrow.",
    "6" => "Het is vandaag zaterdag" . "<hr>" . "Laugh on Saturday, joy tomorrow.",
    "7" => "Het is vandaag zondag" . "<hr>" . "Laugh on Sunday, I’m broke so I have to borrow."

};
echo $result;