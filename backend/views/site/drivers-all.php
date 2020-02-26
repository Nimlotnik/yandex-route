<?php 
	use yii\widgets\LinkPager;
	use yii\helpers\Url;
	$this->title = 'Водители таксопарка';
?>

<div class="row">
	<div class="col-md-12">
		<h1><?=$this->title?></h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="<?php echo Url::to(['site/drivers-add']);?>" class="btn btn-success pull-right">Добавить нового водителя</a>
	</div>
</div>
<div class="row" style="margin-top:30px;">
	<div class="col-md-12">
		<table class="table table-striped table-hover">
			<tr>
				<th>Позывной</th>
				<th>ФИО</th>
				<th>VIN</th>
			</tr>
			<?php 
				foreach($drivers as $driver){ ?>
				<tr>
					<td><?=$driver->position?></td>
					<td><?=$driver->name?></td>
					<td><?=$driver->vin?></td>
				</tr>		
			<?php 
				}
			?>
		</table>
		<?php 
		echo LinkPager::widget([
		    'pagination' => $pages,
		]);
		?>
	</div>
</div>