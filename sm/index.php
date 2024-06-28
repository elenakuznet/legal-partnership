<!doctype html>
<?php
session_start();
if ($_SESSION['auth_admin'] == "yes_auth")
{
       
       if (isset($_GET["logout"]))
    {
        unset($_SESSION['auth_admin']);
        header("Location: login.php");
    }

  $_SESSION['urlpage'] = "<a>Структура сайта</a>";
  
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
         
         if (file_exists("../img/".$_GET["img"]))
        {
          unlink("../img/".$_GET["img"]);  
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
      include("actions/upload-image-site.php");
      unset($_POST["uimage"]);           
      } 
      
 if (empty($_POST["uimage2"]))
      {        
      include("actions/upload-image-site.php");
      unset($_POST["uimage2"]);           
      } 
	   
	    if (empty($_POST["uimage3"]))
      {        
      include("actions/upload-image-site.php");
      unset($_POST["uimage3"]);           
      } 
	    if (empty($_POST["uimage4"]))
      {        
      include("actions/upload-image-site.php");
      unset($_POST["uimage4"]);           
      } 
      
	   
	   
      
                     
      if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
                           
       $querynew = "text1='{$_POST["text1"]}',text2='{$_POST["text2"]}',text3='{$_POST["text3"]}',text4='{$_POST["text4"]}',text5='{$_POST["text5"]}',text6='{$_POST["text6"]}',text7='{$_POST["text7"]}',text8='{$_POST["text8"]}',text9='{$_POST["text9"]}',text10='{$_POST["text10"]}',text11='{$_POST["text11"]}',text12='{$_POST["text12"]}',text13='{$_POST["text13"]}',text14='{$_POST["text14"]}',text15='{$_POST["text15"]}',text16='{$_POST["text16"]}',text17='{$_POST["text17"]}',text18='{$_POST["text18"]}',text19='{$_POST["text19"]}',text20='{$_POST["text20"]}',text21='{$_POST["text21"]}',text22='{$_POST["text22"]}',text24='{$_POST["text24"]}',text25='{$_POST["text25"]}',text26='{$_POST["text26"]}',text27='{$_POST["text27"]}',text28='{$_POST["text28"]}',text29='{$_POST["text29"]}',text30='{$_POST["text30"]}',text31='{$_POST["text31"]}'"; 
           
       $update =  /* fixed MMiC */ DB::Query("UPDATE site SET $querynew",$link); 
                   
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

    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/screenfull.js"></script>
    <script>
    $(function() {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }



        $('#toggle').click(function() {
            screenfull.toggle($('#container')[0]);
        });
    });
    </script>
    <!-- charts -->
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <link href="css/typo.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css">
    <script src="js/jquery-1.12.4.min.js"></script>

    <!-- Bootstrap 3 -->


    <!-- MiniColors -->
    <script src="js/jquery.minicolors.js"></script>
    <link rel="stylesheet" href="css/jquery.minicolors.css">

    <style>
    body,
    td,
    th {
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
    $('body').removeClass(function(index, css) {
        return (css.match(/\btheme-\S+/g) || []).join(' ');
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
                    <div class="progressbar-heading grids-heading">
                        <h2>Основной контент сайта</h2>
                    </div>
                    <div class="codes">
                        <div class="agile-container">
                            <div class="grid_3 grid_4">

                                <?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM site",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{
  
	
echo '

<form enctype="multipart/form-data" method="post">
<table class="table2">		
												<td>

	<h3 class="hdg2">Наименования страниц</h3>
</td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Страница 1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text7" value="'.$row["text7"].'" /></td>
											
												
									</table>
							<table class="table">
										
												<td><h4 id="h1.-bootstrap-heading">Страница 2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text8" value="'.$row["text8"].'" /></td>
												</table>
											<table class="table">
											<td><h4 id="h1.-bootstrap-heading">Страница 3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text9" value="'.$row["text9"].'" /></td>
												
									</table>	
										<table class="table">		
												<td><h4 id="h1.-bootstrap-heading">Страница 4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text10" value="'.$row["text10"].'" /></td>
										
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Страница 5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text11" value="'.$row["text11"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Страница 6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text12" value="'.$row["text12"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Страница 7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text21" value="'.$row["text21"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Страница 8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text22" value="'.$row["text22"].'" /></td>
											
												
									</table>
									
	<table class="table2">		
												<td>

		<h3 class="hdg2">Данные компании</h3>	
</td>
										
									</table>
		<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Название организации<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text1" value="'.$row["text1"].'" /></td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Дополнение<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text2" value="'.$row["text2"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Почта<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text3" value="'.$row["text3"].'" /></td>
											
												
									</table>

	<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Телефон #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text4" value="'.$row["text4"].'" /></td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Телефон #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text5" value="'.$row["text5"].'" /></td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Адрес<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text6" value="'.$row["text6"].'" /></td>
											
												
									</table>
										
									
									<table class="table2">		
												<td>

		<h3 class="hdg2">Футер</h3>	
</td>
										
									</table>	
									
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Заголовок столбца #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text13" value="'.$row["text13"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Заголовок столбца #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text14" value="'.$row["text14"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Заголовок столбца #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text15" value="'.$row["text15"].'" /></td>
												
									</table>
										<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Код города<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text16" value="'.$row["text16"].'" /></td>
												
									</table>
										<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Город<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text17" value="'.$row["text17"].'" /></td>
												
									</table>
										<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Улица, дом<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text18" value="'.$row["text18"].'" /></td>
												
									</table>
										<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Офис<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text19" value="'.$row["text19"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Примечание<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text20" value="'.$row["text20"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Инстаграм<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text24" value="'.$row["text24"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">ВК<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text25" value="'.$row["text25"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Кнопка НАВЕРХ<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text26" value="'.$row["text26"].'" /></td>
												
									</table>
									<table class="table2">		
												<td>

		<h3 class="hdg2">Обратная связь</h3>	
</td>
										
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Призыв к действию<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text27" value="'.$row["text27"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Заголовок записи на консультацию<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text28" value="'.$row["text28"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Заголовок заказа звонка<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text29" value="'.$row["text29"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Заголовок обр. связи<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text30" value="'.$row["text30"].'" /></td>
												
									</table>
									<table class="table">
										
										
												
										<td><h4 id="h1.-bootstrap-heading">Примечание<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text31" value="'.$row["text31"].'" /></td>
												
									</table>
										
									
					<table class="table2">		
												<td>

		<h3 class="hdg2">Изображения</h3>	
</td>
										
									</table>					

';

   if  (strlen($row["img1"]) > 0 && file_exists("../img/".$row["img1"]))
{
$img_path = '../img/'.$row["img1"];
$max_width = 110; 
$max_height = 110; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '

									<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Логотип<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="index.php?img='.$row["img1"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Логотип<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input type="file" name="uimage" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
								
';
}

 if  (strlen($row["img2"]) > 0 && file_exists("../img/".$row["img2"]))
{
$img_path = '../img/'.$row["img2"];
$max_width = 110; 
$max_height = 110; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '

									<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Баннер 1920х272<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="index.php?img='.$row["img2"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Баннер 1920х272<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input type="file" name="uimage2" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
								
';
}
	
	 if  (strlen($row["img3"]) > 0 && file_exists("../img/".$row["img3"]))
{
$img_path = '../img/'.$row["img3"];
$max_width = 110; 
$max_height = 110; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '

									<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Обратная связь<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="index.php?img='.$row["img3"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Обратная связь<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input type="file" name="uimage3" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
								
';
}
  if  (strlen($row["img4"]) > 0 && file_exists("../img/".$row["img4"]))
{
$img_path = '../img/'.$row["img4"];
$max_width = 110; 
$max_height = 110; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height); 

echo '

									<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Баннер (мобильная версия) 480х68<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="index.php?img='.$row["img4"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Баннер (мобильная версия) 480х68<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input type="file" name="uimage4" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
								
';
}

	
echo ' 
	
								

  <input type="submit" id="submit_form"   name="submit_save" value="Изменить"/>

	
</form>
';



 



}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?>
                                <!-- typography -->
                            </div>
                        </div>
                    </div>
                    <!--//typography-->
                </div>
                <!-- //grids -->
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <p class="copyright six columns tab-whole footer-about">&copy;2016-<script>
                var mdate = new Date();
                document.write(mdate.getFullYear());
                </script><span itemprop="name"> DESIGN GRAPHIC</span>.ПАНЕЛЬ УПРАВЛЕНИЯ КОНТЕНТОМ</p>
        </div>
        <!-- //footer -->
    </section>
    <script src="js/bootstrap.js"></script>

    <script>
    $(document).ready(function() {

        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                defaultValue: $(this).attr('data-defaultValue') || '',
                format: $(this).attr('data-format') || 'hex',
                keywords: $(this).attr('data-keywords') || '',
                inline: $(this).attr('data-inline') === 'true',
                letterCase: $(this).attr('data-letterCase') || 'lowercase',
                opacity: $(this).attr('data-opacity'),
                position: $(this).attr('data-position') || 'bottom left',
                swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split(
                    '|') : [],
                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });

    });
    </script>
    <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'application/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    </script>
</body>

</html>
<?php
}else
{
    header("Location: login.php");
}
?>