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
    $URL = "https://cs306-term-project-default-rtdb.firebaseio.com/Chats.json";

    header("refresh: 10 Location:adminchat.php?name=".$gname);

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
    
    function send_msg($msg, $name, $to) { 
        global $URL;
        $ch = curl_init();
        $msg_json = new stdClass();
        $msg_json->msg = $msg;
        $msg_json->name = $name;
        $msg_json->to = $to;
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
        send_msg($user_msg, "admin", $gname);
        header("Location:adminchat.php?name=".$gname);
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
    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        $time = $chat_msg['time'];
       
        if ($name == 'admin') {
            $from = 'self';
            $to = $chat_msg["to"];
            
            
        } else {
            $from = 'other';
        }
        if($name == $gname || ($name == "admin" && ($to == $gname)))
        {
            echo  '
       <li class="'.$from.'">
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
    <input name="usermsg" class="textarea" type="text" placeholder="Type here!"/>
    <input type="text" name="name" style="display:none;" value="<?=$gname?>">
    <input type="submit" style="display: none" />
</form>