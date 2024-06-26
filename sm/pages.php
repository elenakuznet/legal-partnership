<?php
session_start();
if ($_SESSION['auth_admin'] == "yes_auth")
{
       
       if (isset($_GET["logout"]))
    {
        unset($_SESSION['auth_admin']);
        header("Location: login.php");
    }

  $_SESSION['urlpage'] = "<a>Главная страница</a>";
  
  include("include/connect.php");
  include("include/functions.php"); 
  $id = clear_string($_GET["id"]);
  $action = clear_string($_GET["action"]);
if (isset($action))
{
   switch ($action) {

	    case 'delete':
     
    if ($_SESSION['edit_content'] == '1')
		
   {
         
         if (file_exists("../img/ind/".$_GET["img"]))
        {
          unlink("../img/ind/".$_GET["img"]);  
        }
	   
            
   }else
   {
      $msgerror = 'У Вас нет прав на изменение структуры!';
   }
    
	    break;

	} 
}
    if ($_POST["submit_save"])
    {
       if ($_SESSION['edit_content'] == '1')
   {
      $error = array();
    
    // �������� �����
        
     
      
     
	   if (empty($_POST["uimage"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage"]);           
      } 
      

        if (empty($_POST["uimage2"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage2"]);           
      } 
     
	    if (empty($_POST["uimage3"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage3"]);           
      } 
	   
	    if (empty($_POST["uimage4"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage4"]);           
      } 
	     if (empty($_POST["uimage5"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage5"]);           
      } 
	     if (empty($_POST["uimage6"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage6"]);           
      } 
	     if (empty($_POST["uimage7"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage7"]);           
      } 
	     if (empty($_POST["uimage8"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage8"]);           
      } 
	     if (empty($_POST["uimage9"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage9"]);           
      } 
	     if (empty($_POST["uimage10"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage10"]);           
      } 
	     if (empty($_POST["uimage11"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage11"]);           
      } 
	     if (empty($_POST["uimage12"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage12"]);           
      } 
	     if (empty($_POST["uimage13"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage13"]);           
      } 
	     if (empty($_POST["uimage14"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage14"]);           
      } 
	     if (empty($_POST["uimage15"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage15"]);           
      } 
	     if (empty($_POST["uimage16"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage16"]);           
      } 
	     if (empty($_POST["uimage17"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage17"]);           
      } 
	     if (empty($_POST["uimage18"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage18"]);           
      } 
	     if (empty($_POST["uimage19"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage19"]);           
      } 
	     if (empty($_POST["uimage20"]))
      {        
      include("actions/upload-image-pages.php");
      unset($_POST["uimage20"]);           
      } 
	   
	 
                                      
       if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
                           
       $querynew = "text1='{$_POST["text1"]}',text2='{$_POST["text2"]}',text3='{$_POST["text3"]}',text4='{$_POST["text4"]}',text5='{$_POST["text5"]}',text6='{$_POST["text6"]}',text7='{$_POST["text7"]}',text8='{$_POST["text8"]}',text9='{$_POST["text9"]}',text10='{$_POST["text10"]}',text11='{$_POST["text11"]}',text12='{$_POST["text12"]}',text13='{$_POST["text13"]}',text14='{$_POST["text14"]}',text15='{$_POST["text15"]}',text16='{$_POST["text16"]}',text17='{$_POST["text17"]}',text18='{$_POST["text18"]}',text19='{$_POST["text19"]}',text20='{$_POST["text20"]}',text21='{$_POST["text21"]}',text22='{$_POST["text22"]}',text23='{$_POST["text23"]}',text24='{$_POST["text24"]}',text25='{$_POST["text25"]}',text26='{$_POST["text26"]}',text27='{$_POST["text27"]}',text28='{$_POST["text28"]}',text29='{$_POST["text29"]}',text30='{$_POST["text30"]}',text31='{$_POST["text31"]}',text32='{$_POST["text32"]}',text33='{$_POST["text33"]}',text34='{$_POST["text34"]}',text35='{$_POST["text35"]}',text36='{$_POST["text36"]}',text37='{$_POST["text37"]}',text38='{$_POST["text38"]}',text39='{$_POST["text39"]}',text40='{$_POST["text40"]}',text41='{$_POST["text41"]}'"; 
           
       $update =  /* fixed MMiC */ DB::Query("UPDATE ind SET $querynew",$link); 
                   
      $_SESSION['message'] = "<p id='form-success'>Структура успешно изменена!</p>";
                
}
    
   
 }else
   {
      $msgerror = 'У Вас нет прав на изменение структуры!';
   }
   }
?>
<html>
<head>
<meta name="robots" content="noindex, nofollow" />
<title>Панель управления контентом.Design Graphic</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link href="css/typo.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css">
<style >
body,td,th {
	font-family: Roboto, sans-serif;
}
</style>
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<?php
	include("include/block-header.php");
?>
	<section class="wrapper scrollable">
		
	
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- grids -->
				<div class="grids">
				<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM site",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{
    
echo '
					<div class="progressbar-heading grids-heading">
						<h2>Главная</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
				<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM ind",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);

    
echo '

<form enctype="multipart/form-data" method="post">
<table class="table2">		
												<td>

	<h3 class="hdg2">Слайдер</h3>
</td>
											
												
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text1" value="'.$row["text1"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text2" value="'.$row["text2"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text3" value="'.$row["text3"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text4" value="'.$row["text4"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text5" value="'.$row["text5"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text6" value="'.$row["text6"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text7" value="'.$row["text7"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text8" value="'.$row["text8"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #9<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text9" value="'.$row["text9"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #10<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text10" value="'.$row["text10"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text11" value="'.$row["text11"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text12" value="'.$row["text12"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text13" value="'.$row["text13"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text14" value="'.$row["text14"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text15" value="'.$row["text15"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text16" value="'.$row["text16"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text17" value="'.$row["text17"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text18" value="'.$row["text18"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #9<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text19" value="'.$row["text19"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Примечание #10<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text20" value="'.$row["text20"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text21" value="'.$row["text21"].'" /></td>
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text22" value="'.$row["text22"].'" /></td>
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text23" value="'.$row["text23"].'" /></td>
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text24" value="'.$row["text24"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text25" value="'.$row["text25"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text26" value="'.$row["text26"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text27" value="'.$row["text27"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text28" value="'.$row["text28"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #9<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text29" value="'.$row["text29"].'" /></td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Ссылка #10<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text30" value="'.$row["text30"].'" /></td>
									</table>
								
									<table class="table2">		
												<td>

	<h3 class="hdg2">Контент</h3>
</td>
											
												
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заглавная буква<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text31" value="'.$row["text31"].'" /></td>
										</table>
									
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #1 (без первой буквы)<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text32">'.$row["text32"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text33">'.$row["text33"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text34">'.$row["text34"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text35">'.$row["text35"].'</textarea>
												</td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text36" value="'.$row["text36"].'" /></td>
										</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название ссылки #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text37" value="'.$row["text37"].'" /></td>
										</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text38" value="'.$row["text38"].'" /></td>
										</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название ссылки #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text39" value="'.$row["text39"].'" /></td>
										</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text40" value="'.$row["text40"].'" /></td>
										</table>
									
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Описание<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text41">'.$row["text41"].'</textarea>
												</td>
									</table>
									
									
									<table class="table2">		
												<td>

	<h3 class="hdg2">Изображения</h3>
</td>
											
												
									</table>


';

  


   if  (strlen($row["img1"]) > 0 && file_exists("../img/ind/".$row["img1"]))
{
$img_path = '../img/ind/'.$row["img1"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #1 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img1"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #1 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input type="file" name="uimage" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}

	
	 if  (strlen($row["img2"]) > 0 && file_exists("../img/ind/".$row["img2"]))
{
$img_path = '../img/ind/'.$row["img2"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #2 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img2"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #2 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>

<input  type="file" name="uimage2" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	
	 if  (strlen($row["img3"]) > 0 && file_exists("../img/ind/".$row["img3"]))
{
$img_path = '../img/ind/'.$row["img3"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #3 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img3"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #3 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input type="file" name="uimage3" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	
	
	
	 if  (strlen($row["img4"]) > 0 && file_exists("../img/ind/".$row["img4"]))
{
$img_path = '../img/ind/'.$row["img4"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #4 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img4"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #4 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage4" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	
 if  (strlen($row["img5"]) > 0 && file_exists("../img/ind/".$row["img5"]))
{
$img_path = '../img/ind/'.$row["img5"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #5 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img5"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #5 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage5" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img6"]) > 0 && file_exists("../img/ind/".$row["img6"]))
{
$img_path = '../img/ind/'.$row["img6"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #6 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img6"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #6 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage6" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img7"]) > 0 && file_exists("../img/ind/".$row["img7"]))
{
$img_path = '../img/ind/'.$row["img7"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #7 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img7"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #7 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage7" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img8"]) > 0 && file_exists("../img/ind/".$row["img8"]))
{
$img_path = '../img/ind/'.$row["img8"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #8 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img8"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #8 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage8" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img9"]) > 0 && file_exists("../img/ind/".$row["img9"]))
{
$img_path = '../img/ind/'.$row["img9"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #9 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img9"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #9 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage9" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img10"]) > 0 && file_exists("../img/ind/".$row["img10"]))
{
$img_path = '../img/ind/'.$row["img10"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #10 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img10"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #10 1920х840<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage10" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	 if  (strlen($row["img11"]) > 0 && file_exists("../img/ind/".$row["img11"]))
{
$img_path = '../img/ind/'.$row["img11"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #1 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img11"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #1 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input type="file" name="uimage11" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}

	
	 if  (strlen($row["img12"]) > 0 && file_exists("../img/ind/".$row["img12"]))
{
$img_path = '../img/ind/'.$row["img12"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #2 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img12"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #2 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>

<input  type="file" name="uimage12" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	
	 if  (strlen($row["img13"]) > 0 && file_exists("../img/ind/".$row["img13"]))
{
$img_path = '../img/ind/'.$row["img13"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #3 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img13"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #3 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input type="file" name="uimage13" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	
	
	
	 if  (strlen($row["img14"]) > 0 && file_exists("../img/ind/".$row["img14"]))
{
$img_path = '../img/ind/'.$row["img14"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #4 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img14"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #4 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage14" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	
 if  (strlen($row["img15"]) > 0 && file_exists("../img/ind/".$row["img15"]))
{
$img_path = '../img/ind/'.$row["img15"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #5 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img15"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #5 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage15" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img16"]) > 0 && file_exists("../img/ind/".$row["img16"]))
{
$img_path = '../img/ind/'.$row["img16"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #6 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img16"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #6 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage16" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img17"]) > 0 && file_exists("../img/ind/".$row["img17"]))
{
$img_path = '../img/ind/'.$row["img17"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #7 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img17"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #7 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage17" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img18"]) > 0 && file_exists("../img/ind/".$row["img18"]))
{
$img_path = '../img/ind/'.$row["img18"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #8 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img18"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #8 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage18" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img19"]) > 0 && file_exists("../img/ind/".$row["img19"]))
{
$img_path = '../img/ind/'.$row["img19"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #9 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img19"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #9 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage19" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	if  (strlen($row["img20"]) > 0 && file_exists("../img/ind/".$row["img20"]))
{
$img_path = '../img/ind/'.$row["img20"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #10 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="pages.php?img='.$row["img20"].'&action=delete" ></a>
</div></td>
											
												
									</table>

';
   
}else
{  
echo '
<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Слайд #10 (мобильная версия) 480х210 <a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>


<input  type="file" name="uimage20" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}	
	
echo ' 

    <p align="right" ><input type="submit" id="submit_form" name="submit_save" value="Изменить"/></p>     
</form>
';



 


}
?> 
					<!-- typography -->
				</div></div></div>
					<!--//typography-->
				</div>
				<!-- //grids -->
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			   <p class="copyright six columns tab-whole footer-about">&copy;2016-<script>var mdate = new Date(); document.write(mdate.getFullYear());</script><span itemprop="name"> DESIGN GRAPHIC</span>.ПАНЕЛЬ УПРАВЛЕНИЯ КОНТЕНТОМ</p>  
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	
</body>
</html>
<?php
}else
{
    header("Location: login.php");
}
?>