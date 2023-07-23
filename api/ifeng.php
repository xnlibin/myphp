<?php
/*
 * @Date: 2023-07-24 06:37:32
 * @LastEditors: oldbin
 * @LastEditTime: 2023-07-24 06:40:11
 */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $onlineip = $_SERVER['REMOTE_ADDR'];
    $channel_url = 'https://www.youtube.com/channel/'.$id.'/live';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $channel_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:' . $onlineip, 'CLIENT-IP:' . $onlineip, 'X-Real-IP:'. $onlineip));
    $html = curl_exec($ch);
    curl_close($ch);
    
    if (preg_match('/https:\/\/[^,\']+\.m3u8/', $html, $matches)) {
        $m3u8_url = $matches[0];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $m3u8_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $m3u8_content = curl_exec($ch);
        curl_close($ch);

        $m3u8_lines = explode("\n", $m3u8_content);
        $last_line = $m3u8_lines[count($m3u8_lines) - 2];
        header('Location: ' . $last_line, true, 302);
        exit();
    } else {
        echo 'Failed to find M3U8 URL';
    }

} else {
    echo 'Please provide a id parameter';
}
?>
