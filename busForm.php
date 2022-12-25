<!DOCTYPE html>
<html>
    <head>
        <title>Add BUS</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <div align='center'>
            <h2>COMPLETE THE FORM TO ADD NEW BUS</h2>
            <br><br>

            <form action="addBus.php" method="POST">
                <label for="plate">Plate</label><br>
                <input type="text" id="plate" name="plate" placeholder="Type plate.."><br>

                <label for="brand">Brand</label><br>
                <input type="text" id="brand" name="brand" placeholder="Type brand.."><br>

                <label for="bus_year">Bus Year</label><br>
                <input type="text" id="bus_year" name="bus_year" placeholder="Type year of the bus.."><br>

                <label for="capacity">Capacity</label><br>
                <input type="text" id="capacity" name="capacity" placeholder="Type capacity of the bus..."><br>

                <label for="is_wifi">Wifi</label><br>
                <select id="is_wifi" name="is_wifi"><br>

                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br>

                <label for="is_socket">Socket</label><br>
                <select id="is_socket" name="is_socket"><br>

                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br>

                <input type="submit" value="Submit">
            </form>

        </div>
    </body>
</html>