<?php
    include "filter_customers.php";
    if(!defined("URL"))
    {
        define("URL","customers.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Customers</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="tab.css">
    </head>
    <body align="center">
        <h1>CUSTOMERS</h1><br><br>
        <button class="tablink button-7" onclick="tabFilter()">Press if you want to filter!</button>
        <div id="tab--content">
            <form id="filter--form" action="<?php echo URL; ?>" method="post">
            
                <div id="filter--form__id" class="clearfix form-div active" >
                    <div class="label-div">
                        <label for="cid">Customer ID:</label>

                    </div>
                    <input type="text" name="cid" placeholder="1">
                    <select name="cid-option" id="cid-option">
                        <option value="=">Equals to</option>
                        <option value=">">Greater than</option>
                        <option value="<">Less than</option>
                        <option value=">=">Greater or Equals to</option>
                        <option value="<=">Less or Equals to</option>
                    </select>
                    
                </div>
                <div id="filter--form__id2" class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Customer ID:</label>

                    </div>
                    <input type="text" name="cid1" placeholder="1">
                    <span> - </span>
                    <input type="text" name="cid2" placeholder="53">

                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Name:</label>

                    </div>


                    <input type="text" name="cname" placeholder="John">
                    <select name="cname-option" id="cname-option">
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

                    <input type="text" name="csurname" placeholder="Dilemma">
                    <select name="csurname-option" id="csurname-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>                 
                </div>
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
                    <label for="cid">Age Range:</label>

                    </div>

                    <input type="text" name="age1" placeholder="1">
                    <span> - </span>
                    <input type="text" name="age2" placeholder="35">

                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">SSN:</label>

                    </div>


                    <input type="text" name="ssn" placeholder="12341252120">
                    <select name="ssn-option" id="ssn-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>              
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Phone Number:</label>

                    </div>


                    <input type="text" name="telephone" placeholder="5455021593">
                    <select name="telephone-option" id="telephone-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>             
                </div>
                <div class="clearfix form-div">
                    <div class="label-div">
                    <label for="cid">Email:</label>

                    </div>


                    <input type="text" name="mail" placeholder="example@database.com">
                    <select name="mail-option" id="mail-option">
                        <option value="c">Contains</option>
                        <option value="eq">Equals to</option>
                        <option value="s">Starts with</option>
                        <option value="en">Ends with</option>
                    </select>
                </div>
                <input type="submit" name="search_customers" value="Filter"><br><br>
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
                <th>PHONE NUMBER</th>
                <th>E-MAIL</th>

            </tr>

            <?php 
                

                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['cid'];
                    $name = $row['cname'];
                    $surname = $row['csurname'];
                    $age = $row['age'];
                    $ssn = $row['ssn'];
                    $gender = $row['gender'];
                    $telephone = $row['telephone'];
                    $mail = $row['mail'];

                    echo "<tr>" . "<td>" . $id . "</td>" . "<td>" . $name . "</td>" . "<td>" . $surname . "</td>" . "<td>" . $age . "</td>" . "<td>" . $ssn . "</td>" . "<td>" . $gender . "</td>" . "<td>" . $telephone . "</td>" . "<td>" . $mail . "</td>" ."</tr>";
                }
            ?>
        </table>
        
        <script src="tab.js">
            </script>

    </body>
</html>