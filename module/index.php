<?php
ob_start();
$replace['title']=$ltmp_arr['index']['title'].' - '.$replace['title'];
print '
<div class="cards-view">
	<div class="cards-container">';
		print '
		<div class="card adaptive-hide-block">
			<div class="presentation">
				<div class="slide current" data-num="1" data-start="false" data-timeout="8000">
					<div class="image-wrapper full" style="color:#4285f4;flex-direction:column;">
						<div class="primary-text text-center text-big">
							<strong>'.$ltmp_arr['index']['s1_1'].'</strong>
						</div>
						<img src="/illustrations/2-5-2.svg" alt="" style="max-height:80vh;max-width:95vw;padding:0 15px;" />
						<div class="secondary-text text-center" style="padding-top:1.5vh;">'.$ltmp_arr['index']['s1_2'].'</div>
					</div>
				</div>

				<div class="slide" data-num="2" data-old-num="5">
					<div class="image-wrapper half">
						<img src="/illustrations/2-1-2'.('en'==$ltmp_current?'-en':'').'.svg" alt="" style="width:95%" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s2_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s2_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="3" data-old-num="6">
					<div class="image-wrapper half">
						<img src="/illustrations/5'.('en'==$ltmp_current?'-en':'').'.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s3_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s3_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="4" data-old-num="9">
					<div class="image-wrapper half">
						<img src="/illustrations/8.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s4_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s4_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="5">
					<div class="image-wrapper half">
						<img src="/illustrations/2-3.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s5_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s5_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="6" data-old-num2="11">
					<div class="image-wrapper half">
						<img src="/illustrations/2-4.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s6_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s6_2'].'
						</div>
					</div>
				</div>


				<div class="slide" data-num="7" data-old-num2="9" data-old-num="12">
					<div class="image-wrapper half">
						<img src="/illustrations/11.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s7_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s7_2'].'
						</div>
					</div>
				</div>


				<div class="slide" data-num="8" data-old-num2="10" data-old-num="13">
					<div class="image-wrapper half">
						<img src="/illustrations/12.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s8_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s8_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="9" data-old-num2="7" data-old-num="15">
					<div class="image-wrapper half">
						<img src="/illustrations/2-2-2.svg" alt="" style="width:98%" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s9_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s9_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="10" data-old-num2="6" data-old-num="14">
					<div class="image-wrapper half">
						<img src="/illustrations/13.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s10_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s10_2'].'
						</div>
					</div>
				</div>


				<div class="slide" data-num="11" data-old-num2="8" data-old-num="8">
					<div class="image-wrapper half">
						<img src="/illustrations/7.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s11_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s11_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="12" data-old-num="10">
					<div class="image-wrapper half" style="color:#4285f4;flex-direction:column;">
						<div class="primary-text text-center text-big" style="font-size:1.5em">
							'.$ltmp_arr['index']['s12_1'].'
						</div>
						<img src="/illustrations/9-2.svg" alt="" class="with-text" style="max-width:98%" />
						<div class="secondary-text text-center" style="font-size:1.5em;padding-top:2.5vh;">
							'.$ltmp_arr['index']['s12_2'].'
						</div>
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s12_3'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s12_4'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="13" data-old-num="17">
					<div class="image-wrapper half">
						<img src="/illustrations/16.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s13_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s13_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="14" data-old-num="16">
					<div class="image-wrapper half">
						<img src="/illustrations/15.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s14_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s14_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="15" data-old-num="18">
					<div class="image-wrapper half">
						<img src="/illustrations/17.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							'.$ltmp_arr['index']['s15_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s15_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="16" data-old-num="19" data-end="true">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s16'].'
						</div>
					</div>
				</div>

				<div class="progress">
					<div class="fill-level">
					</div>
				</div>

				<div class="slider">
					<div class="fill-level">
					</div>
				</div>

				<div class="player">
					<a class="prev-action" title="">«</a>
					<a class="next-action" title="">»</a>
					<div class="bottom-line">
						<span class="slide-counter">&mdash; / &mdash;</span>
						<a class="toggle-fullscreen-action">&hellip;</a>
					</div>
				</div>
			</div>
		</div>
		';
		//adaptive
		print '<div class="card adaptive-show-block">
			<div class="presentation">
				<div class="slide current" data-num="1" data-start="false" data-timeout="8000">
					<div class="image-wrapper full" style="color:#4285f4;flex-direction:column;">
						<div class="primary-text text-center text-big">
							<strong>'.$ltmp_arr['index']['s1_1'].'</strong>
						</div>
						<img src="/illustrations/2-5-2.svg" alt="" style="max-height:95vh" />
						<div class="secondary-text text-center" style="padding-top:1.5vh;">'.$ltmp_arr['index']['s1_2'].'</div>
					</div>
				</div>

				<div class="slide" data-num="2">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s2_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s2_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="3">
					<div class="image-wrapper full">
						<img src="/illustrations/2-1-2'.('en'==$ltmp_current?'-en':'').'.svg" alt="" style="width:98%" />
					</div>
				</div>

				<div class="slide" data-num="4">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s3_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s3_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="5">
					<div class="image-wrapper full">
						<img src="/illustrations/5'.('en'==$ltmp_current?'-en':'').'.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="6">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s5_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s5_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="7">
					<div class="image-wrapper full">
						<img src="/illustrations/2-3.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="8">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s6_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s6_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="9">
					<div class="image-wrapper full">
						<img src="/illustrations/2-4.svg" alt="" />
					</div>
				</div>


				<div class="slide" data-num="10">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s7_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s7_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="11">
					<div class="image-wrapper full">
						<img src="/illustrations/11.svg" alt="" />
					</div>
				</div>


				<div class="slide" data-num="12">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s8_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s8_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="13">
					<div class="image-wrapper full">
						<img src="/illustrations/12.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="14">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s9_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s9_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="15">
					<div class="image-wrapper full">
						<img src="/illustrations/2-2-2.svg" alt="" style="width:98%" />
					</div>
				</div>

				<div class="slide" data-num="16">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s10_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s10_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="17">
					<div class="image-wrapper full">
						<img src="/illustrations/13.svg" alt="" />
					</div>
				</div>


				<div class="slide" data-num="18">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s11_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s11_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="19">
					<div class="image-wrapper full">
						<img src="/illustrations/7.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="20">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s12_3'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s12_4'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="21">
					<div class="image-wrapper full" style="color:#4285f4;flex-direction:column;">
						<div class="primary-text text-center text-big" style="font-size:1.5em">
							'.$ltmp_arr['index']['s12_1'].'
						</div>
						<img src="/illustrations/9-2.svg" alt="" class="with-text" />
						<div class="secondary-text text-center" style="font-size:1.5em;padding-top:2.5vh;">
							'.$ltmp_arr['index']['s12_2'].'
						</div>
					</div>
				</div>

				<div class="slide" data-num="22">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s13_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s13_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="23">
					<div class="image-wrapper full">
						<img src="/illustrations/16.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="24">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s14_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s14_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="25">
					<div class="image-wrapper full">
						<img src="/illustrations/15.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="26">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s15_1'].'
						</div>
						<div class="secondary-text">
							'.$ltmp_arr['index']['s15_2'].'
						</div>
					</div>
				</div>
				<div class="slide" data-num="27">
					<div class="image-wrapper full">
						<img src="/illustrations/17.svg" alt="" />
					</div>
				</div>

				<div class="slide" data-num="28" data-end="true">
					<div class="text-wrapper full">
						<div class="primary-text">
							'.$ltmp_arr['index']['s16'].'
						</div>
					</div>
				</div>

				<div class="progress">
					<div class="fill-level">
					</div>
				</div>

				<div class="slider">
					<div class="fill-level">
					</div>
				</div>

				<div class="player">
					<a class="prev-action" title="">«</a>
					<a class="next-action" title="">»</a>
					<div class="bottom-line">
						<span class="slide-counter">&mdash; / &mdash;</span>
						<a class="toggle-fullscreen-action">&hellip;</a>
					</div>
				</div>
			</div>
		</div>
		';


		print '<div class="card transparent" id="steps">';
		if('ru'==$ltmp_current){
			print '<p style="text-align:right;font-size:16px;line-height:20px;margin-bottom:10px;"><a style="opacity:0.8;" href="/?lang=en">English version</a></p><br>';
		}
		if('en'==$ltmp_current){
			print '<p style="text-align:right;font-size:16px;line-height:20px;margin-bottom:10px;"><a style="opacity:0.8;" href="/?lang=ru">Русская версия</a></p><br>';
		}
		print '<h1 class="captions bold">'.$ltmp_arr['index']['steps'].'</h1></div>';
		print '
		<div class="card">
			<h3 class="captions left list"><span class="n1">1</span>'.$ltmp_arr['index']['step1'].'</h3>
			<p>'.$ltmp_arr['index']['step1_text'].'</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n2">2</span>'.$ltmp_arr['index']['step2'].'</h3>
			<p>'.$ltmp_arr['index']['step2_text'].'</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n3">3</span>'.$ltmp_arr['index']['step3'].'</h3>
			<p>'.$ltmp_arr['index']['step3_text'].'</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n4">4</span>'.$ltmp_arr['index']['step4'].'</h3>
			<p>'.$ltmp_arr['index']['step4_text'].'</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n5">5</span>'.$ltmp_arr['index']['step5'].'</h3>
			'.$ltmp_arr['index']['step5_text'].'';
		/*
		if('en'==$ltmp_current){
			print '<p><span class="toggle-action" data-toggle="telegram-items">▼ Check the list of channels and groups in Telegram with the viz-bot and subscribe to the ones you are interested in</span></p>';
			print '
			<div class="toggle-item telegram-items">
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/eng_viz_faq" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgADMq8xG7GtUUgACAIAA3u609cW____H_zM8PlGptogBA" alt="Telegram channel eng_viz_faq">VIZ Support<span class="source">telegram</span></span>
						<span class="descr">Support group on english.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/web3news" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATsPy3DwAEAgADrN_54hb___-PgI2UBbK54EhYAwABHgQ" alt="Telegram channel web3news">Web 3.0<span class="source">telegram</span></span>
						<span class="descr">Новости, аналитика, ссылки, видео о развитии нового Интернета. Автор - один из самых известных российских аналитиков в сфере блокчейн-технологий (Menaskop).</span>
						</a>
					</div>
				</div>
			</div>';
		}
		*/
		if('ru'==$ltmp_current){
			print '<p><span class="toggle-action" data-toggle="telegram-items">▼ Проверьте список каналов и групп в Телеграме с виз-ботом и подпишитесь на те, что вам интересны</span></p>';
			print '
			<div class="toggle-item telegram-items">
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/tisnu_channel" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATantfDwAEAgADKZYC3xb___-RKqQlWunsZ6xQBQABHgQ" alt="Telegram channel tisnu_channel">Оттиск на тисе<span class="source">telegram</span></span>
						<span class="descr">Небольшой авторский канал. Заметки о науке, культуре, цитаты из книг, интересные картинки из интернета и офлайна, другие мелочи жизни.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/web3news" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATsPy3DwAEAgADrN_54hb___-PgI2UBbK54EhYAwABHgQ" alt="Telegram channel web3news">Web 3.0<span class="source">telegram</span></span>
						<span class="descr">Новости, аналитика, ссылки, видео о развитии нового Интернета. Автор - один из самых известных российских аналитиков в сфере блокчейн-технологий (Menaskop).</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/metanetnews" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATj0i3DQAEAgAD5gzz6Bb___85sudMKz_c-HOKAAIeBA" alt="Telegram channel metanetnews">Meta Network News<span class="source">telegram</span></span>
						<span class="descr">Новости технологий, финтеха, экологии, космоса, стартапов.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/radiodaily" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATuyHBDgAEAgAD5CoD2Rb___-Rugl6SK3wGurJAwABHgQ" alt="Telegram channel radiodaily">Radio Daily<span class="source">telegram</span></span>
						<span class="descr">Необычные музыкальные треки и рассказы об их авторах.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/mishkadj" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATGfK6DwAEAgADguFk6Bb___8ZlRW8yM8yj12yBgABHgQ" alt="Telegram channel mishkadj">Mishka Dj<span class="source">telegram</span></span>
						<span class="descr">Новая музыка каждый день: ссылки на Spotify с интересными треками, авторские плейлисты, рассказы об исполнителях.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/mishkin0" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgAT9__ADgAEAgADpEzE5Rb___9GWYyymmuZ9eNkAwABHgQ" alt="Telegram channel mishkin0">MishКино<span class="source">telegram</span></span>
						<span class="descr">Авторский канал о кино, сериалах и прочей поп-культуре. Новости, анонсы, слухи, рецензии, видео.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/musical_lighthouse" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATFJLCDwAEAgADVW-L2Bb____WhIvrjtkUV14pBAABHgQ" alt="Telegram channel musical_lighthouse">Музыкальный Маяк<span class="source">telegram</span></span>
						<span class="descr">Авторские музыкальные миксы разных стилей и направлений на Soundcloud.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/technohumanities" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATLeq6DwAEAgADgaeZ0hb___-agPnzTDHTbt0mBAABHgQ" alt="Telegram channel technohumanities">Техногуманитарий<span class="source">telegram</span></span>
						<span class="descr">На стыке искусства и высоких технологий. Авторский канал. Видео, новости, анонсы, комиксы и прочее творчество автора, известного в блокчейн-сообществе как antropocosmist.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/RussiaTeal" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATTExTDwAEAgADJwGt3Bb___8D7YfDBaHyEQc2AwABHgQ" alt="Telegram channel RussiaTeal">Ru Teal Community<span class="source">telegram</span></span>
						<span class="descr">Русскоязычное бирюзовое сообщество, участники которого хотят, чтобы счастливых компаний, создающих ценность, было больше. Обсуждения современной экономики, деловых практик, концепций, реальных кейсов создания и деятельности бизнесов, основанных на новых принципах.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/synergis" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATyt0PDgAEAgADObZJ6hb___992MZ7XVzFp6QKAAIeBA" alt="Telegram channel synergis">SYNERGIS :: RUS<span class="source">telegram</span></span>
						<span class="descr">Свободные обсуждения крипто-мира. Группа с дискуссиями о ситуации в криптомире, блокчейнах, новом Интернете, о будущем и настоящем.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/SiddgamesRU" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATUi6Cki4AAwIAAzbs8dYW____08tVj8o8oQeTgQMAAR4E" alt="Telegram channel SiddgamesRU">SiddgamesRU<span class="source">telegram</span></span>
						<span class="descr">Официальный канал Siddgames.ru - сайта и форума о компьютерных играх.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/metaclub" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATHTNLDQAEAgADVyWm6Bb___9jZug3OQ0zl_SrBQABHgQ" alt="Telegram channel metaclub">Клуб технологий [MetaClub]<span class="source">telegram</span></span>
						<span class="descr">Чат-эксперимент. Криптовалюты,  информационные технологии, технократия, ICO, блокчейн, экология, софт и железо, электромобили, лучшие компании мира.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/PCHELPZONE" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATnH5TDwAEAgADoTu15xb___-C6JPhxcDZpCRrBAABHgQ" alt="Telegram channel PCHELPZONE">Компьютерная Помощь Онлайн в Телеграм<span class="source">telegram</span></span>
						<span class="descr">Чат компьютерной помощи: задайте вопрос системному администратору онлайн. Бесплатная онлайн-консультация, компьютерная помощь. За помощь можно и нужно благодарить наградами через виз-бота, встроенного в чат.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/waytonorway" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATqx9xDQAEAgADGQLE6hb___9fw9ct3W8tan1nAQABHgQ" alt="Telegram channel waytonorway">WayToNorway<span class="source">telegram</span></span>
						<span class="descr">Эмиграция в Норвегию. Обсуждение возможности переезда в Норвегию с участием тех, кто это уже сделал. Награждайте участников за полезные лайфхаки и получайте награды, отвечая на вопросы других комментаторов.</span>
						</a>
					</div>
				</div>
			</div>';
		}
		print '
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n6">6</span>'.$ltmp_arr['index']['step6'].'</h3>
			'.$ltmp_arr['index']['step6_text'].'
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n7">7</span>'.$ltmp_arr['index']['step7'].'</h3>
			'.$ltmp_arr['index']['step7_text'].'';
		if('en'==$ltmp_current){
			print '
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/eng_viz_faq" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgADMq8xG7GtUUgACAIAA3u609cW____H_zM8PlGptogBA" alt="Telegram channel eng_viz_faq">VIZ Support<span class="source">telegram</span></span>
						<span class="descr">Support group on english.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/viz_world" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATD2lfDwAEAgADN5OV4hb___-eiikR9EoDjc8iBQABHgQ" alt="Telegram channel viz_world">VIZ.World<span class="source">telegram</span></span>
						<span class="descr">Popular group about VIZ. Communication between users, information about new developments, discussion of both the VIZ concept and specific issues.</span>
						</a>
					</div>
				</div>';
		}
		if('ru'==$ltmp_current){
			print '
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://viz.media/" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATcAtxkS4AAwIAA56ZcdMW____kcAFlG8h2PzPVQQAAR4E" alt="Telegram channel vizmedia">Медиаплатформа ВИЗ<span class="source">viz.media</span></span>
						<span class="descr">Информационный портал о ВИЗе: статьи, новости, ссылки. Собирает информацию из всех доступных источников, систематизирует, публикует, позволяет комментировать и награждать авторов.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/vizplus" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADBAAT9VXxIl0AAwIAA_wnuNMW____aI3wJ5OmS_EqXAEAAR4E" alt="Telegram channel vizplus">viz+<span class="source">telegram</span></span>
						<span class="descr">Основная телеграм-группа Инициативы VIZPLUS. Информация о релизах, ответы на вопросы, новости, предложения.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/viz_world" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATD2lfDwAEAgADN5OV4hb___-eiikR9EoDjc8iBQABHgQ" alt="Telegram channel viz_world">VIZ.World<span class="source">telegram</span></span>
						<span class="descr">Популярная телеграм-группа о ВИЗе. Общение пользователей, информация о новых разработках, обсуждение как концепции ВИЗа, так и конкретных вопросов.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/vizplus_help" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADBAATm7ySIl0AAwIAA7alLN0W____TajmEF04ethsJQMAAR4E" alt="Telegram channel vizplus_help">viz+help<span class="source">telegram</span></span>
						<span class="descr">Телеграм-группа для помощи новичкам, курируемая Инициативой VIZPLUS. Источник знаний о ВИЗе для начинающих. Задавайте любые вопросы.</span>
						</a>
					</div>
				</div>
				<div class="columns-view">
					<div class="column column-2 viz-promo">
						<a href="https://t.me/VIZ_Ecosystem" target="_blank">
						<span class="name"><img src="https://telegram.viz.world/file/AQADAgATAVjNDwAEAgADFVS_2Bb___8QIlMSSEGjsOp9AQABHgQ" alt="Telegram channel VIZ_Ecosystem">VIZ Ecosystem<span class="source">telegram</span></span>
						<span class="descr">Телеграм-канал с анонсами и ссылками на публикации о ВИЗе.</span>
						</a>
					</div>
					<div class="column column-2 viz-promo">
						<a href="https://t.me/viznotifybot" target="_blank">
						<span class="name"><img src="/images/bot-avatar.png" alt="">VIZ notify<span class="source">telegram bot</span></span>
						<span class="descr">Телеграм-бот в режиме реального времени поставляет данные о событиях в блокчейне VIZ. Можно настраивать фильтры, чтобы следить за конкретными операциями или аккаунтами.</span>
						</a>
					</div>
				</div>';
			}
		print '
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n8">8</span>'.$ltmp_arr['index']['step8'].'</h3>
			'.$ltmp_arr['index']['step8_text'].'
			<div class="columns-view">
				<!--
				<div class="column column-2 viz-promo">
					<a href="https://coins.black/?search_from=VIZ" target="_blank">
					<img src="/images/coinsblack.png" alt="">
					<span class="name">COINS.BLACK<span class="source">coins.black</span></span>
					<span class="descr">Продажа и покупка визов за деньги и криптовалюту множеством способов в основном без регистрации и проверок. Работает через оператора, поэтому ночью и в некоторые другие моменты обмен может быть отложен на некоторое время. Самый простой способ покупки и продажи визов для неспециалистов.</span>
					</a>
				</div>
				-->
				<div class="column column-2 viz-promo">
					<a href="https://menaskop.xyz/" target="_blank">
					<img src="/images/menaskop.jpg" alt="">
					<span class="name">'.$ltmp_arr['index']['menaskop-xyz-name'].'<span class="source">menaskop.xyz</span></span>
					<span class="descr">'.$ltmp_arr['index']['menaskop-xyz-text'].'</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://t.me/vizplus_trade" target="_blank">
					<img src="/images/tg-vizplus_trade'.('en'==$ltmp_current?'-en':'').'.png" alt="">
					<span class="name">viz+trade<span class="source">telegram</span></span>
					<span class="descr">'.$ltmp_arr['index']['vizplus_trade'].'</span>
					</a>
				</div>
			</div>
			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://viz.media/shop" target="_blank">
					<img src="/images/viz-media-checks.png" alt="">
					<span class="name">'.$ltmp_arr['index']['viz-media-checks-name'].'<span class="source">viz.media</span></span>
					<span class="descr">'.$ltmp_arr['index']['viz-media-checks-text'].'</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://wallet.bitshares.org/#/market/XCHNG.VIZ_RUDEX.USDT" target="_blank">
					<img src="/images/bitshares.png" alt="">
					<span class="name">'.$ltmp_arr['index']['bitshares-name'].'<span class="source">wallet.bitshares.org</span></span>
					<span class="descr">'.$ltmp_arr['index']['bitshares-text'].'</span>
					</a>
				</div>
			</div>
			<!--
			<div class="columns-view">
			</div>
			-->
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n9">9</span>'.$ltmp_arr['index']['step9'].'</h3>
			<p>'.$ltmp_arr['index']['step9_text'].'</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n10">10</span>'.$ltmp_arr['index']['step10'].'</h3>
			<p>'.$ltmp_arr['index']['step10_text'].'</p>

			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://start.viz.plus/" target="_blank">
					<img src="/images/start-viz-plus'.('en'==$ltmp_current?'-en':'').'.png" alt="">
					<span class="name">start.VIZ+<span class="source">start.viz.plus</span></span>
					<span class="descr">'.$ltmp_arr['index']['start-viz-plus'].'</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://about.viz.plus/" target="_blank">
					<img src="/images/about-viz-plus'.('en'==$ltmp_current?'-en':'').'.png" alt="">
					<span class="name">about.VIZ+<span class="source">about.viz.plus</span></span>
					<span class="descr">'.$ltmp_arr['index']['about-viz-plus'].'</span>
					</a>
				</div>
			</div>
			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://my.viz.plus/" target="_blank">
					<img src="/images/my-viz-plus'.('en'==$ltmp_current?'-en':'').'.png" alt="">
					<span class="name">my.VIZ+<span class="source">my.viz.plus</span></span>
					<span class="descr">'.$ltmp_arr['index']['my-viz-plus'].'</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://info.viz.plus/" target="_blank">
					<img src="/images/info-viz-plus'.('en'==$ltmp_current?'-en':'').'.png" alt="">
					<span class="name">info.VIZ+<span class="source">info.viz.plus</span></span>
					<span class="descr">'.$ltmp_arr['index']['info-viz-plus'].'</span>
					</a>
				</div>
			</div>
			'.$ltmp_arr['index']['afterwords'].'
			<p>'.$ltmp_arr['index']['contacts'].'</p>
		</div>
		';
	print '
	</div>
</div>';
$content=ob_get_contents();
ob_end_clean();