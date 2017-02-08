
<div class="header">
	<div class="logo">
		<a href="admin/index.php"><img src="./images/logo1.png" width="130px">

		</a>
	</div>
	<div class="link">
		 Перейти на сайт
		<a href='index.php'><img src="./images/site.png" alt="Перейти на сайт"/></a>
	</div>
</div>
<a href='<?=$_SERVER['PHP_SELF']?>?action=destroy'>Выйти из Админпанели</a>
<div class="container">
    <div class="col-md-4">
        <div class="add_foto">
            <form method="POST" action="<?= $_SERVER['PHP_SELF']?>?action=addFotoToCatalog" enctype="multipart/form-data">
                <div class="col-4">
                    <h4>Добавить фото в каталог</h4>
                    <input type="hidden" name="id" value="<?=$id ?>">
                    <input type='file' name="fotocatalog" accept="image/jpeg"><br>
                    <input type="submit" value="Добавить">
                    <div>(фото должно быть не более 3МБ)</div>
                </div>

            </form>

        </div>
    </div>
    <div class="col-md-4">
        <div>Main Foto</div>
        <img width=250px src="../../assets/img/projects/images/<?= $main_foto_catalog[0]['link']?>">
    </div>
    <div class="col-md-4">

        <!-- Ну тут будет начало-->

        <form method="POST" id="myform"></form>
        <table class="table table-bordered table-hover">
            <tr class="warning">
                <th>Титл</th>
                <th>Титл2</th>
                <th>Каталог</th>
                <th>Действия</th>
            </tr>
            <?php
            include_once './functions.php';
            foreach ($catalogs as $key => $item):
                $class = getclassBYname($item['class']);
            ?>
                <tr>
                    <td class="info" style="width: 200px"><?= $item['title1'] ?>
                        <input type="text" value="<?= $item['title1'] ?>" name="title1" form="myform">
                    </td>
                    <td class="info" style="width: 200px"><?= $item['title2'] ?>
                        <input type="text" value="<?= $item['title2'] ?>" name="title2" form="myform">
                    </td>
                    <td class="info" style="width: 200px"><?= $class ?></td>
                    <td class="success">
                        <input type="hidden" value="<?= $item['id'] ?>" name="id" form="myform">
                        <input type="submit" value="Сохранить" name="save"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?action=savetitle" form="myform">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <!-- Ну тут будет конец-->
        <!-- Ну тут опять начало-->

        <form method="POST" id="myform2"></form>
        <table class="table table-bordered table-hover">
            <tr class="warning">
                <th>Каталог в данный момент</th>
                <th>Выберите местоположение Каталога</th>
                <th>Действия</th>
            </tr>
            <?php
            foreach ($catalogs as $key => $item):
                $class = getclassBYname($item['class']);
            ?>
                <tr>
                    <td class="info" style="width: 200px"><?= $class ?></td>
                    <td class="info" style="width: 350px">
                        <input type="checkbox" name="interio_work" value="interio_work" form="myform2">Общественные
                        интерьеры<br>
                        <input type="checkbox" name="interio_life" value="interio_life" form="myform2">Жилые
                        интерьеры<br>
                        <input type="checkbox" name="furniture" value="furniture" form="myform2">Дизайн мебели<br>
                        <input type="checkbox" name="landscape" value="landscape" form="myform2">Ланшафтный дизайн<br>
                    </td>
                    <td class="success">
                        <input type="hidden" value="<?= $item['id'] ?>" name="id" form="myform2">
                        <input type="submit" value="Обновить"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?action=savecatalog" form="myform2">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Ну тут опять конец-->
        <!-- Третье начало-->

        <table class="table table-bordered table-hover">
            <tr class="warning">
                <th>Высота Загл рисунка</th>
                <th>Действия</th>
            </tr>
            <?php foreach ($catalogs as $key => $item):
                $height = getheightOffoto($item['height']);
            ?>
                <tr>
                    <td class="info" style="width: 180px"><?= $height ?></td>
                    <td class="success">
                        <form method="POST" id="myform3"></form>
                        <input type="hidden" value="<?= $item['id'] ?>" name="id" form="myform3">
                        <input type="hidden" value="<?= $item['height'] ?>" name="height" form="myform3">
                        <input type="submit" value="Изменить высоту Каталога"
                               formaction="<?= $_SERVER['PHP_SELF'] ?>?action=changeheight" form="myform3">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Третий конец-->

    </div>
</div>

<?php
foreach ($arr_foto as $key => $value): ?>
    <div class="delete_foto">
        <a href="<?= $_SERVER['PHP_SELF'] ?>?action=deletefotobyID&id=<?= $value['id'] ?>&cat=<?= $id ?>"><img
                src="./images/del.png" alt="Удалить"></a>
        <a href="<?= $_SERVER['PHP_SELF'] ?>?action=changeMainFoto&id=<?= $value['id'] ?>&cat=<?= $id ?>&main=<?= $main_foto_catalog[0]['id'] ?>"><img
                src="./images/rec.png" alt="Сделать главной"></a>
        <img width=250px src="../../assets/img/projects/images/<?= $value['link'] ?>">
    </div>
<?php endforeach; ?>
<footer>

<!-- Mb links -->

</footer>