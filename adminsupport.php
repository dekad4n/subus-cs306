<?php
    include "config.php";
    $gname = "";
    if($_GET)
    {
        $gname = $_GET['name'];
    }
    else{
        $gname = $_POST['name'];

    }
    echo $gname . "<br>";
    $URL = "https://cs306-term-project-default-rtdb.firebaseio.com/Chats.json";

    header("refresh: 10 Location:chats.php?name=".$gname);

    function get_messages() { 
        global $URL;
        $ch = curl_init();
        curl_setopt_array($ch, [ CURLOPT_URL => $URL,
                                CURLOPT_POST => FALSE, // It will be a get request 
                                CURLOPT_RETURNTRANSFER => true, ]);
        $response = curl_exec($ch); 
        curl_close($ch);
        return json_decode($response, true); 
    }
    
    function send_msg($msg, $name) { 
        global $URL;
        $ch = curl_init();
        $msg_json = new stdClass();
        $msg_json->msg = $msg;
        $msg_json->name = $name;
        $msg_json->time = date('H:i');
        $encoded_json_obj = json_encode($msg_json); 
        curl_setopt_array($ch, array(CURLOPT_URL => $URL,
                                    CURLOPT_POST => TRUE,
                                    CURLOPT_RETURNTRANSFER => TRUE,
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json' ),
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch); 
        return $response;
    }

    $msg_res_json = get_messages();

    if (isset($_POST['usermsg'])) {
        $user_msg = $_POST['usermsg'];
        send_msg($user_msg, $gname);
        echo $user_msg;
    }

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles2.css">
</head>

<div class="menu">
<div class="back"><i class="fa fa-chevron-left"></i> <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/></div>
<div class="name">Support</div>
<div class="last">18:09</div>
</div>
<ol class="chat">
<?php
    $keys = array_keys($msg_res_json);
    $already_showed=  array();
    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        $time = $chat_msg['time'];
       
        if ($name == 'admin') {
            $from = 'other';
            $to = $chat_msg["to"];
            
            
        } else {
            $from = 'self';
        }
        if($name != "admin" && !in_array($name, $already_showed))
        {
            array_push($already_showed, $name);
            echo  '
       <li class="other">
       <div class="avatar">
                <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/>
            </div>
                <div class="msg">
                    <p><b>'.$name.'</b></p>
                    <p>'.$msg.'</p>
                    <time>'.$time.'</time>
                </div>
            </li>';
        }
        else{
            echo "";
        }
       
    }
?>
</ol>
<form name="form" action = "adminchat.php" method="POST">
    <input name="name" class="textarea" type="text" placeholder="Type here!"/>
  
    <input type="submit" style="display: none" />
</form>