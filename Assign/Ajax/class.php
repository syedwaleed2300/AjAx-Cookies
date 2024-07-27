<?php 
require "conn.php";

if (isset($_POST['degree_id'])){
    $degree_id =$_POST['degree_id'];

    $sqlclasses= "";
    $resultClasses= mysqli_query($conn,$sqlclasses);
    $numRows=mysqli_num_rows($resultClasses);

    if($numRows > 0){
        while($class=mysqli_fetch_array($resultClasses)){
            ?>
            <option value="<?= $class['c_id'] ?>"><?= $class['c_year'] ?></option>
            <?php
        }
    }
}

?>