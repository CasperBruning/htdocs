<?php
$hour = date("G");
if($hour >= 17){
    echo "AIRCO UIT";
}elseif ($hour <= 8){
    echo "AIRCO UIT";
}else{
    echo "AIRCO AAN";
};
$temperature = 20;
$luchtvochtigheid = 85; //min 0, max 100
if($temperature <20 + $luchtvochtigheid <85){
    echo "AIRCO UIT";
}else{
    echo "AIRCO AAN";
}
