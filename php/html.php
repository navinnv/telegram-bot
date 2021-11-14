<?php 
    $apiToken = "XXXXXXXXXX:XXXXXXXXXXXX_XXXXXXXXXX"; // PLACE API KEY FROM BOT MASTER HERE
    $data = [
        'chat_id' => '@<YOUR CHANNEL ID>', // PLACE RESPONDING CHANNEL CHAT ID EITHER NAME OR ID
        
        /*
            Don't Forget to place "@" before channel name/id
        */

        'text' =>   @' <a style="color: red" href="example.com">Read More</a>'.
                    @' < style="color: red" href="example.com">Read More</>'  , // Your HTML FORMAT to be sent to channel via bot
        
        'parse_mode'=>'HTML'
        
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
?>