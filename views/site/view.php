<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Register'), 'url' => ['register']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pdf-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'education',
            'education_place_name',
            'grafik',
            'heard_from_where',
            'extra_courses',
            'work_place_name',
            'work_place_type',
            'work_title',
        ],
    ]) ?>
	
	<p>
        <?= Html::a(Yii::t('app', 'Send'), ['send'], [
            'class' => 'btn btn-success',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
