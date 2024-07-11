<div id="panel">
</div>
<div class="main">
	<?
	echo '
		<header class="header bem is-hide-mobile" id="header">
		
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
						<ul class="header__social">
							<li>
								<a href="https://t.me/+79195823099" target="_blank" class="header__link-social">
									<svg width="800px" height="800px" viewBox="0 0 240 240" id="svg2" xmlns="http://www.w3.org/2000/svg"><style>.st0{fill:url(#path2995-1-0_1_)}.st1{fill:#c8daea}.st2{fill:#a9c9dd}.st3{fill:url(#path2991_1_)}</style><linearGradient id="path2995-1-0_1_" gradientUnits="userSpaceOnUse" x1="-683.305" y1="534.845" x2="-693.305" y2="511.512" gradientTransform="matrix(6 0 0 -6 4255 3247)"><stop offset="0" stop-color="#37aee2"/><stop offset="1" stop-color="#1e96c8"/></linearGradient><path id="path2995-1-0" class="st0" d="M240 120c0 66.3-53.7 120-120 120S0 186.3 0 120 53.7 0 120 0s120 53.7 120 120z"/><path id="path2993" class="st1" d="M98 175c-3.9 0-3.2-1.5-4.6-5.2L82 132.2 152.8 88l8.3 2.2-6.9 18.8L98 175z"/><path id="path2989" class="st2" d="M98 175c3 0 4.3-1.4 6-3 2.6-2.5 36-35 36-35l-20.5-5-19 12-2.5 30v1z"/><linearGradient id="path2991_1_" gradientUnits="userSpaceOnUse" x1="128.991" y1="118.245" x2="153.991" y2="78.245" gradientTransform="matrix(1 0 0 -1 0 242)"><stop offset="0" stop-color="#eff7fc"/><stop offset="1" stop-color="#ffffff"/></linearGradient><path id="path2991" class="st3" d="M100 144.4l48.4 35.7c5.5 3 9.5 1.5 10.9-5.1L179 82.2c2-8.1-3.1-11.7-8.4-9.3L55 117.5c-7.9 3.2-7.8 7.6-1.4 9.5l29.7 9.3L152 93c3.2-2 6.2-.9 3.8 1.3L100 144.4z"/></svg>
								</a>
							</li>
							<li>
								<a href="https://wa.me/+79195823099" target="_blank" class="header__link-social">
								
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
											viewBox="0 0 58 58" xml:space="preserve">
										<g>
											<path style="fill:#2CB742;" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5
												S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z"/>
											<path style="fill:#FFFFFF;" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42
												c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242
												c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169
												c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097
												c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z"/>
										</g>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://vk.com/m.zhelezniak" target="_blank" class="header__link-social">
								<svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
									<circle cx="512" cy="512" r="512" style="fill:#2787f5"/>
									<path d="M585.83 271.5H438.17c-134.76 0-166.67 31.91-166.67 166.67v147.66c0 134.76 31.91 166.67 166.67 166.67h147.66c134.76 0 166.67-31.91 166.67-166.67V438.17c0-134.76-32.25-166.67-166.67-166.67zm74 343.18h-35c-13.24 0-17.31-10.52-41.07-34.62-20.71-20-29.87-22.74-35-22.74-7.13 0-9.17 2-9.17 11.88v31.57c0 8.49-2.72 13.58-25.12 13.58-37 0-78.07-22.4-106.93-64.16-43.45-61.1-55.33-106.93-55.33-116.43 0-5.09 2-9.84 11.88-9.84h35c8.83 0 12.22 4.07 15.61 13.58 17.31 49.9 46.17 93.69 58 93.69 4.41 0 6.45-2 6.45-13.24v-51.6c-1.36-23.76-13.92-25.8-13.92-34.28 0-4.07 3.39-8.15 8.83-8.15h55c7.47 0 10.18 4.07 10.18 12.9v69.58c0 7.47 3.39 10.18 5.43 10.18 4.41 0 8.15-2.72 16.29-10.86 25.12-28.17 43.11-71.62 43.11-71.62 2.38-5.09 6.45-9.84 15.28-9.84h35c10.52 0 12.9 5.43 10.52 12.9-4.41 20.37-47.18 80.79-47.18 80.79-3.73 6.11-5.09 8.83 0 15.61 3.73 5.09 16 15.61 24.1 25.12 14.94 17 26.48 31.23 29.53 41.07 3.45 9.84-1.65 14.93-11.49 14.93z" style="fill:#fff"/>
								</svg>
								</a>
							</li>
						</ul>
						<div class="header__write">
							<a class="footer__write-link" href="mailto:urist-kurgan045@mail.ru">urist-kurgan045@mail.ru</a>
							<!--
							<a href="mailto:' . $row17["text3"] . '" class="header__write-link open-modal">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							' . $row17["text3"] . '</a>
							-->
						</div>
						
						<div class="header__phones-wrapper">
							<div class="header__phone">
									<a href="#modal-callback" class="header__phone-btn  open-modal">
									<!-- <i class="fa fa-mobile" aria-hidden="true"></i> -->
									' . $row17["text4"] . '</a>
						
							</div>
							<div class="header__phone">
								<a href="#modal-callback" class="header__phone-btn  open-modal">
								+7 (3522) 55-01-29
								</a>
							</div>
						</div>
						
						
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

		</header>


	

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