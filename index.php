<?php 
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->        
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Дизайн студия MEL </title>
        <meta name="description" content="Дизайн интерьера Днепропетровск"/>
        <meta name="keywords" content="Дизайн интерьера, мебельный дизайн, ланшафтный дизайн в Днепропетровске"/>
        <meta name="author" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> 

        <!-- Web Fonts -->        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700' rel='stylesheet' type='text/css'>

        <!-- Css Global Compulsory -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> 

        <!-- Css Implementing Plugins -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">                          
        <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/extralayers.css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="assets/plugins/owl/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/plugins/owl/owl-carousel/owl.theme.css">         
        <link rel="stylesheet" href="assets/plugins/cube/cubeportfolio.min.css">
        <link rel="stylesheet" href="assets/plugins/jquery.mmenu.css">



        <!-- Css Theme -->           
        <link rel="stylesheet" href="assets/css/style.css">
 <style>
.logo_menu{
    margin-top: -18px;
    width: 140px;
		}

.bg-color {
    background-color: #f2f2f2;;
}

 </style>

    </head>
    <body> 

        <!--Start Preloader Загрузка сайта-->
        <div id="preloader">
            <div class="preloader-container">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader-->                  

        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top header-nav" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Переключение навигации</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logo -->        
                    <a class="navbar-brand" href="index.php#home"><img class="logo_menu" src="assets/img/logo1.png" alt="logo"></a>        
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php#home">Главная</a></li>
                        <li><a href="index.php#about">О нас</a></li>
                        <li><a href="index.php#projects">Работы</a></li>
                        <li><a href="index.php#testimonials">Услуги</a></li>
         				<li><a href="index.php#contactus">Контакты</a></li>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- Navbar -->

        <!-- Slider -->
        <div class="tp-banner-container" id="home">
            <div class="tp-banner">

                <ul>    

                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="500" data-thumb="assets/img/slider-images/thumb1.jpg"  data-saveperformance="off"  data-title="Slide">

                        <!-- MAIN IMAGE -->
                        <img src="assets/img/slider-images/image4.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->                        

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-text lfb ltt tp-resizeme text-center"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-30"        
                            data-speed="600"
                            data-start="800"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2; max-width: inherit; max-height: inherit; white-space: nowrap;">Дизайн Интерьера <br>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb ltt tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="100"        
                            data-speed="600"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: inherit; max-height: inherit; white-space: nowrap;"><a href="index.php#projects"  class="btn gold-btn"  data-filter=".apartments">Наши работы</a>
                        </div>

                    </li>
                    <!-- END SLIDE -->

                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="500" data-thumb="assets/img/slider-images/thumb2.jpg"  data-saveperformance="off"  data-title="Slide">

                        <!-- MAIN IMAGE -->
                        <img src="assets/img/slider-images/image2.jpg"  alt="fullslide8"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- END MAIN IMAGE -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-text lfb ltt tp-resizeme text-center"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-30"
                            data-speed="600"
                            data-start="800"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2; max-width: inherit; max-height: inherit; white-space: nowrap;">Дизайн Мебели<br>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb ltt tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="100"
                            data-speed="600"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: inherit; max-height: inherit; white-space: nowrap;"> <a href="index.php#projects"  class="btn gold-btn"  data-filter=".apartments">Наши работы</a>

                        </div>

                    </li>
                    <!-- END SLIDE  -->

                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="500" data-thumb="assets/img/slider-images/thumb3.jpg"  data-saveperformance="off"  data-title="Slide">

                        <!-- MAIN IMAGE -->
                        <img src="assets/img/slider-images/image7.jpg"  alt="fullslide8"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- END MAIN IMAGE -->                               

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-text lfb ltt tp-resizeme text-center"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-30"
                            data-speed="600"
                            data-start="800"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2; max-width: inherit; max-height: inherit; white-space: nowrap;">Ландшафтный Дизайн<br>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption lfb ltt tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="100"
                            data-speed="600"
                            data-start="900"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3; max-width: inherit; max-height: inherit; white-space: nowrap;"><a href="index.php#projects"  class="btn gold-btn"  data-filter=".apartments">Наши работы</a>
                        </div>

                    </li>
                    <!-- END SLIDE  -->

                </ul>                      

            </div>
        </div>  
        <!-- End Slider -->         


            <!-- Projects -->    
            <!-- Site Wrapper -->
        <div class="site-wrapper" id="about">

            <!-- Who We Are -->            
            <div class="container padding-bottom">              
                    
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 about-caption text-center">
                        <!-- Section General Title -->
                        <div class="general-title">
                            <h2>О Нас</h2>
                            <div class="space-bottom-2x"></div>   
                        </div>
                        <p><b>Рады приветствовать Вас на нашем сайте!  Мы - Марина и Elена, готовы подхватить любую Вашу мечту и воплотить ее в Ваше личное, трехмерное пространство</b></p>
                         <div class="space-bottom-2x"></div>  
                         <img class="slogan" src="assets/img/slogan_g.png" alt=" Рисуйте MELом вместе с MELdesign!!!">

                        <div class="space-bottom-2x"></div>   
                    </div>                            
                </div>                
                <div class="row" style="margin-top: 20px; ">    
                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                            <img alt="mel_logo" src="assets/img/il.png" style="    margin-left: 21px;">                                
                        </div>
                        <div class="col-sm-10">
                                                                                             
                            <p>Каждый наш объект не похож на предыдущий, мы учитываем именно Ваш стиль, привычки, хобби, темп жизни и мировоззрение.</p>
                        </div>
                    </div> 

                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                           <img alt="mel_logo" src="assets/img/il.png" style="    margin-left: 21px;">                                                                                
                        </div>
                        <div class="col-sm-10">
                                                               
                            <p>Решаем любую поставленную задачу, превращая Ваше пространство в уникальный арт-объект.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                         	 <img alt="mel_logo" src="assets/img/il.png" style="    margin-left: 21px;">                                                                             
                        </div>
                        <div class="col-sm-10">
                                                                                                                       
                            <p>Мы слышим каждого заказчика и все его пожелания сводим к системе и гармонии.</p>                                
                        </div>
                    </div>    

                </div><!-- /row -->        


				 <div class="row" style="margin-top: 30px; ">    
                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                          <img alt="mel_logo" src="assets/img/il.png" style="    margin-left: 21px;">                         
                        </div>
                        <div class="col-sm-10">
                                                                                              
                            <p>Область познания безгранична, поэтому работаем не только в Украине, а и за ее пределами.</p>
                        </div>
                    </div> 

                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                           <img alt="mel_logo" src="assets/img/il.png" style="    margin-left: 21px;">                                                                     
                        </div>
                        <div class="col-sm-10">
                                                                
                            <p>Наши цены конкурентны, а качество вне конкуренции.Наша фантазия не знает границ, а наш опыт воплощает мечты в реальность.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-md-4 about-caption">
                        <div class="col-sm-2">
                            <img alt="mel_logo" src="assets/img/il.png" style="    margin-left: 21px;">                                                                         
                        </div>
                        <div class="col-sm-10">
                                                                                                                  
                            <p>Человек – индивидуальность, поэтому он обязан жить, отдыхать, либо трудится в своем собственном, уникальном интерьере.</p>                                
                        </div>
                    </div>    
                </div><!-- /row -->        

            </div><!-- /container -->                   
            <!-- End Who We Are -->


 <!-- Our Process -->            
            <section class="bg-color padding-bottom padding-top-x2">
                <div class="container">                                                        

                    <!-- Description -->
                    <div class="row">
                        <div class="col-md-6">
                            <a href="onepage_slider.html#">
                                <img src="assets/img/about.png" alt="Specifie an alternate text for an image" class="img-responsive">    
                            </a>
                        </div>                    
                        <div class="col-md-6">
                            <!-- Title -->
                            <div class="cta-title-2">
                         
                                <h2>Наше преимущество</h2>
                              
                            </div>
                            <p style="padding-left: 40px; text-align: justify;">Мы всегда следим за новыми тенденциями в сфере дизайна, посещаем различные семинары, мастер-классы и международные выставки, поэтому можете не сомневаться - наш конечный продукт идет в ногу со временем!</p>
                          
                        </div>
                    </div>
                    
                </div>                               
            </section>                       
            <!-- End Our Process -->




                 <!-- Projects -->        
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
                            include_once './admin/functions.php';
	                        include_once './admin/config/config.php';
	                     
	                        $mysqli = new mysqli($db['host'],
                                $db['user'],
                                $db['pass'],
                                $db['name']);
	                        
	                        if($mysqli->connect_errno){
		                        echo "error with connection to database ->".$mysqli->connect_error;
		                        die('No connection with database'.__LINE__);
	                        }
	                        $query = "SELECT main.id, class, link, title1, title2, height FROM main, foto WHERE main.id=foto.link_id AND main_foto_id=\"Y\"";
	                        if ($result = $mysqli->query($query)) {
		                        while ($row = $result->fetch_assoc()):
                                    if($row['height']=='1'){
                                        $height = '260px';
                                    }else{
                                        $height = '405px';
                                    }
                  

                                    ?>



			                        <li class="cbp-item <?= " " . $row['class'] . " cbp-l-grid-masonry-height". $row['height'] ?>">
				                        <a class="cbp-caption" href="/slider.php?id=<?= $row['id'] ?>">
					                        <div class="cbp-caption-defaultWrap">
						                        <img style='height:<?=$height?>' src="./assets/img/projects/images/<?= $row['link'] ?>" alt="">
					                        </div>
					                        <div class="cbp-caption-activeWrap">
						                        <div class="cbp-l-caption-alignCenter">
							                        <div class="cbp-l-caption-body">
								                        <div class="cbp-l-caption-title"><?= $row['title1'] ?></div>
								                        <div class="cbp-l-caption-desc"><?= $row['title2'] ?></div>
							                        </div>
						                        </div>
					                        </div>
				                        </a>
			                        </li>
			                        <?php
		                        endwhile;
	                        }
	                        ?>


                        </ul>
                    </div>                                                    
                </div><!-- /row -->   
            </div><!-- /container -->
            <!-- End Projects -->  



            
            <!-- Testimonials -->
            <div id="testimonials">
                <div class="container text-center padding-bottom padding-top-x2" >
                    <!-- Section General Title -->
                    <div class="general-title">
                        <h2 >Проекты и Услуги</h2>
                        <div class="space-bottom-2x"></div> 
                    </div>
                    <div class="row">
                        <div id="owl-testimonials" class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="col-md-8 col-md-offset-2 t-info">            
                                    <p>Ниже представлен весь перечень услуг, которые мы предлагаем.
