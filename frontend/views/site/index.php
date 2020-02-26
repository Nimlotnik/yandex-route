<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Работа яндекс такси Волгоград';
$this->registerMetaTag(['name' => 'description', 'content' => 'Устроиться в Яндекс Такси в Волгограде, зарегистрироваться и начать работать на своем автомобиле, без машины или на авто компании. Огромное количество заказов и свободный график. Щедрая бонусная система. Для подключения заполните онлайн форму. Таксопарк "Роут 34" является официальным партнером Сервиса. Обучаем водителей работе с приложением "таксометр", оказываем информационную поддержку и предоставляем скидочную мотивацию на обслуживание личного а/м. Отслеживаем не поступившую оплату за поездки и своевременно отправляем заявки на компенсацию. Периодичность фотоконтроля составляет десять дней. Научим зарабатывать больше.']);
?>
<div class="site-index">
		<div class="header-bg hidden-xs">
				
		</div>
		<div class="order_taxi">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12 text-center">
						<a href="/connect" class="btn-order"><img alt="" src="/images/button_order_driver.png"></a>
					</div>
					<div class="col-md-6 col-xs-12 text-center">
						<a href="/post/17" class="btn-order"><img alt="" src="/images/button_order_taxi.png"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="service">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<h2 style="margin:30px 0">Как подключиться к Яндекс Такси</h2>
					</div>
				</div>
				<div class="row">
					<a href="/connect" target="_blank">
						<div class="col-md-6 col-lg-4 col-xs-12 service-item">
							<img alt="" src="/images/1.png">
							<p>Заполнить заявку</p>
						</div>
					</a>
					<a href="/post/4" target="_blank">
						<div class="col-md-6 col-lg-4 col-xs-12 service-item">
							<img alt="" src="/images/3.png">
							<p>Скачать таксометр</p>
						</div>
					</a>
					<a href="/post/3" target="_blank">
						<div class="col-md-6 col-lg-4 col-xs-12 service-item">
							<img alt="" src="/images/2.png">
							<p>Пройти фотоконтроль</p>
						</div>
					</a>
					<a href="/post/13" target="_blank">
						<div class="col-md-6 col-lg-4 col-xs-12 service-item">
							<img alt="" src="/images/4.png">
							<p>Принять первый заказ</p>
						</div>
					</a>
					<div class="col-md-6 col-lg-4 col-xs-12 service-item">
						<img alt="" src="/images/5.png">
						<p>Вывод денежных средств производим по Вашему требованию</p>
					</div>
					<div class="col-md-6 col-lg-4 col-xs-12 service-item">
						<img alt="" src="/images/6.png">
						<p>Мы всегда на связи по телефону или в Viber чате.</p>
					</div>
				</div>
				
			</div>	
		</div>
		<div class="tariff">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a name="tarif"></a>
						<h2>Тарифы</h2>
						<p>"Эконом" - по городу Волгоград без учета коэффициента</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered table-tariff">
							<tr>
								<th class="info" rowspan="5" style="max-width:150px;">Гарант. <br>сумма <br>заказа</th>
								<td><p>Пн-Пт</p><p>с 01:00 <br>до 06:00</p></td>
								<td colspan="2" style="text-align:center;">90 р.</td>
							</tr>
							<tr>
								<td><p>Пн-Пт</p><p>с 07:00 <br>до 09:00</p><p>с 17:00 до 19:00</p></td>
								<td colspan="2" style="text-align:center;">150 р.</td>
							</tr>
							<tr>
								<td><p>Пн-Пт</p><p>с 00:00 <br>до 01:00</p><p>с 06:00 до 07:00</p></td>
								<td colspan="2" style="text-align:center;">110 р.</td>
							</tr>
							<tr>
								<td><p>Пн-Чт</p><p>с 09:00 <br>до 17:00</p><p>с 19:00 до 00:00</p></td>
								<td colspan="2" style="text-align:center;">110 р.</td>
							</tr>
							<tr>
								<td><p>с Пт 09:00</p><p>по Вс 00:00</p></td>
								<td colspan="2" style="text-align:center;">140 р.</td>
							</tr>
							<tr>
								<th class="info" rowspan="4" style="max-width:150px;">Стоимость<br> 1 км <br>и 1 мин <br>времени</th>
								<td class="info"></td>
								<td class="info">по <br>городу</td>
								<td class="info">За <br>пред-ми <br>города</td>
							</tr>
							<tr>
								<td>1 км</td>
								<td style="text-align:center;">10 р.</td>
								<td style="text-align:center;">8 р.</td>
							</tr>
							<tr>
								<td>1 мин платного ожидания</td>
								<td style="text-align:center;">4 р.</td>
								<td style="text-align:center;">4 р.</td>
							</tr>
							<tr>
								<td>1 мин ожидания в пути</td>
								<td style="text-align:center;">4 р.</td>
								<td style="text-align:center;">4 р.</td>
							</tr>
							<tr>
								<th class="info" rowspan="3" style="max-width:150px;">Стоимость <br>посадки</th>
								<td>не более</td>
								<td colspan="2" style="text-align:center;">69 р.</td>
							</tr>
							<tr>
								<td rowspan="2">входит в посадку</td>
								<td colspan="2" style="text-align:center;">2 мин <br>бесплатного <br>ожидания</td>
							</tr>
							<tr>
								<td colspan="2" style="text-align:center;">2 км в пути</td>
							</tr>
							
							
							<!---------------------------
							<tr>
								<th rowspan="2">Зона действия</th>
								<th colspan="4">Гарантированная сумма заказа (субсидия)</th>
								<th colspan="3">Стоимость поездки</th>
								<th colspan="3">Стоимость посадки</th>
								<th style="width: 150px;" rowspan="2">Платная отмена после 10 мин платного ожидания (зависит от суммы заказа)</th>
							</tr>
							<tr>
								<th>Будни <br>часы пик <br> <span>07<sup>00</sup> - 09<sup>00</sup></span> </th>
								<th>Будни <br>24 часа </th>
								<th>Будни <br>часы пик<br> <span>17<sup>00</sup> - 19<sup>00</sup></span> </th>
								<th>Выходные <br>24 часа</th>
								<th style="width:55px;">1 км</th>
								<th>1 мин <br>времени в пути</th>
								<th>1 мин <br>платного ожидания</th>
								<th>не более</th>
								<th colspan="2" style="width: 120px;">входит в посадку</th>
							</tr>
							<tr>
								<td>Волгоград</td>
								<td>180 р.</td>
								<td>130 р.</td>
								<td>180 р.</td>
								<td>150 р.</td>
								<td>11 р.</td>
								<td></td>
								<td>4 р.</td>
								<td>69 р.</td>
								<td>2 мин</td>
								<td>3 км</td>
								<td>~100 р.</td>
							</tr>
							<tr>
								<td>Волжский / Красноармейский р-н Волгограда</td>
								<td></td>
								<td></td>
								<td></td>
								<td>110 р.</td>
								<td>11 р.</td>
								<td></td>
								<td>4 р.</td>
								<td>69 р.</td>
								<td>2 мин</td>
								<td>3 км</td>
								<td>~100 р.</td>
							</tr>
							<tr>
								<td>Волгоградская область</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>18 р.</td>
								<td></td>
								<td>4 р.</td>
								<td>69 р.</td>
								<td>2 мин</td>
								<td>3 км</td>
								<td>~100 р.</td>
							</tr>-->
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><strong>Коэффициент</strong> - надбавка стоимости. Зарабатывайте больше, принимая  увеличенные тарифы. Они образуются в местах, где потребность вызова такси превышает количество свободных автомобилей. Обычно это происходит в «горячие» часы, массовые мероприятия, неблагоприятную погоду. В таксометре такие места подсвечены фиолетовым. Чем темнее цвет, тем выше «кэф». Для взятия направляйтесь в ближайшую выделенную зону. При принятии заказа, сумма увеличения отобразится на кнопке «принять». Пассажир заплатит эту цену, независимо от расстояния поездки.</p>
						<p><strong>Индивидуальные бонусы.</strong> Такие предложения приходят водителям совершенно разные, с автоматическим учетом анализа Сервиса. Отличаются количеством выполненных поездок с 7 утра до полуночи (ночные, на территории г.Вожского и Красноармейского района г.Волгограда не учитываются) и обещанными суммами. «Плюшки» весьма щедрые!</p>
						<h2>Много ли заказов в Яндекс Такси?</h2>
						<p>В сервисе огромное количество заказов, что позволяет минимизировать время простоя и холостого пробега при подачи. При повышенном спросе, будучи на выполнении текущего, прилетает следующий становясь в очередь. Пассажирское приложение установлено практически на большинстве устройстве пользователя. Статистика показывает ежемесячное увеличение клиентов.</p> 
					</div>
				</div>
			</div>
		</div>
		<div class="text">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="margin:30px 0">Работа в Яндекс Такси</h1>
						<p>Работа в такси зачастую привлекает своим свободным графиком, отсутствием руководителей разных уровней. Вы сами планируете рабочий день с учетом времени наиболее благоприятного для максимального заработка.</p>
						<p>Особенности внутреннего строения г. Волгограда таковы, что его смело можно назвать городом-таксистов. И при соблюдении <a href="/forum/viewtopic.php?f=14&t=16">«не хитрых правил»</a> на сегодняшний день, можно заработать достойные деньги.</p>
						<p>Если Вы решили начать зарабатывать и стоите перед выбором агрегатора, то мы советуем попробовать Яндекс Такси. Этот бренд обладает рядом неоспоримых преимуществ:</p>
						
						<div class="col-md-6 col-lg-4 col-xs-12 agr-item">
							<img alt="" src="/images/zak.png">
							<p>огромное количество заказов, с минимальной стоимостью в час-пик 150 руб.</p>
						</div>
						<div class="col-md-6 col-lg-4 col-xs-12 agr-item">
							<img alt="" src="/images/koef.png">
							<p>повышающийся коэффициент при большом спросе, который может значительно увеличить сумму поездки</p>
						</div>
						<div class="col-md-6 col-lg-4 col-xs-12 agr-item">
							<img alt="" src="/images/bonus.png">
							<p>щедрая бонусная система</p>
						</div>
						<p>Стать водителем Яндекс Такси в Волгограде, очень просто! Вам достаточно оставить онлайн заявку на нашем сайте, группе Вконтакте или отправить данные  перевозчика и транспортного средства по Viber, Whatsapp. После подключения, мы незамедлительно свяжемся с Вами и расскажем о последующих действиях. </p>
						<p>Мы являемся официальными партнерами Сервиса. Для активных работников подключенных через таксопарк «Роут», предоставляются скидки на шиномонтаж, услуги сертифицированного автосервиса, автомойку, закупку запчастей, аксесуаров и расходников.</p>
						<p>Периодичность прохождения фотоконтроля (ДКК)  в «Route» составляет 10 дней. Выплаты производятся без комиссий, по сравнению с другими парками.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-xs-12">
						<a href="<?=Url::to(['site/connect']);?>" class="btn btn-danger main-btn">Подключиться к Яндекс такси</a>
					</div>
				</div>
			</div>
		</div>
</div>
