<?php
ob_start();
$replace['title']='Главная - '.$replace['title'];
print '
<div class="cards-view">
	<div class="cards-container">
		<div class="card">
			<div class="presentation">
				<div class="slide current" data-num="1" data-start="false" data-timeout="8000">
					<div class="text-wrapper full" style="background:url(\'/next-slide.svg\') right bottom no-repeat #4285f4;">
						<div class="primary-text text-center text-big">
							<strong>Что такое ВИЗ?</strong>
						</div>
						<div class="secondary-text text-center" style="padding-top:2vh;">Понятное объяснение в картинках</div>
					</div>
				</div>

				<div class="slide" data-num="2">
					<div class="image-wrapper half">
						<img src="/illustrations/1.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							<strong>Делать что-то для других за деньги &ndash; это работа</strong>
						</div>
						<div class="secondary-text">
							Вы обмениваете свои время, знания и силы на заранее известную сумму денег
						</div>
					</div>
				</div>

				<div class="slide" data-num="3">
					<div class="image-wrapper half">
						<img src="/illustrations/2.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Делать что-то интересное для себя &ndash; это <strong>отдых и развитие</strong>
						</div>
						<div class="secondary-text">
							Вы тратите заработанные деньги на восстановление сил и новые впечатления
						</div>
					</div>
				</div>

				<div class="slide" data-num="4">
					<div class="image-wrapper half">
						<img src="/illustrations/3.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Делать что-то для других, не ожидая награды &ndash; <strong>что это?</strong>
						</div>
						<div class="secondary-text">
							Не работа и не отдых, а новое, интересное и быстро растущее явление в нашей жизни
						</div>
					</div>
				</div>

				<div class="slide" data-num="5">
					<div class="image-wrapper half">
						<img src="/illustrations/4.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Когда вы делаете что-то для других не за деньги, <strong>люди вам благодарны</strong>
						</div>
						<div class="secondary-text">
							Лайки, спасибо, аплодисменты, плюсы и большие пальцы вверх &ndash; это проявления благодарности
						</div>
					</div>
				</div>

				<div class="slide" data-num="6">
					<div class="image-wrapper half">
						<img src="/illustrations/5.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Сумма благодарностей от многих людей &ndash; <strong>ваш социальный капитал</strong>
						</div>
						<div class="secondary-text">
							Чем больше людей вам благодарны, тем больше ваш социальный капитал
						</div>
					</div>
				</div>

				<div class="slide" data-num="7">
					<div class="image-wrapper half">
						<img src="/illustrations/6.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Когда другие вам благодарны, они готовы что-то <strong>сделать для вас</strong>
						</div>
						<div class="secondary-text">
							Люди отвечают на ваши вопросы, делятся информацией, помогают решать проблемы
						</div>
					</div>
				</div>

				<div class="slide" data-num="8">
					<div class="image-wrapper half">
						<img src="/illustrations/7.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Чем выше ваш социальный капитал, <strong>тем охотнее люди помогают вам</strong>
						</div>
						<div class="secondary-text">
							Если вы приносите много пользы другим, они рады принести больше пользы вам
						</div>
					</div>
				</div>

				<div class="slide" data-num="9">
					<div class="image-wrapper half">
						<img src="/illustrations/8.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							ВИЗ переводит социальный капитал в <strong>цифры</strong>
						</div>
						<div class="secondary-text">
							Каждый лайк и каждое спасибо увеличивают ваш <strong>цифровой социальный капитал</strong> в ВИЗе
						</div>
					</div>
				</div>

				<div class="slide" data-num="10">
					<div class="image-wrapper half">
						<img src="/illustrations/9.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							ВИЗ хранит ваш социальный капитал <strong>в блокчейне</strong>
						</div>
						<div class="secondary-text">
							Блокчейн &ndash; безопасная система. Никто не имеет доступа к вашему социальному капиталу
						</div>
					</div>
				</div>

				<div class="slide" data-num="11">
					<div class="image-wrapper half">
						<img src="/illustrations/10.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							В ВИЗе нет «начальников», зато есть настоящая <strong>блокчейн-демократия</strong>
						</div>
						<div class="secondary-text">
							Каждый может влиять на все решения в соответствии со своим социальным капиталом
						</div>
					</div>
				</div>

				<div class="slide" data-num="12">
					<div class="image-wrapper half">
						<img src="/illustrations/11.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Когда вы благодарите других в ВИЗе, их социальный капитал <strong>повышается</strong>
						</div>
						<div class="secondary-text">
							Свободно поддерживайте всех, кто вам нравится, кто приносит вам пользу или удовольствие
						</div>
					</div>
				</div>

				<div class="slide" data-num="13">
					<div class="image-wrapper half">
						<img src="/illustrations/12.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							При этом ваш социальный капитал не снижается, вы <strong>ничего не отдаёте</strong>
						</div>
						<div class="secondary-text">
							Награды берутся из постоянной относительно небольшой эмиссии в блокчейне
						</div>
					</div>
				</div>

				<div class="slide" data-num="14">
					<div class="image-wrapper half">
						<img src="/illustrations/13.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Чем больше ваш социальный капитал, тем <strong>сильнее</strong> вы награждаете других
						</div>
						<div class="secondary-text">
							Награждайте многих людей понемногу или крупно награждайте некоторых
						</div>
					</div>
				</div>

				<div class="slide" data-num="15">
					<div class="image-wrapper half">
						<img src="/illustrations/14.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Награждая других, вы мотивируете их делать что-то <strong>полезное или приятное для вас</strong>
						</div>
						<div class="secondary-text">
							Люди охотнее отвечают на большую благодарность.<br>Влияйте на тех, кто вам нравится
						</div>
					</div>
				</div>

				<div class="slide" data-num="16">
					<div class="image-wrapper half">
						<img src="/illustrations/15.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Накопившийся социальный капитал в ВИЗе можно <strong>превратить в деньги</strong>
						</div>
						<div class="secondary-text">
							Если вы очень популярны, продавайте свободный капитал, монетизируйте свой успех
						</div>
					</div>
				</div>

				<div class="slide" data-num="17">
					<div class="image-wrapper half">
						<img src="/illustrations/16.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							Если нет желания долго наращивать социальный капитал, его <strong>можно купить</strong>
						</div>
						<div class="secondary-text">
							Социальный капитал лучше денег: он приносит пользу и при этом не уменьшается
						</div>
					</div>
				</div>

				<div class="slide" data-num="18">
					<div class="image-wrapper half">
						<img src="/illustrations/17.svg" alt="" />
					</div>
					<div class="text-wrapper half">
						<div class="primary-text">
							В ВИЗе можно строить свой бизнес <strong>без разрешений и ограничений</strong>
						</div>
						<div class="secondary-text">
							Программируйте, рекламируйте, помогайте другим использовать их социальный капитал
						</div>
					</div>
				</div>

				<div class="slide" data-num="19" data-end="true">
					<div class="text-wrapper full">
						<div class="primary-text">
							В ВИЗе много других возможностей, о которых вы узнаете, когда начнёте его использовать.<br>
							Например, <strong>прямо сейчас</strong>!<br>
							<div class="text-right"><a class="close-presentation-action" href="#steps" style="box-shadow:none;font-size:1.5em;padding-bottom:5px;border-bottom:0px dashed #fff;">&darr;&darr;&darr;&darr;&darr;</a></div>
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
					<a class="prev-action" title="Предыдущий слайд">«</a>
					<a class="next-action" title="Следующий слайд">»</a>
					<div class="bottom-line">
						<span class="slide-counter">&mdash; / &mdash;</span>
						<a class="toggle-fullscreen-action">Развернуть</a>
					</div>
				</div>
			</div>
		</div>
		';


		print '<div class="card transparent" id="steps"><h1 class="captions bold">ВИЗ шаг за шагом</h1></div>';
		print '
		<div class="card">
			<h3 class="captions left list"><span class="n1">1</span>Создайте свой первый ВИЗ-аккаунт</h3>
			<p>На <a href="https://start.viz.plus/" target="_blank">start.viz.plus</a> пройдите базовый микрокурс по основам ВИЗа и создайте аккаунт. Это займёт несколько минут и не потребует передачи ваших личных данных.</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n2">2</span>Получайте ответы на возникающие вопросы</h3>
			<p>Откройте <a href="https://about.viz.plus/" target="_blank">about.viz.plus</a> &mdash; подборку вопросов и ответов для начинающих участников ВИЗа и заглядывайте в неё, если на следующих шагах что-то окажется непонятным. На этом же подсайте вы найдёте подробную информацию о ВИЗе для разработчиков, предпринимателей и инвесторов.</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n3">3</span>Подключите ваш аккаунт к Личному кабинету</h3>
			<p>Зайдите на <a href="https://my.viz.plus/" target="_blank">my.viz.plus</a>, введите имя аккаунта и <strong>активный</strong> приватный ключ, чтобы получить доступ к операциям. Осмотритесь, походите по страницам, ознакомьтесь с функциями приложения, заполните профиль аккаунта, если хотите.</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n4">4</span>Установите браузерное расширение Vizonator</h3>
			<p>Расширение для браузеров Chrome (<a href="https://chrome.google.com/webstore/detail/vizonator/iehoehfkanaobnbldjfjfabbpaiiojnp" target="_blank">установка</a>) и Firefox (<a href="https://addons.mozilla.org/ru/firefox/addon/vizonator/" target="_blank">установка</a>) позволяет награждать и получать награды непосредственно в Twitter’е, Youtube’е, SoundCloud и на других сайтах (список будет расширяться). Установите расширение и добавьте в него ваш аккаунт и <strong>обычный</strong> приватный ключ.</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n5">5</span>Подключите ваш аккаунт к Телеграм-боту VIZ Social bot</h3>
			<p>Запустите <a href="https://t.me/viz_social_bot" target="_blank">VIZ Social bot</a> и добавьте в него ваш виз-аккаунт, введя обычный приватный ключ. Следуйте инструкциям в боте.</p>
			<p>Принимайте участие в обсуждениях в группах, будьте полезными и интересными другим участникам. Получайте награды и увеличивайте свой цифровой социальный капитал.</p>
			<p>Предложите админам чатов и каналов, в которых вы состоите, добавить VIZ Social bot, чтобы получать и раздавать награды.</p>
			<p><span class="toggle-action" data-toggle="telegram-items">▼ Проверьте список каналов и групп в Телеграме с виз-ботом и подпишитесь на те, что вам интересны</span></p>
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
			</div>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n6">6</span>Подключите ваш аккаунт к социальной сети без цензуры Readdle.Me</h3>
			<p>Перейдите на <a href="https://readdle.me/#dapp:account/" target="_blank">Readdle.Me</a>, введите имя своего аккаунта и приватный <strong>обычный</strong> ключ.</p>
			<p>Напишите первый пост, а потом расскажите своим друзьям в других социальных сетях и мессенджерах, что теперь у вас есть площадка для общения, которую невозможно заблокировать и цензурировать.</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n7">7</span>Получайте информацию о ВИЗе</h3>
			<p>Экосистема ВИЗа развивается, и активному участнику сообщества стоит следить за новостями, анонсами и обсуждениями.</p>
			<p>Выберите, какой способ доступа к новостям о ВИЗе вам удобнее, и будьте в курсе всего, что происходит в экосистеме.</p>
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
				</div>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n8">8</span>Изучите возможности покупки и продажи визов</h3>
			<p>Увеличить свой цифровой социальный капитал можно быстро и просто - купив необходимое количество визов на свободном рынке. Большой капитал увеличит ваше влияние в экосистеме, пользуйтесь этим, пока токены не подорожали.</p>
			<p>В экосистеме ВИЗа стихийно развиваются площадки, на которых покупатели и продавцы визов находят друг друга. Напомним, в ВИЗе нет администрации или главной компании, все отношения между участниками экосистемы - их личное дело, они никем не контролируются, а все сделки необратимы. Выбирайте партнёров осмотрительно и старайтесь контролировать риски.</p>
			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://coins.black/?search_from=VIZ" target="_blank">
					<img src="/images/coinsblack.png" alt="">
					<span class="name">COINS.BLACK<span class="source">coins.black</span></span>
					<span class="descr">Продажа и покупка визов за деньги и криптовалюту множеством способов в основном без регистрации и проверок. Работает через оператора, поэтому ночью и в некоторые другие моменты обмен может быть отложен на некоторое время. Самый простой способ покупки и продажи визов для неспециалистов.</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://t.me/vizplus_trade" target="_blank">
					<img src="/images/tg-vizplus_trade.png" alt="">
					<span class="name">viz+trade<span class="source">telegram</span></span>
					<span class="descr">Телеграм-группа для торговли визами, курируемая Инициативой VIZPLUS. Доска объявлений о покупке и продаже визов участниками. Предлагайте, договаривайтесь, проводите сделки под свою ответственность.</span>
					</a>
				</div>
			</div>
			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://viz.media/shop" target="_blank">
					<img src="/images/viz-media-checks.png" alt="">
					<span class="name">Магазин чеков ВИЗа<span class="source">viz.media</span></span>
					<span class="descr">Продажа визов в виде чеков за рубли, доллары, евро с использованием банковских карт, Webmoney, QIWI, счетов мобильных операторов и пр. Купленные чеки можно погасить на свой аккаунт в Личном кабинете my.viz.plus. Магазин предлагает чеки на разные суммы. Работает автоматически.</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://wallet.bitshares.org/#/market/XCHNG.VIZ_RUDEX.USDT" target="_blank">
					<img src="/images/bitshares.png" alt="">
					<span class="name">Децентрализованная криптобиржа Bitshares<span class="source">wallet.bitshares.org</span></span>
					<span class="descr">Автоматическая покупка и продажа визов в парах с USDT, BTS, BTC. Требует понимания биржевой торговли и знакомства с не самым простым интерфейсом биржи. Не рекомендуется для новичков и проведения разовых сделок.</span>
					</a>
				</div>
			</div>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n9">9</span>Погрузитесь в идеи ВИЗа и измените свою жизнь к лучшему</h3>
			<p>ВИЗ - это новый слой Интернета и новая экономика для важной части вашей жизни. Чем раньше и глубже вы проникнете в <a href="https://about.viz.plus/whitepaper/" target="_blank">идеи и философию ВИЗа</a>, тем полезнее и выгоднее для вас будет участие в его росте.</p>
		</div>
		';

		print '
		<div class="card">
			<h3 class="captions left list"><span class="n10">10</span>Примите участие в работе Инициативы VIZPLUS</h3>
			<p>Инициатива VIZPLUS - частный некоммерческий проект. Мы проектируем, заказываем, финансируем разработку и поддерживаем работу ключевых сервисов для участников ВИЗа. Мы содержим ноды блокчейна VIZ - как полную публичную, так и несколько делегатских. Также мы помогаем распространять информацию о ВИЗе, привлекаем в ВИЗ разработчиков и инвесторов.</p>

			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://start.viz.plus/" target="_blank">
					<img src="/images/start-viz-plus.png" alt="">
					<span class="name">start.VIZ+<span class="source">start.viz.plus</span></span>
					<span class="descr">Простой и безопасный способ создания вашего первого аккаунта в ВИЗе. Вам не придётся сообщать сервису какую-либо личную информацию, а ваши ключи не передаются на сервер.</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://about.viz.plus/" target="_blank">
					<img src="/images/about-viz-plus.png" alt="">
					<span class="name">about.VIZ+<span class="source">about.viz.plus</span></span>
					<span class="descr">Необходимая информация для владельцев социального капитала, разработчиков, предпринимателей и инвесторов. Теория и практика ВИЗа для тех, кто хочет знать больше.</span>
					</a>
				</div>
			</div>
			<div class="columns-view">
				<div class="column column-2 viz-promo">
					<a href="https://my.viz.plus/" target="_blank">
					<img src="/images/my-viz-plus.png" alt="">
					<span class="name">my.VIZ+<span class="source">my.viz.plus</span></span>
					<span class="descr">Ваш личный кабинет в ВИЗе. Практически все функции блокчейна в простом и понятном интерфейсе. Работает и как сайт, и как автономное веб-приложение с прямым доступом в блокчейн.</span>
					</a>
				</div>
				<div class="column column-2 viz-promo">
					<a href="https://info.viz.plus/" target="_blank">
					<img src="/images/info-viz-plus.png" alt="">
					<span class="name">info.VIZ+<span class="source">info.viz.plus</span></span>
					<span class="descr">Актуальные данные о состоянии блокчейна VIZ, параметры экономики, графики активности. История операций аккаунтов. Сведения о делегатах ВИЗа. Блок-эксплорер.</span>
					</a>
				</div>
			</div>

			<p>Если у вас есть свободные ресурсы для вложения в ВИЗ, используйте их максимально эффективно: участвуйте в наших раундах финансирования работ в рамках Инициативы VIZPLUS!</p>

			<p>Мы продаём заинтересованным инвесторам токены viz лотами по 100 USDT по низким ценам (можно купить несколько лотов). Все собранные средства направляются на создание и развитие новых сервисов. После выполнения очередного этапа работ и передачи его сообществу в свободный доступ, мы запрашиваем  оплату из Фонда ДАО. Полученные из Фонда токены viz снова предлагаются инвесторам. Для уточнения деталей и покупки viz свяжитесь с нами.</p>

			<p>Если вы занимаетесь разработкой программного обеспечения, веб-дизайном, переводами, ботами для соцсетей и мессенджеров, интерфейсами и т.п. и заинтересованы в развитии экосистемы ВИЗ, мы готовы обсудить с вами варианты сотрудничества.</p>

			<p>Если вы представляете крупные сообщества и хотите подключиться к экосистеме социального капитала раньше конкурентов, обратитесь к нам за консультациями и технической поддержкой. Мы предоставим готовые решения или разработаем их специально для вас, а также делегируем большой объём социального капитала для развития вашего сообщества.</p>

			<p><strong>Контакты</strong><br>
			<a href="mailto:vizplus@protonmail.com">vizplus@protonmail.com</a><br>
			Телеграм: <a href="https://t.me/ae_viz_plus" target="_blank">для личной переписки</a>, <a href="https://t.me/vizplus" target="_blank">публичная группа</a>
			</p>
		</div>
		';
	print '
	</div>
</div>';
$content=ob_get_contents();
ob_end_clean();