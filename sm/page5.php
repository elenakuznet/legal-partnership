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
                           
       $querynew = "text1='{$_POST["text1"]}',text2='{$_POST["text2"]}',text3='{$_POST["text3"]}',text4='{$_POST["text4"]}',text5='{$_POST["text5"]}',text6='{$_POST["text6"]}',text7='{$_POST["text7"]}',text8='{$_POST["text8"]}',text9='{$_POST["text9"]}',text10='{$_POST["text10"]}',text11='{$_POST["text11"]}',text12='{$_POST["text12"]}',text13='{$_POST["text13"]}',text14='{$_POST["text14"]}',text15='{$_POST["text15"]}',text16='{$_POST["text16"]}',text17='{$_POST["text17"]}',text18='{$_POST["text18"]}',text19='{$_POST["text19"]}',text20='{$_POST["text20"]}',text21='{$_POST["text21"]}',text22='{$_POST["text22"]}',text23='{$_POST["text23"]}',text24='{$_POST["text24"]}',text25='{$_POST["text25"]}',text26='{$_POST["text26"]}',text27='{$_POST["text27"]}',text28='{$_POST["text28"]}',text29='{$_POST["text29"]}',text30='{$_POST["text30"]}',text31='{$_POST["text31"]}',text32='{$_POST["text32"]}',text33='{$_POST["text33"]}',text34='{$_POST["text34"]}',text35='{$_POST["text35"]}',text36='{$_POST["text36"]}',text37='{$_POST["text37"]}',text38='{$_POST["text38"]}',text39='{$_POST["text39"]}',text40='{$_POST["text40"]}',text41='{$_POST["text41"]}',text42='{$_POST["text42"]}',text43='{$_POST["text43"]}',text44='{$_POST["text44"]}',text45='{$_POST["text45"]}',text46='{$_POST["text46"]}',text47='{$_POST["text47"]}',text48='{$_POST["text48"]}',text49='{$_POST["text49"]}',text50='{$_POST["text50"]}',text51='{$_POST["text51"]}',text52='{$_POST["text52"]}',text53='{$_POST["text53"]}',text54='{$_POST["text54"]}',text55='{$_POST["text55"]}',text56='{$_POST["text56"]}',text57='{$_POST["text57"]}',text58='{$_POST["text58"]}'"; 
		   
       $update =  /* fixed MMiC */ DB::Query("UPDATE politika SET $querynew",$link); 
                   
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
						<h2>'.$row["text22"].'</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					
				<?php
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM politika",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);

    
echo '

<form enctype="multipart/form-data" method="post">

								
									
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Заголовок<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text1" value="'.$row["text1"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text2">'.$row["text2"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text3">'.$row["text3"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text4">'.$row["text4"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text5">'.$row["text5"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text6">'.$row["text6"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text7">'.$row["text7"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text8">'.$row["text8"].'</textarea>
												</td>
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #1<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text9" value="'.$row["text9"].'" /></td>
									</table>
									
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text10">'.$row["text10"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #9<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text11">'.$row["text11"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #10<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text12">'.$row["text12"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #11<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text13">'.$row["text13"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #12<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text14">'.$row["text14"].'</textarea>
												</td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #2<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text15" value="'.$row["text15"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #13<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text16">'.$row["text16"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #14<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text17">'.$row["text17"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #15<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text18">'.$row["text18"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #16<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text19">'.$row["text19"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #17<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text20">'.$row["text20"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #18<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text21">'.$row["text21"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #19<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text22">'.$row["text22"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #20<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text23">'.$row["text23"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #21<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text24">'.$row["text24"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #22<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text25">'.$row["text25"].'</textarea>
												</td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #3<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text26" value="'.$row["text26"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #23<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text28">'.$row["text28"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #24<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text29">'.$row["text29"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #25<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text30">'.$row["text30"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #26<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text31">'.$row["text31"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #27<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text32">'.$row["text32"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #28<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text33">'.$row["text33"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #29<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text34">'.$row["text34"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #30<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text35">'.$row["text35"].'</textarea>
												</td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #4<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text36" value="'.$row["text36"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #31<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text37">'.$row["text37"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #32<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text38">'.$row["text38"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #33<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text39">'.$row["text39"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #34<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text40">'.$row["text40"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #35<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text41">'.$row["text41"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #36<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text42">'.$row["text42"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #37<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text43">'.$row["text43"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #38<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text44">'.$row["text44"].'</textarea>
												</td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #5<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text45" value="'.$row["text45"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #39<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text46">'.$row["text46"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #40<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text47">'.$row["text47"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #41<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text48">'.$row["text48"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #42<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text49">'.$row["text49"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #43<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text50">'.$row["text50"].'</textarea>
												</td>
									</table>
									<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #6<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text51" value="'.$row["text51"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #44<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text52">'.$row["text52"].'</textarea>
												</td>
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #7<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text53" value="'.$row["text53"].'" /></td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #45<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text54">'.$row["text54"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #46<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text55">'.$row["text55"].'</textarea>
												</td>
									</table>
									<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #47<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text56">'.$row["text56"].'</textarea>
												</td>
									</table>
										<table class="table">
										        <td><h4 id="h1.-bootstrap-heading">Название раздела #8<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<input type="text" class="alert alert-success" role="alert" name="text57" value="'.$row["text57"].'" /></td>
									</table>
										<table class="table2">
								                <td><h4 id="h1.-bootstrap-heading">Текст #48<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
												<td>
												<textarea class="alert alert-success" role="alert" name="text58">'.$row["text58"].'</textarea>
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