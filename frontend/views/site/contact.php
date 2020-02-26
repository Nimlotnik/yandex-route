<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->registerMetaTag(['name' => 'description', 'content' => 'Контакты для связи с таксопарком Роут 34.']);
?>
<div class="site-index">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?= Html::encode($this->title) ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li>ИП Моторина Ксения Викторовна</li>
					<li><strong>ИНН:</strong> 344309163844</li>
					<li><strong>ОГРНИП:</strong> 318344300006526</li>
					<li><strong>Банк:</strong> Волгоградское отделение №8621 Сбербанка России ПАО</li>
					<li><strong>Р/с:</strong> 40802810711000011629</li>
					<li><strong>К/с:</strong> 30101810100000000647</li>
					<li><strong>БИК:</strong> 041806647</li>
					<li><strong>Фактический адрес:</strong> г.Волгоград, проспект имени Жукова 31, 3 этаж, офис 303</li>
					<li><strong>Тел.:</strong> +7 961 664-80-90</li>
					<li><strong>Email:</strong> info@route34.ru</li>
				</ul>
			</div>
		</div>
	</div>
    


</div>
