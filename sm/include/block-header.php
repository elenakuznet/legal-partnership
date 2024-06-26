<nav class="main-menu">
		<ul>
			<li>
				<a href="../index">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					На Главную сайта
					</span>
				</a>
			</li>
			<li>
				<a href="index.php">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					<span class="nav-text">
					Основной контент
					</span>
				</a>
			</li>
			
			<?php
		
			
			
			
	$result =  /* fixed MMiC */ DB::Query("SELECT * FROM site",$link);
    
If ( /* fixed MMiC */ mysqli_num_rows($result) > 0)
{
$row =  /* fixed MMiC */ mysqli_fetch_array($result);
do
{
    
echo '
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Страницы</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="pages.php">
							Главная
						</a>
					</li>
				
				<li>
						<a class="subnav-text" href="page2.php">
							'.$row["text9"].'
						</a>
					</li>
					
				
					<li>
						<a class="subnav-text" href="page3.php">
							'.$row["text12"].'
						</a>
					</li>
					<li>
						<a class="subnav-text" href="page4.php">
							'.$row["text21"].'
						</a>
					</li>
					<li>
						<a class="subnav-text" href="page5.php">
							'.$row["text22"].'
						</a>
					</li>
					
				</ul>
			</li>
			
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Разделы</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					
						<li>
						<a class="subnav-text" href="uslugi.php">
						'.$row["text11"].'
						</a>
					</li>
						<li>
						<a class="subnav-text" href="novosti.php">
							'.$row["text8"].'
						</a>
					</li>
						<li>
						<a class="subnav-text" href="spory.php">
							'.$row["text10"].'
						</a>
					</li>
						<li>
						<a class="subnav-text" href="komanda.php">
							'.$row["text7"].'
						</a>
					</li>
					
					
					
				</ul>
			</li>
			
			';
		}while ($row =  /* fixed MMiC */ mysqli_fetch_array($result));
}
?> 
			<li>
				<a href="manager.php">
					<i class="fa fa-folder-open" aria-hidden="true"></i>
					<span class="nav-text">
					Файловый редактор
					</span>
				</a>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="?logout">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Выйти
			</span>
			</a>
			</li>
		</ul>
	</nav>
		<section class="title-bar">
		
		
			<div class="header-right">
		
				<div class="profile_details_left">
				
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									
									<li> <a href="administrators.php"><i class="fa fa-user"></i>Профиль</a> </li> 
									<li> <a href="?logout"><i class="fa fa-sign-out"></i>Выйти</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
				<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="clearfix"> </div>
	<?php
if (isset($msgerror)) echo '<p id="form-error" align="center">'.$msgerror.'</p>';

		 if(isset($_SESSION['message']))
		{
		echo $_SESSION['message'];
		unset($_SESSION['message']);
		}
        
   
?>
		</section>