<?php require 'header.php';?>
<?php
require '../src/databaseFunctions.php';


$lineup =  db_getData('SELECT * FROM lineup');


?>

<div class="page lineup">
        <div class="container">
            <h1>Line-up</h1>
            <div class="artists">

                <?php
                if ($lineup->num_rows > 0) {

                    // output data of each row
                    while($row = $lineup->fetch_array()) {
                        ?>

                            <div class="artist">
                                <img src="<?php echo IMAGE_FOLDER.'/'.$row['artistImage'];?>"alt="">
                                <h2><?php echo $row['artistName']?></h2>
                            </div>

                        <?php
                            }
                            } else {
                                echo "0 results";
                            }
                        ?>

            </div>
        </div>
    </div>
<?php require 'footer.php'?>