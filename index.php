<?php
 include "config.php";
?>

<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $c_desc; ?>">

    <title><?php echo $c_name; ?> - <?php echo $c_desc; ?></title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
	</head>

	<body style="" onLoad="MM_preloadImages('img/doneHigh.png')">

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $c_website; ?>"><img width="24" height="24" src="<?php echo $server_icon; ?>" /> <?php echo $c_name; ?></a>
        </div>
        <div class="nav navbar-nav navbar-right">
			<a href="https://github.com/Mayomi/PHP-Minecraft-Server-Status-Query/" class="navbar-text"
            target="_blank">@Mayomi</a>
         </div>
       </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1><?php echo $c_name; ?> - 数据平台</h1>
		<br>
        <p>服务器当前在线 <span class="label label-primary"><?php echo $server_online; ?> / <?php echo $server_max; ?></span> 名玩家</p>
		<p>服务器所适用版本 <span class="label label-info"><?php echo $server_version; ?></span></p>

			</div>
		</div>
			<div class="container">
				<h3>服务器地址</h3>
			<div class="alert alert-info"><center><b><?php echo $server_ip; ?></b></center></div>
				<h3>服务器标语</h3>
			<div class="alert alert-info"><center><b><?php echo $server_motd; ?></b></center></div>
				<h3>服务器延迟</h3>
			<div class="alert alert-info"><center><b><?php echo $server_ping; ?>毫秒</b></center></div>
		
		<center>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p><a href="<?php echo $c_website; ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','img/doneHigh.png',1)"><img src="img/done.png" alt="" width="400" height="40" id="Image3"></a></p>
		</center>
	</div>
   </div>
 </div>
 
	</br>
	
     <footer>
	  <center>
            &copy; <strong><?php echo $c_name; ?></strong> 2016. All rights reserved<br>
			<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $c_beian; ?></a>
	  </center>
	 </footer>
    </div>

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	
				function MM_swapImgRestore() { //v3.0
				  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
				}
				function MM_preloadImages() { //v3.0
				  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
					var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
					if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
				}

				function MM_findObj(n, d) { //v4.01
				  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
					d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
				  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
				  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
				  if(!x && d.getElementById) x=d.getElementById(n); return x;
				}

				function MM_swapImage() { //v3.0
				  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
				   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
				}
    </script>
  

</body></html>
