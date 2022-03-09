<?php
$woordenArray = ['constructies', 'ontwerpen', 'productie', 'vaak', 'kant', 'alarm', 'stiekem'];
$lengte = 3;
$aantalwoorden = 0;

foreach ($woordenArray as $val){
$value = $val;
$lengthValue = count_chars($value);

    if ($lengthValue > $lengte){
        $aantalwoorden++;

    }
}

echo "Er zijn " . $aantalwoorden-2  . " woorden die langer zijn dan " . $lengte + 1 ." karakters";