<?php 



// 图片base64编码
$path = $_FILES["file"]["tmp_name"];
$data   = file_get_contents($path);
$base64 = base64_encode($data);

include 'config.php';

$params['sign'] = getReqSign($params, $appkey);

// 执行API调用
$url = 'https://api.ai.qq.com/fcgi-bin/ptu/ptu_facemerge';
$response = doHttpPost($url, $params);



// getReqSign ：根据 接口请求参数 和 应用密钥 计算 请求签名
// 参数说明
//   - $params：接口请求参数（特别注意：不同的接口，参数对一般不一样，请以具体接口要求为准）
//   - $appkey：应用密钥
// 返回数据
//   - 签名结果
function getReqSign($params /* 关联数组 */, $appkey /* 字符串*/)
{
    // 1. 字典升序排序
    ksort($params);

    // 2. 拼按URL键值对
    $str = '';
    foreach ($params as $key => $value)
    {
        if ($value !== '')
        {
            $str .= $key . '=' . urlencode($value) . '&';
        }
    }

    // 3. 拼接app_key
    $str .= 'app_key=' . $appkey;

    // 4. MD5运算+转换大写，得到请求签名
    $sign = strtoupper(md5($str));
    return $sign;
}


// doHttpPost ：执行POST请求，并取回响应结果
// 参数说明
//   - $url   ：接口请求地址
//   - $params：完整接口请求参数（特别注意：不同的接口，参数对一般不一样，请以具体接口要求为准）
// 返回数据
//   - 返回false表示失败，否则表示API成功返回的HTTP BODY部分
function doHttpPost($url, $params)
{
    $curl = curl_init();

    $response = false;
    do
    {
        // 1. 设置HTTP URL (API地址)
        curl_setopt($curl, CURLOPT_URL, $url);

        // 2. 设置HTTP HEADER (表单POST)
        $head = array(
            'Content-Type: application/x-www-form-urlencoded'
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

        // 3. 设置HTTP BODY (URL键值对)
        $body = http_build_query($params);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $body);

        // 4. 调用API，获取响应结果
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_NOBODY, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
        if ($response === false)
        {
            $response = false;
            break;
        }

        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($code != 200)
        {
            $response = false;
            break;
        }
    } while (0);

    curl_close($curl);
    return $response;
    }

 ?>