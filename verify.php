<?php
$access_token = '187XNu4NuZLewXkyjiMfLhHhjum7W89wSxQdTQUJ7eH5qnhOTNqdJko8Of+hvXXUQD3cjQNp1PDfob1joHuZVq79sdcOrHd8sPHTaklk+AQmqRk/k/i9hky61BG25XTb9LCQq2SlZPzET1YUpWgC7AdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
