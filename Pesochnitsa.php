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
	<title>Песочница</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css?a=<?php echo rand();?>">
<style>
body{
         background: url(https://tlauncher.org/images/cxllxyi.jpg) no-repeat;
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
				<h2>Песочницы</h2>
				<p>Тут будет несколько статей о песочницах</p>
			
			<div class="article">
				<h3><a href="https://www.minecraft.net/ru-ru">Minecraft</a></h3>
				<hr>
                                <img src="https://gamerulez.net/images/desc/replayability_02.jpg"/>
				<p>
Minecraft (от англ. mine — «шахта», «добывать» и англ. craft — «ремесло») — компьютерная инди-игра в жанре песочницы, разработанная шведским программистом Маркусом Перссоном и выпущенная его компанией Mojang AB. Перссон опубликовал начальную версию игры в 2009 году; в конце 2011 года была выпущена стабильная версия для ПК Microsoft Windows, распространявшаяся через официальный сайт. В последующие годы Minecraft была портирована на Linux и macOS для персональных компьютеров; на Android, iOS и Windows Phone для мобильных устройств; на игровые приставки PlayStation 4, Vita, VR, Xbox One, Nintendo 3DS, Switch и Wii U. В 2014 году Microsoft приобрела Mojang AB и права на Minecraft за $2,5 миллиарда. 4J Studios (англ.)русск. портировала игру на игровые приставки, а Xbox Game Studios разработала мультиплатформенную версию Minecraft и специальное издание игры для образовательных учреждений[⇨].

Перссон написал Minecraft на Java с использованием библиотеки графического вывода LWJGL, черпая идеи из таких игр, как Dwarf Fortress, Dungeon Keeper и Infiniminer (англ.)русск.[⇨]. Minecraft даёт в распоряжение игрока процедурно генерируемый и изменяемый трёхмерный мир, полностью состоящий из кубов — его можно свободно перестраивать, создавая из этих кубов сложные сооружения — эта особенность делает игру схожей с конструктором LEGO. Minecraft не ставит перед игроком каких-либо конкретных целей, но предлагает ему свободу действий: например, он может исследовать мир, добывать полезные ископаемые, сражаться с противниками и многое другое[⇨]. Игра включает в себя дополнительные режимы, например, «выживание», где игроку нужно самому добывать ресурсы, и «творчество», где у игрока эти ресурсы есть в неограниченном количестве[⇨]. Механика «редстоуна» (англ. Redstone) позволяет создавать в игре сложные логические схемы — тем самым игра может служить виртуальным конструктором для программистов и инженеров[⇨].

Minecraft получила всеобщее признание среди игровой прессы и множество наград. Критики выделили такие основные достоинства, как реиграбельность, минималистичный дизайн, динамичный саундтрек и необыкновенную свободу творчества, ограниченную лишь фантазией игрока; недостатками они посчитали наличие недоработанных предметов и сложности с созданием сетевой игры, а также отсутствие в игре режима обучения. Разработчики устранили эти недостатки в последующие годы[⇨]. На 2019 год было продано более 176 миллионов копий на всех платформах, что делает Minecraft самой продаваемой игрой в истории (англ.)русск., и 112 миллионов игроков запускали игру хотя бы раз в месяц[⇨]. В популяризации и коммерческом успехе Minecraft большую роль сыграли пользовательский контент, в том числе видеоролики, распространяемые через YouTube, и множество сторонних модификаций[⇨]. В 2015 году Mojang AB, в сотрудничестве с Telltale Games, выпустила спин-офф Minecraft: Story Mode[⇨].

				</p>
			</div>
		</div>

                        <div class="article">
				<h3><a href="https://torgames.org/570-kopatel-onlayn.html">Копатель онлайн</a></h3>
				<hr>
                                <img src="https://i.ytimg.com/vi/rgNC6vSFQdM/mqdefault.jpg"/>
				<p>
Копатель Онлайн — браузерная онлайн пародия на майнкрафт, которая есть во многих социальных сетях. Игра написана на движке Unity 3D.

Игра вышла в 2011 году. В социальной сети Вконтакте в «Копатель Онлайн» играют почти 10 миллионов игроков, в социальной сети «Одноклассники» — почти 4 миллиона. В 2013 году в соцсети «Вконтакте» в игру «Копатель Онлайн» играли 4 миллиона игроков. Жанр «Копателя Онлайн» — Аркада.
<hr>
Игровой Процесс:
Все миры ограничены по размеру. Основной размер карты — маленькая. Также можно купить средний размер карты. Размер маленькой (стандартной) карты — 96x96 блоков, а размер средней карты — 192х192 блоков. При первом запуске игры вы можете создать только 1 карту, потом можно за кристаллы (одну из игровых валют) купить ещё мест для карт.

				</p>
			</div>

                        <div class="article">
				<h3><a href="http://farap.ru/kompyuternye-igry/luchshie-pesochnicy-na-pk.html">Garry’s Mod</a></h3>
				<hr>
                                <img src="http://farap.ru/wp-content/uploads/2017/07/GM-0.jpg"/>
				<p>
изическая «песочница», в которой игрок может манипулировать объектами и экспериментировать с физикой. Можно изменять текстуры и размеры моделей, соединять их, взрывать, менять выражения лиц персонажей и т.д. В игре множество режимов — «побег из тюрьмы», постройка бункера или космического корабля, гонки, детектив, охота на вещи, паркур и множество других.
<hr>
С дополнениями игрок может создавать различные устройства (оружие, спутники, станки, автомобили), компьютер и подобие интернет-сети, конструировать космические базы, телепорты. Перемещать объекты можно при помощи физической пушки, а изменения фиксировать при помощи встроенной видеокамеры, создавая фильмы на движке игры.
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
<input type="hidden" name="page_id" value="3" /> 
<input type="submit" value="Отправить" /> 
</p> 
</form> 
</div>
<div class = "ban2">
<?php 
$page_id = 3; 
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
