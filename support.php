<!DOCTYPE html>
<html>
    <head>
        <title>Add Trips</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <?php include "config.php";?>
        <div align='center'>    
            <h2>Chat with admin</h2>
            <br><br>

            <form action="chats.php" method="POST">
                <label for="gender">Subject</label><br>
                <select id="gender" name="gender"><br>

                    <option value="change">Change Ticket</option>
                    <option value="cancel">Cancel Ticket</option>
                    <option value="general">General</option>
                    <option value="complaint">Complaint</option>
                </select><br>
                <label for="name">NAME</label><br>
                <input type="text" id="name" name="name" placeholder="Type your name.."><br>

                <input type="submit" value="Submit">
            </form>
            
        </div>
    </body>
</html>