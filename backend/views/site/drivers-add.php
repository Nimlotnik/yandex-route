<?php 
	$this->title = 'Добавление нового водителя';
?>

<div class="row">
	<div class="col-md-12">
		<h1><?=$this->title;?></h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="post" action="">
			<div class="col-md-6">
				<div class="form-group">
			      <label for="position" class="col-lg-2 control-label">Позывной</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="position" name="position">
			      </div>
			    </div>
				<div class="form-group">
			      <label for="name" class="col-lg-2 control-label">ФИО</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="name" name="name">
			      </div>
			    </div>
				<div class="form-group">
			      <label for="vin" class="col-lg-2 control-label">VIN</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="vin" name="vin">
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-lg-12">
			    	<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
			    		<button type="submit" class="btn btn-primary pull-right">Добавить Водителя</button>
			    	</div>
			    </div>
		    </div>
		</form>
	</div>
</div>