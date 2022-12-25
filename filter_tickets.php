<?php
    include "config.php";



    if(isset($_POST["search_tickets"]))
    {
        $add_AND = false;
        $add_WHERE = false;
        $sql_statement = "SELECT * FROM tickets";
        $filter_states = "";

        foreach($_POST as $key=>$var)
        {
            if($key != "search_tickets" && $key != "click" && $key != "cage" && !strpos($key,"option") && !strpos($key,"2"))
            {

                if(($key === "cid"  &&!empty($_POST["cid"])) || ($key ==="age" && !empty($_POST["age"])))
                {
                    if($add_AND)
                    {
                        $filter_states = addAndToQ($filter_states);
                    }

                    $filter_states = $filter_states." ".$key. " ".$_POST[$key."-option"]." ".$_POST[$key];

                    $add_AND = true;
                    $add_WHERE = true;
                }
                else if($key ==="cid1" || $key == "cid2" || $key ==="age1" || $key ==="age2"){
                    if($key ==="cid1" && !empty($_POST["cid1"]) || ($key ==="age1" && !empty($_POST["age1"]))){
                        $keysubstr =  mb_substr($key, 0, 3);
                        if($add_AND)
                        {
                            $filter_states = addAndToQ($filter_states);
                        }
                        if(isset($_POST[$keysubstr."2"]) &&  !empty($_POST[$keysubstr."2"]))
                        {
                            $filter_states = $filter_states." ".$keysubstr. " > ".$_POST[$keysubstr."1"]." AND ".$keysubstr." < ".$_POST[$keysubstr."2"];
                        }
                        $add_AND = true;
                        $add_WHERE = true;
                    }

                }
                else{
                    if(!empty($_POST[$key]))
                    {
                        if($add_AND)
                        {
                            $filter_states = addAndToQ($filter_states);

                        }
                        if($_POST[$key."-option"] == "c")
                        {
                            $name = "'%$_POST[$key]%'";
                        }
                        else if($_POST[$key."-option"] == "eq")
                        {
                            $name = "'$_POST[$key]'";
                        }
                        else if($_POST[$key."-option"] == "s")
                        {
                            $name = "'$_POST[$key]%'";
                        }
                        else{
                            $name = "'%$_POST[$key]'";
                        }
                        $filter_states = $filter_states." ".$key." LIKE $name";
                        $add_AND = true;
                        $add_WHERE = true;
                    }
                }
            }
        }
        if($add_WHERE)
        {
            $sql_statement = $sql_statement." WHERE ".$filter_states;
        }
        // throw new ErrorException($sql_statement);
        $result = mysqli_query($db, $sql_statement);

    }
    else{

        $sql_statement = "SELECT * FROM tickets";
        $result = mysqli_query($db, $sql_statement);
    }

?>