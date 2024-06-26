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
         
          if (file_exists("../img/novosti/".$_GET["img1"]))
        {
          unlink("../img/novosti/".$_GET["img1"]);  
        }
	     if (file_exists("../img/novosti/".$_GET["img2"]))
        {
          unlink("../img/novosti/".$_GET["img2"]);  
        }
	     if (file_exists("../img/novosti/".$_GET["img3"]))
        {
          unlink("../img/novosti/".$_GET["img3"]);  
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
      include("actions/upload-image-novosti.php");
      unset($_POST["uimage"]);           
      } 
     
      
   
	    
      
 // �������� ���������
      
    
      
                     
      
                                      
       if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
            
														
       $querynew = "nazvanie='{$_POST["nazvanie"]}',kat='{$_POST["kat"]}',persona='{$_POST["persona"]}',opisanie1='{$_POST["opisanie1"]}',opisanie2='{$_POST["opisanie2"]}',opisanie3='{$_POST["opisanie3"]}',day='{$_POST["day"]}',mount='{$_POST["mount"]}',year='{$_POST["year"]}',vk='{$_POST["vk"]}',insta='{$_POST["insta"]}',youtube='{$_POST["youtube"]}'"; 
           
       $update =  /* fixed MMiC */ DB::Query("UPDATE novosti SET $querynew WHERE id = '$id'",$link); 
                   
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
						<h2>	<a class="subnav-text" href="novosti.php">'.$row["text8"].'</a>: изменение данных</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
			<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM novosti WHERE id='$id'",$link);
    
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
								
										
												<td><h4 id="h1.-bootstrap-heading">Мини-описание (не более 160 символов)<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie1">'.$row["opisanie1"].'</textarea>
												</td>
											
												
									</table>
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Описание #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie2">'.$row["opisanie2"].'</textarea>
												</td>
											
												
									</table>
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Описание #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie3">'.$row["opisanie3"].'</textarea>
												</td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">День<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="day" value="'.$row["day"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Месяц<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="mount" value="'.$row["mount"].'" /></td>
											
												
									</table>
										
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Год<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="year" value="'.$row["year"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">ВК<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="vk" value="'.$row["vk"].'" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Insta<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="insta" value="'.$row["insta"].'" /></td>
											
												
									</table>
									<table class="table">
										
										<td><h4 id="h1.-bootstrap-heading">Youtube<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="youtube">'.$row["youtube"].'</textarea>
												</td>
												
											
											
												
									</table>
									
									<table class="table">
											<td><h4 id="h1.-bootstrap-heading">Категория<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
											  <select name="kat" class="alert alert-success">
											    <option  value=""  onclick="set_filter.click(this)" >Без категории</option>
	';
                       $result33 =  DB::Query("SELECT nazvanie FROM uslugi",$link);

while($row33 = mysqli_fetch_array($result33))
{
echo'
 <option  value="'.$row33['nazvanie'].'"   ';
	if ($row33['nazvanie'] == $row['kat'])
	{echo'selected=""';}
		echo'   onclick="set_filter.click(this)" >'.$row33['nazvanie'].'</option>
   ';
}      			
		
           echo'  
				
                   
                  
                                    
                                    </select></td>
									
									</table>
									<table class="table">
											<td><h4 id="h1.-bootstrap-heading">Автор<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
											  <select name="persona" class="alert alert-success">
											    <option  value=""  onclick="set_filter.click(this)" >Без автора</option>
	';
                       $result34 =  DB::Query("SELECT name FROM komanda",$link);

while($row34 = mysqli_fetch_array($result34))
{
echo'
 <option  value="'.$row34['name'].'"   ';
	if ($row34['name'] == $row['persona'])
	{echo'selected=""';}
		echo'   onclick="set_filter.click(this)" >'.$row34['name'].'</option>
   ';
}      			
		
           echo'  
				
                   
                  
                                    
                                    </select></td>
									
									</table>
								
									<table class="table2">		
												<td>

	<h3 class="hdg2">Изображения</h3>
</td>
											
												
									</table>
									
';
	 if  (strlen($row["img1"]) > 0 && file_exists("../img/novosti/".$row["img1"]))
{
$img_path = '../img/novosti/'.$row["img1"];
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
										
										
												<td><h4 id="h1.-bootstrap-heading">Изображение #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="edit_novosti.php?id='.$row["id"].'&img1='.$row["img1"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Изображение #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input  type="file" name="uimage" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
</div>

</td>
										
									</table>
';
}
	 if  (strlen($row["img2"]) > 0 && file_exists("../img/novosti/".$row["img2"]))
{
$img_path = '../img/novosti/'.$row["img2"];
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
										
										
												<td><h4 id="h1.-bootstrap-heading">Изображение #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg">
<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
<a href="edit_novosti.php?id='.$row["id"].'&img2='.$row["img2"].'&action=delete" ></a>
</div></td>
											
												
									</table>
';
   
}else
{  
echo '
	<table class="table3">
										
										
												<td><h4 id="h1.-bootstrap-heading">Изображение #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>

<div id="baseimg-upload">
<input  type="hidden" name="MAX_FILE_SIZE" value="5000000"/>



<input  type="file" name="uimage2" id="uploadbtn" multiple id="fileFF" onchange="getFileParam();">
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