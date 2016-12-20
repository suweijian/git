<html>
	<head>
		<title>requireJs</title>
		<meta charset = "utf-8">
		<meta name = "viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		 <link rel="stylesheet" href="css/swiper.min.css">
		<!-- data-main指定主程序入口 通常执行当前目录下的js文件  其他模块中的路径会参照主程序入口路径 -->
		<script data-main = "app.js" type="text/javascript" src = "js/require.js"></script>
		<script type="text/javascript"></script>
		<script type="text/javascript" src="jquery.lazyload.js"></script>
		<style type="text/css">
		/*--全局样式--*/
			*{
				margin:0;
				padding:0;
				box-sizing: border-box;
			}
			body{
				width: 100%;
				font-size: 16px;
				font-family: "微软雅黑";
			}
			ol,ul,li{
				list-style: none;
			}
			img{
				border:none;
			}
			a{
				text-decoration:none;
				color: black;
			}
			.main1{
				width: 100%;
			}
			.index1{
				width: 100%;
			}
			/*-------头部样式----------*/
			#header{
				position: relative;
				width: 100%;
				height: 3.75rem;
			}
			header{
				width: 100%;
				height: 3.75rem;
				background-color: #ffd600;
				display: flex;
				justify-content:flex-end;
				align-items: center;
				font-size: 1.0625rem;
				font-weight: bold;
				position: fixed;
				top: 0;
				left: 0;
				z-index: 20;
			}
			header>div{
				width:50%;
				height: 100%;
				display: flex;
				align-items: center;
				justify-content:center;
			}
			header>div span::after{
				content: '▼';
				font-size: 0.75rem;
			}
			header>span{
				display: block;
				font-size: 0.75rem;
				font-weight: normal;
				width:20%;
				height: 100%;
				display: flex;
				align-items: center;
				justify-content:flex-end;
				background:url(img/sao.png) no-repeat 2.8125rem 0.3125rem;
				background-size:1.875rem;
				padding:1.875rem 0.625rem 0 0;
				
			}
			/*footer*/
			#footer{
				opacity: 50%;
				width: 100%;
				height: 4.0625rem;
				background: white;
				position: fixed;
				bottom:0; 
			}
			#footer ul{
			    width: 100%;
			    height: 4.0625rem;
			    display: flex;
			    position: fixed;
			    bottom:0; 
			}
			#footer li{
				height: 4.0625rem;
			    flex:1;
			    list-style: none;
			    text-align: center;
			}
			#footer p{
				font-size: 1rem;
				color: #666666;
			}
			#footer img{
				margin-top: 0.5rem;
				width: 1.5625rem;
				height: 1.5625rem;
			}
		</style>
		
	</head>
	<body>
		<div>
			<div id="header">
				<header>
					<div id="mod_hom">
						<span>光耀公寓 011</span>
					</div>
					<span>搜 索</span>
				</header>
			</div>
			<div class="index3"></div>
			<div class="index4"></div>
		</div>
		<div class = "main1">
			<div class = "index1"></div>
			<div class = "index2"></div>
		</div>
		<div id="footer">
		<ul>
			<li>
				<img src="img/下载.png">
				<p><a href="#home">首页</a></p>
			</li>
			<li>
				<img src="img/下载 (1).png">
				<p><a href="#market">闪送超市</a></p>
			</li>
			<li>
				<img src="img/下载 (2).png">
				<p><a href="#order">购物车</a></p>
			</li>
			<li>
				<img src="img/下载 (3).png">
				<p><a href="#mine">我的</a></p>
			</li>
		</ul>
	</div>
	</body>
	<script type="text/javascript">
	// $(function(){
	// 	$("img.lazy").lazyload();
	// })
	</script>
</html>