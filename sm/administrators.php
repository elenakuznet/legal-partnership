<?php
session_start();
if ($_SESSION['auth_admin'] == "yes_auth")
{

       
       if (isset($_GET["logout"]))
    {
        unset($_SESSION['auth_admin']);
        header("Location: login.php");
    }

  $_SESSION['urlpage'] = "<a href='index.php' >Главная</a> \ <a href='administrators.php' >Администраторы</a>";
  
include("include/connect.php");
include("include/functions.php");             
$id = clear_string($_GET["id"]);
$action = $_GET["action"];
if (isset($action))
{
   switch ($action) {
        
        case 'delete':
      if ($_SESSION['auth_id'] == '1')
      {
        $delete =  /* fixed MMiC */ DB::Query("DELETE FROM reg_admin WHERE id = '$id'",$link); 
      }else
      {
         $msgerror = 'У Вас нет прав на удаление администраторов!';
      }
              

	    break;
        
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
 <script  src="js/script.js"></script> 
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
	$all_count =  /* fixed MMiC */ DB::Query("SELECT * FROM reg_admin ",$link);
 $all_count_result =  /* fixed MMiC */ mysqli_num_rows($all_count);
?>
	<section class="wrapper scrollable">
		
	
		<div class="main-grid">
			<div class="agile-grids">	
			
				<!-- grids -->
				<div class="grids">
			
					<div class="progressbar-heading grids-heading">
						<h2>	Список менеджеров</h2>
					</div>
					
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					<div id="block-info">
<p id="count-style">Всего менеджеров - <strong><?php echo $all_count_result; ?></strong></p>
<p align="right" id="add-style" ><a href="add_administrators.php" >Добавить </a></p>
</div>
	
		<?php


  if ($_SESSION['auth_id'] == '1')
{
echo '
<h2 class="fdghfdgh2">Администратор</h2> ';
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM reg_admin WHERE id='1' ORDER BY id DESC",$link);
 
 If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{  
    
echo '



										
										
											<div class="hghg">	<td ><h3 class="gfgfgfgf">'.$row["fio"].'</h3><p align="right" class="link-action" >
<a class="green" href="edit_administrators.php?id='.$row["id"].'"><img src="images/edit-icon.png" /> Изменить</a></p>
												
<p><strong>Должность</strong> - '.$row["role"].'</p>
<p><strong>E-mail</strong> - '.$row["email"].'</p>
<p><strong>Телефон</strong> - '.$row["phone"].'</p>

</td></div>
											
												
									
    ';
    
    
} while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
		echo '<h2 class="fdghfdgh">Менеджеры</h2> ';
	
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM reg_admin WHERE not id='1' ORDER BY id DESC",$link);
 
 If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{  
    
echo '



										
										
											<div class="hghg">	<td ><h3 class="gfgfgfgf">'.$row["fio"].'</h3><p align="right" class="link-action" >
<a class="green" href="edit_administrators.php?id='.$row["id"].'"><img src="images/edit-icon.png" /> Изменить</a> | 
<a rel="administrators.php?'.$url.'id='.$row["id"].'&action=delete" class="delete" ><img src="images/action_delete.png" /> Удалить</a>
</p>
												
<p><strong>Должность</strong> - '.$row["role"].'</p>
<p><strong>E-mail</strong> - '.$row["email"].'</p>
<p><strong>Телефон</strong> - '.$row["phone"].'</p>

</td></div>
											
												
									
    ';
    
    
} while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
    
}else{
   echo '<p id="form-error" align="center">У Вас нет прав на просмотр списка администраторов!</p>'; 
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