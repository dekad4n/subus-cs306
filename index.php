<!DOCTYPE html>
<html>
    <head>
        <title>SUBUS</title>
        <link rel="stylesheet" href="navbar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        <div id="navbar-animmenu">

            <ul class="show-dropdown main-navbar nav justify-content-end">
                <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="active left">
                <a href="javascript:void('home.html');">Home</a>
            </li>
            <li class="left">
                <a href="javascript:void('myTickets.php');">My Tickets</a>
            </li>
            <li class="left">
                <a href="javascript:void('buyTickets.php');">Buy Tickets</a>
            </li>
            <li class="left">
                <a href="javascript:void('tripForm.php');">Add Trips</a>
            </li>
            <li >
                <a href="javascript:void('customerForm.php');"></i>New Customer</a>
            </li>
            
           <li >
                <a href="javascript:void('workerForm.php');"></i>New Worker</a>
            </li>
            
            <li >
                <a href="javascript:void('busForm.php');"></i>New Bus</a>
            </li>
            <li >
                <a href="javascript:void('locationForm.php');"></i>New Location</a>
            </li>
            <li >
                <a href="javascript:void('support.php');"></i>Support</a>
            </li>
            <li>
                <a href="javascript:void('admin.php');">Admin Page</a>
            </li>
            <li>
                <a href="adminsupport.php">Admin Support</a>
            </li>
            </ul>
        </div>
        
        <div id="content" align="center">
            <?php include "home.html";?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="./navbar.js"></script>
    <script type="text/javascript" src="./back.js"></script>
    </body>
</html>