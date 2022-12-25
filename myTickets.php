<?php
    include "seeTicket.php";
    if(!defined("URL"))
    {
        define("URL","myTickets.php");
    }

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
        <form action="<?php echo URL; ?>" name="Form" method="POST" onsubmit="return validateForm()">;
        <div class ="random"></div>
        
            <label for="cid">Customer id:</label><br>
            <input type="text" id="cid" name="cid" placeholder="Your id"><br>
            
            <input type="submit" name="seeTicket" value="Filter"><br><br>
            <?php 
            
            $sql_command = "SELECT * FROM trips";
            $myresult = mysqli_query($db, $sql_command);
            
        ?>
       </form>;

    
       <table>
            <tr>
                <th>TID</th>
                <th>Buy Date</th>
                <th>Customer Id</th>
                <th>Trip Id</th>

            </tr>

            <?php


                while($result != null &&    $row = mysqli_fetch_assoc($result)){
                    $tid = $row['tid'];
                    $buy_date = $row['buy_date'];
                    $cid = $row['cid'];
                    $tripid = $row['tripid'];

                    echo "<tr>" . "<td>" . $tid . "</td>" . "<td>" . $buy_date . "</td>" . "<td>" . $cid . "</td>" . "<td>" . $tripid . "</td>";
                }
            ?>
        </table>

        
        
    </body>
</html>