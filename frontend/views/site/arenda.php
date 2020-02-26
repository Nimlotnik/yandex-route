<?php 
	$this->title="Аренда авто под такси в Волгограде";
	$this->registerMetaTag(['name' => 'description', 'content' => 'Аренда авто для работы в такси, с выкупом или без такового. Залог договорной, возможен накопительный (без предоплаты). Прямые договора с частными собственниками автомобилей. Условия- индивидуальные, обговариваются с арендодателем.']);
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
				<p>На сегодняшний день, с учетом установленных тарифов в сфере такси, оптимальным вариантом для аренды, является автомобиль с установленным ГБО- метан. Один километр езды в городском режиме обходиться водителю в 1 руб. 50 коп..</p>
				<p>Перед тем как подписать договор аренды, внимательно изучите условия и требования к арендатору! Прокатитесь, убедившись в исправности оборудования. Сверьте уже имеющиеся повреждения с приложением к договору (схема). Проверьте страховку, действительна ли она и находится в реестре.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 filter col-xs-12">
				<form class="form-horizontal" method="get" action="">
					<div class="form-group">
						<label for="marka" class="col-md-12 control-label">Марка авто:</label>
						<div class="col-md-12">
							<select class="form-control" id="marka" name="marka">
									<option value="">Любая</option>
									<? foreach($auto_filter as $item){?>
									<option <?=!empty($_GET['marka'])&&$_GET['marka']==$item['id_car_mark']?'selected':''?>  value="<?=$item['id_car_mark']?>"><?=$item['name']?></option>
									<? } ?>
							</select>     
						</div>
						<label for="model" class="col-md-12 control-label">Модель авто:</label>
						<div class="col-md-12">
							<select class="form-control" <?=!empty($_GET)?'':'disabled'?> id="model" name="model">
									<option value="">Любая</option>
									<?php if(!empty($modelss)){
										foreach($modelss as $model){ ?>
											<option <?=$model['id_car_model']==$_GET['model']?'selected':''?> value="<?=$model['id_car_model']?>"><?=$model['name']?></option>		
										<?}
										
									}
										
									?>
							</select>     
						</div>
					
						<label for="gbo" class="col-md-12 control-label">Тип топлива:</label>
						<div class="col-md-12">
							<select class="form-control" id="gbo" name="type_gbo">
									<option value="">Любой</option>
									<? foreach($gbo as $item){?>
									<option <?=!empty($_GET['type_gbo'])&&$_GET['type_gbo']==$item['id']?'selected':''?>  value="<?=$item['id']?>"><?=$item['name']?></option>
									<? } ?>
							</select>     
						</div>
						<div class="col-md-12" style="margin-top:15px;">
							<input class="btn btn-info btn-block" type="submit" value="Отфильтровать">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-9 col-xs-12">
				<? 
			
				foreach($auto as $item){
					
					
					
					$photo = explode(', ', $item['photo']);
					
					foreach($auto_filter as $marka){
						if($marka['id_car_mark'] == $item['marka']){
							$mark = $marka['name'];
						}
					}
					foreach($models as $mod){
						if($mod->id_car_model==$item['model']){
							$model = $mod->name;
						}
					}
					if($item['maska_svobody'] == 1){
						$maska = '/images/sale.png';
						$alt = 'В аренде';;
					}else{
						$maska = '/images/forsale.png';
						$alt = 'Свободна';
					}
					
					
					
					
					?>
					
					<div class="col-md-4 col-xs-12 auto">
						<div class="row">
							<a href="/auto?id=<?=$item['id']?>"><div class="col-md-12 img" style="background:url('images/<?=$photo[0]?>') no-repeat center center; background-size:contain;">
								<img src="<?=$maska?>" alt="<?=$alt?>">
							</div></a>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="/auto?id=<?=$item['id']?>"><p class="text-center"><?=$mark?> <?=$model?> <?=$item['year']?> г.в.</p></a>
							</div>
							<div class="col-md-12">
								<p class="text-center text-danger"><?=$item['price']?> руб/сутки</p>
							</div>
						</div>
					</div>
				<?
				} ?>
			</div>
	</div>
		
			
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