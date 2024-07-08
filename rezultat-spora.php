<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?
	include("sm/include/connect.php");
	$id = $_GET["id"];
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM spory WHERE id = '$id' ", $link);
	$result17 = DB::Query("SELECT * FROM site", $link);
	$row17 = /* fixed MMiC */ mysqli_fetch_array($result17);
	if ( /* fixed MMiC */mysqli_num_rows($result) > 0) {
		$row =  /* fixed MMiC */ mysqli_fetch_array($result);
		echo '
	<link rel="canonical" href="https://юрист45.рф/rezultat-spora?id=' . $row["id"] . '" />
	<meta property="og:url" content="https://юрист45.рф/rezultat-spora?id=' . $row["id"] . '" />
	<meta name="robots" content="index, follow"> 
	<title>' . $row["nazvanie"] . '</title>
	<meta name="description" property="og:description" content="' . $row["opisanie1"] . '">  
<meta property="og:image" content="https://юрист45.рф/img/spory/' . $row["img1"] . '" />   
<meta property="og:title" content="' . $row["nazvanie"] . '" />
';
	} else {
		echo '
	<meta name="robots" content="noindex"/>	
	';
	}
	?>

	<meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
	<meta property="og:type" content="article" />
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

</head>

<body class="">


	<?
	include('include/header.php');

	echo '			
	<main class="main__container">	
	<section class="subheader1 ">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
						<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<a class="breadcrumbs__link" itemprop="item" href="index" title="Главная">
						<span itemprop="name">Главная</span>
						</a><meta itemprop="position" content="1"></li><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="spory" title="' . $row17["text10"] . '"><span itemprop="name">' . $row17["text10"] . '</span></a><meta itemprop="position" content="2"></li></ul>
<br>
<h1>' . $row["nazvanie"] . '</h1>
</div>	<h1 class="breadcrumbs__item3 is-hide-desktop" >' . $row["nazvanie"] . '</h1>					
					</div>
				</div>
			</section>	

										
			<main class="main__content" itemscope itemtype="https://schema.org/NewsArticle">
		<div class="content-center content-area">

<meta itemprop="name" content="' . $row["nazvanie"] . '" >
<meta itemprop="description" content="' . $row["opisanie1"] . '" >
<div class="news-detail bem">
<br><br><br>
	<div class="news-detail__header">
		<div class="news-detail__date">' . $row["day"] . ' ' . $row["mount"] . ' ' . $row["year"] . '</div>
									<div class="news-detail__office">
						<a href="specialist?name=' . $row["persona"] . '" class="news-detail__team-link">' . $row["persona"] . '</a>			</div>
						<div class="news-detail__media">
				<span>Категория: <a href="uslugi?nazvanie=' . $row["kat"] . '" >
' . $row["kat"] . '</a></span>
			</div>
			</div>

			<div class="news-detail__content content-area">
			<h4>' . $row["title1"] . '</h4>
			' . $row["opisanie1"] . '
			<!--
			<br>
			-->
<br>

 ';
	if ($row["img1"] != '') {
		echo '<blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;">
 <img width="768" alt="' . $row["nazvanie"] . '" src="img/spory/' . $row["img1"] . '" height="512" title="' . $row["nazvanie"] . '"  itemprop="image">
</blockquote>';
	}
	echo '
<!--	
 <br>
 
 <h4>' . $row["title2"] . '</h4>
			' . $row["opisanie2"] . '
			<br>
  
 <br>
 -->
 <h4>' . $row["title3"] . '</h4>
			' . $row["opisanie3"] . '
		<br>
 <br>


 </div>
	
	
	<div class="news-detail__share">
			
	<div class="social-share bem ">
		<ul class="social-share__items js-share-block" data-action="share-link" >
		 ';
	if ($row["vk"] != '') {
		echo '
										<li class="social-share__item" data-action="share-link" data-count="vkontakte">
					<a href="' . $row["vk"] . '" data-service="vkontakte" class="social-share__link js-share-link is-vkontakte">&nbsp;VK</a>
				</li>
				';
	}

	if ($row["insta"] != '') {
		echo ' 
		<!--
							<li class="social-share__item" data-action="share-link" data-count="Insta">
					<a href="' . $row["insta"] . '" data-service="Insta" class="social-share__link js-share-link is-linkedin"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
				</li>
		-->
				';
	}
	echo '
					</ul>
	</div> <!-- .social-share .bem -->
		</div>
	</div>
<br><br>

<div class="specializations-detail">
	<div id="specialization-news" class="specializations-detail__info-block">
		<div class="specializations-detail__info-block-content">

	<section class="news-list  js-news">
		
														';
	$kat = $row["kat"];
	$result26 =  DB::Query("SELECT * FROM spory  where kat = '$kat' and id !=$id order by id desc limit 3", $link);
	if (mysqli_num_rows($result26) > 0) {
		echo '<h5>Результаты споров по теме: ' . $row["kat"] . '</h5>
		<div class="news-list__inner js-news-inner"  id="content" data-news-section-id="0" data-news-team-id="" data-news-projects-id="" data-specialization="" data-news-template="news-list" data-news-count="3">';

		while ($row26 = mysqli_fetch_array($result26)) {
			echo '     					              
                <div class="news-list__item js-news-item" >
					<div class="news-list__item-inner clearfix">
						<div class="news-list__item-left clearfix">
							<div class="news-list__item-date clearfix"><span>' . $row26["day"] . '</span><span>' . $row26["mount"] . '</span></div>
							<a href="uslugi?nazvanie=' . $row26["kat"] . '"><div class="news-list__item-category is-hide-desktop">' . $row26["kat"] . '</div></a>
							<div class="news-list__item-person is-hide-mobile">
																
																									<span><a href="specialist?name=' . $row26["persona"] . '" class="frfrfra44">' . $row26["persona"] . '</a></span>
															</div>
						</div>
						<div class="news-list__item-right">
							<a href="uslugi?nazvanie=' . $row26["kat"] . '"><div class="news-list__item-category is-hide-mobile">' . $row26["kat"] . '</div></a>
							<div class="news-list__item-person is-hide-desktop">
																
																									<span><a href="specialist?name=' . $row26["persona"] . '" class="frfrfra44">' . $row26["persona"] . '</a></span>
																							</div>
																							<a href="rezultat-spora?id=' . $row26["id"] . '"  class="frfrfra44">
							<div class="news-list__item-caption">' . $row26["nazvanie"] . '</div>
							<div class="news-list__item-text">
								<p>' . $row26["opisanie1"] . ' </p>
							</div>
						</div>
						</div>
					</a>
				</div>
                      ';
		}

		echo '   </div>	
				<div  class="watch__more js-news-load-more-wrapper">
								
						<a href="spory" class="hyhy664">	<div class="watch__more-link ">Все результаты споров</div></a>
					
					
				</div>';
	}
	echo '									
				
			
	</section>
	</div>
						</div>
						</div>
				</div>
		</main>
	';
	include('include/footer.php') ?>
</body>

</html>