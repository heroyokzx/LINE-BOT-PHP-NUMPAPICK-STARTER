 <?php
  

function send_LINE($msg){
 $access_token = 'OH2rE4pvSRBzan9w/sp9xmtOxxcCo6gNtUQPWtfpopdfi2by9sEuMzbMlkMFNrofv80beyU8tJSlHx/Jktpw46gk7EsZePXOX/NuIJ2Qn2QMlDLiia9r2Pryql7UOjtHA59N8Pj0dwy4BIxOxWi0XgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U85c9fd8179a3fba4031e50534a9d12b8',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
