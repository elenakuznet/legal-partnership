<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="canonical" href="https://юрист45.рф/" />
	<meta name="robots" content="index, follow">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Юристы и адвокаты Кургана - Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО</title>
	<meta name="description" property="og:description" content="Наши специалисты имеют большой опыт работы в сфере юридических услуг, работают во всех направлениях, и помогут Вам разрешить любую ситуацию и спор в Вашу сторону.">
	<meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
	<meta property="og:title" content="Юристы и адвокаты Кургана - Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://юрист45.рф/" />
	<meta name="imagetoolbar" content="no">
	<meta name="msthemecompatible" content="no">
	<meta name="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link href="css\kernel_main\kernel_main.css?152042467544417" type="text/css" rel="stylesheet">
	<link href="css\kernel_socialservices\kernel_socialservices.css?1520424615512" type="text/css" rel="stylesheet">
	<script src="https://api-maps.yandex.ru/2.1/?apikey=f4112ee9-ccf1-46a4-aaa2-b243dc478c03&lang=ru_RU"></script>
	<link href="css\template_83943bfab5bae145e83fccc6a8e55f26\template_83943bfab5bae145e83fccc6a8e55f26.css?1520424615451015" type="text/css" data-template-style="true" rel="stylesheet">
	<link href="bitrix\panel\main\popup.min.css?149849325520704" type="text/css" data-template-style="true" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!-- Swiper -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

	<?
	include("sm/include/connect.php");
	$result17 = DB::Query("SELECT * FROM site", $link);
	$row17 = /* fixed MMiC */ mysqli_fetch_array($result17);
	echo '
<meta property="og:image" content="https://юрист45.рф/img/' . $row17["img1"] . '" />   

';
	?>
</head>

