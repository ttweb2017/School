<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CourseTranslationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-translation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'language_id') ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'course_description') ?>

    <?= $form->field($model, 'course_period') ?>

    <?php // echo $form->field($model, 'course_price') ?>

    <?php // echo $form->field($model, 'course_level') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
