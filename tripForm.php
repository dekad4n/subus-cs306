<!DOCTYPE html>
<html>
    <head>
        <title>Add Trips</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <?php include "config.php";?>
        <div align='center'>    
            <h2>COMPLETE THE FORM TO ADD NEW TRIP</h2>
            <br><br>

            <form action="addTrip.php" method="POST">
                <label for="price">Price</label><br>
                <input type="text" id="price" name="price" placeholder="Type price.."><br>

                <label for="start_date">Start Date</label><br>
                <input type="datetime-local" id="start_date" name="start_date" placeholder="Type start date.."><br>

                <label for="arrival_date">End Date</label><br>
                <input type="datetime-local" id="arrival_date" name="arrival_date" placeholder="Type end_date.."><br>

                <label for="isService">Does Include Service</label><br>
                <select id="isService" name="isService"><br>

                    <option value=1 >True</option>
                    <option value=0>False</option>
                </select><br>
                <label for="bid">Select Bus</label><br>
                <select name="bid">
                    <?php

                $sql_command = "SELECT * FROM busses";
                $myresult = mysqli_query($db, $sql_command);
                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $bid = $id_rows['bid'];
                    $plate = $id_rows['plate'];
                    $brand = $id_rows['brand'];
                    $show = $plate . " " . $brand;
                    echo "<option value=$bid>" . $show . "</option>";
                }
                ?>
                </select><br>
                <label for="starts_lid">Start Location</label><br>

                <select name="starts_lid">
                    <?php

                $sql_command = "SELECT * FROM locations";
                $myresult = mysqli_query($db, $sql_command);
                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $lid = $id_rows['lid'];
                    $name = $id_rows['name'];
                    $city = $id_rows['city'];
                    $show = $city . " " . $name;
                    echo "<option value=$lid>" . $show . "</option>";
                }
                ?>
                </select><br>
                <label for="ends_lid">End Location</label><br>

                <select name="ends_lid">
                    <?php

                    $sql_command = "SELECT * FROM locations";
                    $myresult = mysqli_query($db, $sql_command);
                    while($id_rows = mysqli_fetch_assoc($myresult)){
                        $lid = $id_rows['lid'];
                        $name = $id_rows['name'];
                        $city = $id_rows['city'];
                        $show = $city . " " . $name;
                        echo "<option value=$lid>" . $show . "</option>";
                }
                ?>
                </select>
                
                
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </body>
</html>