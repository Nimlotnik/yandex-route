<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Заказ запчастей';
$this->registerMetaTag(['name' => 'description', 'content' => '']);
?>
<div class="site-index">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?=$this->title?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li>Позывной: <?=$driver['position']?></li>
					<li>ФИО: <?=$driver['name']?></li>
					<li>VIN: <?=$driver['vin']?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
