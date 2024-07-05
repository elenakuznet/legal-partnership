<!DOCTYPE html>
<html lang="ru">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Наши клиенты</title>
	<meta name="description" property="og:description" content="Список клиентов юридической компании ПРАВОВОЕ ПАРТНЁРСТВО Курган.">
	<meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
	<meta property="og:title" content="Наши клиенты" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://юрист45.рф/klienty" />
	<link rel="canonical" href="https://юрист45.рф/klienty" />
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
	<link href="css\template_83943bfab5bae145e83fccc6a8e55f26\template_83943bfab5bae145e83fccc6a8e55f26.css?1520424615451015" type="text/css" data-template-style="true" rel="stylesheet">
	<link href="bitrix\panel\main\popup.min.css?149849325520704" type="text/css" data-template-style="true" rel="stylesheet">
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
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM klienty", $link);
	$row =  /* fixed MMiC */ mysqli_fetch_array($result);
	echo ' 
	<main class="main__container">
		<section class="subheader1 ">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">' . $row17["text9"] . '</h1>

</div><h1 class="breadcrumbs__item3 is-hide-desktop" >' . $row17["text9"] . '</h1>						
					</div>
										
				</div>
			</section>

												
			<main class="main__content">
		<div class="content-center content-area">
<div class="news-list-page">


	<div class="accept  content-area">
		<div class="accept__container cooperation_list">
			

				
    					<div class="accept__title">
        				
        					   ' . $row["text1"] . '    				
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
	</div>

	
</div>

			</div>
		</main>
';
	include('include/footer.php') ?>

</body>

</html>