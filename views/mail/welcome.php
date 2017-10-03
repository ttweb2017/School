<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
?>
<div class="pdf-view">

	<center><h1><?= Yii::t('app', 'Register') ?></h1><center>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'firstname',
            'lastname',
            'fathersname',
            'address',
            'email',
            'mobile_phone',
            'work_phone',
            'home_phone',
            'age',
            'education_value',
            'education_place_name',
            'heard_from_where_value',
            'extra_courses',
            'work_place_name',
            'work_place_type_value',
            'work_title',
        ],
		'options' => ['style' => 'color: green;text-align:left;'],
    ]) ?>

</div>
