<?php
/*
if( !empty($_POST) ) {
	$event = new Event();
	$event->add($_POST);
}
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Event Bot</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form method="POST" action="/add">

		<table class="add-table">
			<tr>
				<th>Название</th>
				<th>Дата</th>
				<th>Время</th>
				<th>Организатор</th>
				<th>Место</th>
				<th>Действия</th>
			</tr>
			<tr>
				<td><input type="text" name="name"></td>
				<td><input type="date" name="date"></td>
				<td><input type="time" name="time"></td>
				<td><input type="text" name="man"></td>
				<td><input type="text" name="place"></td>
				<td>
					<button class='btn'>Сохранить</button>
				</td>
			</tr>
		</table>

	</form>

</body>
</html>