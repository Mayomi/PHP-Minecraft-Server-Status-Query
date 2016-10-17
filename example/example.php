<?php
use MinecraftServerStatus\MinecraftServerStatus;

require '../vendor/autoload.php';

$response = MinecraftServerStatus::query('play.mc450.com', 25565);

if (! $response) {
    echo "The Server is offline!";
} else {
    echo "<img width=\"64\" height=\"64\" src=\"" . $response['favicon'] . "\" /> <br>
        服务器地址：" . $response['hostname'] . "<br>
		服务器版本：" . $response['version'] . "<br>
		服务器状态：在线<br>
        服务器人数：" . $response['players'] . " / " . $response['max_players'] . "<br>
		服务器标语：" . $response['description'] . "<br>
        服务器延迟：" . $response['ping'] . " 毫秒";
}
?>