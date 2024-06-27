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
<h1 class="jkjk55">Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО<br> профессиональные юристы и адвокаты</h1>
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
	


	<!--section class="project-slider__section">
		<div class="content-center">
			<div class="project-slider ">
									<div class="project-slider__item" id="bx_1373509569_3516">
						<img src="upload\resize_cache\iblock\728\1170_480_2\shutterstock_120486994.jfif" class="project-slider__item-img" data-u="image" alt=" Проведение комплексного правового анализа (Due Diligence) инвестиционного проекта с целью выделения..." data-at2x="/upload/resize_cache/iblock/728/2340_960_2/shutterstock_120486994.jpg">
						<div class="project-slider__item-text">
							<h4 class="project-slider__caption"> Проведение комплексного правового анализа (Due Diligence) инвестиционного проекта с целью выделения...</h4>
														<p class="project-slider__content"> Юридическая группа «Яковлев и Партнеры» осуществила комплексный правовой аудит (due dilligence) инвестиционного проекта в Санкт-Петербурге, связанного с реконструкцией объекта культурного наследия в целях приспособления...</p>
							<a href="company\projects\index" class="project-slider__link">Смотреть все проекты<span class="icon-arrow1"></span></a>
						</div>
					</div>
									<div class="project-slider__item" id="bx_1373509569_3502">
						<img src="upload\resize_cache\iblock\85a\1170_480_2\2-2@2x.jfif" class="project-slider__item-img" data-u="image" alt="Правовое сопровождение сделки по приобретению акций" data-at2x="/upload/resize_cache/iblock/85a/2340_960_2/2-2@2x.jpg">
						<div class="project-slider__item-text">
							<h4 class="project-slider__caption">Правовое сопровождение сделки по приобретению акций</h4>
														<p class="project-slider__content"> Юристами «Яковлев и Партнеры» было осуществлено юридическое сопровождение сделки по приобретению 50,1 % в УК иностранной компании, владеющей 100-процентной долей в двух казахских ТОО, имеющих лицензии на разведку и...</p>
							<a href="company\projects\index" class="project-slider__link">Смотреть все проекты<span class="icon-arrow1"></span></a>
						</div>
					</div>
									<div class="project-slider__item" id="bx_1373509569_3472">
						<img src="upload\resize_cache\iblock\035\1170_480_2\shutterstock_538370872.jfif" class="project-slider__item-img" data-u="image" alt="Оспаривание правомерности доначисления налога на прибыль" data-at2x="/upload/resize_cache/iblock/035/2340_960_2/shutterstock_538370872.jpg">
						<div class="project-slider__item-text">
							<h4 class="project-slider__caption">Оспаривание правомерности доначисления налога на прибыль</h4>
														<p class="project-slider__content"> Юристы налоговой практики Юридической Группы «Яковлев и Партнеры» представляли интересы кредитной организации* при оспаривании правомерности доначисления налога на прибыль, исходя из расчетной цены акций, определенной...</p>
							<a href="company\projects\index" class="project-slider__link">Смотреть все проекты<span class="icon-arrow1"></span></a>
						</div>
					</div>
									<div class="project-slider__item" id="bx_1373509569_3455">
						<img src="upload\resize_cache\iblock\741\1170_480_2\shutterstock_602151149.jfif" class="project-slider__item-img" data-u="image" alt="Представление интересов клиента в ВАС РФ" data-at2x="/upload/resize_cache/iblock/741/2340_960_2/shutterstock_602151149.jpg">
						<div class="project-slider__item-text">
							<h4 class="project-slider__caption">Представление интересов клиента в ВАС РФ</h4>
														<p class="project-slider__content">Представление интересов клиента в ВАС РФ</p>
							<a href="company\projects\index" class="project-slider__link">Смотреть все проекты<span class="icon-arrow1"></span></a>
						</div>
					</div>
									<div class="project-slider__item" id="bx_1373509569_3404">
						<img src="upload\resize_cache\iblock\5c8\1170_480_2\shutterstock_551620648.jfif" class="project-slider__item-img" data-u="image" alt="Правовое сопровождение строительства завода по производству фанеры" data-at2x="/upload/resize_cache/iblock/5c8/2340_960_2/shutterstock_551620648.jpg">
						<div class="project-slider__item-text">
							<h4 class="project-slider__caption">Правовое сопровождение строительства завода по производству фанеры</h4>
														<p class="project-slider__content"> Юристы «Яковлев иПартнеры» осуществили правовое сопровождение строительства завода по производству фанеры в Республике Марий Эл для клиента ООО «ИнвестФорэст» (100% дочерняя компания иностранного инвестора Республики...</p>
							<a href="company\projects\index" class="project-slider__link">Смотреть все проекты<span class="icon-arrow1"></span></a>
						</div>
					</div>
							</div>
			<div class="arrow-project is-main"></div>
			<div class="dots-project is-main"></div>
		</div>
	</section>

	
<section class="seminars">
	<div class="content-center">
		<div class="seminars__container">
            <h2 class="seminars__caption">
                <a href="events\index" class="nocolor-link">Мероприятия и обучающие семинары</a>
            </h2>

			<div class="seminars__row">
				<div class="seminars__left seminars__item video-tiles">
    <a href="https://www.youtube.com/embed/ZScAqt2c8q8?autoplay=1" class="seminars__video video-tiles__trigger">
        <img data-no-retina="" src="img\content\main.png" alt="Видео семинара">
    </a>
</div>				<div class="seminars__right seminars__item">
	<div class="seminars__right-text">Мы готовы поделится своим практическим опытом и накопленными знаниями, организовав обучающие семинары для Ваших сотрудников по различным правовым блокам.</div>
	<div class="form-standart bem">
		<div class="form-standart js-ajax is-pla is-e1">
			<form name="EVENTS_RU" action="/" method="POST" enctype="multipart/form-data" id=""><input type="hidden" name="sessid" id="sessid" value="6fc8e313593ba74932bba0f97862570f"><input type="hidden" name="WEB_FORM_ID" value="9">				<input type="hidden" name="block_name" value="form-standart">
				<input type="hidden" name="confirm" value="1">
				<input type="hidden" name="ajax" value="1">
				<input type="hidden" name="action" value="formsubmit">

				<div class="form-standart__fields-list">
													<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Имя									 *								</div>

								<div class="form-standart__item">
									<div class="form-standart__inputs">
																					<input type="text" class="inputtext" name="form_text_43" value="" data-fieldname="name" placeholder="Имя">																			</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
						
					
													<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Телефон									 *								</div>

								<div class="form-standart__item">
									<div class="form-standart__inputs">
																					<input type="text" class="inputtext" name="form_text_79" value="" data-fieldname="phone" data-mask="phone" placeholder="Телефон">																			</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
						
					
													<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									E-mail									 *								</div>

								<div class="form-standart__item">
									<div class="form-standart__inputs">
																					<input type="email" class="inputtext" name="form_email_44" value="" data-fieldname="email" placeholder="E-mail">																			</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
						
					
													<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Укажите, какая тема вас интересует									 *								</div>

								<div class="form-standart__item">
									<div class="form-standart__inputs">
																					<textarea name="form_textarea_45" cols="40" rows="5" class="inputtextarea" data-fieldname="topic" placeholder="Укажите, какая тема вас интересует"></textarea>																			</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
							
							<div class="form-standart__field" data-necessary="data-necessary">
                                <div class="form-standart__label select-label">
									В представительство какого города Вы хотите обратиться										 *                                </div>

                                <div class="form-standart__item select-item">
                                    <div class="__inputs">
										<select class="inputselect" name="form_dropdown_city" id="form_dropdown_city"><option value="81">Москва</option><option value="82">Киров</option><option value="83">Самара</option><option value="84">Нижний Новгород</option><option value="85">Махачкала</option></select>                                    </div>
                                    <div class="form-standart__message">
                                        <div class="form-standart__none">Заполнение поля обязательно</div>
                                        <div class="form-standart__error"></div>
                                    </div>
                                </div>
                            </div>
						
					
													<div class="form-standart__field" data-necessary="data-necessary">
								<div class="form-standart__label">
									Соглашение									 *								</div>

								<div class="form-standart__item">
									<div class="form-standart__inputs">
																					<input type="checkbox" data-fieldname="check" id="71" name="form_checkbox_check[]" value="71" placeholder="Соглашение"> <label for="71">Нажимая на кнопку, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с <a href="confirm_personal\index">Соглашением</a> и с <a href="politic_company\index">Политикой конфиденциальности сайта.</a></label>																			</div>
									<div class="form-standart__message">
										<div class="form-standart__none">Заполнение поля обязательно</div>
										<div class="form-standart__error"></div>
									</div>
								</div>
							</div>
						
										
					
					<div class="form-standart__common-error-placeholder"></div>


					<div class="form-standart__field">
						<div class="form-standart__item">
							<div class="form-standart__inputs is-buttons">
								<input type="submit" name="web_form_submit" value="Запросить семинар" class="button-primary seminars__btn">
								<a href="#modal-callback" class="seminars__link is-hide-mobile open-modal">Заказать звонок</a>
							</div>
						</div>
					</div>

				</div>

				</form>
				<div class="success-message-modal">
					<div class="success-message-modal__caption">Спасибо!</div>
					<div class="success-message-modal__text">Спасибо, ваш запрос принят!</div>
				</div>

								<script>
					$(function () {
						$("#form_sOiWMD").initWebForm("form-standart", {"WP_FORM_ID":"form_sOiWMD","WP_SUCCESS_MODE":"S5","WP_DEFAULT_SUCCESS_MESSAGE":"\u0421\u043f\u0430\u0441\u0438\u0431\u043e, \u0432\u0430\u0448 \u0437\u0430\u043f\u0440\u043e\u0441 \u043f\u0440\u0438\u043d\u044f\u0442!"});
					});

									</script>

			</form>
		</div>
	</div>
</div>
			</div>
		</div>
	</div>
</section-->

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
              <img class="clients__logo" src="./img/clients/white-hands.png" alt="" />
            </li>

            <li class="clients__item">
              <img class="clients__logo" src="./img/clients/zepter.svg" alt="" />
            </li>

            <li class="clients__item">
              <img class="clients__logo" src="./img/clients/health.jpg" alt="" />
            </li>

            <li class="clients__item">
              <img class="clients__logo" src="./img/clients/temper.png" alt="" />
            </li>

            <li class="clients__item">
              <img class="clients__logo" src="./img/clients/kaz.png" alt="" />
            </li>

            <li class="clients__item">
              <img class="clients__logo" src="./img/clients/kvark.png" alt="" />
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
							<div id="map" class="map"></div>
								<!-- <img class="contacts__image" src="image/contacts/map.jpg" alt="карта местности"> -->
							</div>	
			</div>
		</div>
    </section>

    ';
	include('include/footer.php') ?>


	<script>
		ymaps.ready(init);

		function init() {
			const myMap = new ymaps.Map("map", {
				center: [55.437112, 65.353596],
				zoom: 17,
			});

			const mark = new ymaps.Placemark([55.437112, 65.353596]);
			myMap.geoObjects.add(mark);

			myMap.behaviors.disable("drag");

			myMap.controls.remove("geolocationControl");
			myMap.controls.remove("searchControl");
			myMap.controls.remove("trafficControl");
			myMap.controls.remove("typeSelector");
			myMap.controls.remove('fullscreenControl');
			myMap.controls.remove('zoomControl');
		}

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
				480: {
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