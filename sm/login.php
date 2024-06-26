<?php
session_start();
    include("include/connect.php");
    include("include/functions.php");

    
 If ($_POST["submit_enter"])
 {
    $login = clear_string($_POST["input_login"]);
 
    
	    $pass   = md5(clear_string($_POST["input_pass"]));
    $pass   = strrev($pass);
    $pass   = strtolower("mb03foo53".$pass."qj2jjdp9");
  
 if ($login && $pass)
  {
    

   $result =  /* fixed MMiC */ DB::Query("SELECT * FROM reg_admin WHERE login = '$login' AND pass = '$pass'",$link);
   
 If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
  {
    $row =  /* fixed MMiC */ mysqli_fetch_array($result);

    $_SESSION['auth_admin'] = 'yes_auth'; 
    $_SESSION['auth_admin_login'] = $row["login"];
	   $_SESSION['auth_id'] = $row["id"];
	// Äîëæíîñòü
    $_SESSION['admin_role'] = $row["role"];
    // Ïðèâèëåãèè
  
      // Òîâàðû  
    $_SESSION['delete_tovar'] = $row["delete_tovar"];
    $_SESSION['add_tovar'] = $row["add_tovar"];
    $_SESSION['edit_tovar'] = $row["edit_tovar"];
     $_SESSION['edit_content'] = $row["edit_content"];


    header("Location: index.php");
  }else
  {
        $msgerror = "Неверный логин или пароль!"; 
  }

        
    }else
    {
        $msgerror = "Заполните все поля!";
    }
 
 }
?>
<html>
<head>
<meta name="robots" content="noindex, nofollow" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="css/reset.css" rel="stylesheet"  />
    <link href="css/style-login.css" rel="stylesheet"  />

	<title>Панель администратора - Вход</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<style >
body,td,th {
	font-family: Roboto, sans-serif;
}
</style> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Вход</h2>
				</div>
					<div class="signin-text">
					
						<?php
	
    if ($msgerror)
    {
        echo '<div class="clearfix">'.$msgerror.' </div>';
        
    }
    
?>
				</div>
				<form method="post">
					
					
<input type="text" name="input_login" value="логин" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'логин';}">
<input type="password" name="input_pass" value="пароль" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'пароль';}">

				<input type="submit" class="register" name="submit_enter" id="submit_enter" value="войти" />
					
				</form>
				<form method="post" >


</form>
			
			
			
				<a href="../index">на главную</a>
			</div>
			
			<!-- footer -->
			
				
			<!-- //footer -->
			
		</div>
	<div class="footer">
			   <p class="copyright six columns tab-whole footer-about">&copy;2016-<script>var mdate = new Date(); document.write(mdate.getFullYear());</script><span itemprop="name"> DESIGN GRAPHIC</span>.ПАНЕЛЬ УПРАВЛЕНИЯ КОНТЕНТОМ</p>  
		</div> 
</body>
</html>
