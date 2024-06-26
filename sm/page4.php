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
      include("actions/upload-image-page4.php");
      unset($_POST["uimage"]);           
      } 
      

        if (empty($_POST["uimage2"]))
      {        
      include("actions/upload-image-page4.php");
      unset($_POST["uimage2"]);           
      } 
     
	    if (empty($_POST["uimage3"]))
      {        
      include("actions/upload-image-page4.php");
      unset($_POST["uimage3"]);           
      } 
	   
	    if (empty($_POST["uimage4"]))
      {        
      include("actions/upload-image-page4.php");
      unset($_POST["uimage4"]);           
      } 
	     if (empty($_POST["uimage5"]))
      {        
      include("actions/upload-image-page4.php");
      unset($_POST["uimage5"]);           
      } 
	   
	 
                                      
       if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
                           
       $querynew = "text1='{$_POST["text1"]}',text2='{$_POST["text2"]}',text3='{$_POST["text3"]}',text4='{$_POST["text4"]}',text5='{$_POST["text5"]}',text6='{$_POST["text6"]}',text7='{$_POST["text7"]}',text8='{$_POST["text8"]}',text9='{$_POST["text9"]}',text10='{$_POST["text10"]}',text11='{$_POST["text11"]}',text12='{$_POST["text12"]}',text13='{$_POST["text13"]}',text14='{$_POST["text14"]}',text15='{$_POST["text15"]}'"; 
		   
       $update =  /* fixed MMiC */ DB::Query("UPDATE sogl SET $querynew",$link); 
                   
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
						<h2>'.$row["text21"].'</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
				<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM sogl",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);

    
echo '

<form enctype="multipart/form-data" method="post">

								
									
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text1">'.$row["text1"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text2">'.$row["text2"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text3">'.$row["text3"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text4">'.$row["text4"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text5">'.$row["text5"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text6">'.$row["text6"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text7">'.$row["text7"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text8">'.$row["text8"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #9<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text9">'.$row["text9"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #10<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text10">'.$row["text10"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #11<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text11">'.$row["text11"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #12<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text12">'.$row["text12"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #13<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text13">'.$row["text13"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #14<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text14">'.$row["text14"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #15<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text15">'.$row["text15"].'</textarea>
												</td>
									</table>
											
							
			
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