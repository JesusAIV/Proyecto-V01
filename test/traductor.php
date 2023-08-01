<?php

$language_from = 'en';

$text_to_translate = "users";

$language_to = 'es';

$encoded_text = urlencode(strip_tags($text_to_translate));

$url = 'https://translate.googleapis.com/translate_a/single?client=gtx&sl=' . $language_from . '&tl=' . $language_to . '&dt=t&q=' . $encoded_text;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');
$output = curl_exec($ch);
curl_close($ch);

$response_a = json_decode($output);

echo $response_a[0][0][1];