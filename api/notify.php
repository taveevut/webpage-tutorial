<?php

define('LINE_API', "https://notify-api.line.me/api/notify");
define('LINE_TOKEN_API', "pi7JOPbklCs9mnodKZeNC19VkZn3Z1evi0fMQFH4MbN");  //ใส่Token ที่copy เอาไว้

$message = "\n-----/ สั่งซื้อสินค้า /-------\n";
$message .= "--/ สินค้า /-------\n";
$message .= $_POST['product'] . "\n";
$message .= "\n--/ ลูกค้า /-------\n";
$message .= "ชื่อ-สกลุ: " . $_POST['name'] . "\n";
$message .= "เบอร์โทรศัพท์: " . $_POST['tel'] . "\n";
$message .= "ที่อยู่สำหรับจัดส่งสินค้า: " . $_POST['address'] . "\n";
$message .= "รายละเอียดเพิ่มเติม: " . $_POST['remark'];

$queryData = array(
   'message'  => $message,
);
$queryData = http_build_query($queryData, '', '&');
$headerOptions = array(
   'http' => array(
      'method'  => 'POST',
      'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
         . "Authorization: Bearer " . LINE_TOKEN_API . "\r\n"
         . "Content-Length: " . strlen($queryData) . "\r\n",
      'content' => $queryData,
   ),
);
$context = stream_context_create($headerOptions);
$result = file_get_contents(LINE_API, FALSE, $context);

// return json_decode($result);
header("Location: /");