<!DOCTYPE html>
<html>
    <head>
        <title>Add Worker</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <div align='center'>
            <h2>COMPLETE THE FORM TO ADD NEW WORKER</h2>
            <br><br>

            <form action="addWorker.php" method="POST">
                <label for="worker_name">Name</label><br>
                <input type="text" id="worker_name" name="worker_name" placeholder="Type name.."><br>

                <label for="worker_surname">Surname</label><br>
                <input type="text" id="worker_surname" name="worker_surname" placeholder="Type surname.."><br>

                <label for="worker_ssn">Identity Number</label><br>
                <input type="text" id="worker_ssn" name="worker_ssn" placeholder="Type your identity number.."><br>

                <label for="gender">Gender</label><br>
                <select id="gender" name="gender"><br>

                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>

                <label for="age">Age</label><br>
                <input type="text" id="age" name="age" placeholder="Type age..."><br>

                <label for="salary">Salary</label><br>
                <input type="text" id="salary" name="salary" placeholder="Type salary..."><br>

                <label for="worker_role">Role</label><br>
                <select id="worker_role" name="worker_role"><br>

                    <option value="Driver">Driver</option>
                    <option value="Bus Conductor">Bus Conductor</option>
                    <option value="Salesperson">Salesperson</option>

                </select><br>

                <input type="submit" value="Submit">
            </form>

        </div>
    </body>
</html>