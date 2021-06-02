<?php
    include "db.php";

    $sql = "select ride_Pid from ride";
    $result = mq($sql);

    ?>
<div>
    <form action="create_report.php" method="POST">
        <div>
            <input type="text" name="title">
        </div>
        <div>
        <select name="ride_Pid" >
        <?php while($rows = mysqli_fetch_array($result)){
            echo '<option value="'.$rows['ride_Pid'].'">'.$rows['ride_Pid'].'</option>';
        }
        ?>
            <option value=""></option>
        </select>
        </div>
        <div>
            <input type="text" name="content">
        </div>
        <input type="submit">
    </form>
</div>