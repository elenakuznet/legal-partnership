<!DOCTYPE html>
<html lang="ru">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?
	include("sm/include/connect.php");	
	$id = $_GET["id"];
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM novosti WHERE id = '$id' ",$link);
      $result17 = DB::Query("SELECT * FROM site",$link);
	  $row17= /* fixed MMiC */ mysqli_fetch_array($result17);
		if ( /* fixed MMiC */ mysqli_num_rows($result) > 0){
	$row =  /* fixed MMiC */ mysqli_fetch_array($result); 
	echo'
	<link rel="canonical" href="https://юрист45.рф/statya?id='.$row["id"].'" />
	<meta property="og:url" content="https://юрист45.рф/statya?id='.$row["id"].'" />
	<meta name="robots" content="index, follow"> 
	<title>'.$row["nazvanie"].'</title>
	<meta name="description" property="og:description" content="'.$row["opisanie1"].'">  
<meta property="og:image" content="https://юрист45.рф/img/novosti/'.$row["img1"].'" />   
<meta property="og:title" content="'.$row["nazvanie"].'" />
';
}
else{
	echo'
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
	
		echo'
		<main class="main__container">
		<section class="subheader1 ">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="novosti" title="'.$row17["text8"].'"><span itemprop="name">'.$row17["text8"].'</span></a><meta itemprop="position" content="2"></li></ul><br>
<h1>'.$row["nazvanie"].'</h1>
</div>	<h1 class="breadcrumbs__item3 is-hide-desktop" >'.$row["nazvanie"].'</h1>					
					</div>
										
									</div>
			</section>	
					
			<main class="main__content" itemscope itemtype="https://schema.org/NewsArticle">
		<div class="content-center content-area">


<div class="news-detail bem">
<br><br><br>
	<div class="news-detail__header">
		<div class="news-detail__date">'.$row["day"].' '.$row["mount"].' '.$row["year"].'</div>
									<div class="news-detail__office">
					<meta itemprop="name" content="'.$row["nazvanie"].'" >
					<a href="specialist?name='.$row["persona"].'" class="news-detail__team-link">'.$row["persona"].'</a>				</div>
										<div class="news-detail__media">
				<span>Категория: <a href="uslugi?nazvanie='.$row["kat"].'" >
'.$row["kat"].'</a></span>
			</div>
							</div>
	';
	if ($row["img1"] != ''){
	echo'
			<br>
			<br>
		<center>	<blockquote>
 <img  alt="'.$row["nazvanie"].'" src="img/novosti/'.$row["img1"].'"  title="'.$row["nazvanie"].'"  itemprop="image">
</blockquote>
</center>

';
	}
	echo'
	
			<div class="news-detail__content content-area"  itemprop="description">
			'.$row["opisanie2"].'	</div> 
			';
if ($row["img2"] != ''){
echo'<center>
<blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;">
<img  alt="'.$row["kat"].'" src="img/novosti/'.$row["img2"].'"  title="'.$row["kat"].'">
</blockquote></center>
';}
echo'
				
		
			<div class="news-detail__content content-area" >
 '.$row["opisanie3"].'
 </div> 
 '.$row["youtube"].' <br>
	
	<!--	-->
			<div class="news-detail__share">
			
	<div class="social-share bem ">
		<ul class="social-share__items js-share-block" data-action="share-link" >
									 ';
	if ($row["vk"] != ''){
	echo'
										<li class="social-share__item" data-action="share-link" data-count="vkontakte">
					<a href="'.$row["vk"].'" data-service="vkontakte" class="social-share__link js-share-link is-vkontakte">&nbsp;VK</a>
				</li>
				';	
	}
	
	if ($row["insta"] != ''){
	echo'
							<li class="social-share__item" data-action="share-link" data-count="Insta">
					<a href="'.$row["insta"].'" data-service="Insta" class="social-share__link js-share-link is-linkedin"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
				</li>
					';	
	}
	echo'
					</ul>
	</div> <!-- .social-share .bem -->
		</div>
	</div>	';	
	$result24 =  DB::Query("SELECT * FROM novosti  where kat = '$kat' and id !=$id order by id desc  limit 3",$link);
	if ( /* fixed MMiC */ mysqli_num_rows($result24) > 0){
echo'
	<br><br>
	<h5>Другие новости по теме: '.$row["kat"].'</h5>
<section class="">
		<div class="content-center">
		<div class="news-tiles__inner js-news-inner"  id="content" >
	<div class="card__info-block-title"></div>
														';
	$kat = $row["kat"];
                      

while($row24 = mysqli_fetch_array($result24))
{
echo'     					              
              
                                                   
              
                             <div class="news-tiles__item js-news-item" >
						<div class="news-tiles__item-inner">
							<div class="news-tiles__item-top clearfix">
								<div class="news-tiles__item-date clearfix"><span>'.$row24["day"].'</span><span>'.$row24["mount"].'</span></div>
								<div class="news-tiles__item-person">
																			
																												<span><a href="specialist?name='.$row24["persona"].'" class="frfrfra44">'.$row24["persona"].'</a></span>	
																										</div>
																										
								<a href="uslugi?nazvanie='.$row24["kat"].'"><div class="news-tiles__item-category">'.$row24["kat"].'</div></a>
							</div>
							<div class="news-tiles__item-person">
																	
																									<span><a href="specialist?name='.$row24["persona"].'" class="frfrfra44">'.$row24["persona"].'</a></span>	
																							</div>
																							<a href="statya?id='.$row24["id"].'" class="frfrfra44">
							<div class="news-tiles__item-caption"> '.$row24["nazvanie"].'</div>
							<div class="news-tiles__item-text">
								<p>  '.$row24["opisanie1"].'</p>
							</div>
							</div>
						</a>
						
					</div>
                      ';
}      			
		
           echo'   
													
				
				</div>
		
						
					</div>
	</section>
	';
}      			
		
           echo'   
				</div>
		</main>
	
			';
	include('include/footer.php')?></body>
</html>