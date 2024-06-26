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
      include("actions/upload-image-page2.php");
      unset($_POST["uimage"]);           
      } 
      

        if (empty($_POST["uimage2"]))
      {        
      include("actions/upload-image-page2.php");
      unset($_POST["uimage2"]);           
      } 
     
	    if (empty($_POST["uimage3"]))
      {        
      include("actions/upload-image-page2.php");
      unset($_POST["uimage3"]);           
      } 
	   
	    if (empty($_POST["uimage4"]))
      {        
      include("actions/upload-image-page2.php");
      unset($_POST["uimage4"]);           
      } 
	     if (empty($_POST["uimage5"]))
      {        
      include("actions/upload-image-page2.php");
      unset($_POST["uimage5"]);           
      } 
	   
	 
                                      
       if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
                           
       $querynew = "text1='{$_POST["text1"]}'"; 
           
       $update =  /* fixed MMiC */ DB::Query("UPDATE klienty SET $querynew",$link); 
                   
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
						<h2>'.$row["text9"].'</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
				<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM klienty",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);

    
echo '

<form enctype="multipart/form-data" method="post">

								
									<table class="table2">		
												<td>

	<h3 class="hdg2">Список клиентов</h3>
</td>
											
												
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Список (вводить через тег br)<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text1">'.$row["text1"].'</textarea>
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