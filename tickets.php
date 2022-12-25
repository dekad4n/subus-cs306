<?php
    include "filter_tickets.php";
    if(!defined("URL"))
    {
        define("URL","tickets.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Trips</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tab.css">
    </head>
    <body align="center">
        <h1>Tickets</h1><br><br>
        <button class="tablink button-7" onclick="tabFilterTickets()">Press if you want to filter!</button>
        <div id="tab--content__tickets">
            <form id="filter--form__tickets" action="<?php echo URL; ?>" method="post">

                <label for="click">I want to enter id range</label>
                <input id="idCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__id" class="clearfix form-div active" >
                    <div class="label-div">
                        <label for="tid">Ticket ID:</label>

                    </div>
                    <input type="text" name="tid" placeholder="1">
                    <select name="tid-option" id="tid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>

                </div>
                
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="buy_date">Buy Date:</label>

                    </div>


                    <input type="text" name="buy_date" placeholder="24/10/2022">
                    <select name="buy_date-option" id="buy_date-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Customer ID:</label>

                    </div>

                    <input type="text" name="cid" placeholder="24/10/2022">
                    <select name="cid-option" id="cid-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div id="filter--form__bus_year" class="clearfix form-div filter--form__bus_year active">
                    <div class="label-div">
                    <label for="tripid">Trip ID:</label>

                    </div>


                    <input type="text" name="tripid" placeholder="1 or 0">
                    <select name="tripid-option" id="tripid-option">
                        <option value="=">Equals to</option>
                    </select>
                </div>
                

                
                



                <input type="submit" name="search_tickets" value="Filter"><br><br>
            </form>
        </div>

        <table>
            <tr>
                <th>TID</th>
                <th>Buy Date</th>
                <th>Customer Id</th>
                <th>Trip Id</th>

            </tr>

            <?php


                while($row = mysqli_fetch_assoc($result)){
                    $tid = $row['tid'];
                    $buy_date = $row['buy_date'];
                    $cid = $row['cid'];
                    $tripid = $row['tripid'];

                    echo "<tr>" . "<td>" . $tid . "</td>" . "<td>" . $buy_date . "</td>" . "<td>" . $cid . "</td>" . "<td>" . $tripid . "</td>";
                }
            ?>
        </table>

        <script src="tab.js">
            </script>

    </body>
</html>