<body class="">

	<?

	include('include/header.php');

	$result = DB::Query("SELECT * FROM ind", $link);
	$row = /* fixed MMiC */ mysqli_fetch_array($result);

	echo '
	<main class="main__container">
	
	<section class="reason-slider__section ">
		<div class="reason-slider ">
		';
	if ($row["text1"] != '') {
		echo '
				<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img1"] . '" alt="' . $row["text1"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img11"] . '" alt="' . $row["text1"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text21"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text1"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text11"] . '</p></div>
							
						</div>
						</a>
					</div>
				</div>
					
					';
	}

	if ($row["text2"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img2"] . '" alt="' . $row["text2"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img12"] . '" alt="' . $row["text2"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text22"] . '">
						<div class="reason-slider__text">
							<div class="reason-slider__caption ">' . $row["text2"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text12"] . '</p></div>
						</div>
						</a>
					</div>
				</div>
					';
	}

	if ($row["text3"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img3"] . '" alt="' . $row["text3"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img13"] . '" alt="' . $row["text3"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text23"] . '">
						<div class="reason-slider__text">
							<div class="reason-slider__caption ">' . $row["text3"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text14"] . '</p></div>
						</div>
						</a>
					</div>
				</div>
				
			';
	}

	if ($row["text4"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img4"] . '" alt="' . $row["text4"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img14"] . '" alt="' . $row["text4"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text24"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text4"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text14"] . '</p></div>
							
						</div>
						</a>
					</div>
				</div>
				
					';
	}

	if ($row["text5"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img5"] . '" alt="' . $row["text5"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img15"] . '" alt="' . $row["text5"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text25"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text5"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text15"] . '</p></div>
							
							
						</div>
						</a>
					</div>
				</div>
				
					';
	}

	if ($row["text6"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img6"] . '" alt="' . $row["text6"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img16"] . '" alt="' . $row["text6"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text26"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text6"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text16"] . '</p></div>
							
						</div>
						</a>
					</div>
				</div>
				
					';
	}

	if ($row["text7"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img7"] . '" alt="' . $row["text7"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img17"] . '" alt="' . $row["text7"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text27"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text7"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text17"] . '</p></div>
							
							
						</div>
						</a>
					</div>
				</div>
				
					';
	}

	if ($row["text8"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img8"] . '" alt="' . $row["text8"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img18"] . '" alt="' . $row["text8"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text28"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text8"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text18"] . '</p></div>
							
						</div>
						</a>
					</div>
				</div>
				
					';
	}

	if ($row["text9"] != '') {
		echo '
					<div class="reason-slider__item >
					<img data-no-retina="" src="img/ind/' . $row["img9"] . '" alt="' . $row["text9"] . '" class="reason-slider__img is-hide-mobile" ">
					<img data-no-retina="" src="img/ind/' . $row["img19"] . '" alt="' . $row["text9"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text29"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text9"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text19"] . '</p></div>
							
							
						</div>
						</a>
					</div>
				</div>
				
					';
	}

	if ($row["text10"] != '') {
		echo '
					<div class="reason-slider__item" >
					<img data-no-retina="" src="img/ind/' . $row["img10"] . '" alt="' . $row["text10"] . '" class="reason-slider__img is-hide-mobile">
					<img data-no-retina="" src="img/ind/' . $row["img20"] . '" alt="' . $row["text10"] . '" class="reason-slider__img is-hide-desktop">
					<div class="content-center">
					<a href="' . $row["text30"] . '">
						<div class="reason-slider__text">
						
							<div class="reason-slider__caption ">' . $row["text10"] . '</div>
							<div class="reason-slider__content  is-hide-mobile"><p>' . $row["text20"] . '</p></div>
						</div>
						</a>
					</div>
				</div>
				
				';
	}
	echo '	
				
					</div>
		<div class="arrow-reason"></div>
		<div class="dots-reason"></div>
	</section>
	



<section class="tile2">
<div class="content-center">
<h1 class="title">Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО<br> профессиональные юристы и адвокаты</h1>
        <section class="statistics">
            <div class="stat">
                <h2>10</h2>
                <p>лет ведем юридическую
практику</p>
            </div>
            <div class="stat">
                <h2>500+</h2>
                <p>дел завершено</p>
            </div>
            <div class="stat">
                <h2>97%</h2>
                <p>дел разрешаем
в пользу клиентов</p>
            </div>
            <div class="stat">
                <h2>5</h2>
                <p>специалистов в различных
отраслях права</p>
            </div>
        </section>

<div class="infocenter clearfix">
			<h2 class="infocenter__caption">' . $row["text36"] . '</h2>
			<a href="yuridicheskie-uslugi" class="infocenter__button is-hide-mobile">' . $row["text37"] . '<span class="icon-arrow1"></span></a>
</div>
		<br>
	
';
	$result27 =  DB::Query("SELECT * FROM uslugi ORDER BY RAND() limit 4", $link);

	while ($row27 = mysqli_fetch_array($result27)) {
		echo '     					              
				<a href="uslugi?id=' . $row27["id"] . '"  class="tile__item"  itemscope itemtype="https://schema.org/Product">
				<img src="img/uslugi/' . $row27["img1"] . '" alt="' . $row27["nazvanie"] . '" title="' . $row27["opisanie1"] . '" style="width:100%"  itemprop="image">				
				<div class="tile__text" itemprop="name">' . $row27["nazvanie"] . '</div>
				<meta itemprop="description" content="' . $row["opisanie1"] . '" >
				<div class="tile__arrow icon-arrow1"></div>
			</a>
		   ';
	}
	echo '   
								
	</div>		

	</section>
	
	<section class="about">
	<br><br>	
	<div class="content-center">

		<div class="about__text is-green-text clearfix">
		
			<div class="bitrix-include-wrapper"><span class="big-letter">' . $row["text31"] . '</span>' . $row["text32"] . '</div>		</div>
		<div class="about__container">
			<div class="about__row">
				<div class="about__text-wrapper">
					<div class="about__text">
						' . $row["text33"] . '
					</div>
					<div class="about__text">
						' . $row["text34"] . '
					</div>
				</div>
				<div class="about__text-wrapper">
					<div class="about__text">
						' . $row["text35"] . '				
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
		
	<section class="news-tiles  js-news">
		<div class="content-center">
		<div class="infocenter clearfix">
			<h2 class="infocenter__caption">' . $row["text38"] . '</h2>
			<a href="novosti" class="infocenter__button is-hide-mobile">' . $row["text39"] . '<span class="icon-arrow1"></span></a>
			
		</div>
		<br>
		<div class="news-tiles__inner js-news-inner" data-news-section-id="0" data-news-team-id="" data-news-projects-id="" data-news-template="news-tiles" data-news-count="6">
	';
	$result24 =  DB::Query("SELECT * FROM spory order by id desc limit 1", $link);

	$row24 = mysqli_fetch_array($result24);
	echo '     					              
                        <div class="news-tiles__item js-news-item" >
						<div class="news-tiles__item-inner">
							<div class="news-tiles__item-top clearfix">
								<div class="news-tiles__item-date clearfix"><span>' . $row24["day"] . '</span><span>' . $row24["mount"] . '</span></div>
								<div class="news-tiles__item-person">
								<span><a href="specialist?name=' . $row24["persona"] . '" class="frfrfra44">' . $row24["persona"] . '</a></span>	
								</div>
								<a href="uslugi?nazvanie=' . $row24["kat"] . '"><div class="news-tiles__item-category">' . $row24["kat"] . '</div></a>
							</div>
							<div class="news-tiles__item-person">
																	
																									<span><a href="specialist?name=' . $row24["persona"] . '" class="frfrfra44">' . $row24["persona"] . '</a></span>	
																							</div>
																<a href="rezultat-spora?id=' . $row24["id"] . '" class="frfrfra44">
							<div class="news-tiles__item-caption"> ' . $row24["nazvanie"] . '</div>
							<div class="news-tiles__item-text">
								<p style="  overflow: hidden;
								text-overflow: ellipsis;
								display: -moz-box;
								-moz-box-orient: vertical;
								display: -webkit-box;
								-webkit-line-clamp: 3;
								-webkit-box-orient: vertical;
								line-clamp: 3;
								box-orient: vertical;">  ' . $row24["opisanie1"] . '</p>
							</div>
							</div>
						</a>
					</div>
';

	$result24 =  DB::Query("SELECT * FROM novosti order by id desc limit 1", $link);
	$row24 = mysqli_fetch_array($result24);
	echo '     					              

                            <div class="news-tiles__item js-news-item" >
						<div class="news-tiles__item-inner">
							<div class="news-tiles__item-top clearfix">
								<div class="news-tiles__item-date clearfix"><span>' . $row24["day"] . '</span><span>' . $row24["mount"] . '</span></div>
								<div class="news-tiles__item-person">
																			
													<span><a href="specialist?name=' . $row24["persona"] . '" class="frfrfra44">' . $row24["persona"] . '</a></span>	
												</div>
																										
								<a href="uslugi?nazvanie=' . $row24["kat"] . '"><div class="news-tiles__item-category">' . $row24["kat"] . '</div></a>
							</div>
							<div class="news-tiles__item-person">
																	
																									<span><a href="specialist?name=' . $row24["persona"] . '" class="frfrfra44">' . $row24["persona"] . '</a></span>	
																							</div>
																							<a href="statya?id=' . $row24["id"] . '" class="frfrfra44">
							<div class="news-tiles__item-caption"> ' . $row24["nazvanie"] . '</div>
							<div class="news-tiles__item-text">
								<p style="  overflow: hidden;
								text-overflow: ellipsis;
								display: -moz-box;
								-moz-box-orient: vertical;
								display: -webkit-box;
								-webkit-line-clamp: 6;
								-webkit-box-orient: vertical;
								line-clamp: 6;
								box-orient: vertical;">  ' . $row24["opisanie1"] . '</p>
							</div>
							</div>
						</a>
						
					</div>
                      ';
	echo '   
				</div>
					</div>
	</section>
	


<!--
<section class="team">
    <div class="container content-center">
		<div class="infocenter clearfix">
		<h3 class="clients__subtitle section__subtitle">Команда</h3>
		</div>
          <ul class="team__list">
            <li class="team__card">
              <div class="team-member">
                    <img
                      class="team-member__image"
                      src="./img/komanda/12547.jpg"
                      alt=""
                    />
					<p class="team-member__title team__name">Железняк Максим Сергеевич </p>
                    <div class="team-member__info">
                      <p class="team-member__name">Основные направления профессиональной компетенции                        :
                    </p>
                      <p class="team-member__text">
					  Гражданское право
                      </p>
                    </div>
                  </div>
            </li>

            <li class="team__card">
              <div class="team-member">
                    <img
                      class="team-member__image"
                      src="./img/komanda/45831.jpg"
                      alt=""
                    />
					<p class="team-member__title team__name">Железняк Максим Сергеевич </p>
                    <div class="team-member__info">
                      <p class="team-member__name">Основные направления профессиональной компетенции                        :
                    </p>
                      <p class="team-member__text">
					  Гражданское право
                      </p>
                    </div>
            	</div>
            </li>

            <li class="team__card">
              <div class="team-member">
                    <img
                      class="team-member__image"
                      src="./img/komanda/68230.jpg"
                      alt=""
                    />
					<p class="team-member__title team__name">Железняк Максим Сергеевич </p>
                    <div class="team-member__info">
                      <p class="team-member__name">Основные направления профессиональной компетенции                        :
                    </p>
                      <p class="team-member__text">
					  Гражданское право
                      </p>
                    </div>
                  </div>
            </li>

            <li class="team__card">
              <div class="team-member">
                    <img
                      class="team-member__image"
                      src="./img/komanda/87486.jpg"
                      alt=""
                    />
					<p class="team-member__title team__name">Железняк Максим Сергеевич </p>
                    <div class="team-member__info">
                      <p class="team-member__name">Основные направления профессиональной компетенции                        :
                    </p>
                      <p class="team-member__text">
					  Гражданское право
                      </p>
                    </div>
                  </div>
            </li>

            <li class="team__card">
              <div class="team-member">
                    <img
                      class="team-member__image"
                      src="./img/komanda/95043.jpeg"
                      alt=""
                    />
					<p class="team-member__title team__name">Железняк Максим Сергеевич </p>
                    <div class="team-member__info">
                      <p class="team-member__name">Основные направления профессиональной компетенции                        :
                    </p>
                      <p class="team-member__text">
					  Гражданское право
                      </p>
                    </div>
                  </div>
            </li>

           
          </ul>
        </div>
</section>
-->

<section class="team-swiper">
	<div class="container content-center">

		<div class="infocenter clearfix">
			<h3 class="clients__subtitle section__subtitle">Команда</h3>
		</div>
		
		<div class="swiper__container">
			<div class="swiper">
				<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<a href="specialist?id=1" class="team__hidden-link">
						<div class="team-member">
											<img
											class="team-member__image"
											src="./img/komanda/12547.jpg"
											alt=""
											/>
											<p class="team-member__title team__name">Железняк Максим Сергеевич </p>
											<div class="team-member__info">
											<p class="team-member__name">Основные направления профессиональной компетенции                        :
											</p>
											<p class="team-member__text">
											Гражданское право
											</p>
											</div>
						</div>
					</a>
					
				</div>
				<div class="swiper-slide">
					<a href="specialist?id=4" class="team__hidden-link">
							<div class="team-member">
												<img
												class="team-member__image"
												src="./img/komanda/45831.jpg"
												alt=""
												/>
												<p class="team-member__title team__name">Федоров Александр Анатольевич</p>
												<div class="team-member__info">
												<p class="team-member__name">Основные направления профессиональной компетенции                        :
												</p>
												<p class="team-member__text">
												Уголовное право
												</p>
												</div>
								</div>
						</a>
				</div>
				<div class="swiper-slide">
					<a href="specialist?id=6" class="team__hidden-link">
						<div class="team-member">
											<img
											class="team-member__image"
											src="./img/komanda/68230.jpg"
											alt=""
											/>
											<p class="team-member__title team__name">Енин Артём Николаевич</p>
											<div class="team-member__info">
											<p class="team-member__name">Основные направления профессиональной компетенции                        :
											</p>
											<p class="team-member__text">
											Уголовное право
											</p>
											</div>
							</div>
					</a>
				</div>
				
				<div class="swiper-slide">
					<a href="specialist?id=8" class="team__hidden-link">
						<div class="team-member">
											<img
											class="team-member__image"
											src="./img/komanda/87486.jpg"
											alt=""
											/>
											<p class="team-member__title team__name">Азанов Виталий Сергеевич</p>
											<div class="team-member__info">
											<p class="team-member__name">Основные направления профессиональной компетенции                        :
											</p>
											<p class="team-member__text">
											Гражданское право
											</p>
											</div>
							</div>
					</a>
				
				</div>
				<div class="swiper-slide">
				  <a href="specialist?id=9" class="team__hidden-link">
						<div class="team-member">
											<img
											class="team-member__image"
											src="./img/komanda/95043.jpeg"
											alt=""
											/>
											<p class="team-member__title team__name">Белуш Татьяна Александровна</p>
											<div class="team-member__info">
											<p class="team-member__name">Основные направления профессиональной компетенции                        :
											</p>
											<p class="team-member__text">
											Защита и юридическое сопровождение бизнеса
											</p>
											</div>
							</div>
					</a>
				</div>
			
				</div>
		
			</div>
			<!-- If we need navigation buttons -->
			<div class="button-prev">
						
				<span class="icon-arrow1"></span>
			</div>
			<div class="button-next">
		
				<span class="icon-arrow1"></span>
			</div>
	</div>
</section>

<section class="clients">
        <div class="container content-center">
		<div class="infocenter clearfix">
		<h3 class="clients__subtitle section__subtitle">Наши клиенты</h3>
		</div>
		<ul class="clients__list">
                <li class="clients__item">
                    <a href="https://belyeruchki.ru" target="_blank">
                        <img class="clients__logo" src="./img/clients/white-hands.png" alt="Client 1" />
                    </a>
                </li>
                <li class="clients__item">
                    <a href="https://www.zepter.ru/" target="_blank">
                        <img class="clients__logo" src="./img/clients/zepter.svg" alt="Client 2" />
                    </a>
                </li>
                <li class="clients__item">
                    <a href="https://mczdorovie.com/" target="_blank">
                        <img class="clients__logo" src="./img/clients/health.jpg" alt="Client 3" />
                    </a>
                </li>
                <li class="clients__item">
                    <a href="https://temper.ru/" target="_blank">
                        <img class="clients__logo" src="./img/clients/temper.png" alt="Client 4" />
                    </a>
                </li>
                <li class="clients__item">
                    <a href="https://kurgan-armatura.ru/" target="_blank">
                        <img class="clients__logo" src="./img/clients/kaz.png" alt="Client 5" />
                    </a>
                </li>
                <li class="clients__item">
                    <a href="http://kvark45.com/" target="_blank">
                        <img class="clients__logo" src="./img/clients/kvark.png" alt="Client 6" />
                    </a>
                </li>
            </ul>
        </div>
</section>



    <section class="rewards">
        <div class="content-center">
            <div class="rewards__clarification">
                ';
	if ($row["text40"] != '') {
		echo '
                <h2 class="rewards__caption">' . $row["text40"] . '</h2>
                ';
	}

	if ($row["text41"] != '') {
		echo '
                <div class="rewards__text">
                    ' . $row["text41"] . ' </div>
                ';
	}


	echo '
            </div>



        <!--div class="rewards__block ">
		<ul class="rewards__list">
			
							<li class="rewards__item" id="bx_3485106786_2557">
					<img data-no-retina="" src="img/ind/' . $row["img11"] . '" alt="' . $row["text42"] . '" class="rewards__img">
				</li>
					
							<li class="rewards__item" id="bx_3485106786_3582">
					<img data-no-retina="" src="img/ind/' . $row["img12"] . '" alt="' . $row["text43"] . '" class="rewards__img">
				</li>
					
							<li class="rewards__item" id="bx_3485106786_2556">
					<img data-no-retina="" src="img/ind/' . $row["img13"] . '" alt="' . $row["text44"] . '" class="rewards__img">
				</li>
					
							<li class="rewards__item" id="bx_3485106786_2554">
					<img data-no-retina="" src="img/ind/' . $row["img14"] . '" alt="' . $row["text45"] . '" class="rewards__img">
				</li>
					
							<li class="rewards__item" id="bx_3485106786_2555">
					<img data-no-retina="" src="img/ind/' . $row["img15"] . '" alt="' . $row["text46"] . '" class="rewards__img">
				</li>
					
							<li class="rewards__item" id="bx_3485106786_2553">
					<img data-no-retina="" src="img/ind/' . $row["img16"] . '" alt="' . $row["text47"] . '" class="rewards__img">
				</li>
					<li class="rewards__item" id="bx_3485106786_2553">
					<img data-no-retina="" src="img/ind/' . $row["img17"] . '" alt="' . $row["text48"] . '" class="rewards__img">
				</li>
					<li class="rewards__item" id="bx_3485106786_2553">
					<img data-no-retina="" src="img/ind/' . $row["img18"] . '" alt="' . $row["text49"] . '" class="rewards__img">
				</li>
					<li class="rewards__item" id="bx_3485106786_2553">
					<img data-no-retina="" src="img/ind/' . $row["img19"] . '" alt="' . $row["text50"] . '" class="rewards__img">
				</li>
					<li class="rewards__item" id="bx_3485106786_2553">
					<img data-no-retina="" src="img/ind/' . $row["img20"] . '" alt="' . $row["text51"] . '" class="rewards__img">
				</li>
			</ul>
	</div-->


        </div>
    </section>


    <section>
        <div class="container content-center">
            <div class="infocenter clearfix">
                <h3 class="clients__subtitle section__subtitle">Свяжитесь с нами для получения консультации</h3>
            </div>
			
			<div class="contact__row-wrapper"> 
				<div class="contacts__row">
					<div class="form-standart js-ajax is-pla is-e1 is-modal bem contact__form">
							<!-- <div class="form-standart__title">
										' . $row17["text28"] . '</div> -->
					<form name="CONSULTATION_RU" class="CONSULTATION_RU" action="/include/contacts.php" method="POST" >

							<div class="form-standart__fields-list">
													<div class="form-standart__field" data-necessary="data-necessary">
							<div class="form-standart__label">
								Ваше имя							 *						</div>

								<div class="form-standart__item">
									<div class="__inputs">
										<input type="text" class="inputtext" name="nameFF" id="nameFF" value="" data-fieldname="name" placeholder="Ваше имя">															</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
					
							<div class="form-standart__field" data-necessary="data-necessary">
							<div class="form-standart__label">
								Телефон							 *						</div>

							<div class="form-standart__item">
								<div class="__inputs contact-form__input">
									<input type="text" class="inputtext" name="contactFF" id="contactFF" value="" data-fieldname="phone" data-mask="phone" data-mask-clearifnotmatch="true" placeholder="Телефон">															</div>
								<div class="form-standart__message">
									<div class="form-standart__none">Заполнение поля обязательно</div>
									<div class="form-standart__error"></div>
								</div>
							</div>
						</div>
					
							<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Удобное время для звонка							 *						</div>

								<div class="form-standart__item">
									<div class="__inputs">
										<input type="text" class="inputtext" name="vremyaFF" id="vremyaFF" value="" data-fieldname="time" placeholder="Удобное время для звонка">															</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
					
							<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Кратко опишите свой вопрос							 *						</div>

								<div class="form-standart__item">
									<div class="__inputs">
										<textarea name="messageFF" id="messageFF" cols="40" rows="5" class="inputtextarea" data-fieldname="message" placeholder="Кратко опишите свой вопрос"></textarea>															</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
					
							<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Соглашение							 *						</div>

								<div class="form-standart__item">
									<div class="__inputs contact-form__input">
									<input type="checkbox" data-fieldname="check" id="checkboxFF" name="checkboxFF" value="Пользователь подтвердил согласие на обработку персональных данных" placeholder="Соглашение"> <label for="74">' . $row17["text31"] . ' <a href="soglashenie">Пользовательским соглашением</a> и с <a href="politika">Политикой конфиденциальности сайта.</a></label>															</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Ваше согласие обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
				
							<div class="form-standart__common-error-placeholder"></div>

							<div class="form-standart__field is-field-btn">
								<div class="form-standart__label is-empty">&nbsp;</div>
								<div class="form-standart__item">
									<div class="form-standart__inputs">
										<input type="submit" name="web_form_submit" value="Отправить" class="button-primary" id="primary1">
									</div>
								</div>
								</div>
								</div>
							</form>			
						<div class="success-message-modal">
						
						<div class="success-message-modal__text">Спасибо, ваш запрос принят!</div>
						</div>

						</div>	
							<div id="map" class="map-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2263.465041009656!2d65.35123147638609!3d55.43712281626206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43b7bd5c57bfe25b%3A0x20cd9ded1e04855f!2z0K7RgNC40LTQuNGH0LXRgdC60LDRjyDQutC-0LzQv9Cw0L3QuNGPINCf0YDQsNCy0L7QstC-0LUg0L_QsNGA0YLQvdGR0YDRgdGC0LLQvg!5e0!3m2!1sru!2sru!4v1720162231081!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
								<!-- <img class="contacts__image" src="image/contacts/map.jpg" alt="карта местности"> -->
							</div>	
			</div>
		</div>
    </section>
</main>
    ';
	include('include/footer.php') ?>


	<script>

		// Add blur to the header

const blurHeader = () =>{
    const header = document.getElementById('header')
    // Add a class if the bottom offset is greater than 50 of the viewport
    this.scrollY >= 50 ? header.classList.add('blur-header') 
                    : header.classList.remove('blur-header')
}
window.addEventListener('scroll', blurHeader)


		// Map
		// ymaps.ready(init);

		// function init() {
		// 	const myMap = new ymaps.Map("map", {
		// 		center: [55.437112, 65.353596],
		// 		zoom: 17,
		// 	});

		// 	const mark = new ymaps.Placemark([55.437112, 65.353596]);
		// 	myMap.geoObjects.add(mark);

		// 	myMap.behaviors.disable("drag");

		// 	myMap.controls.remove("geolocationControl");
		// 	myMap.controls.remove("searchControl");
		// 	myMap.controls.remove("trafficControl");
		// 	myMap.controls.remove("typeSelector");
		// 	myMap.controls.remove('fullscreenControl');
		// 	myMap.controls.remove('zoomControl');
		// }

		const swiper = new Swiper('.swiper', {
			// Optional parameters
			// direction: 'vertical',
			spaceBetween: 20,
			slidesPerView: 3,
			// centeredSlides: true,
			loop: true,
			mousewheel: true,
			keyboard: true,
			loop: true,

			// Navigation arrows
			navigation: {
				nextEl: '.button-next',
				prevEl: '.button-prev',
			},

			breakpoints: {
				// when window width is >= 320px
				220: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				// when window width is >= 480px
				580: {
					slidesPerView: 2,
					spaceBetween: 20
				},
				// when window width is >= 640px
				640: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				860: {
					spaceBetween: 20,
					slidesPerView: 3,
				}

			}

		});
	</script>
</body>

</html>