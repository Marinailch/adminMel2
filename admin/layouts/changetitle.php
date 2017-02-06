
<div class="header">
	<div class="logo">
		<a href="#"><img src="./images/logo1.png" width="130px">

		</a>
	</div>
	<div class="link">
		<p>Перейти на сайт</p>
		<a href='#'><img src="./images/site.png" alt="Перейти на сайт"/></a>
	</div>

</div>

<footer>
	<div class="container_bar_index"><h4>Каталоги</h4>
	</div>


	<form method="POST" id="myform"></form>
		<table class="table table-bordered table-hover">
			<tr class="warning">
				<th>Титл</th>
				<th>Титл2</th>
				<th>Каталог</th>
				<th>Заглавный рисунок</th>
				<th>Действия</th>
			</tr>
			<?php
			include_once './functions.php';
			foreach ($catalogs as $key => $item):
				$class = getclassBYname($item['class']);

			?>
				<tr>
					<td class="info" style="width: 200px">
						<input type="text" value="<?= $item['title1'] ?>" name="title1" form="myform">
					</td>
					<td class="info" style="width: 200px">
						<input type="text" value="<?= $item['title2'] ?>" name="title2" form="myform">
					</td>
					<td class="info" style="width: 200px"><?= $class ?></td>
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
						<input type="submit" value="Сохранить" name="save"
						       formaction="<?= $_SERVER['PHP_SELF'] ?>?action=savetitle" form="myform">
					</td>
				</tr>


		<?php endforeach; ?>
	</table>
</footer>
<div class="header">
	<div class="logo">
		<a href="#"><img src="./images/logo1.png" width="130px">
		</a>
	</div>
</div>



