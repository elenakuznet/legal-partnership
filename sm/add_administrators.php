<?php
session_start();
if ($_SESSION['auth_admin'] == "yes_auth")
{

       
       if (isset($_GET["logout"]))
    {
        unset($_SESSION['auth_admin']);
        header("Location: login.php");
    }

  $_SESSION['urlpage'] = "<a href='index.php' >Главная</a> \ <a href='add_administrators.php' >Добавление администраторов</a>";
  
include("include/connect.php");
include("include/functions.php");             

if ($_POST["submit_add"])
{
    if ($_SESSION['auth_id'] == '1')
    {

    $error = array();
    
    if ($_POST["admin_login"])
    {
        $login = clear_string($_POST["admin_login"]);
        $query =  /* fixed MMiC */ DB::Query("SELECT login FROM reg_admin WHERE login='$login'",$link);
 
     If ( /* fixed MMiC */ mysqli_num_rows($query) > 0)
     {
        $error[] = "Логин занят!";
     }
        
        
    }else
    {
        $error[] = "Укажите логин!";
    }
    
     
    if (!$_POST["admin_pass"]) $error[] = "Укажите пароль!";
    if (!$_POST["admin_fio"]) $error[] = "Укажите ФИО!";
    if (!$_POST["admin_role"]) $error[] = "Укажите должность!";
    if (!$_POST["admin_email"]) $error[] = "Укажите E-mail!";

 if (count($error))
 {
    $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
 }else
 {
    $pass   = md5(clear_string($_POST["admin_pass"]));
    $pass   = strrev($pass);
    $pass   = strtolower("mb03foo53".$pass."qj2jjdp9");
    
                  		 /* fixed MMiC */ DB::Query("INSERT INTO reg_admin(login,pass,fio,role,email,phone,add_tovar,edit_tovar,delete_tovar,edit_content)
						VALUES(						
                            '".clear_string($_POST["admin_login"])."',
                            '".$pass."',
                            '".clear_string($_POST["admin_fio"])."',
                            '".clear_string($_POST["admin_role"])."',
                            '".clear_string($_POST["admin_email"])."',
                            '".clear_string($_POST["admin_phone"])."',
                           							
                            '".$_POST["add_tovar"]."',
                            '".$_POST["edit_tovar"]."',                            
							'".$_POST["delete_tovar"]."',
                           
                            '".$_POST["edit_content"]."'
                            
                                                                                                                                                
						)",$link);
                   
          $_SESSION['message'] = "<p id='form-success'>Пользователь добавлен!</p>";
 }   
        
    }else
    {
       $msgerror = 'У Вас нет прав на добавление администраторов!'; 
    }    
}
?>



<html>
<head>
<meta name="robots" content="noindex, nofollow" />
<title>Панель управления контентом.Design Graphic</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link href="jquery_confirm/jquery_confirm.css" rel="stylesheet"  />
     <script src="js/jquery2.0.3.min.js"></script>
   
    <script  src="js/script.js"></script> 
    <script  src="jquery_confirm/jquery_confirm.js"></script> 
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
						<h2>	<a class="subnav-text" href="administrators.php">Менеджеры</a>: добавление</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
		

<form enctype="multipart/form-data" method="post">
<table class="table2">		
												<td>

	<h3 class="hdg2">Данные</h3>
</td>
											
												
									</table>
									<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Логин<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="admin_login"  /></td>
											
												
									</table>
									
							<table class="table">
										
												<td><h4 id="h1.-bootstrap-heading">Пароль<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="password" class="alert alert-success" role="alert" name="admin_pass" /></td>
												</table>
											
										<table class="table">		
												<td><h4 id="h1.-bootstrap-heading">ФИО<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="admin_fio" /></td>
										
									</table>
	

	<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Должность<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="admin_role"  /></td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">E-mail<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="admin_email"  /></td>
											
												
									</table>
										<table class="table">
										
										
												<td><h4 id="h1.-bootstrap-heading">Телефон<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="admin_phone"  /></td>
											
												
									</table>
								<table class="table2">		
												<td>

	<h3 class="hdg2">Возможности</h3>
</td>
											
												
									</table>

										
										<table class="table3">
										
										
												
											<td><div class="checkbox">
<input type="checkbox" name="edit_content" id="edit_content" value="1"><label for="edit_content">Изменение контента сайта </label>
</div>
												</td>
												
									</table>	
									
										<table class="table3">
										
										
												
											<td><div class="checkbox">
<input type="checkbox" name="add_tovar" id="add_tovar" value="1"><label for="add_tovar">Добавление услуг/работ </label>
</div>
												</td>
												
									</table>	
									
										<table class="table3">
										
										
												
												<td><div class="checkbox">
<input type="checkbox" name="edit_tovar" id="edit_tovar" value="1"><label for="edit_tovar">Изменение услуг/работ </label>
</div>
												</td>
												
									</table>	
									
										<table class="table3">
										
										
												<td><div class="checkbox">
<input type="checkbox" name="delete_tovar" id="delete_tovar" value="1"><label for="delete_tovar">Удаление услуг/работ </label>
</div>
												</td>
											
												
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