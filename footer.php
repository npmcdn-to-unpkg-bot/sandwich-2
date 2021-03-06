
	</main><!-- #content -->
	<footer class="site-footer">	
		<!--<div class="site-footer__gradient"></div>-->
		<div class="site-footer-nav">
			<div class="site-footer-nav__wrapper lcw">
				<div class="site-footer-nav__column">
					<h3 class="site-footer-nav__header">Основное</h3>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-nav-1',
						'container_class' => 'site-footer-nav__item',
						'menu_class' => 'site-footer-nav__list'
					)); ?>
				</div>
				<div class="site-footer-nav__column">
					<h3 class="site-footer-nav__header">Продукция</h3>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-nav-2',
						'container_class' => 'site-footer-nav__item',
						'menu_class' => 'site-footer-nav__list'
					)); ?>
				</div>
				<div class="site-footer-nav__column">
					<h3 class="site-footer-nav__header">Услуги</h3>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-nav-3',
						'container_class' => 'site-footer-nav__item',
						'menu_class' => 'site-footer-nav__list'
					)); ?>
				</div>
				<div class="site-footer-nav__column">
					<h3 class="site-footer-nav__header">О компании</h3>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-nav-4',
						'container_class' => 'site-footer-nav__item',
						'menu_class' => 'site-footer-nav__list'
					)); ?>
				</div>
			</div>							
		</div>
		<div class="site-footer-items">
			<div class="site-footer-items__wrapper lcw">
				<div class="site-footer-items__item site-footer-items__item--logo">
					<a href="" class="site-logo site-logo--footer"></a>
				</div>
				<div class="site-footer-items__item">
					<p class="site-footer-items__address">111024, г.Москва, ул. Авиамоторная,<br>
					д.50, стр.2</p>
					<a href="mailto:info@novform.ru" class="site-footer-items__email" target="_blank">info@novform.ru</a>
				</div>
				<div class="site-footer-items__item site-footer-callback">
					<p class="site-footer-callback__tel">+7 (495) 663-86-87</p>
					<button class="site-header-callback__button callback2__open">Заказать обратный звонок</button>
					<p class="site-footer-callback__hours">пн.-пт. с 9.00 до 18.00</p>
				</div>
				<div class="site-footer-items__item site-footer-items__item--callback">
					<button class="callback__open fancy-button"><span>Отправить заявку</span></button>
				</div>
			</div>
		</div>
		<div class="site-footer-copy">
			<div class="site-footer-copy__wrapper lcw">
				<p class="site-footer-copy__text">© 2016 «Новый Формат»</p>
			</div>
		</div>
		<button type="button" class="up"></button>
	</footer>
	<div class="callback">
		<div class="callback__wrapper">
			<h2 class="callback__header">Отправить заявку</h2>
			<?php echo do_shortcode( '[contact-form-7 title="Отправить заявку"]' ); ?>
			<!--<form action="" class="callback__form">
				<div class="callback__item">
					<label for="callback-name">Имя</label>
					<input type="text" id="callback-name" placeholder="Имя">
				</div>
				<div class="callback__item">
					<label for="callback-tel">Телефон</label>
					<input type="tel" id="callback-tel" placeholder="Телефон">
				</div>
				<div class="callback__item">
					<label for="callback-email">E-mail</label>
					<input type="email" id="callback-email" placeholder="E-mail">
				</div>	
				<div class="callback__item callback__item">
					<label for="callback-message">Сообщение</label>
					<textarea id="callback-message"></textarea>
				</div>	
				<div class="callback__item">
					<input type="submit" placeholder="Отправить">
				</div>					
			</form>-->
			<button class="callback__close">×</button>
		</div>
	</div>
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--<script src="https://npmcdn.com/react@15.3.0/dist/react-with-addons.js"></script>
<script src="https://npmcdn.com/react-dom@15.3.0/dist/react-dom.js"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-vOBdjVqwgHav99Lw79O25RL04z5pq2c" type="text/javascript"></script>
<script>
	var center = new google.maps.LatLng(55.736095, 37.718121);
	var init = function(){
		var prop = {
			center: center,
			scrollwheel: false,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map'), prop);
		var marker = new google.maps.Marker({
			position: center,
			icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
			size: new google.maps.Size(20, 32)
		});
		marker.setMap(map);
	};
	google.maps.event.addDomListener(window, 'load', init);
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/odometer.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/react.jsx"></script>-->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter37947005 = new Ya.Metrika({
					id:37947005,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					trackHash:true,
					ecommerce:"dataLayer"
				});
			} catch(e) { }
		});
		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";
		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37947005" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-80637134-1', 'auto');
	ga('send', 'pageview');
</script>
<?php wp_footer(); ?>
</body>
</html>
