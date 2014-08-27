<?php

include './core/connect.php';


?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select country</title>
    </head>
    <body>
        <form action="" method="POST">
            <select>
                <option value="">--- Select your country --</option>
                    <?php
                        $query = "SELECT * FROM `country` ORDER BY `countryname` ASC";
                        $list = mysql_query($query);
                        
                        while ($row_list = mysql_fetch_assoc($list)) {
                            ?>
                                <option value="<?php echo $row_list['countryname']; ?>"><?php echo $row_list['countryname'];?></option>                           
                            <?php
                        }
                    ?>
            </select> <br><br>
            
            <input type="submit" value="submit">           
        </form>
    </body>
</html>
