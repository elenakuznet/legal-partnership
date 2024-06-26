<div id="panel">
</div>
<div class="main">
	<?
	echo '
		<header class="header bem is-hide-mobile">
		
			<div class="content-center">
				<div class="header__container">
				
					<div class="header__logo header-item">
						<div class="header__logo-block">
							<span class="header__logo-link">  
								<a href="index">
									<img src="img/' . $row17["img1"] . '" alt="' . $row17["text1"] . '" class="header__logo-img">
								</a>
							</span>	
						</div>
						
						<div class="header__logo-sub">
							<div class="fdsfdf logo__title"><a href="index">	' . $row17["text1"] . '</a></div>
							<!-- <br><br><br> -->
							<div class="fdsfdf2 logo__title-sub">' . $row17["text2"] . '</div>	
						</div>
                            
					</div>
					
					<div class="header__right header-item">
						<div class="header__write">
							<a href="mailto:' . $row17["text3"] . '" class="header__write-link open-modal">
							<!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
							' . $row17["text3"] . '</a>
						</div>
						<div class="header__phone">
								<a href="#modal-callback" class="header__phone-btn  open-modal">
								<!-- <i class="fa fa-mobile" aria-hidden="true"></i> -->
								' . $row17["text4"] . '</a>
						</div>
						<ul class="header__social">
							<li>
								<a href="https://t.me/+79195823099" target="_blank" class="header__link-social">
									<svg viewbox="0 0 50 50" fill="currentColor"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M47.9999 24C47.9999 30.3652 45.4713 36.4697 40.9704 40.9706C36.4696 45.4714 30.3651 48 23.9999 48C17.6347 48 11.5302 45.4714 7.02932 40.9706C2.52844 36.4697 -0.00012207 30.3652 -0.00012207 24C-0.00012207 17.6348 2.52844 11.5303 7.02932 7.02944C11.5302 2.52856 17.6347 0 23.9999 0C30.3651 0 36.4696 2.52856 40.9704 7.02944C45.4713 11.5303 47.9999 17.6348 47.9999 24ZM24.8609 17.718C22.5269 18.69 17.8589 20.7 10.8629 23.748C9.72888 24.198 9.13188 24.642 9.07788 25.074C8.98788 25.803 9.90288 26.091 11.1479 26.484L11.6729 26.649C12.8969 27.048 14.5469 27.513 15.4019 27.531C16.1819 27.549 17.0489 27.231 18.0059 26.571C24.5429 22.158 27.9179 19.929 28.1279 19.881C28.2779 19.845 28.4879 19.803 28.6259 19.929C28.7669 20.052 28.7519 20.289 28.7369 20.352C28.6469 20.739 25.0559 24.075 23.1989 25.803C22.6199 26.343 22.2089 26.724 22.1249 26.811C21.9399 27 21.7519 27.1861 21.5609 27.369C20.4209 28.467 19.5689 29.289 21.6059 30.633C22.5869 31.281 23.3729 31.812 24.1559 32.346C25.0079 32.928 25.8599 33.507 26.9639 34.233C27.2429 34.413 27.5129 34.608 27.7739 34.794C28.7669 35.502 29.6639 36.138 30.7649 36.036C31.4069 35.976 32.0699 35.376 32.4059 33.576C33.2009 29.325 34.7639 20.118 35.1239 16.323C35.1458 16.0075 35.1328 15.6906 35.0849 15.378C35.0566 15.1258 34.9346 14.8934 34.7429 14.727C34.4699 14.5386 34.1445 14.4409 33.8129 14.448C32.9129 14.463 31.5239 14.946 24.8609 17.718Z" />
									</svg>
								</a>
							</li>
							<li>
								<a href="https://wa.me/+79195823099" target="_blank" class="header__link-social">
									<svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM69.7626 28.9928C64.6172 23.841 57.7739 21.0027 50.4832 21C35.4616 21 23.2346 33.2252 23.2292 48.2522C23.2274 53.0557 24.4823 57.7446 26.8668 61.8769L23 76L37.4477 72.2105C41.4282 74.3822 45.9107 75.5262 50.4714 75.528H50.4823C65.5029 75.528 77.7299 63.301 77.7363 48.2749C77.7408 40.9915 74.9089 34.1446 69.7626 28.9928ZM62.9086 53.9588C62.2274 53.6178 58.8799 51.9708 58.2551 51.7435C57.6313 51.5161 57.1766 51.4024 56.7228 52.0845C56.269 52.7666 54.964 54.2998 54.5666 54.7545C54.1692 55.2092 53.7718 55.2656 53.0915 54.9246C52.9802 54.8688 52.8283 54.803 52.6409 54.7217C51.6819 54.3057 49.7905 53.4855 47.6151 51.5443C45.5907 49.7382 44.2239 47.5084 43.8265 46.8272C43.4291 46.1452 43.7837 45.7769 44.1248 45.4376C44.3292 45.2338 44.564 44.9478 44.7987 44.662C44.9157 44.5194 45.0328 44.3768 45.146 44.2445C45.4345 43.9075 45.56 43.6516 45.7302 43.3049C45.7607 43.2427 45.7926 43.1776 45.8272 43.1087C46.0545 42.654 45.9409 42.2565 45.7708 41.9155C45.6572 41.6877 45.0118 40.1167 44.4265 38.6923C44.1355 37.984 43.8594 37.3119 43.671 36.8592C43.1828 35.687 42.6883 35.69 42.2913 35.6924C42.2386 35.6928 42.1876 35.6931 42.1386 35.6906C41.7421 35.6706 41.2874 35.667 40.8336 35.667C40.3798 35.667 39.6423 35.837 39.0175 36.5191C38.9773 36.5631 38.9323 36.6111 38.8834 36.6633C38.1738 37.4209 36.634 39.0648 36.634 42.2002C36.634 45.544 39.062 48.7748 39.4124 49.2411L39.415 49.2444C39.4371 49.274 39.4767 49.3309 39.5333 49.4121C40.3462 50.5782 44.6615 56.7691 51.0481 59.5271C52.6732 60.2291 53.9409 60.6475 54.9303 60.9612C56.5618 61.4796 58.046 61.4068 59.22 61.2313C60.5286 61.0358 63.2487 59.5844 63.8161 57.9938C64.3836 56.4033 64.3836 55.0392 64.2136 54.7554C64.0764 54.5258 63.7545 54.3701 63.2776 54.1395C63.1633 54.0843 63.0401 54.0247 62.9086 53.9588Z" fill="currentColor">
										</path>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://vk.com/m.zhelezniak" target="_blank" class="header__link-social">
									<svg viewbox="0 0 50 50" fill="currentColor"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M24.9999 1C11.7449 1 0.999878 11.745 0.999878 25C0.999878 38.255 11.7449 49 24.9999 49C38.2549 49 48.9999 38.255 48.9999 25C48.9999 11.745 38.2549 1 24.9999 1ZM34.2299 28.0775C34.2299 28.0775 36.3524 30.1725 36.8749 31.145C36.8899 31.165 36.8974 31.185 36.9024 31.195C37.1149 31.5525 37.1649 31.83 37.0599 32.0375C36.8849 32.3825 36.2849 32.5525 36.0799 32.5675H32.3299C32.0699 32.5675 31.5249 32.5 30.8649 32.045C30.3574 31.69 29.8574 31.1075 29.3699 30.54C28.6424 29.695 28.0124 28.965 27.3774 28.965C27.2967 28.9649 27.2166 28.9775 27.1399 29.0025C26.6599 29.1575 26.0449 29.8425 26.0449 31.6675C26.0449 32.2375 25.5949 32.565 25.2774 32.565H23.5599C22.9749 32.565 19.9274 32.36 17.2274 29.5125C13.9224 26.025 10.9474 19.03 10.9224 18.965C10.7349 18.5125 11.1224 18.27 11.5449 18.27H15.3324C15.8374 18.27 16.0024 18.5775 16.1174 18.85C16.2524 19.1675 16.7474 20.43 17.5599 21.85C18.8774 24.165 19.6849 25.105 20.3324 25.105C20.4538 25.1036 20.573 25.0727 20.6799 25.015C21.5249 24.545 21.3674 21.5325 21.3299 20.9075C21.3299 20.79 21.3274 19.56 20.8949 18.97C20.5849 18.5425 20.0574 18.38 19.7374 18.32C19.8669 18.1413 20.0375 17.9964 20.2349 17.8975C20.8149 17.6075 21.8599 17.565 22.8974 17.565H23.4749C24.5999 17.58 24.8899 17.6525 25.2974 17.755C26.1224 17.9525 26.1399 18.485 26.0674 20.3075C26.0449 20.825 26.0224 21.41 26.0224 22.1C26.0224 22.25 26.0149 22.41 26.0149 22.58C25.9899 23.5075 25.9599 24.56 26.6149 24.9925C26.7003 25.0461 26.799 25.0746 26.8999 25.075C27.1274 25.075 27.8124 25.075 29.6674 21.8925C30.2395 20.8681 30.7366 19.8037 31.1549 18.7075C31.1924 18.6425 31.3024 18.4425 31.4324 18.365C31.5283 18.3161 31.6347 18.2912 31.7424 18.2925H36.1949C36.6799 18.2925 37.0124 18.365 37.0749 18.5525C37.1849 18.85 37.0549 19.7575 35.0224 22.51L34.1149 23.7075C32.2724 26.1225 32.2724 26.245 34.2299 28.0775Z" />
									</svg>
								</a>
							</li>
						</ul>
							<!-- <div class="header__phone">
							<a href="#modal-callback" class="header__phone-btn  open-modal"><i class="fa fa-phone" aria-hidden="true"></i> ' . $row17["text5"] . '</a>
							</div>
							-->
							<!-- <div class="header__write">
							<i class="fa fa-map-marker" aria-hidden="true"></i>	' . $row17["text6"] . '
							</div> -->
						<!--div class="header__button">
							<a href="#modal-callback" class="header__phone-btn header__btn open-modal">Заказать звонок</a>
						</div>-->
					</div>
				</div>
			</div>

		</header>
			<div class="menu-top is-hide-mobile bem is-hide-mobile">
		<div class="content-center">
			<div class="menu-top__plate">
				<ul class="menu-top__first-level1">
				<li class="menu-top__first-item">
				<a href="yuridicheskie-uslugi" class="menu-top__first-link">
					' . $row17["text11"] . '						</a>
					<ul>
					';
	$result33 =  DB::Query("SELECT nazvanie FROM uslugi order by rand() limit 8", $link);

	while ($row33 = mysqli_fetch_array($result33)) {
		echo '
<a href="uslugi?nazvanie=' . $row33["nazvanie"] . '">
<li> ' . $row33["nazvanie"] . '  </li></a>
';
	}

	echo '  
					
					</ul>
			</li>	
						<li class="menu-top__first-item">
							<a href="komanda" class="menu-top__first-link">
								' . $row17["text7"] . '						</a>
						</li>
											<li class="menu-top__first-item">
							<a href="novosti" class="menu-top__first-link">
								' . $row17["text8"] . '						</a>
						</li>
											<li class="menu-top__first-item">
							<a href="klienty" class="menu-top__first-link">
								' . $row17["text9"] . '							</a>
						</li>
									
						<li class="menu-top__first-item">
							<a href="spory" class="menu-top__first-link">
								' . $row17["text10"] . '						</a>
						</li>
											
						<li class="menu-top__first-item">
							<a href="kontakty" class="menu-top__first-link">
								' . $row17["text12"] . '						</a>
						</li>
									</ul>
			</div>
		</div>
	</div>

	
