<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8">
	<title>Практики 3. Группировка таблиц</title>
</head>



<body>

	<table border="1" cellpadding="0" cellspacing="0" width="220" height="70">
		<tr align="center">
			<td>ячейка 1</td>
			<td>ячейка 2</td>
			<td>ячейка 3</td>
		</tr>
		<tr align="center">
			<td>ячейка 4</td>
			<td>ячейка 5</td>
			<td>ячейка 6</td>
		</tr>
		<tr align="center">
			<td>ячейка 7</td>
			<td>ячейка 8</td>
			<td>ячейка 9</td>
		</tr>
	</table>


	<h2>Блок 1. Объединение столбцов</h2>
			<p>Расширение ячейки на 2 столбца с помощью атрибута <b>COLSPAN = "2"</b>, но при этом вытеснит ячейки справа и таблица развалится.</p>
	<table border="1" cellpadding="0" 
		cellspacing="0" width="220" height="70">
		<tr align="center">
			<td colspan="2">ячейка 1</td>
			<td>ячейка 2</td>
			<td>ячейка 3</td>
		</tr>
		<tr align="center">
			<td>ячейка 4</td>
			<td>ячейка 5</td>
			<td>ячейка 6</td>
		</tr>
		<tr align="center">
			<td>ячейка 7</td>
			<td>ячейка 8</td>
			<td>ячейка 9</td>
		</tr>
	</table>


	<p>Расширим ячейку на два столбца без разваливания таблицы</p>
	<table border="1" cellpadding="0" cellspacing="0" width="220" height="70">
		<tr align="center">
			<td colspan="2">ячейка 1</td>
			<td>ячейка 3</td>
		</tr>
		<tr align="center">
			<td>ячейка 4</td>
			<td>ячейка 5</td>
			<td>ячейка 6</td>
		</tr>
		<tr align="center">
			<td>ячейка 7</td>
			<td>ячейка 8</td>
			<td>ячейка 9</td>
		</tr>
	</table>



	<p>Расширим ячейку на три столбца без разваливания таблицы</p>
	<table border="1" cellpadding="0" cellspacing="0" width="220" height="70">
		<tr align="center">
			<td colspan="3">ячейка 1</td>
		</tr>
		<tr align="center">
			<td>ячейка 4</td>
			<td>ячейка 5</td>
			<td>ячейка 6</td>
		</tr>
		<tr align="center">
			<td>ячейка 7</td>
			<td>ячейка 8</td>
			<td>ячейка 9</td>
		</tr>
	</table>

	<h2>Блок 2. Объединение строк</h2>

	<p>Расширим ячейку на две строки</p>
	<table border="1" cellpadding="0" cellspacing="0" width="220" height="70">
		<tr align="center">
			<td rowspan="2">ячейка 1</td>
			<td>ячейка 2</td>
			<td>ячейка 3</td>
		</tr>
		<tr align="center">
			<td>ячейка 4</td>
			<td>ячейка 5</td>
			<td>ячейка 6</td>
		</tr>
		<tr align="center">
			<td>ячейка 7</td>
			<td>ячейка 8</td>
			<td>ячейка 9</td>
		</tr>
	</table>



	<p>Расширим ячейку на два столбца без разваливания таблицы</p>
	<table border="1" cellpadding="0" cellspacing="0" width="220" height="70">
		<tr align="center">
			<td rowspan="2">ячейка 1</td>
			<td>ячейка 2</td>
			<td>ячейка 3</td>
		</tr>
		<tr align="center">
			<td>ячейка 5</td>
			<td>ячейка 6</td>
		</tr>
		<tr align="center">
			<td>ячейка 7</td>
			<td>ячейка 8</td>
			<td>ячейка 9</td>
		</tr>
	</table>



	<<h2>Практическая часть</h2>
			<img src="http://localhost/img/example3.1.jpg">
				<p>Решение 1 задачи: </p>
					<table border="1" cellpadding="0" cellspacing="0"
					>
							<tr align="center">
								<td colspan="2">Ячейка 1</td>
								<td>Ячейка 3</td>
							</tr>
							<tr align="center">
								<td rowspan="2">Ячейка 4</td>
								<td>Ячейка 5</td>
								<td>Ячейка 6</td>
							</tr>
							<tr align="center">
								<td>Ячейка 8</td>
								<td>Ячейка 9</td>
							</tr>
					</table>



			<img src="http://localhost/img/example3.2.jpg">
				<p>Решение 2 задачи: </p>
					<table border="1" cellpadding="0" cellspacing="0">
						<tr align="center">
							<td colspan="2">Ячейка 1</td>
							<td>Ячейка 3</td>
						</tr>
						<tr align="center">
							<td>Ячейка 4</td>
							<td rowspan="2">Ячейка 5</td>
							<td>Ячейка 6</td>
						</tr>
						<tr align="center">
							<td>Ячейка 7</td>
							<td>Ячейка 9</td>
						</tr>
					</table>



			<img src="http://localhost/img/example3.3.jpg">
				<p>Решение 3 задачи: </p>
						<table border="1" cellpadding="0" cellspacing="0">
							<tr align="center">
								<td rowspan="3">Ячейка 1</td>
								<td>Ячейка 2</td>
								<td rowspan="3">Ячейка 3</td>
							</tr>
							<tr align="center">
								<td>Ячейка 5</td>
							</tr>
							<tr align="center">
								<td>Ячейка 8</td>
							</tr>
						</table>



			<img src="http://localhost/img/example3.4.jpg">
				<p>Итоговое закрепление.<br>Решение 4 задачи: </p>
						<table border="1" cellpadding="0" cellspacing="0"
						width="400" height="200">
							<tr align="center">
								<th rowspan="2">Номер</th>
								<th colspan="2">Теги</th>
							</tr>
							<tr align="center">
								<th>Тег</th>
								<th>Значение</th>
							</tr>
							<tr align="center">
								<td>1</td>
								<td>p</td>
								<td rowspan="4">Для текста</td>
							</tr>
							<tr align="center">
								<td>2</td>
								<td>a</td>
									</tr>
							<tr align="center">
								<td>3</td>
								<td>b</td>
							</tr>
							<tr align="center">
								<td>4</td>
								<td>i</td>
							</tr>
							<tr align="center">
								<td>5</td>
								<td>table</td>
								<td>Таблица</td>
							</tr>
							<tr align="center">
								<td>6</td>
								<td>tr</td>
								<td>ряд таблицы</td>
							</tr>
							<tr align="center">
								<td>7</td>
								<td>td</td>
								<td rowspan="2">ячейки таблицы</td>
							</tr>
							<tr align="center">
								<td>8</td>
								<td>th</td>
							</tr>
						</table>

	<p>4 практический урок завершен.<br> Перейти к <a href="http://localhost/practice4-5.php">5-ому практическому уроку</a></p>
</body>
</html>