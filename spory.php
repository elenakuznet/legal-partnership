<!DOCTYPE html>
<html lang="ru">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow"> 
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ПРАВОВОЕ ПАРТНЁРСТВО Курган - Результаты споров</title>
	<meta name="copyright" property="og:site_name" content="Юридическая компания ПРАВОВОЕ ПАРТНЁРСТВО Курган">
    <meta property="og:title" content="ПРАВОВОЕ ПАРТНЁРСТВО Курган - Наши новости" />
    <meta property="og:type" content="article" />
	<meta property="og:url" content="https://юрист45.рф/spory" />
	<link rel="canonical" href="https://юрист45.рф/spory" />
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
	
	echo'			<section class="subheader1 ">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1"></li></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">'.$row17["text10"].'</h1>
</div>		<h1 class="breadcrumbs__item3 is-hide-desktop" >'.$row17["text10"].'</h1>				
					</div>
										
									</div>
			</section>

												
			<main class="main__content">
		<div class="content-center content-area">

	
<div class="specializations-detail">



	<div id="specialization-news" class="specializations-detail__info-block">
		<div class="specializations-detail__info-block-content">
						

	
	
	<section class="news-list  js-news">
		<div class="news-list__inner js-news-inner"  id="content" data-news-section-id="0" data-news-team-id="" data-news-projects-id="" data-specialization="" data-news-template="news-list" data-news-count="3">
	';
					$result26 = DB::Query("SELECT * FROM spory  order by id desc limit 12",$link);
	
		while($row26 = mysqli_fetch_array($result26))
{
echo'     					              
              
                                                   
              
                          	<div class="news-list__item js-news-item"  itemscope itemtype="https://schema.org/NewsArticle">
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
							<div class="news-list__item-caption" itemprop="name">'.$row26["nazvanie"].'</div>
							<div class="news-list__item-text">
								<p itemprop="description">'.$row26["opisanie1"].' </p>
								  <img itemprop="image" src="https://юрист45.рф/img/spory/'.$row26["img1"].'" alt="'.$row26["nazvanie"].'" style="display:none;"/>
							</div>
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
			</section>

		
	
		</div>
	</div>

	<div id="specialization-projects" class="specializations-detail__info-block">
		<div class="specializations-detail__info-block-content">
						
		</div>
	</div>

	<div id="specialization-team" class="specializations-detail__info-block">
		<div class="specializations-detail__info-block-content">
			
		<section class="tile2">
<div class="content-center">
							';
                       $result27 =  DB::Query("SELECT * FROM uslugi ORDER BY RAND() limit 4",$link);

while($row27 = mysqli_fetch_array($result27))
{
echo'     					              
								<a href="uslugi?id='.$row27["id"].'"  class="tile__item">
				<img src="img/uslugi/'.$row27["img1"].'" alt="'.$row27["nazvanie"].'" title="'.$row27["opisanie1"].'" class="tile__img" >				<div class="tile__text">'.$row27["nazvanie"].'</div>
				<div class="tile__arrow icon-arrow1"></div>
			</a>
		   ';
}      			
           echo'  
							
	</div>		
								
		
	</section>


					</div>
	</div>
</div>
	<div class="is-hide" data-link-hide="specialization-projects"></div>
	


				</div>
		</main>
	
	';
	include('include/footer.php')?>
	<script type="text/javascript">
$(document).ready(function(){
	$("#imgLoad").hide(); // Скрываем прелоадер
});

var num = 12; //чтобы знать с какой записи вытаскивать данные

$(function() {
	$("#load div").click(function(){ // Выполняем если по кнопке кликнули
		
		$("#imgLoad").show(); // Показываем прелоадер
		
		$.ajax({
			url: "include/actionspor.php", // Обработчик
			type: "GET",       // Отправляем методом GET
			data: {"num": num},
			cache: false,			
			success: function(response){
				if(response == 0){ // Смотрим ответ от сервера и выполняем соответствующее действие
					alert("Больше нет записей");
					$("#imgLoad").hide();
				}else{
					$("#content").append(response);
					num = num + 8;
					$("#imgLoad").hide();
				}
			}
		});
	});
});
</script>

</body>
</html>
