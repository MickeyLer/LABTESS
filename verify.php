<?php 
  $access_token = '9X89LSe2o0SVcq3UlQZpDgVxMa36OKjDi2GS99Svmthkml2Zf/nB8K5/yxzWq4VOrefvJZQsdHjeBjvLaGozxaU/YJqsKYE0TeeLV7oJgIzWeSEuJ/Ykv7HvXSjCJpTaeJVNuxx/JgZPcqHshvS+LgdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
