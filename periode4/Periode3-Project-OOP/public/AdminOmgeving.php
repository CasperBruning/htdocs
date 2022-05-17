<?php
require_once ('header.php');
?>
<div class="adminContainer">
    <div class="adminNavMenu">
        <div class="klantenBTN">Klanten</div>
        <div class="productenBTN">Producten</div>
        <div class="ordersBTN">Orders</div>
    </div>
    <div class="adminContent">
        <div class="productenContainerOverzicht">
            <div>
                <table>
                    <tr>
                        <th class="productenTableTH">ProductID</th>
                        <th class="productenTableTH">Product Naam</th>
                        <th class="productenTableTH">Type Component</th>
                        <th colspan="2" class="productenTableTH">Action</th>
                    </tr>
            </div>
            <div>
                <?php $producten = db_getData("SELECT * FROM producten")  ?>
                    <?php if ($producten -> num_rows > 0){
                        while ($rows = $producten -> fetch_array()){
                            ?>
                            <tr>
                                <td class="productenTableTD"><?php echo $rows['productID']?></td>
                                <td class="productenTableTD"><?php echo $rows['naam']?></td>
                                <td class="productenTableTD"><?php echo $rows['typecomponent']?></td>
                                <td>
                                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                                </td>
                                <td>
                                    <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }?>
                </table>
            </div>
        </div>
        <div class="productenContainerCRUD">
            <div>
                <form method="post" action="">
                    <label>ProductID</label>
                    <input type="text" name="productID">
                    <label>ProductNaam</label>
                    <input type="text" name="naam">
                    <label>typeComponent</label>
                    <input type="text" name="typecomponent">
                    <label>merk</label>
                    <input type="text" name="merk">
                    <label>prijs</label>
                    <input type="number" name="prijs">
                    <div class="input-group">
                        <?php if ($update == true): ?>
                            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                        <?php else: ?>
                            <button class="btn" type="submit" name="save" >Save</button>
                        <?php endif ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
