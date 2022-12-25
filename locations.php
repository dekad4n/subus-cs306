<?php
    include "filter_locations.php";
    if(!defined("URL"))
    {
        define("URL","locations.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Locations</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tab.css">
    </head>
    <body align="center">
        <h1>Locations</h1><br><br>
        <button class="tablink button-7" onclick="tabFilterLocations()">Press if you want to filter!</button>
        <div id="tab--content__locations">
            <form id="filter--form__locations" action="<?php echo URL; ?>" method="post">

                <label for="click">I want to enter lid range</label>
                <input id="idCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__id" class="clearfix form-div active" >
                    <div class="label-div">
                        <label for="lid">Location ID:</label>

                    </div>
                    <input type="text" name="lid" placeholder="1">
                    <select name="lid-option" id="lid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>

                </div>
                
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="name">Name:</label>

                    </div>


                    <input type="text" name="name" placeholder="24/10/2022">
                    <select name="name-option" id="name-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="city">City:</label>

                    </div>

                    <input type="text" name="city" placeholder="24/10/2022">
                    <select name="city-option" id="city-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                
                

                
                



                <input type="submit" name="search_locations" value="Filter"><br><br>
            </form>
        </div>

        <table>
            <tr>
                <th>LID</th>
                <th>CITY</th>
                <th>NAME</th>

            </tr>

            <?php


                while($row = mysqli_fetch_assoc($result)){
                    $lid = $row['lid'];
                    $name = $row['name'];
                    $city = $row['city'];

                    echo "<tr>" . "<td>" . $lid . "</td>" . "<td>" . $name . "</td>" . "<td>" . $city . "</td>" . "<td>" . $end_date . "</td>";
                }
            ?>
        </table>

        <script src="tab.js">
            </script>

    </body>
</html>