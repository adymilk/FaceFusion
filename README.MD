## 腾讯人工智能 人脸融合 demo

采用腾讯AI 人脸融合 API

功能类似前端时间微信里比较火的换军装H5

[在线体验地址](http://suo.im/4YyUrc)

## 提示
clone 之后把config_temp.php 重命名为 config.php, 然后填写自己在腾讯AI 平台的申请的配置信息。

```json
'app_id'     => '',#填写你自己的
    'image'      => $base64,
    'model'      => $model,
    'time_stamp' => strval(time()),
    'nonce_str'  => strval(rand()),
    'sign'       => '',
```

## TODO
添加了自定义图片模板