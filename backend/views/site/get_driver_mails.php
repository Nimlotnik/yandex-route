<?
	$this->title = 'Заявка на подключение #'.$driver->id;
?>
<div class="row">
	<div class="col-md-12">
		<h1><?=$this->title?></h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<ul>
			<li><strong>Дата заявки: </strong> <? $dt = new \DateTime($driver->date_add); echo $dt->format('d.m.Y H:i'); ?></li>
			<li><strong>Фамилия: </strong> <?=$driver->family?></li>
			<li><strong>Имя: </strong> <?=$driver->name?></li>
			<li><strong>Отчество: </strong> <?=$driver->last_name?></li>
			<li><strong>Телефон: </strong> <?=$driver->phone?></li>
			<li><strong>Агрегатор: </strong> <?=$driver->type?></li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h2>Данные водительских прав</h2>
		<ul>
			<li><strong>Серия: </strong> <?=$driver->vu_seria?></li>
			<li><strong>Номер: </strong> <?=$driver->vu_number?></li>
			<li><strong>Дата выдачи: </strong> <?=$driver->vu_date_start?></li>
			<li><strong>Дата окончания: </strong> <?=$driver->vu_date_stop?></li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h2>Данные СТС</h2>
		<ul>
			<li><strong>Марка: </strong> <?=$driver->sts_marka?></li>
			<li><strong>Модель: </strong> <?=$driver->sts_model?></li>
			<li><strong>Год выпуска: </strong> <?=$driver->sts_year?></li>
			<li><strong>Цвет: </strong> <?=$driver->sts_color?></li>
			<li><strong>Госномер: </strong> <?=$driver->sts_gosnumber?></li>
		</ul>
	</div>
</div>