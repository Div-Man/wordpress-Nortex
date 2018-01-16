<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Город на Сысоле</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <?php wp_head();?>
    
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  
    <header class="header" id="header">
        <!-- Header left box -->
        <div class="hl-box clearfix">
            <div class="hl-logo wow fadeIn">
                <a href="index.html">
                    <img src="<?php bloginfo('template_url');?>/images/logo-gns.png" alt="Город на Сысоле">
                </a>
            </div>
            <div class="hl-title wow fadeIn">
                <h1>магазин<br>оригинальной<br>одежды и сувениров</h1>
            </div>
            <div class="hl-desc wow fadeIn">
                <p>Товары с эксклюзивными принтами,<br>
                    пропитанные духом природы<br>
                    и жизнью Республики Коми</p>
            </div>
            <div class="hl-numb wow fadeIn">
                <a href="#" type="tel:7904222458">+7 (904) 2222 458</a>
                <span>Поможем оформить заказ</span>
            </div>
        </div>
        <!-- Header right box -->
        <div class="hr-box wow fadeIn">
            <div class="h-nav">
			
			<?php 
				wp_nav_menu(['theme_location' => 'menu', 'menu_class' => 'top-menu', 'container' => 'false']);
			?>
			<!--
              <nav class="main-nav">
                <ul>
                  <li><a href="print.html">принты</a></li>
                  <li><a href="lookbook.html">галерея</a></li>
                  <li><a href="catalog.html">каталог</a></li>
                  <li><a href="blog.html">блог</a></li>
                  <li><a href="about.html">о нас</a></li>
                  <li><a href="contacts.html">контакты</a></li>
                </ul>
              </nav>-->
              <!-- dropdown меню -->
              <nav class="navbar white navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                  </button>
                </div>
                <!-- nav btn -->
                <div id="navbar-1" class="navbar-collapse collapse mainnav">
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
            <div class="basket" role="group">
                <button type="button" class="main-basket dropdown-toggle hvr-grow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ваша<br>корзина
                </button>
                <div class="dropdown-menu main-basket-dropdown" aria-labelledby="btnGroupDrop1">
                  <div class="drop-down-items">
                    <div class="dropdown-item product-in-main-basket clearfix">
                        <img src="https://pp.userapi.com/c639625/v639625134/20aa3/-VV3EH6cf_g.jpg" alt="Товар">
                        <div class="dd-text">
                            <h4>Футболка</h4>
                            <span>Сектывкар. Родные места(серая)</span>
                        </div>
                    </div>
                    <div class="dropdown-item product-in-main-basket clearfix">
                        <img src="https://pp.userapi.com/c631929/v631929134/1a698/ywdlI9b0kYE.jpg" alt="Товар">
                        <div class="dd-text">
                            <h4>Открытка</h4>
                            <span>Сектывкар. Родные места(серая)</span>
                        </div>
                    </div>
                    <div class="dropdown-item product-in-main-basket clearfix">
                        <img src="https://pp.userapi.com/c639625/v639625134/2080c/iAWEiLSoM-E.jpg" alt="Товар">
                        <div class="dd-text">
                            <h4>Толстовка</h4>
                            <span>Сектывкар. Родные места(серая)</span>
                        </div>
                    </div>
                    <div class="dropdown-item product-in-main-basket clearfix">
                        <img src="https://pp.userapi.com/c639625/v639625134/215fd/PKc3gmGqcUU.jpg" alt="Товар">
                        <div class="dd-text">
                            <h4>Шапка</h4>
                            <span>Сектывкар. Родные места(серая)</span>
                        </div>
                    </div>
                    <div class="dropdown-item product-in-main-basket clearfix">
                        <img src="https://pp.userapi.com/c639625/v639625134/215fd/PKc3gmGqcUU.jpg" alt="Товар">
                        <div class="dd-text">
                            <h4>Стикеры</h4>
                            <span>Сектывкар. Родные места(серая)</span>
                        </div>
                    </div>
                    <div class="dropdown-item product-in-main-basket clearfix">
                        <img src="https://pp.userapi.com/c639625/v639625134/215fd/PKc3gmGqcUU.jpg" alt="Товар">
                        <div class="dd-text">
                            <h4>Подушки</h4>
                            <span>Сектывкар. Родные места(серая)</span>
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
            <div class="header-social">
              <a href="https://vk.com/sysole" id="header-social-vk">
                <img src="<?php bloginfo('template_url');?>/images/icon/vk-social-logotype.svg" class="hvr-grow" alt="">
              </a>
              <a href="https://www.instagram.com/gorod_na_sysole/" id="header-social-inst">
                <img src="<?php bloginfo('template_url');?>/images/icon/instagram-logo.svg" class="hvr-grow" alt="">
              </a>
            </div>
            <div class="h-slider">
                <div class="sl-slide"
                     style="background-image: url('https://pp.userapi.com/c621717/v621717134/38497/5qGZAc7QKoc.jpg');">
                    <div class="sl-text">
                        <h1 class="sl-title">norhwest <span>komi republic</span></h1>
                        <p class="sl-desc">Для тех, кто гордиться нашей <br>родной республикой. Для тех кто <br>скучает по
                            родным местам</p>
                        <a href="print.html" class="sl-btn hvr-grow">Все товары с принтом</a>
                    </div>
                </div>
                <div class="sl-slide"
                     style="background-image: url('https://pp.userapi.com/c639625/v639625134/20aa3/-VV3EH6cf_g.jpg');">
                    <div class="sl-text">
                        <h1 class="sl-title">Усть - Сысольск</h1>
                        <p class="sl-desc">На создание принта "Усть - Сысольск" нас вдохновила другая сторона Сыктывкара - его история, богатое прошлое и две могучих реки.</p>
                        <a href="print.html" class="sl-btn hvr-grow">Все товары с принтом</a>
                    </div>
                </div>
                <div class="sl-slide"
                     style="background-image: url('<?php bloginfo('template_url');?>/images/syk.jpg');">
                    <div class="sl-text">
                        <h1 class="sl-title">Сыктывкар <span>Родные места</span></h1>
                        <p class="sl-desc">"Есть и другие города, но рад немерено я по Сыктывкару бродя..." Основная идея принта "Сыктывкар" - родные места, те, к которым так привязан.</p>
                        <a href="print.html" class="sl-btn hvr-grow">Все товары с принтом</a>
                    </div>
                </div>
                <div class="sl-slide"
                     style="background-image: url('https://pp.userapi.com/c637125/v637125134/5ca6a/Txo0FMaVhe0.jpg');">
                    <div class="sl-text">
                        <h1 class="sl-title">Ухта <span>родина российской нефти</span></h1>
                        <p class="sl-desc"> Ухта - это не только университет, талантливая молодежь и яркие проекты, но и родина первой российской нефти, богатая история, сопки, развитая промышленность. </p>
                        <a href="print.html" class="sl-btn hvr-grow">Все товары с принтом</a>
                    </div>
                </div>
                <div class="sl-slide"
                     style="background-image: url('<?php bloginfo('template_url');?>/images/kray.jpg');">
                    <div class="sl-text">
                        <h1 class="sl-title">Край легенд</h1>
                        <p class="sl-desc">Согласно преданиям коми народа в этом мире все циклично и имеет свой круговорот: день и ночь, смена дней недели и времен года.</p>
                        <a href="print.html" class="sl-btn hvr-grow">Все товары с принтом</a>
                    </div>
                </div>
            </div>
            <div class="header-thumbs" dir="rtl">
                <div class="h-slider-thumbs">
                    <div class="sl-slide hvr-grow"
                         style="background-image: url('https://pp.userapi.com/c621717/v621717134/38497/5qGZAc7QKoc.jpg');"></div>
                    <div class="sl-slide hvr-grow"
                         style="background-image: url('https://pp.userapi.com/c639625/v639625134/20aa3/-VV3EH6cf_g.jpg');"></div>
                    <div class="sl-slide hvr-grow"
                         style="background-image: url('<?php bloginfo('template_url');?>/images/syk.jpg');"></div>
                    <div class="sl-slide hvr-grow"
                         style="background-image: url('https://pp.userapi.com/c637125/v637125134/5ca6a/Txo0FMaVhe0.jpg');"></div>
                    <div class="sl-slide hvr-grow"
                         style="background-image: url('<?php bloginfo('template_url');?>/images/kray.jpg');"></div>
                </div>
            </div>
        </div>
    </header>