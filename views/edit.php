<?php
/*
if( !empty($_POST) ) {
	$eventObj->edit($id, $_POST);
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

	<form method="POST" action="/edit">

		<input type="hidden" name="id" value="<?= $id ?>">

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
				<td><input type="text" name="name" value="<?= $name ?>"></td>
				<td><input type="date" name="date" value="<?= $date ?>"></td>
				<td><input type="time" name="time" value="<?= $time ?>"></td>
				<td><input type="text" name="man" value="<?= $man ?>"></td>
				<td><input type="text" name="place" value="<?= $place ?>"></td>
				<td>
					<button class='btn'>Сохранить</button>
				</td>
			</tr>
		</table>

	</form>

</body>
</html>