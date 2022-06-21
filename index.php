<?php

$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);

//https://api.telegram.org/bot5563248628:AAHYuxUFkzcNvdhTx40Z9j41yDRoEsPr1d8/setwebhook?url=https://cm07176.tmweb.ru/public_html/index.php


$token = '5563248628:AAHYuxUFkzcNvdhTx40Z9j41yDRoEsPr1d8';


$message = $data['message']['text'];


$params = [
    'chat_id' => $data['message']['chat']['id'],
    'text'    => $message
];


file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));