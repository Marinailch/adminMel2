<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Дизайн студия MEL </title>
	<meta name="description" content="Дизайн интерьера Днепропетровск"/>
	<meta name="keywords" content="Дизайн интерьера, мебельный дизайн, ланшафтный дизайн в Днепропетровске"/>
	<meta name="author" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700' rel='stylesheet' type='text/css'>

	<!-- Css Global Compulsory -->
	<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Css Implementing Plugins -->
	<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/plugins/revolution/css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/plugins/revolution/css/extralayers.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/plugins/revolution/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="../assets/plugins/owl/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../assets/plugins/owl/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="../assets/plugins/cube/cubeportfolio.min.css">
	<link rel="stylesheet" href="../assets/plugins/jquery.mmenu.css">



	<!-- Css Theme -->
	<link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<div class="container padding-bottom padding-top-x2" id="projects">
	<div class="row">

		<!-- Section General Title -->
		<div class="general-title text-center">
			<h2>Наши работы</h2>
			<div class="space-bottom-2x"></div>
		</div>

		<!-- Portfolio Filter -->
		<div id="filters-container" class="cbp-l-filters-alignRight">
			<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
				Все <div class="cbp-filter-counter"></div>
			</div>

			<div class="dropdown cbp-filter-item"   data-filter=".interio_work .interio_life" >
				<div class="dropdown-toggle" data-toggle="dropdown">Интерьер <b class="caret"></b></div>
				<ul class="dropdown-menu"   style="width: 251px; left: -63px;">
					<li data-filter=".interio_work" class="cbp-filter-item "  style="width: 250px;"><div  id="projects1">Общественные интерьеры</div></li>
					<li data-filter=".interio_life" class="cbp-filter-item " style="width: 250px;">Жилые интерьеры</li>
				</ul>

			</div>

			<div data-filter=".furniture" class="cbp-filter-item">
				Мебель <div class="cbp-filter-counter"></div>
			</div>
			<div data-filter=".landscape" class="cbp-filter-item">
				Ландшафт<div class="cbp-filter-counter"></div>
			</div>
		</div>
		<div id="grid-container" class="cbp-l-grid-masonry">
			<ul>

				<?php
				$i = 1;
				?>
				?>
				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_work landscape furniture cbp-l-grid-masonry-height2">
					<a class="cbp-caption " href="index2.php?id=<?=$i?>">
						<div class="cbp-caption-defaultWrap">
							<img src="../assets/img/projects/1/img/t.jpg" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-title">Кафе Ван Гог</div>
									<div class="cbp-l-caption-desc">2014/04</div>
								</div>
							</div>
						</div>
					</a>
				</li>



				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_life  cbp-l-grid-masonry-height1">
					<a class="cbp-caption" href="index2.php?id=<?= ($i+1) ?>">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/2/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Квартира в Днепре</div>
								<div class="cbp-l-caption-desc">2012/02</div>
							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_life  cbp-l-grid-masonry-height1">
					<a class="cbp-caption" href="../assets/img/projects/3/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/3/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">МЖК Звездный</div>
								<div class="cbp-l-caption-desc">2014/04</div>

							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_life cbp-l-grid-masonry-height2">
					<a class="cbp-caption" href="../assets/img/projects/4/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/4/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Квартира на Дзержинского</div>
								<div class="cbp-l-caption-desc">2014/05</div>

							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item landscape cbp-l-grid-masonry-height2">
					<a class="cbp-caption" data-title="" href="../assets/img/projects/5/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/5/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Музейный парк</div>
								<div class="cbp-l-caption-desc">2010/01</div>

							</div>
						</div>
					</div>
					</a>
				</li>




				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_life cbp-l-grid-masonry-height1">
					<a class="cbp-caption" data-title="" href="../assets/img/projects/6/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/6/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">ЖК Панорама</div>
								<div class="cbp-l-caption-desc">2014/09</div>


							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_life cbp-l-grid-masonry-height1">
					<a class="cbp-caption" data-title="" href="../assets/img/projects/7/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/7/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title"> Загородный дом, 120м2 </div>
								<div class="cbp-l-caption-desc">Пос. Новоселица</div>
							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_life  cbp-l-grid-masonry-height1">
					<a class="cbp-caption" data-title="" href="../assets/img/projects/8/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/8/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">ЖК "Энигма", 120м2 </div>
								<div class="cbp-l-caption-desc"> г. Днепр</div>
							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_work cbp-l-grid-masonry-height2">
					<a class="cbp-caption" data-title="Квартира на Дзержинского<br>2014/05" href="../assets/img/projects/9/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/9/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Офис</div>
								<div class="cbp-l-caption-desc">г.Днепр</div>
							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_work  cbp-l-grid-masonry-height1">
					<a class="cbp-caption" data-title="Квартира на Дзержинского<br>2014/05" href="../assets/img/projects/10/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/10/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Вестибюль офиса</div>
								<div class="cbp-l-caption-desc">г. Мелитополь</div>
							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item interio_work cbp-l-grid-masonry-height1">
					<a class="cbp-caption" data-title="Музейный парк<br>2010/01" href="../assets/img/projects/11/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/11/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Офис косметической фирмы </div>
								<div class="cbp-l-caption-desc">г. Днепр</div>
							</div>
						</div>
					</div>
					</a>
				</li>

				<!-- Portfolio Item (image and description) -->
				<li class="cbp-item   interio_life cbp-l-grid-masonry-height1">
					<a class="cbp-caption" data-title="Музейный парк<br>2010/01" href="../assets/img/projects/12/page.html"">
					<div class="cbp-caption-defaultWrap">
						<img src="../assets/img/projects/12/img/t.jpg" alt="">
					</div>
					<div class="cbp-caption-activeWrap">
						<div class="cbp-l-caption-alignCenter">
							<div class="cbp-l-caption-body">
								<div class="cbp-l-caption-title">Загородный дом, 250м2</div>
								<div class="cbp-l-caption-desc">г. Москва</div>
							</div>
						</div>
					</div>
					</a>
				</li>

			</ul>
		</div>
	</div><!-- /row -->
</div>
<script src="../assets/plugins/jquery-1.11.1.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/revolution/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="../assets/plugins/revolution/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="../assets/plugins/cube/jquery.cubeportfolio.min.js"></script>
<script src="../assets/plugins/owl/owl-carousel/owl.carousel.js"></script>
<script src="../assets/plugins/moderniz.js"></script>
<script src="../assets/plugins/jquery.sticky.js"></script>
<script src="../assets/plugins/jquery.mmenu.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="../assets/js/app.js"></script>
</body>
</html>


