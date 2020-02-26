<?php 
	if(!empty($_GET['auto'])){
		$this->title = "Изменить авто";
	}else{
		$this->title = "Добавить авто";
	}
	
?>


<div class="row">
	<div class="col-md-12">
		<h1><?=$this->title?></h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">
			<fieldset>
				<div class="col-md-6">
					<div class="form-group">
				      <label for="marka" class="col-lg-4 control-label">Марка</label>
				      <div class="col-lg-8">
				      	<select class="form-control" id="marka" name="marka">
							<option value="">Любая</option>
							<? foreach($marka as $item){?>
							<option <?=!empty($auto)&&$auto->marka==$item['id_car_mark']?'selected':''?>  value="<?=$item['id_car_mark']?>"><?=$item['name']?></option>
							<? } ?>
						</select>   
				      </div>
				    </div>
			    </div>
			    <div class="col-md-6">
				    <div class="form-group">
				      <label for="model" class="col-lg-4 control-label">Модель</label>
				      <div class="col-lg-8">
				       		<select class="form-control" <?=!empty($model)?'':'disabled' ?> id="model" name="model">
									<option value="">Любая</option>
									<?
										if(!empty($model)){
											foreach($model as $item){ ?>
												<option <?=$item['id_car_model']==$auto->model?'selected':''?> value="<?=$item['id_car_model']?>>"><?=$item['name']?></option>	
									<?		}
										}
									?>
							</select>     
				      </div>
				    </div>
				</div>
				<div class="col-md-6">
			    <div class="form-group">
			      <label for="year" class="col-lg-4 control-label">Год выпуска</label>
			      <div class="col-lg-8">
			      	<select class="form-control" id="year" name="year">
			      		<? for($i=date('Y'); $i>=2007; $i--){ ?>
			      		<option <?=!empty($auto)&&$auto->year==$i?'selected':''?> value="<?=$i?>"><?=$i?></option>
			      		<? } ?>
			      	</select>

			      </div>
			    </div>
			    </div>
			    <div class="col-md-6">
				    <div class="form-group">
				      <label for="gos_number" class="col-lg-4 control-label">Гос номер</label>
				      <div class="col-lg-8">
				        <input type="text" class="form-control" name="gos_number" id="gos_number" placeholder="Гос номер" value="<?=!empty($auto)?$auto->gos_number:''?>">
				      </div>
				    </div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
			      		<label for="type_kpp" class="col-lg-4 control-label">Коробка передач</label>
			      		<div class="col-lg-8">
					        <select class="form-control" name="type_kpp" id="type_kpp">
					        	<? foreach($cpp as $item){ ?>
					        		<option <?=!empty($auto)&&$auto->type_kpp == $item['id']?'selected':''?> value="<?=$item['id']?>"><?=$item['name']?></option>		
					        	<? } ?>
					        </select>
				      	</div>
				    </div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
			      		<label for="type_gbo" class="col-lg-4 control-label">Тип топлива</label>
			      		<div class="col-lg-8">
					        <select class="form-control" name="type_gbo" id="type_gbo">
					          <? foreach($gbo as $item){ ?>
					        		<option <?=!empty($auto)&&$auto->type_gbo == $item['id']?'selected':''?> value="<?=$item['id']?>"><?=$item['name']?></option>		
					        	<? } ?>
					        </select>
				      	</div>
				    </div>
			    </div>
			    <div class="col-md-6">
				    <div class="form-group">
				      <label for="phone" class="col-lg-4 control-label">Телефон</label>
				      <div class="col-lg-8">
				        <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон" value="<?=!empty($auto)?$auto->phone:''?>">
				      </div>
				    </div>
			    </div>
			    <div class="col-md-6">
				    <div class="form-group">
				      <label for="price" class="col-lg-4 control-label">Цена</label>
				      <div class="col-lg-8">
				        <input type="text" class="form-control" name="price" id="price" placeholder="Цена" value="<?=!empty($auto)?$auto->price:''?>">
				      </div>
				    </div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
				      <label class="col-lg-4 control-label">В аренде?</label>
				      <div class="col-lg-8">
				        <div class="checkbox">
				          <label>
				            <input type="checkbox" <?=!empty($auto)&&$auto->maska_svobody == 1?'checked':''?> name="maska_svobody"> да
				          </label>
				        </div>
				      </div>
				    </div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
				      <label class="col-lg-4 control-label">Под выкуп?</label>
				      <div class="col-lg-8">
				        <div class="checkbox">
				          <label>
				            <input type="checkbox" <?=!empty($auto)&&$auto->maska_vykyp == 1?'checked':''?> name="maska_vykyp"> да
				          </label>
				        </div>
				      </div>
				    </div>
			    </div>
			    <div class="form-group">
				  <label class="control-label col-lg-2">Загрузить фото</label>
				  <div class="input-group col-lg-9">
				    <input type="file" class="form-control" multiple name="files[]" style="display:none;" id="file">
				    <input type="text" class="form-control img_input">
				    <span class="input-group-btn">
				      <button class="btn btn-default" type="button" onclick="$('#file').click();">Загрузить</button>
				    </span>
				  </div>
				</div>
				<div class="form-group">
			      <label for="description" class="col-lg-2 control-label">Описание, условия</label>
			      <div class="col-lg-8">
			        <textarea class="form-control" rows="10" id="description" name="description"><?=!empty($auto)?$auto->description:''?></textarea>
			      </div>
			    </div>
			    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
			    <div class="form-group">
			    <div class="col-md-12">
			    	<input type="submit" class="btn btn-success btn-block" value="<?=$this->title?>">
			    </div>
			    </div>
			</fieldset>
		</form>
		
	</div>
</div>
<script>
$('document').ready(function(){
	$('#marka').change(function(){
		var marka_id = $(this).val();
		$.ajax({
			  url: '/get_model',
			  type: "get", 
			  data: "marka_id="+marka_id,
			  success: function(msg){
				  	var models = JSON.parse(msg);
				  	$('#model').empty().append($('<option>', { 
			  	        value: '',
			  	        text : 'Любая' 
			  	    }));
				  	models.forEach(function(entry) {
				  		$('#model').append($('<option>', { 
				  	        value: entry.id_car_model,
				  	        text : entry.name 
				  	    })).prop('disabled',false);
					  	
				  	   // console.log(entry.name);
				  	});

					//alert(msg);
			  },
	    });
	})
})
</script>