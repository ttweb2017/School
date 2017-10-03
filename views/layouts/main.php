<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use app\components\languageSwitcher;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('img/logo/gerb.png', ['alt' => 'logo', 'id' => 'title_logo']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav'],
        'items' => [
            ['label' => \Yii::t('app', 'HOME'), 'url' => ['/site/index']],
            ['label' => \Yii::t('app', 'COURSES'), 'url' => ['/site/courses']],
            ['label' => \Yii::t('app', 'TEACHERS'), 'url' => ['/site/teachers']],
			['label' => \Yii::t('app', 'NEWS'), 'url' => ['/site/news']],
            ['label' => \Yii::t('app', 'CONTACTS'), 'url' => ['/site/about']],
        ],
    ]);
	echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right'],
        'items' => [
			['label' => \Yii::t('app', 'TM'), 'url' => ['/site/translate', 'id' => 'TM']],
			['label' => \Yii::t('app', 'RU'), 'url' => ['/site/translate', 'id' => 'RU']],
        ],
    ]);
    NavBar::end();
    ?>

	
	<!--Contact us -->
	<div class="contactUs-float" >
        <a class="lgscreen" href="<?= Url::to(['/site/register']) ?>" ><?= \Yii::t('app', 'CONTACT') ?></a>

        <a class="smscreen" href="<?= Url::to(['/site/register']) ?>" ><i class="fa fa-pencil" data-fa="" aria-hidden="true"></i></a>
    </div>

    <div class="container-fluid" style="margin-top: 2.6%;padding-left: 0px;padding-right: 0px;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
		
        <?= $content ?>
    </div>
</div>

<footer>
	<div class="col-md-12 footer">
		<div class="row">
        
			<div class="col-md-offset-2 col-md-6" style="margin-top: 2%;">
				<p class="footerText">
					<i class="fa fa-2x fa-map-marker"></i> <?= \Yii::t('app', 'address') ?>
				</p>

				<p class="footerText">
					<i class="fa fa-2x fa-phone"></i> +99312227438
				</p>

				<p class="footerText">
					<i class="fa fa-2x fa-envelope-o"></i> telekecilermekdebi77@gmail.com
				</p>

				<p class="footerText">
					<i class="fa fa-2x fa-id-badge"></i> @lyq6836q
				</p>
			</div>
			
			<div id="footerImg" class="col-md-4" style="margin-top: -6%;">
				<img class="img-responsive" src="img/pero.png" alt='pero'>
			</div>
			
			<div class="col-md-offset-4 col-md-4 text-center" style="margin-top: 2%;color: #00B5D9;">
				<a href="http://ttweb.org"><img src="img/logo/TTWEB.png" alt="TTWEBLOGO" style="width:15%;"></a>
				<p style="color:white;"><?= \Yii::t('app', 'TTWEB 2017') ?></p>
			</div>
			
		</div>	
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
