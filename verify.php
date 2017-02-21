<?php
$access_token = 'ZU9onrZtoQYLo4b6YkOkteQHweoUjCPoFOkhZhT7kr8T8AjIBT9OKqo3YF5GTtQpbh64ku1vkB4rywqBoX9T8OgdrlmkX2PravYShuSIJCe935qxF7Pt9dXvBc5d7HuKEF6bhPeCvqRIw4KAQubThwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
