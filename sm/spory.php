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
   



$action = $_GET["action"];
if (isset($action))
{
   $id = (int)$_GET["id"]; 
   switch ($action) {

	    case 'delete':
    if ($_SESSION['delete_tovar'] == '1')
   {

           $delete =  /* fixed MMiC */ DB::Query("DELETE FROM spory WHERE id = '$id'",$link);  
	    if (file_exists("../img/spory/".$_GET["img1"]))
        {
          unlink("../img/spory/".$_GET["img1"]);  
        }
	    
		echo'<img src="include/sitemap.php">';	   
	   
      $_SESSION['message'] = "<p id='form-success'>Удалено!</p>";
   }else
   {
      $msgerror = 'У Вас нет прав на удаление!';
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
    
 $all_count =  /* fixed MMiC */ DB::Query("SELECT * FROM spory ",$link);
 $all_count_result =  /* fixed MMiC */ mysqli_num_rows($all_count);
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
						<h2>'.$row["text10"].'</h2>
					</div>
						';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
					<div class="codes">
						<div class="agile-container">
							<div class="grid_3 grid_4">
					<div id="block-info">
<p id="count-style">Всего - <strong><?php echo $all_count_result; ?></strong></p>
<p align="right" id="add-style" ><a href="add_spory.php" >Добавить </a></p>
</div>
		
		<?php
if (isset($msgerror)) echo '<p id="form-error" align="center">'.$msgerror.'</p>';

$num = 24;

$page = (int)$_GET['page'];              

$count =  /* fixed MMiC */ DB::Query("SELECT COUNT(*) FROM spory $cat",$link);
$temp =  /* fixed MMiC */ mysqli_fetch_array($count);
$post = $temp[0];
// Íàõîäèì îáùåå ÷èñëî ñòðàíèö
$total = (($post - 1) / $num) + 1;
$total =  intval($total);
// Îïðåäåëÿåì íà÷àëî ñîîáùåíèé äëÿ òåêóùåé ñòðàíèöû
$page = intval($page);
// Åñëè çíà÷åíèå $page ìåíüøå åäèíèöû èëè îòðèöàòåëüíî
// ïåðåõîäèì íà ïåðâóþ ñòðàíèöó
// À åñëè ñëèøêîì áîëüøîå, òî ïåðåõîäèì íà ïîñëåäíþþ
if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;
// Âû÷èñëÿåì íà÷èíàÿ ñ êàêîãî íîìåðà
// ñëåäóåò âûâîäèòü ñîîáùåíèÿ
$start = $page * $num - $num;
	
if ($temp[0] > 0)   
{
$result =  /* fixed MMiC */ DB::Query("SELECT * FROM spory $cat ORDER BY id ASC LIMIT $start, $num",$link);
 
 If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{
    if  (strlen($row["img1"]) > 0 && file_exists("../img/spory/".$row["img1"]))
{
$img_path = '../img/spory/'.$row["img1"];
$max_width = 210; 
$max_height = 210; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
// New dimensions 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "images/noimage.jpg";
$width = 210;
$height = 210;
}
  
 echo '
 <table class="table3">
										
										
												<td><h4 class="fdfdf">#'.$row["id"].'_'.$row["nazvanie"].'</h4>
												
<center>
 <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
</center>
<p align="center" class="link-action" >
<a class="green" href="edit_spory.php?id='.$row["id"].'"><img src="images/edit-icon.png" /> Изменить</a> | 
<a rel="spory.php?'.$url.'id='.$row["id"].'&img1='.$row["img1"].'&action=delete" class="delete" ><img src="images/action_delete.png" /> Удалить</a>
</p>
</td>
											
												
									</table>

	
 
 ';   
    
} while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
echo'

';
} 
}  
    
	
	
	
	
if ($page != 1) $pervpage = '<a class="pstr-prev" href="spory.php?'.$url.'page='. ($page - 1) .'" />назад</a>';

if ($page != $total) $nextpage = '<a class="pstr-next" href="spory.php?'.$url.'page='. ($page + 1) .'"/>вперёд</a>';

// Íàõîäèì äâå áëèæàéøèå ñòàíèöû ñ îáîèõ êðàåâ, åñëè îíè åñòü
if($page - 5 > 0) $page5left = '<a href="spory.php?'.$url.'page='. ($page - 5) .'">'. ($page - 5) .'</a>';
if($page - 4 > 0) $page4left = '<a href="spory.php?'.$url.'page='. ($page - 4) .'">'. ($page - 4) .'</a>';
if($page - 3 > 0) $page3left = '<a href="spory.php?'.$url.'page='. ($page - 3) .'">'. ($page - 3) .'</a>';
if($page - 2 > 0) $page2left = '<a href="spory.php?'.$url.'page='. ($page - 2) .'">'. ($page - 2) .'</a>';
if($page - 1 > 0) $page1left = '<a href="spory.php?'.$url.'page='. ($page - 1) .'">'. ($page - 1) .'</a>';

if($page + 5 <= $total) $page5right = '<a href="spory.php?'.$url.'page='. ($page + 5) .'">'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = '<a href="spory.php?'.$url.'page='. ($page + 4) .'">'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = '<a href="spory.php?'.$url.'page='. ($page + 3) .'">'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = '<a href="spory.php?'.$url.'page='. ($page + 2) .'">'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = '<a href="spory.php?'.$url.'page='. ($page + 1) .'">'. ($page + 1) .'</a>';

if ($page+5 < $total)
{
    $strtotal = '<p class="nav-point">...</p><a href="spory.php?'.$url.'page='.$total.'">'.$total.'</a>';
}else
{
    $strtotal = ""; 
}

   
?>
<div id="footerfix"></div>
<?php
	if ($total > 1)
{
    echo '
    <center>
    <div class="pstrnav">
     
    ';
    echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left."<a class='pstr-active' href='spory.php?".$url."page=".$page."'>".$page."</a>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$nextpage;
    echo '
    </center>   
   
    </div>
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