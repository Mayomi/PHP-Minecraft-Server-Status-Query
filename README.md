#Minecraft服务器状态获取

Minecraft服务器状态获取, 基于PHP + Composer + Bootsrap, 不通过插件/服务器设定来获取在线玩家、标题、图标等等服务器数据.

*测试支持 1.8~1.10 / BungeeCord / WaterFall 等等..*

### 安装方法 / 你需要先安装PHP + Composer
```
composer require funnyitselmo/minecraftserverstatus
```
### 演示页面 / example.php
```
use MinecraftServerStatus\MinecraftServerStatus;

require 'vendor/autoload.php';

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
```
如果服务器离线 MinecraftServerStatus::query 将会返回 false.
否则将会返回一组数值.
特别注明: 这是原fork的默认页面

### 发布页面 / index.php
调试成功的基于 Bootsrap 的页面, 你可以在 http://getbootstrap.com/ 获取更多帮助.

### 配置页面 / config.php
```
			use MinecraftServerStatus\MinecraftServerStatus;

			require 'vendor/autoload.php';

			$response = MinecraftServerStatus::query('play.mc450.com', 25565);

			$server_ip = $response['hostname'] . ':' . $response['port'];
			$server_icon = $response['favicon'];
			$server_version = $response['version'];
			$server_online = $response['players'];
			$server_max = $response['max_players'];
			$server_motd = $response['description'];
			$server_ping = $response['ping'];
			
			
			$c_name = '';
			$c_desc = '';
			$c_beian = '';
			$c_website = '';
```
你需要配置IP/端口/服务器名称/副标题/备案信息/网站地址.

### 可用变量
以下是原fork给出的所有变量

<table border="0">
<tr>
<th>变量名</th>
<th>描述</th>
</tr>
<tr>
<td><pre>'hostname'</pre></td>
<td>输出为数字格式的IP, 例如127.0.0.1</td>
</tr>
<tr>
<td><pre>'port'</pre></td>
<td>端口返回值, 例如25565</td>
</tr>
<tr>
<td><pre>'ping'</pre></td>
<td>网站到服务器的延迟</td>
</tr>
<tr>
<td><pre>'version'</pre></td>
<td>服务端核心版本 <br>(例如: 1.9)</td>
</tr>
<tr>
<td><pre>'protocol'</pre></td>
<td>服务端核心协议 <br>(例如: 107)</td>
</tr>
<tr>
<td><pre>'players'</pre></td>
<td>当前在线的玩家数量</td>
</tr>
<tr>
<td><pre>'max_players'</pre></td>
<td>最大设置的玩家数量</td>
</tr>
<tr>
<td><pre>'description'</pre></td>
<td>服务端所设置的标语/motd - 输出为带颜色的字体</td>
</tr>
<tr>
<td><pre>'description_raw'</pre></td>
<td>服务端所设置的标语/motd - 输出为带颜色符号的字体</td>
</tr>
<tr>
<td><pre>'favicon'</pre></td>
<td>服务器图标的 base64 字符串 <br>(你可以使用 html 的 img 标签来显示该图标)</td>
</tr>
<tr>
<td><pre>'modinfo'</pre></td>
<td>关于插件的信息</td>
</tr>
</table>


