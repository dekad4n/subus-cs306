<!DOCTYPE html>
<html>
    <head>
        <title>Add Trips</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <?php include "config.php";?>
        <div align='center'>    
            <h2>COMPLETE THE FORM TO ADD NEW LOCATION</h2>
            <br><br>

            <form action="addLocation.php" method="POST">
                <label for="name">NAME</label><br>
                <input type="text" id="name" name="name" placeholder="Type name.."><br>

                <label for="city">City</label><br>
                <input type="text" id="city" name="city" placeholder="Type city.."><br>

                
                
                
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </body>
</html>