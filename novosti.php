<!DOCTYPE html>
<html lang="ru">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow"> 
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ПРАВОВОЕ ПАРТНЁРСТВО Курган - Наши новости</title>
	<meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
    <meta property="og:title" content="ПРАВОВОЕ ПАРТНЁРСТВО Курган - Наши новости" />
    <meta property="og:type" content="article" />
	<meta property="og:url" content="https://юрист45.рф/novosti" />
	<link rel="canonical" href="https://юрист45.рф/novosti" />
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
      $result17 = DB::Query("SELECT * FROM site",$link);
	  $row17= /* fixed MMiC */ mysqli_fetch_array($result17);
	echo'
<meta property="og:image" content="https://юрист45.рф/img/'.$row17["img1"].'" />   

';
	?>
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
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">'.$row17["text8"].'</h1>

</div>		<h1 class="breadcrumbs__item3 is-hide-desktop" >'.$row17["text8"].'</h1>				
					</div>
										
									</div>
			</section>

												
			<main class="main__content">
		<div class="content-center content-area">




	
	
		
	<section class="news-tiles  js-news">
		<div class="content-center">
		<div class="news-tiles__inner js-news-inner"  id="content" data-news-section-id="0" data-news-team-id="" data-news-projects-id="" data-news-template="news-tiles" data-news-count="6">
	
														';
                       $result24 =  DB::Query("SELECT * FROM novosti order by id desc limit 8",$link);

while($row24 = mysqli_fetch_array($result24))
{
echo'     					              
              
                                                   
              
                             <div class="news-tiles__item js-news-item"  itemscope itemtype="https://schema.org/NewsArticle">
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
							<div class="news-tiles__item-caption" itemprop="name"> '.$row24["nazvanie"].'</div>
							<div class="news-tiles__item-text">
								<p itemprop="description">  '.$row24["opisanie1"].'</p>
								 
								  <img itemprop="image" src="https://юрист45.рф/img/novosti/'.$row24["img1"].'" alt="'.$row24["nazvanie"].'" style="display:none;"/>
							</div>
							</div>
						</a>
						
					</div>
                      ';
}      			
		
           echo'   
													
				
				</div>
		
							<div id="load" class="watch__more js-news-load-more-wrapper">
								<img src="img/loading.gif" id="imgLoad">
							<div class="watch__more-link js-news-load-more">Загрузить еще</div>
					
					
				</div>
					</div>
	</section>

		
	


				</div>
		</main>
	
				
';
	
	include('include/footer.php')?>
	<script type="text/javascript">
$(document).ready(function(){
	$("#imgLoad").hide(); // Скрываем прелоадер
});

var num = 8; //чтобы знать с какой записи вытаскивать данные

$(function() {
	$("#load div").click(function(){ // Выполняем если по кнопке кликнули
		
		$("#imgLoad").show(); // Показываем прелоадер
		
		$.ajax({
			url: "include/actionnew.php", // Обработчик
			type: "GET",       // Отправляем методом GET
			data: {"num": num},
			cache: false,			
			success: function(response){
				if(response == 0){ // Смотрим ответ от сервера и выполняем соответствующее действие
					alert("Больше нет записей");
					$("#imgLoad").hide();
				}else{
					$("#content").append(response);
					num = num + 6;
					$("#imgLoad").hide();
				}
			}
		});
	});
});
</script>

</body>
</html>

