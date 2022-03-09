<?php
$daynum = date("N");
$daytext = date("l");

switch($daynum){
    case "1":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Monday, laugh for danger";
        break;
    
    case "2":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Tuesday, kiss a stranger";
        break;

    case "3":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Wednesday, laugh for a letter";
        break;

    case "4":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Thursday, something better";
        break;

    case "5":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Friday, laugh for sorrow.";
        break;

    case "6":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Saturday, joy tomorrow.";
        break;

    case "7":
        echo "Het is vandaag " . $daytext . "<hr>";
        echo "Laugh on Sunday, I’m broke so I have to borrow.";
}