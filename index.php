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
				<h2>Er heerst paniek...</h2>
				<form action="page1.php" method="post">
					<table>
						<tr>
							<td>Welk dier zou je nooit als huisdier willen hebben?</td>
							<td><input type="text" name="dier"><td>
						</tr>
						<tr>
							<td>Wie is de belangrijkste persoon in je leven?</td>
							<td><input type="text" name="belangrijkste"></td>
						</tr>
						<tr>
							<td>In welk land zou je graag willen wonen?</td>
							<td><input type="text" name="land"></td>
						</tr>
						<tr>
							<td>wat doe je als je verveelt?</td>
							<td><input type="text" name="verveelt"></td>
						</tr>
						<tr>
							<td>Met welk speelgoed speelde je als kind het meest?</td>
							<td><input type="text" name="speelgoed"></td>
						</tr>
						<tr>
							<td>Bij welk docent spijbel je het liefst?</td>
							<td><input type="text" name="docent"></td>
						</tr>	
						<tr>
							<td>als je &euro 100.000,- had, wat zou je dan kopen?</td>
							<td><input type="text" name="kopen"></td>
						</tr>
						<tr>
							<td>Wat is je favoriete bezigheid?</td>
							<td><input type="text" name="bezigheid"></td>
						</tr>	
					</table>
					<input type="submit">
				</form>
			</main>
		</section><!--class="container"-->
	</body>
</html>