Наша бригада включает все смежные организации, квалифицированных рабочих, мебельщиков, каменщиков, стекольщиков, а также есть мастера по текстилю, декоративной отделки и т. д.
</p>                                    
                                  <!--   <b>- Hermione Granger</b> -->
                                </div>                     
                            </div>

                            <div class="item">
                                <div class="col-md-8 col-md-offset-2 t-info">            
                                    <p> Для общественных интерьеров разрабатываем фирменный стиль, логотип, название, визитки, презентации,брендинг организации.
Работаем в тандеме с лучшими графическими дизайнерами в Украине!!!
</p>                                   
                                  <!--   <b>- Harry Potter</b> -->
                                </div>                     
                            </div>

                            <div class="item">
                                <div class="col-md-8 col-md-offset-2 t-info">            
                                    <p>Стоимость проекта варьируется в зависимости от объема,местонахождения и типа проекта либо отдельных позиций, выбранных Вами. Звоните нам и мы составим коммерческое предложение подходящее именно Вам.
Работаем исключительно на взаимовыгодных условиях.Свяжитесь с нами!
</p>


                                  <!--   <b>- Ginny Wesley</b> -->
                                </div>                     
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials -->


         <!-- Our Services -->            
            <div class="container padding-bottom padding-top-x2 text-center" >                                 
                
                <div class="row"> 

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box">  
                        <!-- Icon -->                    
                        <img alt="icon project" src="assets/img/1.png"></img>

                        <!-- Title and Description -->
                        <div class="service-title">    
                            <h3>Эскизно – планировочные услуги</h3>                      
                        </div>
                        <p class="p_box">
                        	<img alt="icon project" src="assets/img/il1.png"></img> Обмерочно-демонтажный план<br>
							<img alt="icon project" src="assets/img/il1.png"></img>	Планировочное решение<br>
							<img alt="icon project" src="assets/img/il1.png"></img>	План расстановки мебели<br>
							<img alt="icon project" src="assets/img/il1.png"></img>	План монтажа всех перегородок<br>
							<span><img alt="icon project" src="assets/img/il1.png"></img> Визуализация необходимых помещений<br></span>
							<br>
							<a href="project.php" ">Далее...</a>

