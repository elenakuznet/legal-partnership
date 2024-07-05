<!DOCTYPE html>
<html lang="ru">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ПРАВОВОЕ ПАРТНЁРСТВО Курган - Контакты</title>
    <meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
    <meta property="og:title" content="ПРАВОВОЕ ПАРТНЁРСТВО Курган - Контакты" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://юрист45.рф/kontakty" />
    <link rel="canonical" href="https://юрист45.рф/kontakty" />
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
    <link
        href="css\template_83943bfab5bae145e83fccc6a8e55f26\template_83943bfab5bae145e83fccc6a8e55f26.css?1520424615451015"
        type="text/css" data-template-style="true" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=f4112ee9-ccf1-46a4-aaa2-b243dc478c03&lang=ru_RU"></script>
    <link href="bitrix\panel\main\popup.min.css?149849325520704" type="text/css" data-template-style="true"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Fonts -->
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
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM kont", $link);
	$row =  /* fixed MMiC */ mysqli_fetch_array($result);
	echo '				
	<main class="main__container">
	
	<section class="subheader1 ">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">' . $row17["text12"] . '</h1>

</div>		<h1 class="breadcrumbs__item3 is-hide-desktop" >' . $row17["text12"] . '</h1>				
					</div>
										
					</div>
			</section>
												
			<main class="main__content">
		<div class="content-center content-area">

<!--
<h4 class="kdkdkd44">' . $row["text1"] . '</h4>
-->

<section class="contact">
	<div class="contact__map-wrapper">
	
	<div class="map-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2263.465041009656!2d65.35123147638609!3d55.43712281626206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43b7bd5c57bfe25b%3A0x20cd9ded1e04855f!2z0K7RgNC40LTQuNGH0LXRgdC60LDRjyDQutC-0LzQv9Cw0L3QuNGPINCf0YDQsNCy0L7QstC-0LUg0L_QsNGA0YLQvdGR0YDRgdGC0LLQvg!5e0!3m2!1sru!2sru!4v1720162231081!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	
		<!--
		<div id="map-contacts-map-2714" class="contact__map">
					
	<div class="bx-yandex-view-layout">
	
	
' . $row["text18"] . '	
</div>
		</div>
	</div> 
	-->
	<div class="contact__text">
					<div class="contact__caption">' . $row["text2"] . '</div>
			<div class="contact__info">' . $row["text3"] . '</div>
							<div class="contact__caption">' . $row["text4"] . '</div>
			<div class="contact__info">' . $row["text5"] . '</div>
			 ';
	if ($row["text6"] != '') {
		echo '
							<div class="contact__caption">' . $row["text6"] . '</div>
			<a class="contact__link" href="tel:89195823099"><div class="contact__info">' . $row["text7"] . '</div></a>
			';
	}

	if ($row["text8"] != '') {
		echo '
							<div class="contact__caption">' . $row["text8"] . '</div>
			<a class="contact__link" href="mailto:urist-kurgan045@mail.ru"><div class="contact__info">' . $row["text9"] . '</div></a>
			 ';
	}
	if ($row["text10"] != '') {
		echo '
			<div class="contact__caption">' . $row["text10"] . '</div>
			<div class="contact__info">' . $row["text11"] . '</div>
			 ';
	}
	// if ($row["text12"] != '') {
	// 	echo '
	// 		<div class="contact__caption">' . $row["text12"] . '</div>
	// 		<div class="contact__info">' . $row["text13"] . '</div>
	// 		 ';
	// }
	// if ($row["text14"] != '') {
	// 	echo '
	// 		<div class="contact__caption">' . $row["text14"] . '</div>
	// 		<div class="contact__info">' . $row["text15"] . '</div>
	// 		 ';
	// }
	// if ($row["text16"] != '') {
	// 	echo '
	// 		<div class="contact__caption">' . $row["text16"] . '</div>
	// 		<div class="contact__info">' . $row["text17"] . '</div>
	// 		 ';
	// }
	echo '
			</div>
</section>

				</div>
		</main>
	
	';
	include('include/footer.php') ?>

    <!-- <script>
    ymaps.ready(init);

    function init() {
        const myMap = new ymaps.Map("map2", {
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
    </script> -->
</body>

</html>