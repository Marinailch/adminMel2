<div class="header">
	<div class="logo">
		<a href="#"><img src="./images/logo1.png" width="130px">

		</a>
	</div>
	<div class="link">
		<p> Перейти на сайт</p>
		<a href='#'><img src="./images/site.png" alt="Перейти на сайт"/></a>
	</div>
</div>
<footer>
<form method="POST" id="myform"></form>
<table class="table table-bordered table-hover">
	<tr class="warning">
		<th>Титл</th>
		<th>Титл2</th>
		<th>Каталог в данный момент</th>
		<th>Выберите местоположение Каталога</th>
		<th>Заглавный рисунок</th>
		<th>Действия</th>
	</tr>
	<?php
	include_once './functions.php';
	foreach ($catalogs as $key => $item):
		$class = getclassBYname($item['class']);
		?>
		<tr>
			<td class="info" style="width: 200px"><?= $item['title1'] ?></td>
			<td class="info" style="width: 200px"><?= $item['title2'] ?></td>
			<td class="info" style="width: 200px"><?= $class ?></td>
			<td class="info" style="width: 350px">

				<input type="checkbox" name="interio_work" value="interio_work" form="myform">Общественные интерьеры</br>
				<input type="checkbox" name="interio_life" value="interio_life" form="myform">Жилые интерьеры</br>
				<input type="checkbox" name="furniture" value="furniture" form="myform">Дизайн мебели</br>
				<input type="checkbox" name="landscape" value="landscape" form="myform">Ланшафтный дизайн</br>

			</td>
			<td class="info" style="width: 180px"><img src="../assets/img/projects/images/<?= $item['link'] ?>">
			</td>
			<td class="success">
				<!--						<select>-->
				<!--							<option selected value="">Ничего не делать</option>-->
				<!--							<option>Удалить Каталог</option>-->
				<!--							<option>Изменить Фото в Каталоге</option>-->
				<!--							<option>Изменить Титлы Каталога</option>-->
				<!--							<option>Изменить исходный класс</option>-->
				<!--							<option>Изменить категорию Каталога</option>-->
				<!--						</select>-->
				<input type="hidden" value="<?= $item['id'] ?>" name="id" form="myform">
				<input type="submit" value="Обновить" formaction="<?= $_SERVER['PHP_SELF'] ?>?action=savecatalog" form="myform">
			</td>
		</tr>


	<?php endforeach; ?>
</table>
</footer>