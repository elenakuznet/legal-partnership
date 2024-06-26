<?php 
include("../sm/include/connect.php");


if(isset($_GET['num'])){
	$num = $_GET['num'];
	$num2 = $_GET['num'] - 6;
	$result24 = DB::Query("SELECT * FROM novosti limit $num, 6",$link);
	
	if(mysqli_num_rows($result24) > 0){	
		while($row24 = mysqli_fetch_array($result24))
{
echo'     					              
              
                                                   
              
                             <div class="news-tiles__item js-news-item" >
						<div class="news-tiles__item-inner">
							<div class="news-tiles__item-top clearfix">
								<div class="news-tiles__item-date clearfix"><span>'.$row24["day"].'</span><span>'.$row24["mount"].'</span></div>
								<div class="news-tiles__item-person">
																			
																												<span><a href="specialist?name='.$row24["persona"].'" class="frfrfra44">'.$row24["persona"].'</a></span>	
																										</div>
																										
								<a href="uslugi?nazvanie='.$row24["kat"].'"><div class="news-tiles__item-category">'.$row24["kat"].'</div></a>
							</div>
							<div class="news-tiles__item-person">
																	
																									<span><a href="specialist?name='.$row24["persona"].'" class="frfrfra44">'.$row24["persona"].'</a></span>	
																							</div>
																							<a href="statya?id='.$row24["id"].'" class="frfrfra44">
							<div class="news-tiles__item-caption"> '.$row24["nazvanie"].'</div>
							<div class="news-tiles__item-text">
								<p>  '.$row24["opisanie1"].'</p>
							</div>
							</div>
						</a>
						
					</div>
                      ';
}      		
		sleep(1); //Сделана задержка в 1 секунду чтобы можно проследить выполнение запроса
	}else{
		echo 0; //Если записи закончились
	}
	
}

?>