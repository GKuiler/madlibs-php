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
				<h2>Onkunde</h2>
				<form action="page2.php" method="post">
					<table>
						<tr>
							<td>Wat zou je graag willen kunnen?</td>
							<td><input type="text" name="willen"><td>
						</tr>
						<tr>
							<td>Met welke persoon kun je goed opschieten?</td>
							<td><input type="text" name="persoon"></td>
						</tr>
						<tr>
							<td>wat is je favoriete getal?</td>
							<td><input type="text" name="getal"></td>
						</tr>
						<tr>
							<td>Wat heb je altijd bij je als je op vakantie gaat?</td>
							<td><input type="text" name="vakantie"></td>
						</tr>
						<tr>
							<td>Wat is je beste persoonlijke eigenschap?</td>
							<td><input type="text" name="beste"></td>
						</tr>
						<tr>
							<td>Wat is je slechtste persoonlijke eigenschap?</td>
							<td><input type="text" name="slechtste"></td>
						</tr>	
						<tr>
							<td>Wat is het ergste dat je kan overkomen?</td>
							<td><input type="text" name="overkomen"></td>
						</tr>
					</table>
					<input type="submit">
				</form>
			</main>
		</section>
	</body>
</html>