</p>            
                    </div>

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box service-box-l">  
                        <!-- Icon -->   
                        <img alt="icon project" src="assets/img/2.png"></img>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Строительство</h3>      
                        </div>                
                        <p class="p_box">	
                        	<img alt="icon project" src="assets/img/il1.png"></img> Привязка сантехнических приборов<br>
							<img alt="icon project" src="assets/img/il1.png"></img> План полов<br>
							<img alt="icon project" src="assets/img/il1.png"></img> План потолков<br>
							<img alt="icon project" src="assets/img/il1.png"></img> Сечения по потолкам<br>
							<img alt="icon project" src="assets/img/il1.png"></img> Электроинсталляция светильников <br>
							<img alt="icon project" src="assets/img/il1.png"></img> Электоинсталляция розеток<br> <a href="project.php" ">Далее...</a>
<!--7.	Схема раскладки плитки с просчетом материала
8.	Развертки стен,сечения и виды. (по необходимости)
9.	Встреча со строителями для ознакомления с чертежами.
(проводится единоразово для данного типа проекта) -->
</p>            
                    </div>                        

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box service-box-l">   
                        <!-- Icon -->  
                        <img alt="icon project" src="assets/img/3.png"></img>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Отделка и мебель </h3>                      
                        </div>
                        <p class="p_box">
                        	<img alt="icon project" src="assets/img/il1.png"></img> Все чертежи мебели<br>
							<img alt="icon project" src="assets/img/il1.png"></img> Подбор всех отделочных материалов<br>
							<img alt="icon project" src="assets/img/il1.png"></img> Коррекция чертежей под выбранные материалы<br>
							<img alt="icon project" src="assets/img/il1.png"></img> Подбор готовой мебели<br>
							<img alt="icon project" src="assets/img/il1.png"></img> Оформление окон<br>
							<a href="project.php" ">Далее...</a>
