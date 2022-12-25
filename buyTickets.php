<?php
    define("URL","buyTickets.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tripcard.css">
    </head>
    <body>
        <?php include "config.php";?>
        
        <script type="text/javascript">
        function validateForm() {
            var a = document.forms["Form"]["cid"].value;
            if (a == null || a == "") {
            alert("Enter your customer id");
            return false;
            }
        }
        
        </script>
        <form action="addTicket.php" name="Form" method="POST" onsubmit="return validateForm()">;
        <div class ="random"></div>
        
            <label for="cid">Customer ssn:</label><br>
            <input type="text" id="cssn" name="cssn" placeholder="Your ssn"><br>
            <input type="text" id="tickettrid" name="tickettrid" placeholder="Enter the trip number..."></input><br>
            <button type="submit" value="Submit" class="button-7">Buy now</button><br>
            <?php 
            
            $sql_command = "SELECT * FROM trips";
            $myresult = mysqli_query($db, $sql_command);
            
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $trid = $id_rows['trid'];
                echo $trid;
                $price = $id_rows['price'];
                $start_date = $id_rows['startdate'];
                $arrival_date = $id_rows['arrivaldate'];
                $isService = $id_rows['isService'];
                $bid = $id_rows['bid'];
                $starts_lid = $id_rows['startslid'];
                $location_comm = "SELECT * FROM locations WHERE lid = ".$starts_lid;
                $newres = mysqli_query($db, $location_comm);
                $showRow = mysqli_fetch_assoc($newres);
                $showStart = $showRow['city']. ' ' . $showRow['name'];
                $ends_lid = $id_rows['endslid'];
                $location_comm2 = "SELECT * FROM locations WHERE lid = ".$ends_lid;
                $newres2 = mysqli_query($db, $location_comm2);
                $endRows = mysqli_fetch_assoc($newres2);
                $showEnd = $endRows['city']. ' ' . $endRows['name'];
                
                

                $worker_command = "SELECT workers.worker_name AS name, workers.worker_surname AS surname  FROM worksin AS works, workers AS workers WHERE works.trid = ".$trid. " AND workers.wid = works.wid";
                $worker_result = mysqli_query($db, $worker_command);

                echo "<div class=\"tripcard\"><div class=\"row\">";

                

                echo "
                
                <span>Starts at: ". $showStart . '</span>
                <span>Ends at: '. $showEnd . '</span>
                <span>Date: ' .$start_date . '</span>
                <span>Price: ' .$price . '</span>
                
                ';

                echo "<p style=\"margin-top: 20px\">Workers</p>";
                while($worker_rows = mysqli_fetch_assoc($worker_result))
                {
                    $name = $worker_rows["name"];
                    $surname = $worker_rows["surname"];
                    $shower = $name . " ". $surname;
                    echo "<span>". $shower . "</span>";

                }

                echo '</div></div>';

            }
        ?>
       </form>;

        
        
    </body>
</html>