<?php 
	$this->title = 'Список авто под аренду';
?>

<div class="row">
	<div class="col-md-12">
		<h1><?=$this->title?></h1>
	</div>
</div>
<!-- start filter -->
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="get" action="">
			<div class="form-group">
		      <label for="select" class="col-lg-2 control-label">Статус:</label>
		      <div class="col-lg-2">
		        <select name="sv" class="form-control" id="select">
		          <option value="">Все</option>
		          <option <?=isset($_GET['sv'])&&$_GET['sv']==='0'?'selected':''?> value="0">Свободная</option>
		          <option <?=isset($_GET['sv'])&&$_GET['sv']==='1'?'selected':''?> value="1">В аренде</option>
		        </select>
		      </div>
		      <div class="col-lg-2">
		      	<input type="submit" class="btn btn-info" value="Отфильтровать">
		      </div>
		    </div>
		</form>
	</div>
</div>
<!-- end filter -->

<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-hover ">
			<tr>
				<th>id</th>
				<th>Фото</th>
				<th>Гос номер</th>
				<th>Марка</th>
				<th>Модель</th>
				<th>Год выпуска</th>
				<th>КПП</th>
				<th>Топливо</th>
				<th>Телефон</th>
				<th>Цена</th>
				<th>В аренде?</th>
				<th>Под выкуп?</th>
				<th>Действия</th>
			</tr>
			<? foreach($auto_arenda as $auto){ ?>
				<tr>
					<td><?=$auto['id']?></td>
					<?php $photo = explode(', ',$auto['photo']); ?>
					<td><img src="/images/<?=$photo[0]?>" width="150" height="150"></td>
					<td><?=$auto['gos_number']?></td>
					<td><?=$auto['marka']?></td>
					<td><?=$auto['model']?></td>
					<td><?=$auto['year']?></td>
					<?php 
						foreach($cpp as $item){
							if($auto['type_kpp'] == $item['id']){
								$type_cpp = $item['name'];
							}
						}
						foreach($gbo as $item){
							if($auto['type_gbo'] == $item['id']){
								$type_gbo = $item['name'];
							}
						}
					?>
					<td><?=$type_cpp?></td>
					<td><?=$type_gbo?></td>
					<td><?=$auto['phone']?></td>
					<td><?=$auto['price']?></td>
					<? if($auto['maska_svobody'] == 1){ ?>
						<td><span class="glyphicon glyphicon-ok" style="color:green;"></span></td>		
					<? }else{ ?>
						<td><span class="glyphicon glyphicon glyphicon-remove" style="color:red;"></span></td>
					<? } ?>
					<? if($auto['maska_vykyp'] == 1){ ?>
						<td><span class="glyphicon glyphicon-ok" style="color:green;"></span></td>		
					<? }else{ ?>
						<td><span class="glyphicon glyphicon glyphicon-remove" style="color:red;"></span></td>
					<? } ?>
					<td><a class="btn btn-info" href="/admin/arenda-add?auto=<?=$auto['id']?>">Изменить</a></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>