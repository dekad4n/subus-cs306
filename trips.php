<?php
    include "filter_trips.php";
    if(!defined("URL"))
    {
        define("URL","trips.php");
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
        <h1>Trips</h1><br><br>
        <button class="tablink button-7" onclick="tabFilterTrips()">Press if you want to filter!</button>
        <div id="tab--content__trips">
            <form id="filter--form__trips" action="<?php echo URL; ?>" method="post">

                <label for="click">I want to enter id range</label>
                <input id="idCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__id" class="clearfix form-div active" >
                    <div class="label-div">
                        <label for="trid">Trip ID:</label>

                    </div>
                    <input type="text" name="trid" placeholder="1">
                    <select name="trid-option" id="trid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>

                </div>
                <div id="filter--form__id2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="price">Price</label>

                    </div>
                    <input type="text" name="price1" placeholder="1">
                    <span> - </span>
                    <input type="text" name="price2" placeholder="53">

                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="startdate">Start Date:</label>

                    </div>


                    <input type="text" name="startdate" placeholder="24/10/2022">
                    <select name="startdate-option" id="startdate-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="arrivaldate">Arrival Date:</label>

                    </div>

                    <input type="text" name="arrivaldate" placeholder="24/10/2022">
                    <select name="arrivaldate-option" id="arrivaldate-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div id="filter--form__bus_year" class="clearfix form-div filter--form__bus_year active">
                    <div class="label-div">
                    <label for="isService">Year:</label>

                    </div>


                    <input type="text" name="isService" placeholder="1 or 0">
                    <select name="isService-option" id="isService-option">
                        <option value="=">Equals to</option>
                    </select>
                </div>
                

                <div id="filter--form__capacity" class="clearfix form-div filter--form__capacity active">
                    <div class="label-div">
                    <label for="bid">Bus ID:</label>

                    </div>


                    <input type="text" name="bid" placeholder="20">
                    <select name="bid-option" id="bid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>

                <div id="filter--form__capacity" class="clearfix form-div filter--form__capacity active">
                    <div class="label-div">
                    <label for="startslid">Start location ID:</label>

                    </div>


                    <input type="text" name="startslid" placeholder="20">
                    <select name="startslid-option" id="startslid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>
                <div id="filter--form__capacity" class="clearfix form-div filter--form__capacity active">
                    <div class="label-div">
                    <label for="endslid">End location ID:</label>

                    </div>


                    <input type="text" name="endslid" placeholder="20">
                    <select name="endslid-option" id="endslid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>
                



                <input type="submit" name="search_trips" value="Filter"><br><br>
            </form>
        </div>

        <table>
            <tr>
                <th>TRID</th>
                <th>PRICE</th>
                <th>START DATE</th>
                <th>END DATE</th>
                <th>Does Include Service</th>
                <th>BID</th>
                <th>START LOCATION ID</th>
                <th>END LOCATION ID</th>

            </tr>

            <?php


                while($row = mysqli_fetch_assoc($result)){
                    $trid = $row['trid'];
                    $price = $row['price'];
                    $start_date = $row['startdate'];
                    $end_date = $row['arrivaldate'];
                    $isService = $row['isService'];
                    $bid = $row['bid'];
                    $starts_lid = $row['startslid'];
                    $ends_lid = $row['endslid'];

                    echo "<tr>" . "<td>" . $trid . "</td>" . "<td>" . $price . "</td>" . "<td>" . $start_date . "</td>" . "<td>" . $end_date . "</td>" . "<td>" . $isService . "</td>" . "<td>" . $bid . "</td>" . "<td>" . $starts_lid . "</td>". "<td>" . $ends_lid . "</td>";
                }
            ?>
        </table>

        <script src="tab.js">
            </script>

    </body>
</html>