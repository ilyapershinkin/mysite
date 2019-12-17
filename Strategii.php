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
	<title>Стратегии</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css?a=<?php echo rand();?>">
<style>
    body{
         background: url(https://pluggedin.ru/images/upload/1494413292.jpg) no-repeat;
         -moz-background-size: 100%
         -webkit-background-size: 100%
         -o-background-size: 100%
         background-size: 100%
        }
  </style>


<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
</head>
<body style="background-attachment:fixed" topmargin="0">
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
				<h2>Стратегии</h2>
				<p>Тут будет несколько статей о стратегиях </p>		
			<div class="article">
				<h3><a href="https://store.steampowered.com/app/8930/Sid_Meiers_Civilization_V/">Sid Meier’s Civilization V</a></h3>
				<hr>
                                <img src="https://3.bp.blogspot.com/-OIdii6E1iQ4/WWy7pJL8SII/AAAAAAAAJYA/-JqpxvcWYDcz7xVNikMBwsNM_zhnH3FAgCK4BGAYYCw/s640/1280x800.jpg"/>
				<p>
Sid Meier’s Civilization V (сокр. Civilization V, рус. Цивилизация Сида Мейера V) — компьютерная игра в жанре пошаговая стратегия, пятая часть в серии Civilization. Игра разработана компанией Firaxis и её первый выпуск состоялся 21 сентября 2010 года для Microsoft Windows в США; для Mac OS X игра была выпущена 23 ноября 2010 года. Как и в других играх серии Civilization, в Civilization V игрок создаёт и развивает свою цивилизацию с древних времён до ближайшего будущего.
За почти двадцатилетнюю историю серии Civilization по всему миру было продано свыше девяти миллионов копий игры, что делает ее величайшей глобальной стратегией современности.
Пятое воплощение легендарной «Цивилизации» берет новую планку качества: возможностей и вариантов развития существенно прибавилось, противники стали умнее, сетевая игра — интереснее и разнообразнее, а графика — красивее.
Провести свою нацию через века — от первобытного общества к высокотехнологичной цивилизации, пережить золотой век и встать у истоков мировых религий, изобрести колесо и атомный реактор, построить Пирамиды и Статую Свободы, встретиться с величайшими политическими лидерами, проявить себя в роли дипломата или стратега — Sid Meier’s Civilization V позволит воплотить в жизнь ваши мечты!
				</p>
			</div>
		</div>

                        <div class="article">
				<h3><a href="https://store.steampowered.com/app/646570/Slay_the_Spire/"></a>Slay the Spire</h3>
				<hr>
                                <img src="https://i.ytimg.com/vi/5y6rEdklk88/sddefault.jpg"/>
				<p>
				Slay the Spire-это мошенническая видеоигра, разработанная американской студией MegaCrit и опубликованная Humble Bundle . Игра была впервые выпущена в раннем доступе для Microsoft Windows, macOS и Linux в конце 2017 года, с официальным релизом в январе 2019 года. Он был выпущен для PlayStation 4 в мае 2019 года и для Nintendo Switch в июне 2019 года. Существует запланированный релиз для iOS и Android в конце 2019 года.
        		Slay the Spire-это сочетание roguelike-подобного геймплея с карточной игрой для построения колоды. В начале прохода игрок выбирает один из трех предопределенных символов, который устанавливает начальное количество здоровья, золото, стартовую реликвию, которая обеспечивает уникальную способность для этого персонажа, и начальную колоду карт с основными картами атаки и защиты, а также то, что потенциальные цветные карты адаптируются к этому персонажу, которые они увидят через прогон. Цель состоит в том, чтобы работать через несколько уровней шпиля, каждый уровень имеет ряд потенциальных встреч, распределенных в ветвящейся структуре с боссом характер в конце уровня. Встречи включают в себя монстров, костры для исцеления или обновления карт до более мощных версий, лавочников для покупки карт, реликвий и зелий, а также для удаления карт из колоды, сундуки со случайной добычей и случайные встречи на основе выбора.
				</p>
			</div>

                        <div class="article">
				<h3><a href="https://vsetor.org/132-hearts-of-iron-iv.html"></a>Hearts of Iron IV</h3>
				<hr>
                                <img src="https://www.gamegrin.com/assets/Uploads/_resampled/resizedimage640360-HOI4.JPG"/>
				<p>
Hearts of Iron IV - это четвертая игра серии глобальных стратегий о Второй мировой войне Hearts of Iron. В данной части добавлено стратегическое планирование боев, более продвинутые системы технологического развития и политики — последняя позволит соблюдать нейтралитет.
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
<input type="hidden" name="page_id" value="6" /> 
<input type="submit" value="Отправить" /> 
</p> 
</form> 
</div>
<div class = "ban2">
<?php 
$page_id = 6; 
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
			<a href="second_page.html"> Моя страница</a><br>
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