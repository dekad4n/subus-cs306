<!DOCTYPE html>
<html>
    <head>
        <title>Add Customer</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
    
        <div align='center'>    
            <h2>COMPLETE THE FORM TO ADD NEW CUSTOMER</h2>
            <br><br>

            <form action="addCustomer.php" method="POST">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" placeholder="Type name.."><br>

                <label for="surname">Surname</label><br>
                <input type="text" id="surname" name="surname" placeholder="Type surname.."><br>

                <label for="ssn">Identity Number</label><br>
                <input type="text" id="ssn" name="ssn" placeholder="Type your identity number.."><br>

                <label for="gender">Gender</label><br>
                <select id="gender" name="gender"><br>

                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>
            
                <label for="age">Age</label><br>
                <input type="text" id="age" name="age" placeholder="Type age..."><br>

                <label for="telephone">Phone Number</label><br>
                <input type="text" id="telephone" name="telephone" placeholder="5XX XXX XXXX"><br>
                
                <label for="mail">E-Mail</label><br>
                <input type="text" id="mail" name="mail" placeholder="test@mail.com"><br>
                
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </body>
</html>