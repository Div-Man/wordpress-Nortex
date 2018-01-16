
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>О нас</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/vendor.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    
    <script src="<?php echo get_template_directory_uri();?>/scripts/vendor/modernizr.js"></script>
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="top-line">
        <div class="tl-number">
            <a href="#">+7 (904) 222 23 458</a>
            <span>Поможем оформить заказ</span>
        </div>
        <div class="tl-social">
            <span>Мы в соц. сетях</span>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>
    <header class="pages-header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="ph-title hvr-pop">
                       <a href="index.html">
                           магазин оригинальной<br>
                           одежды и сувениров
                       </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
                    <nav class="ph-nav">
					
					<?php 
						wp_nav_menu(['theme_location' => 'menu', 'container' => '']);
					?>
					<!--
                        <ul>
                            <li><a href="print.html">принты</a></li>
                            <li><a href="lookbook.html">галерея</a></li>
                            <li><a href="catalog.html">каталог</a></li>
                            <li><a href="blog.html">блог</a></li>
                            <li><a href="about.html">о нас</a></li>
                            <li><a href="contacts.html">контакты</a></li>
                        </ul>
                    </nav>
                    <!-- dropdown меню -->
					
					
                    <nav class="ph-drop-nav white">
                      <div class="navbar-header">
                        <button type="button" class="hvr-pop navbar-toggle collapsed ph-drop-btn" data-toggle="collapse" data-target="#ph-drop-menu" aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span>
                          <span class="icon-bar top-bar"></span>
                          <span class="icon-bar middle-bar"></span>
                          <span class="icon-bar bottom-bar"></span>
                        </button>
                      </div>
                      <!-- nav btn -->
					
                      <div id="ph-drop-menu" class="navbar-collapse collapse ph-drop-menu">
                        <a class="scroller hvr-push" href="print.html">принты</a>
                        <a class="hvr-push" href="lookbook.html">галерея</a>
                        <a class="hvr-push" href="catalog.html">каталог</a>
                        <a class="hvr-push" href="blog.html">блог</a>
                        <a class="hvr-push" href="about.html">о нас</a>
                        <a class="hvr-push" href="contacts.html">контакты</a>
                      </div>
                      <!--/.nav-collapse -->
                  </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-2">
                    <div class="ph-basket" role="group">
                        <button type="button" class="basket dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Ваша<br>корзина
                        </button>
                        <div class="dropdown-menu basket-dropdown" aria-labelledby="btnGroupDrop1">
                         <div class="drop-down-items">
                           <div class="dropdown-item product-in-basket clearfix">
                               <img src="https://pp.userapi.com/c639625/v639625134/20aa3/-VV3EH6cf_g.jpg" alt="Товар">
                               <div class="dd-text">
                                   <h4>Футболка</h4>
                                   <span>Сыктывкар. Родные места(серая)</span>
                               </div>
                           </div>
                           <div class="dropdown-item product-in-basket clearfix">
                               <img src="https://pp.userapi.com/c631929/v631929134/1a698/ywdlI9b0kYE.jpg" alt="Товар">
                               <div class="dd-text">
                                   <h4>Открытка</h4>
                                   <span>Сыктывкар. Родные места(серая)</span>
                               </div>
                           </div>
                           <div class="dropdown-item product-in-basket clearfix">
                               <img src="https://pp.userapi.com/c639625/v639625134/2080c/iAWEiLSoM-E.jpg" alt="Товар">
                               <div class="dd-text">
                                   <h4>Толстовка</h4>
                                   <span>Сыктывкар. Родные места(серая)</span>
                               </div>
                           </div>
                           <div class="dropdown-item product-in-basket clearfix">
                               <img src="https://pp.userapi.com/c639625/v639625134/215fd/PKc3gmGqcUU.jpg" alt="Товар">
                               <div class="dd-text">
                                   <h4>Шапка</h4>
                                   <span>Сыктывкар. Родные места(серая)</span>
                               </div>
                           </div>
                           <div class="dropdown-item product-in-basket clearfix">
                               <img src="https://pp.userapi.com/c639625/v639625134/215fd/PKc3gmGqcUU.jpg" alt="Товар">
                               <div class="dd-text">
                                   <h4>Стикеры</h4>
                                   <span>Сыктывкар. Родные места(серая)</span>
                               </div>
                           </div>
                           <div class="dropdown-item product-in-basket clearfix">
                               <img src="https://pp.userapi.com/c639625/v639625134/215fd/PKc3gmGqcUU.jpg" alt="Товар">
                               <div class="dd-text">
                                   <h4>Подушки</h4>
                                   <span>Сыктывкар. Родные места(серая)</span>
                               </div>
                           </div>
                         </div>
                          <div class="go-issue dropdown-item">
                              <a class="dropdown-item" href="ordering.html">Перейти к оформлению</a>
                          </div>
                          <div class="continue dropdown-item">Или <a href="#">продолжить</a> смотреть товары
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </header>