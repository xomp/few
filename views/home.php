<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Event Bot</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>

	<table>
		<tr>
			<th>№</th>
			<th>Название</th>
			<th>Дата</th>
			<th>Время</th>
			<th>Организатор</th>
			<th>Место</th>
			<th>Действия</th>
		</tr>
		<?php

			foreach($events as $event) {
				$date = date('d.m.Y', strtotime($event['date']));
				$template = "
					<tr>
						<td>" . ($event['id']+1) . "</td>
						<td>${event['name']}</td>
						<td>${date}</td>
						<td>${event['time']}</td>
						<td>${event['man']}</td>
						<td>${event['place']}</td>
						<td>
							<a class='btn' href='/edit?id=${event['id']}'>Редактировать</a>
							<a class='btn' href='/del?id=${event['id']}'>Удалить</a>
						</td>
					</tr>
				";
				echo $template;
			}
		?>
	</table>

	<div style="text-align: right; padding: 10px 20px;">
		<a class='btn' href="/add">Добавить событие</a>
	</div>


</body>
</html>