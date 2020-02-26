<?
	use yii\widgets\LinkPager;
	use yii\helpers\Url;
	$this->title = 'Новости яндекс такси в Волгограде';
	$this->registerMetaTag(['name' => 'description', 'content' => "Самые свежие новости яндекс такси в Волгограде"]);
?>
<div class="site-index">
	<div class="container">
		<div class='row'>
			<div class="col-md-12">
				<h1><?=$this->title;?></h1>
			</div>
		</div>
		<? foreach($news as $item){ ?>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12"><h2><a href="<?=Url::to(['site/new', 'id' => $item->id]);?>"><?=$item->title;?></h2></a></div>
						<div class="col-md-4 col-md-offset-8">
							<p class="pull-right">Дата публикации: <span><? $dt = new DateTime($item->create_date); echo $dt->format('d-m-Y H:i');?></span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p><?=$item->small_post?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-10">
							<a href="<?=Url::to(['site/new', 'id' => $item->id]);?>" class="btn btn-info" style="width:100%;">Подробнее..</a>
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