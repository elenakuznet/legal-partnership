<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?
	include("sm/include/connect.php");	
	$nazvanie = $_GET["nazvanie"];
   	$id = $_GET["id"];
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM uslugi WHERE nazvanie = '$nazvanie' or id = '$id' ",$link);
      $result17 = DB::Query("SELECT * FROM site",$link);
	  $row17= /* fixed MMiC */ mysqli_fetch_array($result17);
		if ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
	$row =  /* fixed MMiC */ mysqli_fetch_array($result); 
	echo'
	<link rel="canonical" href="https://юрист45.рф/uslugi?id='.$row["id"].'" />
	<meta property="og:url" content="https://юрист45.рф/uslugi?id='.$row["id"].'" />
	<title>'.$row["nazvanie"].' - Курган</title>
	<meta name="description" property="og:description" content="'.$row["opisanie1"].'">  
<meta property="og:image" content="https://юрист45.рф/img/uslugi/'.$row["img1"].'" />   
<meta property="og:title" content="'.$row["nazvanie"].' - Курган" />
';
}
else{
	echo'
	<meta name="robots" content="noindex"/>	
	';
}
	?>

    <meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
    <meta property="og:type" content="product" />

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
    <link href="bitrix\panel\main\popup.min.css?149849325520704" type="text/css" data-template-style="true"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

</head>

<body class="">

    <?
	include('include/header.php');
	
	echo'
	<main class="main__container">	
	
	<section class="subheader1">
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
						<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="yuridicheskie-uslugi" title="'.$row17["text11"].'"><span itemprop="name">'.$row17["text11"].'</span></a><meta itemprop="position" content="2"></li></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">'.$row["nazvanie"].'</h1>
						</div>
						<h1 class="breadcrumbs__item3 is-hide-desktop" >'.$row["nazvanie"].'</h1>				
					</div>
				</div>
			</section>										
			<main class="main__content" itemscope itemtype="https://schema.org/Product">
		<div class="content-center content-area">

		<div class="specializations-detail">
	<div class="card__img">
	<img src="img/uslugi/'.$row["img1"].'" alt="'.$row["nazvanie"].'" title="'.$row["nazvanie"].'"  itemprop="image">					</div>
	<div class="specializations-detail__desc is-green-text is-first-letter">
		<meta itemprop="name" content="'.$row["nazvanie"].'" >
					<p itemprop="description" class="service__description">'.$row["opisanie1"].'</p>

						<p><b>'.$row["title1"].'</b></p>
						<p>'.$row["text1"].'
						</p>
						<p><b>'.$row["title2"].'</b></p>
						<p>'.$row["text2"].'
						</p>
						<p><b>'.$row["title3"].'</b></p>
						<p>'.$row["text3"].'
						</p>

	</div>

	<div id="specialization-team" class="specializations-detail__info-block">
		<div class="specializations-detail__info-block-content">
		<section class="news-list  js-news">
		
	';
	$nazvanie = $row["nazvanie"];
				$result26 = DB::Query("SELECT * FROM spory where kat = '$nazvanie'  order by id desc limit 3",$link);
	
	if(mysqli_num_rows($result26) > 0){	
		echo'	<div class="card__info-block-title">Результаты споров в данной категории</div>
		<div class="news-list__inner js-news-inner" data-news-section-id="0" data-news-team-id="3357" data-news-projects-id="" data-specialization="" data-news-template="news-list" data-news-count="3">';
		while($row26 = mysqli_fetch_array($result26))
{
echo'     					              
<div class="news-list__item js-news-item" >
					<div class="news-list__item-inner clearfix">
						<div class="news-list__item-left clearfix">
							<div class="news-list__item-date clearfix"><span>'.$row26["day"].'</span><span>'.$row26["mount"].'</span></div>
							<a href="uslugi?nazvanie='.$row26["kat"].'"><div class="news-list__item-category is-hide-desktop">'.$row26["kat"].'</div></a>
							<div class="news-list__item-person is-hide-mobile">
								<span><a href="specialist?name='.$row26["persona"].'" class="frfrfra44">'.$row26["persona"].'</a></span>
																							</div>
						</div>
						<div class="news-list__item-right">
							<a href="uslugi?nazvanie='.$row26["kat"].'"><div class="news-list__item-category is-hide-mobile">'.$row26["kat"].'</div></a>
							<div class="news-list__item-person is-hide-desktop">
																
																									<span><a href="specialist?name='.$row26["persona"].'" class="frfrfra44">'.$row26["persona"].'</a></span>
																							</div>
																							<a href="rezultat-spora?id='.$row26["id"].'"  class="frfrfra44">
							<div class="news-list__item-caption">'.$row26["nazvanie"].'</div>
							<div class="news-list__item-text">
								<p>'.$row26["opisanie1"].' </p>
							</div>
						</div>
						</div>
					</a>
				</div>
                      ';
}  
		echo'
			</div>
			<div  class="watch__more js-news-load-more-wrapper">
								
						<a href="spory" class="hyhy664">	<div class="watch__more-link ">Все результаты споров</div></a>
					
				</div>';
	}
	echo'
			
		
			
			</section>


					</div>
	</div>
</div>
	<div class="is-hide" data-link-hide="specialization-news"></div>
		<div class="is-hide" data-link-hide="specialization-projects"></div>
	

				</div>
		</main>
	'; include('include/footer.php')?>
</body>

</html>