</p>            
                    </div>                                                              

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box-none">   
                        <!-- Icon -->  
                       <img alt="icon project" src="assets/img/4.png"></img>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Авторский надзор</h3>                      
                        </div>
                        <p class="p_box"><img alt="icon project" src="assets/img/il1.png"></img> Выезд на стройку(2 раза в неделю)<br>
							<img alt="icon project" src="assets/img/il1.png"></img>	Работа со смежными организациями<br>
							<img alt="icon project" src="assets/img/il1.png"></img>	Корректировка чертежей для смежников и выдача им задания<br><br>
							<a href="project.php" >Далее...</a>
					<!-- 	4.	Работа со строительной бригадой и прорабом -->
</p>            
                    </div>

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box-none service-box-l">   
                        <!-- Icon -->  
                        <img alt="icon project" src="assets/img/5.png"></img>
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Декорирование</h3>                      
                        </div>
                        <p class="p_box"><img alt="icon project" src="assets/img/il1.png"></img> Подбор текстиля<br>
        					<img alt="icon project" src="assets/img/il1.png"></img> Подбор элементов декора, составление композиций<br>
       						<img alt="icon project" src="assets/img/il1.png"></img> Подбор озеленения помещения либо улицы <br>
       						 <a href="project.php" >Далее...</a>
        					<!--  4. Подбор посуды -->
