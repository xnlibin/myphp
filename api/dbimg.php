<?php
/*
 * @Date: 2023-07-21 04:13:51
 * @LastEditors: oldbin
 * @LastEditTime: 2023-07-21 04:22:23
 * @DESC:豆瓣图片代理
 */

 /**
 * 用自己服务器代理显示一张网络图片
 * @param string $url 图片的地址，该url是否经过urlcode编码均可
 * @return bool|resource 图片的二进制信息
 */

$url = $_GET['url'];

imageProxy($url);
function imageProxy($url)
{
    //urlcode解码
    $url = urldecode($url);
    //验证url
    if (!preg_match("/(https?):\/\/[-A-Za-z0-9+&@#\/\%?=~_|!:,.;]+[-A-Za-z0-9+&@#\/\%=~_|]/", $url)) {
        echo 'url不合法';
        return false;
    }
    //解析url
    $domain = parse_url($url);
    if (!$domain || !isset($domain['host']) || !isset($domain['scheme'])) {
        echo '未正常解析url';
        return false;
    }
    //加上referer
    $refer =  $domain['scheme'] . '://' . $domain['host'];

    //get请求
    $ch = curl_init($url);
    curl_setopt ($ch, CURLOPT_REFERER, $refer);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0');
    $data = curl_exec($ch);
    curl_close($ch);
    $image = $data;

    //输出图片
    header('Content-Type: image/jpeg');
    echo $image;
}

