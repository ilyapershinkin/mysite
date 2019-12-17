<?php
session_start();
$dbc = mysqli_connect('localhost','root','','lesson') OR DIE('Ошибка подключения к базе данных');
$name = $_COOKIE["username"];
$admin = mysqli_fetch_assoc(mysqli_query($dbc,"SELECT admin FROM signup WHERE username='$name';"))['admin'];
if(($admin)) {
echo '<p> ТЫ АДМИН!!!!!!!!!!</p> ';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ММО РПГ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css?a=<?php echo rand();?>">
<style>
body{
         background: url(http://i.imgur.com/0AzSV7c.jpg) no-repeat;
         -moz-background-size: 100%
         -webkit-background-size: 100%
         -o-background-size: 100%
         background-size: 100%
        }
  </style>


<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
</head>
<body style="background-attachment:fixed" topmargin="0">
	<header>
		<a href=""><img src="gh.png"></a>
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
				<h2>ММО РПГ</h2>
				<p>Тут будет несколько статей о ММО РПГ</p>
			<div class="article">
			<h3><a href="https://ru.4game.com/blackdesert/?utm_banner=8057795321&utm_campaign=42538119&utm_type=desktop&group_id=3969923343&phrase_id=18412186546&region_id=98597&utm_source=yandex&utm_placement=none&utm_medium=cpc&utm_term=%D0%98%D0%B3%D1%80%D0%B0%20Black%20Desert&source_type=search&utm_content=k50id|0100000018412186546_|cid|42538119|gid|3969923343|aid|8057795321|adp|no|pos|premium1|src|search_none|dvc|desktop|%dop%&k50id=0100000018412186546_&yclid=6854946377136897870">Black Desert</a></h3>
				<hr>
                                <img src="https://i1.ytimg.com/vi/_ArchjzBO4I/mqdefault.jpg"/>
				<p>
Black Desert[12] — игра в жанре MMORPG от разработчиков PearlAbyss (издатель в Корее Daum, локализатор в России PearlAbyss[13] (GameNet до 12 октября 2018 года). В Южной Корее игра распространяется по модели free-to-play, в России был free-to-play и pay-to-play серверы до 12 октября 2018 года. С 22 ноября открыт только free-to-play сервер, в остальных странах система оплаты будет зависеть от издателя. С декабря 2018 года Pearl Abyss заключили соглашение с компанией «Иннова» о предоставлении точки входа с платформы Фогейм.
В игре реализована полноценная смена времени суток, а также система динамической погоды, не привязанная к определённой локации (циклоны перемещаются по карте); в каждом регионе уникальные погодные условия, такие как шторм, снег, дождь, тайфун и т. д. Приблизительное количество игроков на сервере: 17 тысяч.
В игре отсутствует максимальный уровень персонажа. Также имеется уникальный генератор персонажей, обладающий возможностью тонкой настройки каждого элемента тела.
				</p>
			</div>
		</div>

                        <div class="article">
				<h3><a href="https://thelastgame.ru/ark-survival-evolved/">ARK: Survival Evolved</a></h3>
				<hr>
                                <img src="https://yt3.ggpht.com/a/AGF-l79pb7JTvIBrJheqPE4riUFPugZULBLXJu7-Pg=s900-c-k-c0xffffffff-no-rj-mo"/>
				<p>
ARK: Survival Evolved (АРК: Сурвайвл Еволвед)- мультиплеерный проект на тему выживания в опасном мире, где твоими соперниками будут не только дикие животные и природные условия, но и другие игроки. Ты отправишься на огромный остров, который необходимо тщательно исследовать, найти полезные предметы и построить максимально безопасное убежище. Здесь ты сможешь сплотиться в команду с другими игроками, а затем распределить обязанности, так справляться с трудностями будет намного проще. Броди в поисках воды и пищи, а также старайся найти все необходимое, чтобы обеспечить себе максимально комфортную жизнь. Вокруг бродят другие выжившие, которые то и дело, что захотят отобрать у тебя твою добычу. Будь внимателен и создай себе мощное оружие, чтобы расправиться с толпой соперников. Постоянно следи за своей экипировкой и состоянием здоровья. Борись с другими племенами, а также защищался от нападения огромных динозавров, которых также будет возможность приручить, если ты будешь действовать правильно.
				</p>
			</div>
                        <div class="article">
				<h3><a href="https://d2hhj3gz5jljkm.cloudfront.net/7b6/ba5c6/9f49/4b06/b8dd/a7908f2ff0fb/normal/37231.png">World of Tanks</a></h3>
				<hr>
                                <img src="https://avatars.mds.yandex.net/get-pdb/367895/e27e723f-4ca6-4227-81b1-aea76251a35d/s1200?webp=false"/>
				<p>
World of Tanks — это более 600 бронированных машин середины ХХ века. В ваших руках окажутся лучшие танки эпохи - от легендарных Т-34 и ИС, ковавших победу Красной армии, до безумных идей гениев инженерной мысли, так и не добравшихся до конвейерной ленты. Это несколько десятков уникальных боевых локаций, гарантирующих тактическое разнообразие геймплея.
World of Tanks Console — это массовая многопользовательская бесплатная онлайн-игра о танковых сражениях для игровых консолей. Версия для персональных компьютеров вышла в 2010 году, снискала огромную популярность среди игроков со всего мира и завоевала множество наград. Ощутите накал танковых сражений, управляя многотонным стальным монстром!
				</p>
			</div>
		</div>
		</div>
	</article>
<div class="ban1">
<form class="ban" name="comment" action="comment.php" method="post"> 
<p> 
</p> 
<p> 
<label>Комментарий:</label> 
<br /> 
<textarea name="text_comment" cols="100" rows="10"></textarea> 
</p> 
<p> 
<input type="hidden" name="page_id" value="2" /> 
<input type="submit" value="Отправить" /> 
</p> 
</form> 
</div>
<div class = "ban2">
<?php 
$page_id = 2; 
$mysqli = new mysqli("localhost", "root", "", "lesson"); 
$result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); 
while ($row = $result_set->fetch_assoc()) { 
echo "<b>Имя:</b>"; 
$outname = $row['name'];
echo "$outname";
$outname = $row['name'];
echo "<br />";  
echo '<div class="ban3">';
$outcomment = $row['text_comment'];
echo "$outcomment"; 
$link=$row['id'];
if($admin){
    echo "<a href=\"redcom.php?cid=",$link,"\">Редактировать</a>";
}
echo "</div>"; 
echo "<br />"; 
} 
?>
</div>
	<footer>
		<div>
			<h2>
				Games and human
			</h2>
		</div>
		<div>
			<a href="second_page.php"> Моя страница</a><br>
			<a href="admin.php"> Разработчики</a><br>
			<a href="4th_page.html"> Статьи</a><br>
			
		</div>



<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 85977918, {expanded: "1",widgetPosition: "right",disableExpandChatSound: "1",disableNewMessagesSound: "1",tooltipButtonText: "Оставьте свой комментарий"});
</script>
	</footer>
</body>
</html>

