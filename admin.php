<?php
    define("URL","admin.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles.css">
        <link rel ="stylesheet" href="tab.css">
    </head>
    <body>
        <?php include "config.php";?>
        
        <a href="adminsupport.php"><button class="button-7" role="button">Support</button></a>
        <?php include "customers.php"; ?>
        <form action="deleteCustomer.php" method="POST">
            <select name="cid">
            <?php 
            
            $sql_command = "SELECT cid FROM customers";
            $myresult = mysqli_query($db, $sql_command);
            
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $cid = $id_rows['cid'];
                echo "<option value=$cid>" . $cid . "</option>";
            }
            ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <?php include "workers.php"; ?>
        <form action="deleteWorker.php" method="POST">
            <select name="wid">
                <?php

                $sql_command = "SELECT wid FROM workers";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $wid = $id_rows['wid'];
                    echo "<option value=$wid>" . $wid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <?php include "busses.php"; ?>
        <form action="deleteBusses.php" method="POST">
            <select name="bid">
                <?php

                $sql_command = "SELECT bid FROM busses";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $bid = $id_rows['bid'];
                    echo "<option value=$bid>" . $bid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <?php include "trips.php"; ?>
        <form action="deleteTrip.php" method="POST">
            <select name="trid">
                <?php

                $sql_command = "SELECT trid FROM trips";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $trid = $id_rows['trid'];
                    echo "<option value=$trid>" . $trid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <form action="addWorksinRelation.php" method="POST">

            <select name="wid">
                <?php

                $sql_command = "SELECT * FROM workers";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $wid = $id_rows['wid'];
                    $name = $id_rows['worker_name'];
                    $sname = $id_rows['worker_surname'];
                    $show =  $wid . ' ' . $name . ' '. $sname;
                    echo "<option value=$wid>" . $show . "</option>";
                }
                ?>
               
            
            </select>
            <select name="trid" style="display:inline-block;width: 25%;">
                <?php

                $sql_command = "SELECT trid FROM trips";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $trid = $id_rows['trid'];
                    echo "<option value=$trid>" . $trid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: green">Add Worksin Relation</button>

        </form>
        <?php include "tickets.php"; ?>
        <form action="deleteTicket.php" method="POST">
            <select name="tid">
                <?php

                $sql_command = "SELECT tid FROM tickets";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $trid = $id_rows['tid'];
                    echo "<option value=$trid>" . $trid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <?php include "locations.php"; ?>
        <form action="deleteLocation.php" method="POST">
            <select name="lid">
                <?php

                $sql_command = "SELECT lid FROM locations";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $lid = $id_rows['lid'];
                    echo "<option value=$trid>" . $lid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
    </body>
</html>