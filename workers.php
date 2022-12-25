<?php
    include "filter_workers.php";
    if(!defined("URL"))
    {
        define("URL","workers.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Workers</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tab.css">
    </head>
    <body align="center">
        <h1>WORKERS</h1><br><br>
        <button class="tablink button-7" onclick="tabFilterWorkers()">Press if you want to filter!</button>
        <div id="tab--content__workers">
            <form id="filter--form__workers" action="<?php echo URL; ?>" method="post">

                <label for="click">I want to enter id range</label>
                <input id="idCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__id" class="clearfix form-div active" >
                    <div class="label-div">
                        <label for="wid">Worker ID:</label>

                    </div>
                    <input type="text" name="wid" placeholder="1">
                    <select name="wid-option" id="wid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>

                </div>
                <div id="filter--form__id2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="wid">Worker ID:</label>

                    </div>
                    <input type="text" name="wid1" placeholder="1">
                    <span> - </span>
                    <input type="text" name="wid2" placeholder="53">

                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="worker_name">Name:</label>

                    </div>


                    <input type="text" name="worker_name" placeholder="John">
                    <select name="worker_name-option" id="worker_name-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="worker_surname">Surname:</label>

                    </div>

                    <input type="text" name="worker_surname" placeholder="Dilemma">
                    <select name="worker_surname-option" id="worker_surname-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <label for="click">I want to enter age range</label>
                <input id="ageCheckbox" name="click" type="checkbox"/>
                <div id="filter--form__age" class="clearfix form-div filter--form__age active">
                    <div class="label-div">
                    <label for="cid">Age:</label>

                    </div>


                    <input type="text" name="age" placeholder="21">
                    <select name="age-option" id="cid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>
                <div id="filter--form__age2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="age">Age Range:</label>

                    </div>

                    <input type="text" name="age1" placeholder="1">
                    <span> - </span>
                    <input type="text" name="age2" placeholder="35">

                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="worker_ssn">SSN:</label>

                    </div>


                    <input type="text" name="worker_ssn" placeholder="12341252120">
                    <select name="worker_ssn-option" id="worker_ssn-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <div id="filter--form__salary" class="clearfix form-div filter--form__salary active">
                    <div class="label-div">
                    <label for="salary">Salary:</label>

                    </div>


                    <input type="text" name="salary" placeholder="5000">
                    <select name="salary-option" id="wid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                </div>
                <div id="filter--form__salary2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="salary1">Age Range:</label>

                    </div>

                    <input type="text" name="salary1" placeholder="3000">
                    <span> - </span>
                    <input type="text" name="salary2" placeholder="7000">

                </div>
                <input type="submit" name="search_workers" value="Filter"><br><br>
            </form>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>AGE</th>
                <th>SSN</th>
                <th>GENDER</th>
                <th>SALARY</th>
                <th>ROLE</th>

            </tr>

            <?php


                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['wid'];
                    $worker_name = $row['worker_name'];
                    $worker_surname = $row['worker_surname'];
                    $age = $row['age'];
                    $worker_ssn = $row['worker_ssn'];
                    $gender = $row['gender'];
                    $salary = $row['salary'];
                    $worker_role = $row['worker_role'];

                    echo "<tr>" . "<td>" . $id . "</td>" . "<td>" . $worker_name . "</td>" . "<td>" . $worker_surname . "</td>" . "<td>" . $age . "</td>" . "<td>" . $worker_ssn . "</td>" . "<td>" . $gender . "</td>" . "<td>" . $salary . "</td>" . "<td>" . $worker_role . "</td>" ."</tr>";
                }
            ?>
        </table>

        <script src="tab.js">
            </script>

    </body>
</html>