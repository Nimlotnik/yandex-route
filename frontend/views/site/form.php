<?
	use yii\helpers\Html;
	$this->title = 'Заявка на подключение к яндекс такси';
	$this->registerMetaTag(['name' => 'description', 'content' => 'Официальный партнер Яндекс Такси в Волгограде. Форма онлайн подключения. При внесении данных, следуйте подсказкам. В течении рабочего дня мы с Вами свяжемся. Устраиваясь работать в качестве водителя на своем или арендованном автомобиле внимательно изучите правила и условия Сервиса. Перед выходом на линию, посмотрите видеоматериалы: скачать и установить таксометр, пройти фотоконтроль (ДКК), принять и выполнить первый заказ. Помойте авто снаружи и внутри, повести нейтральный освежитель воздуха, подберите спокойную музыку. Общайтесь с клиентами вежливо и корректно, подавайте машину вовремя. Соблюдайте требования и зарабатывайте достойные деньги.']);
?>
<div class="site-index">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Заявка на подключение к Яндекс Такси</h1>
				<p>Внимательно и без ошибок заполните поля. Пользуйтесь всплывающими подсказками при внесении данных водительского удостоверения (в/у) и свидетельства о регистрации транспортного средства (СТС). Укажите номер телефона в удобной для Вас форме. Прочитайте договор оферты, убедитесь что «галочка» отмечена и нажмите кнопку «Подключиться». В кратчайшие сроки Мы с Вами созвонимся!</p>
			</div>
		</div>
		<form class="form-horizontal my-form" method="post" action="/connect_go">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="well">
							<fieldset>
								<legend>Контактные данные</legend>
								<div class="col-md-12"><input type="text" class="form-control" name="family" placeholder="Фамилия"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="name" placeholder="Имя"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="lastname" placeholder="Отчество"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="phone" placeholder="Телефон"></div>
							</fieldset>
					</div>
				</div>
				<div class="col-md-6 hidden-xs vu-photo-block2">
					
				</div> 
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="well">
							<fieldset>
								<legend>Водительское удостоверение</legend>
								<div class="col-md-12"><input type="text" class="form-control" name="v-seria" placeholder="Серия в/у"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="v-number" placeholder="Номер в/у"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="v-date" placeholder="Дата выдачи в/у"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="v-date-end" placeholder="Действительно до"></div>
							</fieldset>
					</div>
				</div>
				<div class="col-md-6 hidden-xs vu-photo-block">
					
				</div> 
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="well">
							<fieldset>
								<legend>Данные вашего автомобиля</legend>
								<div class="col-md-12"><input type="text" class="form-control" name="a-marka" placeholder="Марка (например Renault, ВАЗ)"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="a-model" placeholder="Модель (например Logan, Priora)"></div>
								<div class="col-md-12"><input type="text" class="form-control" name="a-year" placeholder="Год выпуска"></div>
								<div class="col-md-12">
									<select class="form-control" name="a-color">
										<option value="">Выберите цвет...</option>
										<option value="Бежевый">Бежевый</option>
										<option value="Белый">Белый</option>
										<option value="Голубой">Голубой</option>
										<option value="Желтый">Желтый</option>
										<option value="Зеленый">Зеленый</option>
										<option value="Коричневый">Коричневый</option>
										<option value="Красный">Красный</option>
										<option value="Оранжевый">Оранжевый</option>
										<option value="Розовый">Розовый</option>
										<option value="Серый">Серый</option>
										<option value="Синий">Синий</option>
										<option value="Фиолетовый">Фиолетовый</option>
										<option value="Черный">Черный</option>
									</select>
									
								</div>
								<div class="col-md-12"><input type="text" class="form-control" name="a-number" placeholder="Госномер (например В777ЕА134)"></div>
								<div class="col-md-12 text-right ofereta">
									<p><input type="checkbox" name="dog" value="1" id="dogovor_check" checked>Отправляя заявку, Вы соглашаетесь с условиями <a href="/doc/ofereta.pdf" target="_blank">публичной оферты</a> и <a href="/doc/agent.pdf" target="_blank">агентским договором</a></p>
								</div>
								<? echo Html :: hiddenInput(\Yii :: $app->getRequest()->csrfParam, \Yii :: $app->getRequest()->getCsrfToken(), []); ?>
								<input type="hidden" name="type" value="yandex">
								<div class="col-md-12 text-right"><a class="btn btn-success" id="go-form" href="javascript:void(null)">Подключиться</a></div>
								<div class="col-md-12 ">
									<p class="error">Заполните все поля!</p>
									<p class="error-check">Вы не согласились с условиями офереты и агентским договором!</p>
								</div>
							</fieldset>
					</div>
				</div>
				<div class="col-md-6 hidden-xs sts-photo-block">
					
				</div> 
			</div>
		</form>
	</div>
</div>