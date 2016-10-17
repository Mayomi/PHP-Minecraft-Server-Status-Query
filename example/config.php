<?php
			use MinecraftServerStatus\MinecraftServerStatus;

			require '../vendor/autoload.php';

			$response = MinecraftServerStatus::query('play.mc450.com', 25565);

			$server_ip = $response['hostname'] . ':' . $response['port'];
			$server_icon = $response['favicon'];
			$server_version = $response['version'];
			$server_online = $response['players'];
			$server_max = $response['max_players'];
			$server_motd = $response['description'];
			$server_ping = $response['ping'];
			
			
			$c_name = 'SkyPixel NetWork';
			$c_desc = '最好玩的服务器组群';
			$c_beian = '粤ICP备15051067号-1';
			$c_website = 'http://www.earthsky.cn';
?>