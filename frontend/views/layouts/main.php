<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="c3dac5d625f7d3d7" />
    <meta name="google-site-verification" content="WA5cpF4wkM2jZ30VkoKQcFy5m67lpObiSF9wn64XZzc" />
    <link rel="shortcut icon" type="image/png" href="/favicon.png" sizes="32x32">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt'=>'Таксопарк Роут34']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top main-nav-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Подключиться к яндекс такси', 'url' => ['/site/connect']],
    	['label' => 'Аренда авто', 'url' => ['/site/arenda']],
        //['label' => 'Шпаргалка', 'url' => ['/site/posts']],
        //['label' => 'FAQ', 'url' => ['/site/faq']],
       // ['label' => 'Новости', 'url' => ['/site/news']],
        //['label' => 'Заказать яндекс такси', 'url' => ['/site/order']],
       /* ['label' => 'Инструкции', 'url' => ['/site/about']],*/
    	['label' => 'Запчасти', 'url' => ['/site/spares']],
        ['label' => 'Форум', 'url' => 'https://yandex.route34.ru/forum/'],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
    ];
    
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-left social-icons'],
		'items' =>[
			['label' => Html::img('@web/images/vk.png', ['alt'=>'Группа Яндекс такси']),'url' => '//vk.com/taxoparkrout', 'linkOptions'=>['target'=>'_blank']],
			//['label' => Html::img('@web/images/instragram.png', ['alt'=>'Фотосборник таксопрака Яндекс Такси']),'url' => '//www.instagram.com/yandex.taxi_volgograd/', 'linkOptions'=>['target'=>'_blank']],
			//['label' => Html::img('@web/images/youtube.png', ['alt'=>'Официальный канал таксопарка Route34']),'url' => '//www.youtube.com/channel/UCYzsYZF6cO43eGh9VobQqNg', 'linkOptions'=>['target'=>'_blank']],
			//['label' => Html::img('@web/images/google.png', ['alt'=>'Профиль компании Route34']),'url' => '//plus.google.com/u/0/101791292569354007302', 'linkOptions'=>['target'=>'_blank']],
		],
		'encodeLabels' => false,
	]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    
        <?= $content ?>
    
</div>

<footer class="footer">
	<div id="map"></div>
    <div class="container">
    	<div class="row">
	        <p class="pull-left">&copy; Route34 <?= date('Y') ?></p>
	        <p class="pull-right">Разработано компанией INTERDIGO</p>
        </div>
        <div class="row">
        	<div class="pull-left" style="margin:10px 0 30px;">
        		<a href="https://webmaster.yandex.ru/sqi?host=yandex.route34.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?yandex.route34.ru&theme=light&lang=ru"/></a>
        	</div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
<script>
	ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [48.72547984431388,44.49992209937325],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        });

    myMap.geoObjects
        .add(new ymaps.Placemark([48.72547984431388,44.49992209937325], {
            balloonContent: 'пр. Жукова 31'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#735184'
        }));
    myMap.behaviors.disable('scrollZoom');
}


</script>
<!-- Yandex.Metrika counter -->
<script>
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48366179 = new Ya.Metrika({
                    id:48366179,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48366179" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120057885-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120057885-1');
</script>
<script type="text/javascript">
        var KUPI_COUNTER_ID = 587621,
            sc = document.getElementsByTagName("script")[0],
            script = document.createElement("script"),
            date = new Date();
        script.type = "text/javascript";
        script.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//counter.kupiprodai.ru/js/counter.js?"+date.getFullYear()+date.getMonth()+date.getDate();
        sc.parentNode.insertBefore(script, sc);
</script>
</body>
</html>
<?php $this->endPage() ?>
