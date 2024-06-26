<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Пользовательское соглашение</title>
	
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<meta name="robots" content="noindex" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="imagetoolbar" content="no">
	<meta name="msthemecompatible" content="no">
	<meta name="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<link href="..\css\kernel_main\kernel_main.css?152042467544417" type="text/css" rel="stylesheet">
<link href="..\css\kernel_socialservices\kernel_socialservices.css?1520424615512" type="text/css" rel="stylesheet">
<link href="..\css\template_83943bfab5bae145e83fccc6a8e55f26\template_83943bfab5bae145e83fccc6a8e55f26.css?1520424615451015" type="text/css" data-template-style="true" rel="stylesheet">
<link href="..\bitrix\panel\main\popup.min.css?149849325520704" type="text/css" data-template-style="true" rel="stylesheet">
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">


</head>
<body class="">

<? include("sm/include/connect.php");	
      $result17 = DB::Query("SELECT * FROM site",$link);
	  $row17= /* fixed MMiC */ mysqli_fetch_array($result17);
	include('include/header.php');
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM sogl",$link);
    $row =  /* fixed MMiC */ mysqli_fetch_array($result); 
	echo'				<section class="subheader1 ">
			
				<div class="content-center">
					<div class="subheader__text">
						<div class="breadcrumbs bem ">
<ul class="breadcrumbs__list" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" itemprop="item" href="index" title="Главная"><span itemprop="name">Главная</span></a></li><meta itemprop="position" content="1"></ul><h1 class="breadcrumbs__item" id="breadcrumbs__item1">'.$row17["text21"].'</h1>
</div>		<h1 class="breadcrumbs__item3 is-hide-desktop" >'.$row17["text21"].'</h1>				
					</div>
										
									</div>
			</section>		
												
			<main class="main__content">
		<div class="content-center content-area">
<p>'.$row["text1"].'
	
</p>
<p>'.$row["text2"].'
	
</p>
<p>'.$row["text3"].'
	
</p>
<ul>
	<li>'.$row["text4"].'</li>
	<li>'.$row["text5"].'</li>
	<li>'.$row["text6"].'</li>
</ul>
<p>'.$row["text7"].'
	
</p>
<p>'.$row["text8"].'
	
</p>
<p>
</p>
<ul>
	<li>'.$row["text9"].'</li>
	<li>'.$row["text10"].'</li>
</ul>
<p>
</p>
<p>'.$row["text11"].'
	
</p>
<p>'.$row["text12"].'
	
</p>
 <br>
<ul>
	<li>'.$row["text13"].'</li>
	<li>'.$row["text14"].'</li>
</ul>
<p>'.$row["text15"].' </p>

				</div>
		</main>
	';
	include('include/footer.php')?>

</body>
</html>
