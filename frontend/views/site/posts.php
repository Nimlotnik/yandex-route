<?
	use yii\widgets\LinkPager;
	use yii\helpers\Url;
	$this->title = 'Шпаргалка';
	$this->registerMetaTag(['name' => 'description', 'content' => "Список статей для водителей работающих в яндекс такси"]);
?>
<div class="site-index">
	<div class="container">
		<div class='row'>
			<div class="col-md-12">
				<h1><?=$this->title;?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-pills">
				  <li <?=empty($_GET['label'])?'class="active"':''?>><a href="/posts">Все <span class="badge"><?=$all_posts?></span></a></li>
				  <? foreach($labels as $label){ ?>
				  	<li <?=(!empty($_GET['label']) and $_GET['label'] == $label['id'])?'class="active"':''?>><a href="?label=<?=$label['id']?>"><?=$label['name']?> <span class="badge"><?=$label['count']?></span></a></li>	
				  <? } ?>
				  
				</ul>
			</div>
		</div>
		<? foreach($posts as $item){ ?>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12"><h2><a href="<?=Url::to(['site/post', 'id' => $item['id']]);?>"><?=$item['title'];?></h2></a></div>
						<div class="col-md-4 col-md-offset-8">
							<p class="pull-right">Дата публикации: <span><? $dt = new DateTime($item['create_date']); echo $dt->format('d.m.Y H:i');?></span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p><?=$item['small_post']?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-10">
							<a href="<?=Url::to(['site/post', 'id' => $item['id']]);?>" class="btn btn-info" style="width:100%;">Подробнее..</a>
						</div>
					</div>
				</div>
			</div>		
		<?}?>
		
		<div class="row">
			<div class="col-md-12">
				<?
					echo LinkPager::widget([
					    'pagination' => $pagination,
					]);
				?>
			</div>
		</div>
	</div>
</div>