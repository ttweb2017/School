<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

<div class="container topAndBottomMargin">
    <!--Address row-->
    <div class="row" style="margin-top: 4%;">
        <div class="col-md-3 text-center">
            <h4 class="titleColor"><?= Yii::t('app', 'OUR ADDRESS') ?></h4><br>
            <p class="homePageText"><?= Yii::t('app', 'address') ?></p>
        </div>
        <div class="col-md-3 text-center">
            <h4 class="titleColor"><?= Yii::t('app', 'OUR PHONE') ?></h4><br>
            <a href="tel:+99312227438">+99312227438</a><br>
            <a href="tel:+99312227430">+99312227430</a><br>
            <a href="tel:+99312227411">+99312227411</a><br>
        </div>
        <div class="col-md-3 text-center">
            <h4 class="titleColor"><?= Yii::t('app', 'OUR EMAIL') ?></h4>
            <a href="mailto:telekecilermekdebi77@gmail.com" target="_top">telekecilermekdebi77@gmail.com</a>
        </div>
        <div class="col-md-3 text-center">
            <h4 class="titleColor"><?= Yii::t('app', 'LINE ID') ?></h4>
            <a >@lyq6836q</a>
        </div>
    </div>


    <div class="row marginTop3">
        <div class="col-md-12">
            <center>
                <h4 class="titleColor"><?= Yii::t('app', 'MAP') ?></h4>
                <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
            </center>
        </div>
                <div class="col-md-12" style="margin-top: 5%;">
            <img class="img-responsive" src="img/wkolaMap.png" alt="photoMap" style="width: 100%;">
        </div>
    </div>
</div>

</div>