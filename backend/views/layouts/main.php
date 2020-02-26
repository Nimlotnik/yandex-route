<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/admin/favicon.png" sizes="32x32">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
	
    $logout = [
    	['label'=>'Менеджер пользователей', 'url'=>['user/index']],
    	['label'=>'Группы', 'url'=>['site/groups']]
    ];
    $logout[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Выйти (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
	
	$menuItems2 = [
		['label' => '<span class="glyphicon glyphicon-cog"></span>', 'items' => $logout]
	];	
	$menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Заявки на подключение', 'url' => ['/site/mails']],
		['label' => 'Аренда авто', 'items' =>[
				['label' => 'Cписок авто в аренде', 'url' => ['/site/arenda']],
				['label' => 'Добавить авто в аренду', 'url' => ['/site/arenda-add']],
		]],
		['label' => 'Водители', 'url'=>['/site/drivers']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems2,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
	<div class="wrp">
	    <div class="container">
	        <?= Alert::widget() ?>
	        <?= $content ?>
	    </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
       
    </div>
</footer>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage() ?>