</p>            
                    </div>

                    <!-- Service Item (title, icon and description for your service) -->
                    <div class="col-sm-4 col-md-4 service-box-none service-box-l">   
                        <!-- Icon -->  
                        <img alt="icon project" src="assets/img/6.png"></img> 
                        
                        <!-- Title and Description -->
                        <div class="service-title">  
                            <h3>Личный проект</h3>                      
                        </div>
                        <p>Заполняя тех. задание (руководство к выполнению проекта, куда внесены все Ваши пожелания), Вы можете сами подобрать набор услуг, необходимых именно Вам. То есть составить свой собственный тип проекта.</p>            
                    </div>

                </div><!-- /row -->                           
            </div><!-- /container -->
            <!-- End Our Services -->
          


<!-- Our Process -->            
            <section  style="padding-top: 60px ; padding-bottom: 40px; background: #f2f2f2; " ;>
                <div class="container" >                                                        

                    <!-- Description -->
                    <div class="row ">
                        <div class="col-md-3">
                             
                            <img src="assets/img/cub1.png" alt="nnn" class="img_p" >    
                           
                        </div>                    
                        <div class="col-md-9">
                            <!-- Title -->
                            <div class="cta-title-2">
                 
                              
                              
                            </div>
                            <p style=" text-align: justify;"><b>Специалисты  дизайн студии MEL разработали следующие проекты набора услуг с составом которых вы можете ознакомиться. </b> </p>
                          
                        </div>
                    </div>
                    
                </div>                               
            </section>                       
            <!-- End Our Process -->


  

            <!-- Pricing Tables -->
            <div class="container padding-top-x2 padding-bottom text-center">
                <!-- Section General Title -->
                <div class="general-title">
                    <h2>Состав проекта</h2>
                    <div class="space-bottom-2x"></div>      
                </div>
                <div class="row text-center">

                    <div class="col-sm-4">
                        <div class="thumbnail price-table">                                
                            <div class="caption"><div class="space-bottom-2x"></div>
                                <h3 style="margin-top: 5px;">Мини</h3> 
                                <br>
                                <p>Мини-проект - это концепция , главная идея в эскизном варианте с основными габаритами помещения. 
                                А также, эта стадия необходима для того чтобы мы с вами нашли общий вектор и посмотрели на объект ...</p>
                                <div class="space-bottom-2x"></div>
                                <a href="project.php" class="btn gold-btn">Далее</a>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-4">
                        <div class="thumbnail price-table">                                
                            <div class="caption"><div class="space-bottom-2x"></div>
                                <h3 style="margin-top: 5px;">Стандартный</h3> 
                                <br>
                                <p>Это полностью готовый проект для выдачи рабочим. Кроме эскизного проекта, он содержит весь пакет необходимых чертежей для выдачи на стройку. 
                                    В состав этого проекта входит пакет эскизно планировочных услуг ...</p>
                                <div class="space-bottom-2x"></div>
                                <a href="project.php" class="btn gold-btn">Далее</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="thumbnail price-table">                                
                            <div class="caption"><div class="space-bottom-2x"></div>
                                <h3 style="margin-top: 5px;">Макси</h3> 
                                <br>
                                <p>Начиная с первого взмаха рулетки и заканчивая приятными мелочами, акцентирующими интерьер. Мы облегчаем этот путь Вам, курируя весь процесс строительства, 
                                подбор всех необходимых материалов...</p>
                                <div class="space-bottom-2x"></div>
                                <a href="project.php" class="btn gold-btn">Далее</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Pricing Tables -->    



            <!-- Our Process -->            
            <section class="bg-color padding-bottom padding-top-x2 ">
                <div class="container">                                                        

                    <!-- Description -->
                    <div class="row">
                    
                            <!-- Title -->
                           
                            <p style="text-align: center;     font-weight: 600;">Стоимость проекта варьируется в зависимости от объема, местонахождения и типа проекта либо отдельных позиций, выбранных Вами. Звоните нам и мы составим коммерческое предложение подходящее именно Вам. Работаем исключительно на взаимовыгодных условиях. Свяжитесь с нами!</p>
                            
                        
 
                    </div>
                    
                </div>                               
            </section>                       
            <!-- End Our Process -->

