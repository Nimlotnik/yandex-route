<?
	use yii\helpers\Url;
	$this->title = $post->title;
	$this->registerMetaTag(['name' => 'description', 'content' => $post->description]);
?>
<div class="site-index post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?=$this->title;?></h1>
			</div>
		</div>
		<div class="row">
			<?=$post->post;?>
		</div>
	</div>
</div>