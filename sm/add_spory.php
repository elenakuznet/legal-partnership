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

    if ($_POST["submit_add"])
    {

 if ($_SESSION['add_tovar'] == '1')
   {

         
    
        
		  
      {
       	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM spory",$link);
        $row =  /* fixed MMiC */ mysqli_fetch_array($result);
      

      }
      
 // проверка чекбоксов
      
      
      
                     
      
                                      
       if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
                           
              		 /* fixed MMiC */ DB::Query("INSERT INTO spory(nazvanie,kat,persona,opisanie1,opisanie2,opisanie3,day,mount,year,vk,insta,title1,title2,title3)
						VALUES(						
                            '".$_POST["nazvanie"]."',
							'".$_POST["kat"]."',
							'".$_POST["persona"]."',
							'".$_POST["opisanie1"]."',
							'".$_POST["opisanie2"]."',
							'".$_POST["opisanie3"]."',
							'".$_POST["day"]."',
							'".$_POST["mount"]."',
							'".$_POST["year"]."',
							'".$_POST["vk"]."',
							'".$_POST["insta"]."',
							'".$_POST["title1"]."',
							'".$_POST["title2"]."',
							'".$_POST["title3"]."'
                                                   
						)",$link);
                   
      $_SESSION['message'] = "<p id='form-success'>Добавлено!</p>";
      $id =  /* fixed MMiC */ mysqli_insert_id(DB::$link);
                 
       if (empty($_POST["uimage"]))
      {        
      include("actions/upload-image-spory.php");
      unset($_POST["uimage"]);           
      } 
    
		   
	  echo'<img src="include/sitemap.php">';	   
		   
		    
}

	}else
   {
      $msgerror = 'У Вас нет прав на добовление!';
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
						<h2>	<a class="subnav-text" href="spory.php">'.$row["text10"].'</a>: добавление</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
		


<form enctype="multipart/form-data" method="post">

								<form enctype="multipart/form-data" method="post">

								<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Название<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="nazvanie"/></td>
											
												
									</table>
									
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Заголовок #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="title1"/></td>
											
												
									</table>
											
									
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Описание #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie1"></textarea>
												</td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Заголовок #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="title2"/></td>
											
												
									</table>
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Описание #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie2"></textarea>
												</td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Заголовок #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="title3"/></td>
											
												
									</table>
									<table class="table2">
								
										
												<td><h4 id="h1.-bootstrap-heading">Описание #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="opisanie3"></textarea>
												</td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">День<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="day" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Месяц<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="mount" /></td>
											
												
									</table>
										
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Год<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="year"  /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">ВК<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="vk" /></td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Insta<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="insta" /></td>
											
												
									</table>
									
									
									<table class="table">
											<td><h4 id="h1.-bootstrap-heading">Категория<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
											  <select name="kat" class="alert alert-success">
											   <option  value=""  selected=""   onclick="set_filter.click(this)" >Без категории</option>
	<?
                       $result33 =  DB::Query("SELECT nazvanie FROM uslugi",$link);

while($row33 = mysqli_fetch_array($result33))
{
echo'
 <option  value="'.$row33['nazvanie'].'"  onclick="set_filter.click(this)" >'.$row33['nazvanie'].'</option>
   ';
}      			
		
          ?>
				
                   
                  
                                    
                                    </select></td>
									
									</table>
									<table class="table">
											<td><h4 id="h1.-bootstrap-heading">Автор<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
											  <select name="persona" class="alert alert-success">
											   <option  value=""  selected=""   onclick="set_filter.click(this)" >Без автора</option>
	<?
                       $result34 =  DB::Query("SELECT name FROM komanda",$link);

while($row34 = mysqli_fetch_array($result34))
{
echo'
 <option  value="'.$row34['name'].'"  onclick="set_filter.click(this)" >'.$row34['name'].'</option>
   ';
}      			
		
          ?>
				
                   
                  
                                    
                                    </select></td>
									
									</table>
<table class="table2">		
												<td>

	<h3 class="hdg2">Изображения</h3>
</td>
											
												
									</table>
										<table class="table3">
										
										<td><h4 id="h1.-bootstrap-heading">Изображение #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4>
												<div id="baseimg-upload">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type="file" name="uimage">

</div></td>
									</table>
									
									
								
									
						 <input type="submit" id="submit_form"   name="submit_add" value="Добавить"/>			
						    
</form>		

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