<header class="header-mobile bem is-hide-desktop">


    	<div class="menu-top-mobile">
		<div class="menu-top-mobile__holder">
			<div class="menu-top-mobile__first-holder">
				<div class="menu-top-mobile__level-holder is-level-1 is-active">
					<ul class="menu-top-mobile__level">
                    <li class=" menu-top-mobile__item ">
                  <div class="menu-top-mobile__link-wrapper">
                    <a href="komanda" class="menu-top-mobile__link">
                      <span class="menu-top-mobile__link-wrap">
                           ' . $row17["text7"] . '                     </span>
                    </a>
                   
                  </div>
              </li>                   
			   <li class=" menu-top-mobile__item ">
                  <div class="menu-top-mobile__link-wrapper">
                    <a href="novosti" class="menu-top-mobile__link">
                      <span class="menu-top-mobile__link-wrap">
                           ' . $row17["text8"] . '                     </span>
                    </a>
                   
                  </div>
              </li>                   
			   <li class=" menu-top-mobile__item ">
                  <div class="menu-top-mobile__link-wrapper">
                    <a href="klienty" class="menu-top-mobile__link">
                      <span class="menu-top-mobile__link-wrap">
                           ' . $row17["text9"] . '                     </span>
                    </a>
                   
                  </div>
              </li>                   
			   <li class=" menu-top-mobile__item ">
                  <div class="menu-top-mobile__link-wrapper">
                    <a href="spory" class="menu-top-mobile__link">
                      <span class="menu-top-mobile__link-wrap">
                           ' . $row17["text10"] . '                     </span>
                    </a>
                   
                  </div>
              </li>                   
                <li class=" menu-top-mobile__item ">
                  <div class="menu-top-mobile__link-wrapper">
                    <a href="yuridicheskie-uslugi" class="menu-top-mobile__link">
                      <span class="menu-top-mobile__link-wrap">
                            ' . $row17["text11"] . '                    </span>
                    </a>
                    <div class="menu-top-mobile__open-btn icon-arrow"></div>
                  </div>
                  <div class="menu-top-mobile__level-holder is-level-2 ">
                    <ul class="menu-top-mobile__level">
                    <li class="menu-top-mobile__item">
                      <a href="#" class="menu-top-mobile__link is-back-link js-back-link">
                        <span class="menu-top-mobile__back-icon icon-arrow"></span>
                        <span class="menu-top-mobile__link-wrap">' . $row17["text11"] . ' </span>
                      </a>
                    </li>
						';

	$result33 =  DB::Query("SELECT nazvanie FROM uslugi order by rand() limit 8", $link);
	while ($row33 = mysqli_fetch_array($result33)) {
		echo '     		

 <li class=" menu-top-mobile__item">
                      <a href="uslugi?nazvanie=' . $row33["nazvanie"] . '" class="menu-top-mobile__link">
                        <span class="menu-top-mobile__link-wrap">' . $row33["nazvanie"] . '</span>
                      </a>
                    </li>
   ';
	}

	echo '  
					
                            
