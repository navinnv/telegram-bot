<?php
    $apiToken = "XXXXXXXXXX:XXXXXXXXXXXX_XXXXXXXXXX";  // PLACE API KEY FROM BOT MASTER HERE
    $data = [
        'chat_id' => '@<YOUR CHANNEL ID>', // PLACE RESPONDING CHANNEL CHAT ID EITHER NAME OR ID
        
        /*
            Don't Forget to place "@" before channel name/id
        */

        'photo' => '< IMAGE PATH / IMAGE URL >', // YOUR IMAGE TO BE SHARE TO CHANNEL 
        'caption' => '< IMAGE CAPTION >'  // YOUR IMAGE TO BE SHARE TO CHANNEL 
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendPhoto?" . http_build_query($data) );
?>