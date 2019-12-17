<!DOCTYPE html>
<html>
<head>
	<title>Ваша страница</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header><a href=""><img src="gh.png"></a>
		<div class="links">
			<a><?php 
			$name = $_COOKIE["username"];
			echo "$name"; 
			?></a>
			<a href="second_page.php">Моя страница</a>
			<a href="admin.php">Разработчики</a>
			<a href="4th_page.html">Статьи</a>
			<a href="index.php">Выход</a>
		</div>
	</header>	

	<article>
		<div class="my_page">
			<div class="discription">
				<h2>Это ваша страница</h2>
				<p>Теперь вы можете перейти к статьям</p>
			</div>
			<div class="article">
				<h2 align="center">Добро пожаловать!</h2>
                                 <hr>
                                 <p color="blue"> На нашем сайте вы сможете узнать много интересного о видеоиграх </p>
			</div>
			
		</div>
	</article>

	<footer>
		<div>
			<h2>
				Games and human
			</h2>
		</div>
		<div>
			<a href="second_page.php">Моя страница</a><br>
			<a href="admin.php">Разработчики</a><br>
			<a href="4th_page.html">Статьи</a><br>
			
		</div>
	</footer>
</body>
</html>