<?
	$this->title="Аренда авто ";
	$this->registerMetaTag(['name' => 'description', 'content' => 'Сдаем в Аренду авто '.$marka->name.' '.$model->name.' '.$auto['year'].' года выпуска для работы в такси на территории Волгограда. Цена, залог и условия договорные с собственником. Машины оборудованны ГБО метан/пропан и на бензине']);
?>

<div class="site-index">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?=$this->title?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 col-xs-12">
				<div id="gallery" style="display:none;">
					<?
						$images = explode(', ',$auto['photo']);
						foreach($images as $img){ 
							if(!empty($img)){
							?>
							<img alt="<?=$marka->name.' '.$model->name?>" src="images/<?=$img?>"
						data-image="images/<?=$img?>"
						data-description="<?=$marka->name.' '.$model->name?>">
					<?	}}
					?>
					
				</div>
			</div>
			<div class="col-md-5 col-xs-12">
				<div class="row">
					<div class="col-md-12">
						<h1><?=$marka->name.' '.$model->name.' '.$auto['year'].' г.в.'?></h1>
					</div>
					<div class="col-md-12">
						<ul style="padding-left:0; list-style-type:none;">
							<li><strong>Тип КПП:</strong> <?=$kpp->name?></li>
							<li><strong>Тип топлива:</strong> <?=$gbo->name?></li>
							<li><strong>Цена:</strong>  <?=$auto['price']?> руб./сутки</li>
							<li><strong>Статус:</strong> <?=$auto['maska_svobody']=='1'?'<span class="text-danger">Сдана в аренду</span>':'<span class="text-success">Свободна</span>'?></li>
							<li><strong>Выкуп:</strong> <?=$auto['maska_vykyp']=='1'?'<span class="text-success">Да</span>':'<span class="text-danger">Нет</span>'?></li>
							<li><strong>Телефон:</strong> <a target="_blank" href="tel:<?=$auto['phone']?>"><?=$auto['phone']?></a></li>
						</ul>
					</div>
					
				</div>
			</div>
			<div class="col-md-12">
				<p><strong>Условия:</strong></p>
				<p><?=$auto['description']?></p>
			</div>
		</div>
	</div>
</div>

<script>
var api;
$(document).ready(function(){
	api = new jQuery("#gallery").unitegallery({
		gallery_theme:"compact",
		
	}).resetZoom(); 
	//api.resetZoom();	
})

</script>

