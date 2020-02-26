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
				<div class="panel panel-danger">
					<div class="panel-heading">
					    <h3 class="panel-title">Доступ ограничен, введите Ваш позывной в Нашем таксопарке</h3>
					</div>
					<div class="panel-body">
					   <form class="form-horizontal" action="" method="post">
					   		<div class="form-group">
					   			<div class="col-lg-10">
							        <input type="text" class="form-control" id="pos" name="pos" placeholder="Ваш позывной">
							    </div>
							    <div class="col-lg-2">
							    	<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
							    	<button type="submit" class="btn btn-primary">Отправить</button>
							    </div>
					   		</div>
					   </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>