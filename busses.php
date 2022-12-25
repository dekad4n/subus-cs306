<?php
    include "filter_busses.php";
    if(!defined("URL"))
    {
        define("URL","busses.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Busses</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tab.css">
    </head>
    <body align="center">
        <h1>BUSSES</h1><br><br>
        <button class="tablink button-7" onclick="tabFilterBusses()">Press if you want to filter!</button>
        <div id="tab--content__busses">
            <form id="filter--form__busses" action="<?php echo URL; ?>" method="post">

                <label for="click">I want to enter id range</label>
                <input id="idCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__id" class="clearfix form-div active" >
                    <div class="label-div">
                        <label for="cid">Bus ID:</label>

                    </div>
                    <input type="text" name="bid" placeholder="1">
                    <select name="bid-option" id="bid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>

                </div>
                <div id="filter--form__id2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Bus ID:</label>

                    </div>
                    <input type="text" name="bid1" placeholder="1">
                    <span> - </span>
                    <input type="text" name="bid2" placeholder="53">

                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Name:</label>

                    </div>


                    <input type="text" name="plate" placeholder="34ATA34">
                    <select name="plate-option" id="plate-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Surname:</label>

                    </div>

                    <input type="text" name="brand" placeholder="MAN">
                    <select name="brand-option" id="brand-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <label for="click">I want to enter year range</label>
                <input id="yearCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__bus_year" class="clearfix form-div filter--form__bus_year active">
                    <div class="label-div">
                    <label for="cid">Year:</label>

                    </div>


                    <input type="text" name="bus_year" placeholder="2016">
                    <select name="bus_year-option" id="bus_year-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>
                <div id="filter--form__bus_year2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Year Range:</label>

                    </div>

                    <input type="text" name="bus_year1" placeholder="2000">
                    <span> - </span>
                    <input type="text" name="bus_year2" placeholder="2020">

                </div>

                <div id="filter--form__capacity" class="clearfix form-div filter--form__capacity active">
                    <div class="label-div">
                    <label for="cid">Year:</label>

                    </div>


                    <input type="text" name="capacity" placeholder="2016">
                    <select name="capacity-option" id="capacity-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>
                <div id="filter--form__capacity2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Capacity Range:</label>

                    </div>

                    <input type="text" name="capacity1" placeholder="2000">
                    <span> - </span>
                    <input type="text" name="capacity2" placeholder="2020">

                </div>



                <input type="submit" name="search_busses" value="Filter"><br><br>
            </form>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>PLATE</th>
                <th>BRAND</th>
                <th>YEAR</th>
                <th>CAPACITY</th>
                <th>WIFI</th>
                <th>SOCKET</th>

            </tr>

            <?php


                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['bid'];
                    $plate = $row['plate'];
                    $brand = $row['brand'];
                    $bus_year = $row['bus_year'];
                    $capacity = $row['capacity'];
                    $is_wifi = $row['is_wifi'];
                    $is_socket = $row['is_socket'];

                    echo "<tr>" . "<td>" . $id . "</td>" . "<td>" . $plate . "</td>" . "<td>" . $brand . "</td>" . "<td>" . $bus_year . "</td>" . "<td>" . $capacity . "</td>" . "<td>" . $is_wifi . "</td>" . "<td>" . $is_socket . "</td>";
                }
            ?>
        </table>

        <script src="tab.js">
            </script>

    </body>
</html>