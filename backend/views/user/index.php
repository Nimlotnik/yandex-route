<?php
/* @var $this yii\web\View */
	$this->title = 'Менеджер пользователей';
?>
<div class="row">
	<div class="col-md-12">
	<h1>Менеджер пользователей</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>ФИО</th>
				<th>Группа</th>
				<th>Email</th>
				<th>Настройки</th>
			</tr>
			<? foreach($user as $item){ 
				$roles = Yii::$app->authManager->getRolesByUser($item->id);?>
			
			
				<tr>
					<td><?=$item->id?></td>
					<td><?=$item->info->fio?></td>
					<td><?
						foreach($roles as $rol){
							if($rol->name == 'Administrator'){
								echo "<span class='text-danger'>";
							}else{
								echo "<span class='text-success'>";
							}
							echo $rol->description."</span>";
							
						}?></td>
					<td><?=$item->email?></td>
					<td></td>
				</tr>		
			<?}?>
		</table>
	</div>
</div>
