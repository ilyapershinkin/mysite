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
	<title>Шутер</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css?a=<?php echo rand();?>">
<style>
    body{
         background: url(https://www.tokkoro.com/picsup/5469887-killzone-3-hd-wallpapers.jpg) no-repeat;
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
			<a href="second_page.html">Моя страница</a>
			<a href="admin.php">Разработчики</a>
			<a href="4th_page.html">Статьи</a>
			<a href="index.php">Выход</a>
		</div>
	</header>	

	<article>
		<div class="my_page">
			<div class="discription">
				<h2>Шутеры</h2>
				<p>Тут будет несколько статей о шутерах </p>		
			<div class="article">
				<h3><a href="https://utorrentgames.org/entity/seria/wolfenstein/">Wolfenstein</a></h3>
				<hr>
                                <img src="https://thefragz.ru/uploads/s/u/1/l/u1lwempwpn31/img/full_9WstPMgz.jpg"/>
				<p>
Wolfenstein (с нем. — «Волчий камень») — серия компьютерных игр в жанрах шутер от первого лица и стелс-экшен, содержащая альтернативно-исторические и фэнтезийные элементы, вольно трактующая историю Второй мировой войны и обращающаяся к темам нацистского оккультизма и фантастических технологий Вундерваффе[1]. Серия Wolfenstein является одной из самых долгоживущих серий компьютерных игр: первая игра франшизы, Castle Wolfenstein, вышла в 1981 году, последние — Wolfenstein: Youngblood и Wolfenstein: Cyberpilot — в 2019 году[2][3][4][5]. На данный момент серия насчитывает 12 игр и 1 самостоятельное дополнение. Игра Wolfenstein 3D 1992 года, одна из первых игр в жанре шутер от первого лица, считается прародительницей этого жанра. Игры серии повествуют о приключениях американского солдата Уильяма «Би-Джея» Бласковица и его противостоянии нацистскому режиму. Серия получила своё название в честь вымышленного замка Вольфенштайн, который фигурирует в большинстве игр серии.

				</p>
			</div>
		</div>

                        <div class="article">
				<h3><a href="https://utorrentgames.org/entity/seria/call-of-duty/">Cull of Duty</a></h3>
				<hr>
                                <img src="https://4.bp.blogspot.com/-GDPanTScjr8/Vg-o4oLZDtI/AAAAAAAAHzw/geNRyPgzguc/s640/call_of_duty_black_ops_3-4k-wallpaper-3840x2160.jpg"/>
				<p>
Call of Duty (с англ. — «служебный долг», «зов долга») — серия компьютерных игр в жанре шутер от первого лица, посвящённых Второй мировой войне, холодной войне, борьбе с терроризмом, гипотетической Третьей мировой войне, войнам будущего и космическим войнам. Серия состоит из шестнадцати основных игр и десяти ответвлений.
<hr>
Сюжетный режим игр серии Call of Duty представляет собой линейный шутер от первого лица, где игрок обычно выступает в роли бойца армии какой-либо страны или организации. Как правило в одной игре серии встречается несколько протагонистов, которые меняются по ходу повествования. События игр серии происходят в различных эпохах. Действие хронологически первой миссии в играх серии, начала Советской кампании Call of Duty 2 происходит в 1941 году, действие хронологически последней игры, Call of Duty: Infinite Warfare — в мае 2080 года. Также игры серии происходят в различных по времени промежутках. Наименьший интервал времени затрагивает сюжетная кампания Call of Duty: Infinite Warfare — 3 дня, наибольший — Call of Duty: Black Ops II с интервалом событий в 39 лет. В отличие от классического варианта выпуска продолжений (когда выпущенная позже игра продолжает или дополняет события предыдущих игр или полностью перезапускает франшизу), игры серии Call of Duty делятся на отдельные подсерии или независимые игры, события которых не являются каноничными друг к другу.

В играх серии представлен широкий выбор огнестрельного оружия: как реально существующих видов оружия (части, действие которых происходит в прошлом или недалеком будущем), так и фантастических. В миссиях сюжетных кампаний игроку дается 2 вида огнестрельного оружия (в подсерии Black Ops и Infinite Warfare перед началом миссии игрок может самостоятельно выбрать свое вооружение, а также модифицировать его), а также один или два вида гранат. Почти во всех играх серии представлена возможность взять оружие устранённых противников. Во всех играх серии, начиная с Call of Duty 2, используется система автоматической регенерации здоровья: для восполнения здоровья игроку достаточно отойти в укрытие. Также в играх серии распространены различные «заскриптованные» сцены для придания частям франшизы большей кинематографичности. Во время данных сцен игроку под управление может даваться различная техника или изменяться привычное для жанра управление.

Кроме общих для серии черт, в отдельных играх могут встречаться свои особенности.

Сюжетная кампания в играх серии может быть как однопользовательской, так и кооперативной. Во всех основных играх серии присутствуют уровни сложности. Call of Duty: Black Ops 4 стала первой игрой в основной серии, которая отказалась от традиционной однопользовательской кампании. Взамен его в игре присутствуют обучающие миссии с сюжетными кат-сценами.
				</p>
			</div>

                        <div class="article">
				<h3><a href="https://utorrentgames.org/entity/seria/battlefield/">Battlefield</a></h3>
				<hr>
                                <img src="https://www.wallpaperup.com/uploads/wallpapers/2017/11/08/1151916/3bcadb70732bf171fa526244f768d46c-375.jpg"/>
				<p>
Battlefield (рус. Поле битвы) — серия компьютерных игр в жанре тактико-стратегического шутера от первого лица, разработанная шведской компанией EA Digital Illusions CE и издаваемая компанией Electronic Arts. Первая часть — «Battlefield 1942» — была выпущена в 2002 году и уже тогда получила широкую популярность. Серия особо популярна своим многопользовательским режимом, в котором могут принимать участие до 64 игроков, с выбором воюющей стороны, класса бойца с уникальным оружием, и возможностью управлять техникой на земле, на воде и в небе. За 10 лет существования в игры серии поиграло больше 50 млн человек[1].

8 октября 2012 года становится известно, что компания Happy Madison, принадлежащая Адаму Сэндлеру, при содействии SONY Television занимается созданием телевизионного комедийного экшeн сериала по мотивам игр серии Battlefield: Bad Company[2]. Заказчиком является телеканал FOX[3]
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
<input type="hidden" name="page_id" value="1" /> 
<input type="submit" value="Отправить" /> 
</p> 
</form> 
</div>
<div class = "ban2">
<?php 
$page_id = 1; 
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