</ul><div class="menu-top-mobile__footer-content">
	
	<div class="header-mobile__number"><a href="tel:' . $row17["text4"] . '" class="header-mobile__number-link">' . $row17["text4"] . '</a></div>

	</div></div></li>                              
              <li class=" menu-top-mobile__item ">
                  <div class="menu-top-mobile__link-wrapper">
                    <a href="kontakty" class="menu-top-mobile__link">
                      <span class="menu-top-mobile__link-wrap">
                           ' . $row17["text12"] . '                     </span>
                    </a>
                   
                  </div>
              </li>             
					</ul>
					<div class="menu-top-mobile__footer-content">
	
	<div class="header-mobile__number"><a href="tel:' . $row17["text4"] . '" class="header-mobile__number-link">' . $row17["text4"] . '</a></div>

	</div>				</div>
			</div>
		</div>
	</div>

	<div class="header-mobile__line">
		<div class="header-mobile__left">

			<div class="header-mobile__menu">
				<a href="#" class="header-mobile__menu-button">
					<span class="header-mobile__menu-icon"></span>
				</a>
				<div class="header-mobile__menu-holder">
				</div>
			</div>
		</div>
		<div class="header-mobile__center">
			<div class="header-mobile__logo">
				<span class="header-mobile__logo-link">			<a href="index">		<img src="img/' . $row17["img1"] . '" alt="' . $row17["text1"] . '" class="rgfwdpgk5"></a>
				</span>		<a href="index"><div class="fdsfdf3">' . $row17["text1"] . '</div></a><br>
							<div class="fdsfdf4">' . $row17["text2"] . '</div>	</div>
		</div>
		<div class="header-mobile__right">
			<div class="header-mobile__call">
				<a href="tel:' . $row17["text4"] . '" class="header-mobile__call-link"><span class="header-mobile__call-icon"></span></a>			</div>
		</div>
	</div>
</header>	
';
	?>