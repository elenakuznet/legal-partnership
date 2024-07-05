<!DOCTYPE html>
<html lang="ru">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?
	include("sm/include/connect.php");	
	$name = $_GET["name"];
	$id = $_GET["id"];
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM komanda WHERE name = '$name' or id = '$id' ",$link);
      $result17 = DB::Query("SELECT * FROM site",$link);
	  $row17= /* fixed MMiC */ mysqli_fetch_array($result17);
		if ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
	$row =  /* fixed MMiC */ mysqli_fetch_array($result); 
	echo'
	<link rel="canonical" href="https://юрист45.рф/specialist?id='.$row["id"].'" />
	<meta property="og:url" content="https://юрист45.рф/specialist?id='.$row["id"].'" />
	<title>'.$row["name"].'</title>
	<meta name="description" property="og:description" content="'.$row["opisanie"].'">  
<meta property="og:image" content="https://юрист45.рф/img/komanda/'.$row["img1"].'" />   
<meta property="og:title" content="'.$row["name"].'" />
';
}
else{
	echo'
	<meta name="robots" content="noindex"/>	
	';
}
	?>
	
	<meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
    <meta property="og:type" content="Person" />
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
	
	echo'				
	<main class="main__container">	
	<section class="subheader1">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs">
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="komanda" title="'.$row17["text7"].'"><span itemprop="name">'.$row17["text7"].'</span></a><meta itemprop="position" content="2"></li></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">'.$row["name"].'</h1>
</div>	     	
<h1 class="breadcrumbs__item3 is-hide-desktop" >'.$row["name"].'</h1>
					</div>
												
									</div>
			</section>										
			<main class="main__content" itemscope itemtype="https://schema.org/Profile">
		<div class="content-center content-area">


<div class="card bem">
	<section class="card__main-info clearfix content-area">
		<div class="card__img">
							<img src="img/komanda/'.$row["img1"].'" alt="'.$row["name"].'" title="'.$row["name"].'"  itemprop="image">					</div>
							 	<meta itemprop="name" content="'.$row["name"].'" >
		<div class="card__info">
							
						<div class="card__about" itemprop="description">'.$row["opisanie"].'</div>
							<div class="card__competence-caption">Основные направления профессиональной компетенции:</div>
				<ul class="card__competence-list">
				'.$row["napr"].'
									</ul>
										<!--div class="card__connect">
											<div class="card__phone icon-tel">
							<div class="card__phone-caption">Телефон:</div>
							<div class="card__phone-link">
								<a href="tel:+74959562992">
									+7 (495) 956-29-92								</a>
							</div>
						</div>
																<div class="card__mail icon-mail">
							<div class="card__mail-caption">Электронный адрес:</div>
							<div class="card__mail-link"><a href="mailto:A.Yakovlev@matec.ru">A.Yakovlev@matec.ru</a></div>
						</div>
									</div-->
								</div>
	</section>
	<section class="card__info-block-list clearfix content-area">

					<div class="card__info-block">
				<div class="card__info-block-title">'.$row["title1"].'</div>
				<div class="card__info-block-text">
					'.$row["text1"].'		</div>
			</div>
		
					<div class="card__info-block">
				<div class="card__info-block-title">'.$row["title2"].'</div>
				<div class="card__info-block-text">
					'.$row["text2"].'	</div>
			</div>
		
					<div class="card__info-block">
				<div class="card__info-block-title">'.$row["title3"].'</div>
				<div class="card__info-block-text">
					'.$row["text3"].'			</div>
			</div>
		
				
		
					
			        <div class="card__info-block">
      
        <div class="card__info-block-content">
                    

	


		
	<section class="news-list  js-news">
		
	';
	$persona = $row["name"];
				$result26 = DB::Query("SELECT * FROM spory where persona = '$persona'  order by id desc limit 3",$link);
	
	if(mysqli_num_rows($result26) > 0){	
		echo'	<div class="card__info-block-title">Споры</div>
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
	  				
		
								

	
		
								
		
	</section>
</div>

				</div>
		</main>
	';
	include('include/footer.php')?></body>
</html>
