<?php 
// 设置请求数据
$appkey = '';
$params = array(
    'app_id'     => '',
    'image'      => $base64,
    'model'      => $model,
    'time_stamp' => strval(time()),
    'nonce_str'  => strval(rand()),
    'sign'       => '',
);

 ?>