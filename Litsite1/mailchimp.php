<?php
$email = 'nikithaaleti1257@gmail.com';
$list_id = '0a4fd4b089';
$api_key = 'b7d79cab836c822c07af5485f18c2843-us10';
 
$data_center = substr($api_key,strpos($api_key,'-')+1);
 $to_emails = array('mansi22ag@gmail.com');
    $to_names = array('Mansi');

    $message = array(
        'html'=>'Yo, this is the <b>html</b> portion',
        'text'=>'Yo, this is the *text* portion',
        'subject'=>'This is the subject',
        'from_name'=>'Me!',
        'from_email'=>'nikithaaleti1257@gmail.com',
        'to_email'=>$to_emails,
        'to_name'=>$to_names
    );

    $tags = array('WelcomeEmail');

    $params = array(
        'apikey'=>$api_key,
        'message'=>$message,
        'track_opens'=>true,
        'track_clicks'=>false,
        'tags'=>$tags
    );
$url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);
$result = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
echo $status_code;
echo "<pre>";print_r(json_decode($result));echo "</pre>";
?>