<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mad Libs</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<section class="container">
			<header>
				<h1>Mad Libs</h1>
			</header>
			<nav>
				<ul>
					<li><a href="index.php">Er heerst paniek...</a></li>
					<li><a href="onkunde.php">Onkunde</a></li>
				</ul>
			</nav>
			<main>
				<?php
					$willen = $_POST['willen'];
					$persoon = $_POST['persoon'];
					$getal = $_POST['getal'];
					$vakantie = $_POST['vakantie'];
					$beste = $_POST['beste'];
					$slechtste = $_POST['slechtste'];
					$overkomen = $_POST['overkomen'];
					$belangrijkste = $_POST['belangrijkste'];
					
					echo '<h3>Onkunde</h3>
							Er zijn veel mensen die niet kunnen ' . $willen . '. Neem nou ' . $persoon .  '. Zelfs met de hulp van een ' . $vakantie . ' of zelfs ' . $getal . ' kan ' . $persoon . ' niet ' . $willen . '. Dat heeft niet te maken met een gebrek aan ' . $beste . ', maar met een te veel aan ' . $slechtste . '. Te veel ' . $slechtste . ' leidt tot ' . $overkomen . ' en dat is niet  goed als je wilt ' . $willen . '. Helaas voor ' . $persoon . '.';


				?>
			</main>
			<?php echo '<footer><h4>Deze website is gemaakt door ' . $belangrijkste . '</h4></footer>';	?>
		</section><!--class="container"-->
	</body>
</html>


<!--
<?php
	$willen = $_POST['willen'];
	$persoon = $_POST['persoon'];
	$getal = $_POST['getal'];
	$vakantie = $_POST['vakantie'];
	$beste = $_POST['beste'];
	$slechtste = $_POST['slechtste'];
	$overkomen = $_POST['overkomen'];

	echo '<h3>Onkunde</h3>
			Er zijn veel mensen die niet kunnen ' . $willen . '. Neem nou ' . $persoon .  '. Zelfs met de hulp van een ' . $vakantie . ' of zelfs ' . $getal . ' kan ' . $persoon . ' niet ' . $willen . '. Dat heeft niet te maken met een gebrek aan ' . $beste . ', maar met een te veel aan ' . $slechtste . '. Te veel ' . $slechtste . ' leidt tot ' . $overkomen . ' en dat is niet  goed als je wilt ' . $willen . '. Helaas voor ' . $persoon . '.';


?>
-->