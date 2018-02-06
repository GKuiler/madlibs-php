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
					$dier = $_POST['dier'];
					$belangrijkste = $_POST['belangrijkste'];
					$land = $_POST['land'];
					$verveelt = $_POST['verveelt'];
					$speelgoed = $_POST['speelgoed'];
					$docent = $_POST['docent'];
					$kopen = $_POST['kopen'];
					$bezigheid = $_POST['bezigheid'];

					echo '<h3>Er heerst paniek...</h3>
							<p>Er heerst paniek in het koninkrijk ' . $land .  '. Koning ' . $docent . ' is ten einde raad en als koning ' . $docent . ' ten einde raad is, dan roept hij zijn ten-einde-raadsheer ' . $belangrijkste . '.</p><p>"' . $belangrijkste . '! het is een ramp! Het is een schande!"</p><p>"Mijn ' . $dier . ' is verdwenen! Zo maar, zonder waarschuwing. en ik had net ' . $speelgoed . ' voor hem gekocht!"</p><p>"Majesteit, uw ' . $dier . ' komt vast vanzelf weer terug?"</p><p>"ja, ' . "da's " . 'leuk en aardig, maar hoe moet ik in de tussentijd ' . $bezigheid . ' leren?"</p><p>"Maar Sire, daar kunt u toch uw ' . $kopen . ' voor gebruiken."<p>"' . $belangrijkste . ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p><p>"' . $verveelt . ', Sire."';	
				?>
			</main>
			<?php echo '<footer><h4>Deze website is gemaakt door ' . $belangrijkste . '</h4></footer>';	?>
		</section><!--class="container"-->
	</body>
</html>


<!--
<?php
	$dier = $_POST['dier'];
	$belangrijkste = $_POST['belangrijkste'];
	$land = $_POST['land'];
	$verveelt = $_POST['verveelt'];
	$speelgoed = $_POST['speelgoed'];
	$docent = $_POST['docent'];
	$kopen = $_POST['kopen'];
	$bezigheid = $_POST['bezigheid'];

echo '<h3>Er heerst paniek...</h3>
		<p>Er heerst paniek in het koninkrijk ' . $land .  '. Koning ' . $docent . ' is ten einde raad en als koning ' . $docent . ' ten einde raad is, dan roept hij zijn ten-einde-raadsheer ' . $belangrijkste . '.</p><p>"' . $belangrijkste . '! het is een ramp! Het is een schande!"</p><p>"Mijn ' . $dier . ' is verdwenen! Zo maar, zonder waarschuwing. en ik had net ' . $speelgoed . ' voor hem gekocht!"</p><p>"Majesteit, uw ' . $dier . ' komt vast vanzelf weer terug?"</p><p>"ja, ' . "da's " . 'leuk en aardig, maar hoe moet ik in de tussentijd ' . $bezigheid . ' leren?"</p><p>"Maar Sire, daar kunt u toch uw ' . $kopen . ' voor gebruiken."<p>"' . $belangrijkste . ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p><p>"' . $verveelt . ', Sire."';
echo '<footer><h4>Deze website is gemaakt door ' . $belangrijkste . '</h4></footer>';		
?>
-->