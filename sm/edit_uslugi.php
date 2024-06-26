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

 
  
  include("include/connect.php");
  include("include/functions.php"); 
  $id = clear_string($_GET["id"]);
  $action = clear_string($_GET["action"]);
if (isset($action))
{
   switch ($action) {

	    case 'delete':
     
    if ($_SESSION['edit_tovar'] == '1')
   {
         
          if (file_exists("../img/uslugi/".$_GET["img1"]))
        {
          unlink("../img/uslugi/".$_GET["img1"]);  
        }
	    
            $_SESSION['message'] = "<p id='form-success'>Удалено!</p>";     
   }else
   {
      $msgerror = 'У Вас нет прав на изменение товара!';
   }
    
	    break;

	} 
}
    if ($_POST["submit_save"])
    {
       if ($_SESSION['edit_tovar'] == '1')
   {
      $error = array();
    
    // �������� �����
        
        if (empty($_POST["uimage"]))
      {        
      include("actions/upload-image-uslugi.php");
      unset($_POST["uimage"]);           
      } 
     
      
   
	    
      
 // �������� ���������
      
    
      
                     
      
                                      
       if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
            
														
       $querynew = "nazvanie='{$_POST["nazvanie"]}',opisanie1='{$_POST["opisanie1"]}',title1='{$_POST["title1"]}',title2='{$_POST["title2"]}',title3='{$_POST["title3"]}',text1='{$_POST["text1"]}',text2='{$_POST["text2"]}',text3='{$_POST["text3"]}'"; 
           
       $update =  /* fixed MMiC */ DB::Query("UPDATE uslugi SET $querynew WHERE id = '$id'",$link); 
                   
      $_SESSION['message'] = "<p id='form-success'>Успешно изменено!</p>";
                
}
    
   
 }else
   {
      $msgerror = 'У Вас нет прав на изменение!';
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
						<h2>	<a class="subnav-text" href="uslugi.php">'.$row["text11"].'</a>: изменение данных</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
			<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM uslugi WHERE id='$id'",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{
	
   
echo '

<form enctype="multipart/form-data" method="post">

									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Название<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="nazvanie" value="'.$row["nazvanie"].'" /></td>
											
												
									</table>
									
									
											
									
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Описание<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie1">'.$row["opisanie1"].'</textarea>
												</td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Заголовок #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="title1" value="'.$row["title1"].'" /></td>
											
												
									</table>
										<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Текст #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text1">'.$row["text1"].'</textarea>
												</td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Заголовок #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="title2" value="'.$row["title2"].'" /></td>
											
												
									</table>
										<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Текст #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text2">'.$row["text2"].'</textarea>
												</td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Заголовок #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="title3" value="'.$row["title3"].'" /></td>
											
												
									</table>
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Текст #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text3">'.$row["text3"].'</textarea>
												</td>
											
												
									</table>
									<!--table class="table4">
											<td><h4 id="h1.-bootstrap-heading">Цвет каркаса<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
											  <select name="cvetkarkas" class="alert alert-success">
				 <option  value="Бежевый"   ';
	if ($row['cvetkarkas'] == 'Бежевый')
	{echo'selected=""';}
		echo'   onclick="set_filter.click(this)" >Бежевый</option>
                    <option  value="Белый"    ';
	if ($row['cvetkarkas'] == 'Белый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Белый</option>
		 <option  value="Коричневый"    ';
	if ($row['cvetkarkas'] == 'Коричневый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Коричневый</option>
		 <option  value="Тёмно-коричневый"    ';
	if ($row['cvetkarkas'] == 'Тёмно-коричневый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Тёмно-коричневый</option>
		 <option  value="Серый"    ';
	if ($row['cvetkarkas'] == 'Серый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Серый</option>
		 <option  value="Чёрный"    ';
	if ($row['cvetkarkas'] == 'Чёрный')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Чёрный</option>
		 <option  value="Голубой"    ';
	if ($row['cvetkarkas'] == 'Голубой')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Голубой</option>
		 <option  value="Жёлтый"    ';
	if ($row['cvetkarkas'] == 'Жёлтый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Жёлтый</option>
		 <option  value="Зелёный"    ';
	if ($row['cvetkarkas'] == 'Зелёный')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Зелёный</option>
		 <option  value="Красный"    ';
	if ($row['cvetkarkas'] == 'Красный')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Красный</option>
		 <option  value="Оранжевый"    ';
	if ($row['cvetkarkas'] == 'Оранжевый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Оранжевый</option>
		 <option  value="Розовый"    ';
	if ($row['cvetkarkas'] == 'Розовый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Розовый</option>
		 <option  value="Синий"    ';
	if ($row['cvetkarkas'] == 'Синий')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Синий</option>
		 <option  value="Фиолетовый"    ';
	if ($row['cvetkarkas'] == 'Фиолетовый')
	{echo'selected=""';}
		echo'  onclick="set_filter.click(this)" >Фиолетовый</option>
                  
                                    
                                    </select></td>
									
									</table-->
								
									<table class="table2">		
												<td>

	<h3 class="hdg2">Изображения</h3>
</td>
											
												
									</table>
									
';
	 if  (strlen($row["img1"]) > 0 && file_exists("../img/uslugi/".$row["img1"]))
{
$img_path = '../img/uslugi/'.$row["img1"];
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
										
										
												<td><h4 id="h1.-bootstrap-heading">Изображение 480х480<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="edit_uslugi.php?id='.$row["id"].'&img1='.$row["img1"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Изображение 480х480<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input  type="file" name="uimage" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
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