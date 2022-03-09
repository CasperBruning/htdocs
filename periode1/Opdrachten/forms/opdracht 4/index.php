<?php
if (isset($_POST['send'])) {
    $brandstof = $_POST['brandstof'];
    $betalen = $_POST['betalen'];
    $gewicht = $_POST['gewicht'];

    if($brandstof === "benzine"){
        if ($betalen == 3){
            if ($gewicht >550){
                echo "27 euro";
            }
            if ($gewicht > 650){
                echo "35 euro";
            }
            if($gewicht > 750){
                echo "44 euro";
            }
            if($gewicht > 850){
                echo "57 euro";
            }
            if($gewicht > 950){
                echo "75 euro";
            }
            if($gewicht > 1050){
                echo "97 euro";
            }
            if($gewicht > 1150){
                echo "120 euro";
            }
            if($gewicht > 1250){
                echo "142 euro";
            }
            if($gewicht > 1350){
                echo "165 euro";
            }
            if($gewicht > 1450){
                echo "187 euro";
            }
            if($gewicht > 1550){
                echo "209 euro";
            }
            if($gewicht > 1650){
                echo "232 euro";
            }
            if($gewicht > 1750){
                echo "254 euro";
            }
            if($gewicht > 1850){
                echo "277 euro";
            }
            if($gewicht > 1950){
                echo "299 euro";
            }
            if($gewicht > 2050){
                echo "321 euro";
            }
            if($gewicht > 2150){
                echo "344 euro";
            }
        } elseif ($betalen == 12){
            if ($gewicht >550){
                echo "96 euro";
            }
            if ($gewicht > 650){
                echo "128 euro";
            }
            if($gewicht > 750){
                echo "164 euro";
            }
            if($gewicht > 850){
                echo "216 euro";
            }
            if($gewicht > 950){
                echo "288 euro";
            }
            if($gewicht > 1050){
                echo "376 euro";
            }
            if($gewicht > 1150){
                echo "468 euro";
            }
            if($gewicht > 1250){
                echo "556 euro";
            }
            if($gewicht > 1350){
                echo "648 euro";
            }
            if($gewicht > 1450){
                echo "736 euro";
            }
            if($gewicht > 1550){
                echo "824 euro";
            }
            if($gewicht > 1650){
                echo "916 euro";
            }
            if($gewicht > 1750){
                echo "1004 euro";
            }
            if($gewicht > 1850){
                echo "1096 euro";
            }
            if($gewicht > 1950){
                echo "1184 euro";
            }
            if($gewicht > 2050){
                echo "1272 euro";
            }
            if($gewicht > 2150){
                echo "1364 euro";
            }
        }
    } elseif ($brandstof === "diesel"){
        if ($gewicht >550){
            echo "88 euro";
        }
        if ($gewicht > 650){
            echo "107 euro";
        }
        if($gewicht > 750){
            echo "126 euro";
        }
        if($gewicht > 850){
            echo "151 euro";
        }
        if($gewicht > 950){
            echo "185 euro";
        }
        if($gewicht > 1050){
            echo "219 euro";
        }
        if($gewicht > 1150){
            echo "253 euro";
        }
        if($gewicht > 1250){
            echo "288 euro";
        }
        if($gewicht > 1350){
            echo "322 euro";
        }
        if($gewicht > 1450){
            echo "356 euro";
        }
        if($gewicht > 1550){
            echo "390 euro";
        }
        if($gewicht > 1650){
            echo "425 euro";
        }
        if($gewicht > 1750){
            echo "459 euro";
        }
        if($gewicht > 1850){
            echo "493 euro";
        }
        if($gewicht > 1950){
            echo "528 euro";
        }
        if($gewicht > 2050){
            echo "562 euro";
        }
        if($gewicht > 2150){
            echo "596 euro";
        }
    } elseif ($betalen == 12){
        if ($gewicht >550){
            echo "340 euro";
        }
        if ($gewicht > 650){
            echo "416 euro";
        }
        if($gewicht > 750){
            echo "492 euro";
        }
        if($gewicht > 850){
            echo "592 euro";
        }
        if($gewicht > 950){
            echo "728 euro";
        }
        if($gewicht > 1050){
            echo "864 euro";
        }
        if($gewicht > 1150){
            echo " 1000euro";
        }
        if($gewicht > 1250){
            echo "1140 euro";
        }
        if($gewicht > 1350){
            echo "1276 euro";
        }
        if($gewicht > 1450){
            echo "1412 euro";
        }
        if($gewicht > 1550){
            echo "1276 euro";
        }
        if($gewicht > 1650){
            echo "1412 euro";
        }
        if($gewicht > 1750){
            echo "1548 euro";
        }
        if($gewicht > 1850){
            echo "1688 euro";
        }
        if($gewicht > 1950){
            echo "1824 euro";
        }
        if($gewicht > 2050){
            echo "1960 euro";
        }
        if($gewicht > 2150){
            echo "2100 euro";
        }
    }
}