<!-- Our Team -->
            <div class=" padding-top-x2 padding-bottom"  id="services">                        
                <div class="container">  
                    <!-- Section General Title -->
                    <div class="general-title text-center">
                        <h2>Наша команда</h2>
                        <div class="space-bottom-2x"></div>      
                    </div>                          
                    <div class="row">                                 

                        <!-- Team Item (name, information about, image, social icons) -->
                      

                        <!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-sm-6 col-md-3">
                            <div class="team-inner">
                                
                            </div>
                            <div class="team-details text-center">
                                <!-- Info -->
                              <!--   <h5>Manager</h5>  
                                                                    
                                <h3>HARRY POTTER</h3>  
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>           -->                                                
                            </div>
                        </div>                                                    
					  <div class="col-sm-6 col-md-3">
					                            <div class="team-inner">
					                                <a href="onepage_slider.html#">  
					                                    <!-- Image -->                  
					                                    <img src="assets/img/about/team_2.jpg" class="img-circle" alt="Specifie an alternate text for an image" >                    
					                                          
					                                </a>
					                            </div>                                    
					                            <div class="team-details text-center">
					                                <!-- Info -->
					                                <h5>Дизайнер-архитектор</h5>  
					                                <!-- Name -->                                                                                        
					                                <h3>Марина Прохорова</h3>   
					                                <p>Опыт работы: 7 лет,  около 50 проектов в области дизайна интерьера и архитектуры. <p>                                                              
					                            </div>
					                        </div>                                                               
                        

                        <!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-sm-6 col-md-3">
                            <div class="team-inner">
                                <a href="onepage_slider.html#">  
                                                 
                                    <img src="assets/img/about/team_3.jpg" class="img-circle" alt="Specifie an alternate text for an image" >                    
                                    
                                </a>
                            </div>
                            <div class="team-details text-center">
                                <!-- Info -->
                                <h5>Дизайнер-визуализатор</h5>  
                                <!-- Name -->                                                                                         
                                <h3>Елена Иванова</h3>                                                                    
                                <p>Опыт работы: более 5 лет, 20 проектов в сфере дизайна и проектирования интерьеров</p>
                            </div>
                        </div>

					<!-- Team Item (name, information about, image, social icons) -->                      
                        <div class="col-sm-6 col-md-3">
                            <div class="team-inner">
             
                            </div>
                            <div class="team-details text-center">
                                <!-- Info -->
                             <!--    <h5>Architect</h5>  
                                                                     
                                <h3>RON WESLEY</h3>    
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>        -->                                                 
                            </div>
                        </div>            

                    </div><!-- /row -->
                </div><!-- /container -->                
            </div>
            <!-- End Our Team -->
  
                         
        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->  

           
 <!-- <div id="map-canvas" > </div> -->
        <!-- Google Map (adress on map can be changed in app.js file) -->
       
       <div class="opas">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.6449037590833!2d35.04352581605683!3d48.46334237925074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2dd8bfdaf23%3A0x7433382522d0565e!2z0L_RgNC-0YHQv9C10LrRgiDQlNC80LjRgtGA0LAg0K_QstC-0YDQvdC40YbRjNC60L7Qs9C-LCA1OSwg0JTQvdGW0L_RgNC-zIEsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCDQo9C60YDQsNC40L3QsA!5e0!3m2!1sru!2sru!4v1470666596909"  width="1980" height="500" frameborder="0" style="border:0" allowfullscreen> 


      </iframe>
