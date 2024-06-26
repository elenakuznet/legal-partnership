<?php 
include("../sm/include/connect.php");


if(isset($_GET['num'])){
	$num = $_GET['num'];
	$num2 = $_GET['num'] - 8;
	$result26 = DB::Query("SELECT * FROM spory limit $num, 8",$link);
	
	if(mysqli_num_rows($result26) > 0){	
		while($row26 = mysqli_fetch_array($result26))
{
echo'     					              
              
                                                   
              
                          	<div class="news-list__item js-news-item" >
					<a href="rezultat-spora" class="news-list__item-inner clearfix">
						<div class="news-list__item-left clearfix">
							<div class="news-list__item-date clearfix"><span>'.$row26["day"].'</span><span>'.$row26["mount"].'</span></div>
							<div class="news-list__item-category is-hide-desktop">'.$row26["kat"].'</div>
							<div class="news-list__item-person is-hide-mobile">
																
																									<span>'.$row26["persona"].'</span>
																							</div>
						</div>
						<div class="news-list__item-right">
							<div class="news-list__item-category is-hide-mobile">'.$row26["kat"].'</div>
							<div class="news-list__item-person is-hide-desktop">
																
																									<span>'.$row26["persona"].'</span>
																							</div>
							<div class="news-list__item-caption">'.$row26["nazvanie"].'</div>
							<div class="news-list__item-text">
								<p>'.$row26["opisanie1"].' </p>
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