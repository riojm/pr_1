<html>
	<head>
	<title>Latihan JQuery</title>
	<style type="text/css">
		.newsticker{
			width: 200px;
			height: 200px;
			border: 1px solid #ccc;
			padding: 0;
			overflow: hidden;
			font: 12px arial;
		}
		.newsticker li{
			list-style: none;
			padding: 5px;
			height: 40px;
			border-bottom: 1px solid #eee;
		}
		.newsticker img{
			width: 33px;
			height: 33px;
			padding: 2px;
			border: 1px solid #eee;
			float: left;
			margin-right:5px;
		}
	</style>
	<script type="text/javascript" src="../libs/jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$('.newsticker li:first').fadeOut('slow',function(){
					$(this).remove();
					$(this).appendTo('.newsticker').fadeIn('slow');
				});
			},3000);
		});
	</script>
	</head>
	<body>
		<ul class="newsticker">
			<li><img src="../images/bg1.jpg">Ini adalah berita yang pertama</li>
			<li><img src="../images/bg2.jpg">Ini adalah berita yang kedua</li>
			<li><img src="../images/bg3.jpg">Ini adalah berita yang keempat</li>
			<li><img src="../images/bg4.jpg">Ini adalah berita yang kelima</li>
		</ul>
	</body>
</html>