</div>

        <!-- End Google Map -->                         

        <div class="f-action" id="contactus">
            <a href="" class="f-cta" data-toggle="modal" data-target="#myModal"><img src="assets/img/slogan_b.png" ></a>
        </div>
      


 <!-- Footer -->  
        <div class="footer-big">
            <div class="container">
                <div class="row">

                    <!-- About Us Information -->
                    <div class="col-md-3 col-sm-6">                           
                        <div class="f-logo" style="display: block; width: 100%; ">
                           <h2> <a  href="index.php#home"><img class="logo_menu_footer" src="assets/img/logo4.png" alt="logo"></a> </h2>                                                              
                        </div>
                    </div>
                    
                    <!-- Recent Posts -->
                    <div class="col-md-3 col-sm-6 f-inner">                        
                        <!-- <div class="col-sm-2">
                            <i class="fa fa-map-marker fa-lg"></i> 
                        </div> -->
                        <div class="col-sm-10">
                            <strong>Днепр</strong>
                            <div class="f-space"></div>
                            <address>                                
                                <abbr title="Тел">Тел</abbr> +38 067 639-70-18<br>  
                                     marynaprokhorova@gmail.com     <br>                         
                                     Пр. Д. Яворницкого 59, офис 54<br> 
                            </address>                           
                        </div>
                    </div>

                    <!-- Latest Tweet -->
                    <div class="col-md-3 col-sm-6 f-inner">
                        <!-- <div class="col-sm-2">
                            <i class="fa fa-map-marker fa-lg"></i> 
                        </div> -->
                        <div class="col-sm-10">
                           <div style="width: 100%; height: 23px;"></div>
                            <div class="f-space"></div>
                            <address>                                
                               <abbr title="Тел">Тел</abbr> +38 067 567-52-65<br>  
                                     mel.home.design@gmail.com<br>                         
                                     Пр. Карла Маркса 59, офис 54
                            </address>
                        </div>
                    </div>

                    <!-- Recent Works -->
                    <div class="col-md-3 col-sm-6 f-inner">   
                        <div class="col-sm-2">
                            <div class="f-space"></div>
                        </div>
                        <div class="col-sm-10">
                            <div style="width: 100%; height: 24px;"></div>
                            <div class="f-space"></div>
                            <div>                  
                         <a href="https://www.instagram.com/design_mel/"> <img src="assets/img/inst.png"  ></a>
                         <a href="https://m.facebook.com/MEL_design-1681646058831296/?ref=bookmarks" > <img src="assets/img/fb.png"   ></a>
                        <!-- <a href="" > <img src="assets/img/ok.png" ></a> -->
                  </div> 
                   <div class="f-space"></div>
                        </div>      
                    </div>                           

                </div>
            </div>
        </div>   

              <!-- End Footer -->


        <!-- jQuery Plugins -->                                 
        <script src="assets/plugins/jquery-1.11.1.min.js"></script>                    
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/revolution/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
        <script src="assets/plugins/revolution/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
        <script src="assets/plugins/cube/jquery.cubeportfolio.min.js"></script>      
        <script src="assets/plugins/owl/owl-carousel/owl.carousel.js"></script>
        <script src="assets/plugins/moderniz.js"></script>    
        <script src="assets/plugins/jquery.sticky.js"></script>   
        <script src="assets/plugins/jquery.mmenu.min.js"></script>                     

        <script src="assets/js/app.js"></script>

    </body>
</html>