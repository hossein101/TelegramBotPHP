<?php
ob_start();
define('API_KEY','291955359:AAGR0yJ5EW3v5JytF7YUwAkf9JcHm5HTi0w');
$admin = "262171688";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
}elseif(preg_match('/^\/([Ss]tart)/',$text1)){
  $text = "سلام بای :D";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'😸 Channel 😸','url'=>'https://telegram.me/Red_Ch']
        ],
        [
          ['text'=>'🔰سازنده بات🔰','url'=>'https://telegram.me/SiCk_KoN_BaW']
        ],
	[
          ['text'=>'👥 Add To Group ➕','url'=>'https://telegram.me/donteditt_bot?startgroup=new']
        ]
      ]
    ])
  ]);
$text = $telegram->Text();
$chat_id = $telegram->262171688();
// Check if the text is a command
if(!is_null($text) && !is_null($chat_id)){
	if ($text == "/test") {
		if ($telegram->messageFromGroup()) {
			$reply = "Chat Group";
		} else {
			$reply = "Private Chat";
		}
	        // Create option for the custom keyboard. Array of array string
	        $option = array( array("A", "B"), array("C", "D") );
	        // Get the keyboard
		$keyb = $telegram->buildKeyBoard($option);
		$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => $reply);
		$telegram->sendMessage($content);
	}
	if ($text == "/darkhand") {
	    $reply = "https://telegram.me/SiCk_KoN_BaW";
	    // Build the reply array
	    $content = array('chat_id' => $chat_id, 'text' => $reply);
	    $telegram->sendMessage($content);
	}
	
	if ($text == "/img") {
	    // Load a local file to upload. If is already on Telegram's Servers just pass the resource id
	    $img = curl_file_create('test.png','image/png'); 
	    $content = array('chat_id' => $chat_id, 'photo' => $img );
	    $telegram->sendPhoto($content);
	    //Download the file just sended
	    $file_id = $message["photo"][0]["file_id"];
	    $file = $telegram->getFile($file_id);
	    $telegram->downloadFile($file["file_path"], "./test_download.png");
	}
	
	if ($text == "/where") {
	    // Send the Catania's coordinate
	    $content = array('chat_id' => $chat_id, 'latitude' => "37.5", 'longitude' => "15.1" );
	    $telegram->sendLocation($content);
	}
}
?>
