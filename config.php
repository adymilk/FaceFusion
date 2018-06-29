<?php 
// 设置请求数据
$appkey = 'DclNhNeDCgWy0uLB';
$params = array(
    'app_id'     => '1107004608',
    'image'      => $base64,
    'model'      => $model,
    'time_stamp' => strval(time()),
    'nonce_str'  => strval(rand()),
    'sign'       => '',
);

 ?>