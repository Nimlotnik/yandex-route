<?
	use yii\widgets\LinkPager;
	$this->title = 'Заявки на подключение';
?>

<div class="row">
	<div class="col-md-12">
		<h1>Заявки на подключение</h1>
	</div>
</div>
<!-- <div class="row">
	<div class="col-md-12">
		<p>Здесь будет фильтр</p>
	</div>
</div>  -->
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-hover">
			<tr>
				<th>Дата заявки</th>
				<th>Фамилия Имя Отчество</th>
				<th>Телефон</th>
				<th>Действия</th>
			</tr>
			<? foreach($drivers as $driver){ ?>
				<tr>
					<td><? $dt = new \DateTime($driver->date_add); echo $dt->format('d-m-Y H:i'); ?></td>
					<td><?=$driver->family.' '.$driver->name.' '.$driver->last_name?></td>
					<td><?=$driver->phone?></td>
					<td>
						<div class="btn-group">
						  <a href="#" class="btn btn-primary">Действия</a>
						  <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
						  <ul class="dropdown-menu">
						    <li><a href="?id=<?=$driver->id;?>">Просмотреть все данные водителя</a></li>
						    <li><a href="#">Добавить водителя в таксопарк</a></li>
						    <li><a href="#">Отклонить заявку</a></li>
						    <li class="divider"></li>
						    <li><a href="#">Удалить заявку</a></li>
						  </ul>
						</div>
					</td>
				</tr>
			<? } ?>
			
		</table>
		<?php 
		echo LinkPager::widget([
		    'pagination' => $pages,
		]);
		?>
	</div>
</div>

