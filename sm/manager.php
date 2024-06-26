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
		 if ($_SESSION['edit_content'] == '1')
   {
	    if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
		    $_SESSION['message'] = "<p id='form-success'>Таблица изменена!</p>";
 if (empty($_POST["uimage"]))
      {        
      include("include/upload.php");
      unset($_POST["uimage"]);  
		  unset($_POST["table"]); 
      } 
	   }
   }
		else
	    {
      $msgerror = 'У Вас нет прав на изменение таблиц!';
   }
	}

?>



<html>
<head>
<meta name="robots" content="noindex">   
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
<script data-main="./main.default.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.min.js"></script>
		<script>
			define('elFinderConfig', {
				// elFinder options (REQUIRED)
				// Documentation for client options:
				// https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
				defaultOpts : {
					url : 'php/connector.minimal.php' // connector URL (REQUIRED)
					,commandsOptions : {
						edit : {
							extraOptions : {
								// set API key to enable Creative Cloud image editor
								// see https://console.adobe.io/
								creativeCloudApiKey : '',
								// browsing manager URL for CKEditor, TinyMCE
								// uses self location with the empty value
								managerUrl : ''
							}
						}
						,quicklook : {
							// to enable CAD-Files and 3D-Models preview with sharecad.org
							sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
							// to enable preview with Google Docs Viewer
							googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
							// to enable preview with Microsoft Office Online Viewer
							// these MIME types override "googleDocsMimes"
							officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
						}
					}
					// bootCalback calls at before elFinder boot up 
					,bootCallback : function(fm, extraObj) {
						/* any bind functions etc. */
						fm.bind('init', function() {
							// any your code
						});
						// for example set document.title dynamically.
						var title = document.title;
						fm.bind('open', function() {
							var path = '',
								cwd  = fm.cwd();
							if (cwd) {
								path = fm.path(cwd.hash) || null;
							}
							document.title = path? path + ':' + title : title;
						}).bind('destroy', function() {
							document.title = title;
						});
					}
				},
				managers : {
					// 'DOM Element ID': { /* elFinder options of this DOM Element */ }
					'elfinder': {}
				}
			});
		</script>
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
	
					<div class="progressbar-heading grids-heading">
						<h2>Файловый редактор</h2>
					</div>
					
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
								<form enctype="multipart/form-data" method="post">
								<?
	echo'
								<select name="table" onchange="document.getElementById(\'table2\').value= this.value" class="alert alert-success fgfg44">
								<option>Выберите таблицу</option>
				';
  $r = DB::Query("SHOW TABLES",$link);
 
    while($row48 = mysqli_fetch_array($r)){
		echo'  <option  value="'.$row48['0'].'"  >'.$row48['0'].'</option>';
	}
			
	        
	echo'
	  </select>
					
						
						 <input type="submit" class="add-style2"  name="submit_add" value="Заменить"/>			
					    <input type="button" class="add-style2"   onclick=\'submit_add2.click(this)\' value="Выгрузить"/>		
						   <input type="file" name="uimage" accept=".xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel"> 
</form>		
		<form enctype="multipart/form-data" action="include/download.php" method="POST">
		  <input type="submit" style="display:none" id="submit_add2"   name="submit_add2" />
		   <input type="hidden"  id="table2"  name="table2" />
		 
		</form>	
		
';
	 if ($_SESSION['edit_content'] == '1')
		
   {
	echo'
	<div id="elfinder"></div>
	';
   }
	else{
		 echo'
	   
	   <p id="form-error" align="center">У Вас нет доступа к файлам!</p>
	   
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