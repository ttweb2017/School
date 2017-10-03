<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;
use kartik\form\ActiveField;
use yii\widgets\DetailView;

$this->title = Yii::t('app', 'Test');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'About Course'), 'url' => Url::to(['/site/about-course', 'id' => 3])];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-test" style="margin-top: 5%;">
    <h1 class="text-center"><?= Yii::t('app', 'TEST TO FIND OUT YOUR LEVEL') ?></h1>

    <?php if (Yii::$app->session->hasFlash('testFormSubmitted')): ?>

        <div class="alert alert-success">
            <?= Yii::t('app', 'You can see your test result at the bottom. Thank you!') ?>
        </div>
		
		<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
			'title',
			'level',
			'total_question',
			'total_correct',
			'total_error',
            'score',
        ],
    ]) ?>

    <?php else: ?>

        <p>
			<?= Yii::t('app', 'About test rules') ?>
        </p>
		<p>
			<?= Yii::t('app', 'About test rules part 2') ?>
        </p>

        <div class="row" style="border: 0.1em solid #521900;">
            <div class="col-md-12" style="margin-top:3%;">

                <?php $form = ActiveForm::begin(['id' => 'test-form', 
												'type' => ActiveForm::TYPE_VERTICAL,
												'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]]); ?>

                   
					<div class="col-md-6">
						<div class="row">
							<?=  $form->field($model, 'question_1')->radioList($model->question_1_label); ?>
							
							<?=  $form->field($model, 'question_2')->radioList($model->question_2_label); ?>
							
							<?=  $form->field($model, 'question_3')->radioList($model->question_3_label); ?>
							
							<?=  $form->field($model, 'question_4')->radioList($model->question_4_label); ?>
							
							<?=  $form->field($model, 'question_5')->radioList($model->question_5_label); ?>
							
							<?=  $form->field($model, 'question_6')->radioList($model->question_6_label); ?>
							
							<?=  $form->field($model, 'question_7')->radioList($model->question_7_label); ?>
							
							<?=  $form->field($model, 'question_8')->radioList($model->question_8_label); ?>
							
							<?=  $form->field($model, 'question_9')->radioList($model->question_9_label); ?>
							
							<?=  $form->field($model, 'question_10')->radioList($model->question_10_label); ?>
							
							<?=  $form->field($model, 'question_11')->radioList($model->question_11_label); ?>
							
							<?=  $form->field($model, 'question_12')->radioList($model->question_12_label); ?>
							
							<?=  $form->field($model, 'question_13')->radioList($model->question_13_label); ?>
							
							<?=  $form->field($model, 'question_14')->radioList($model->question_14_label); ?>
							
							<?=  $form->field($model, 'question_15')->radioList($model->question_15_label); ?>
							
							<?=  $form->field($model, 'question_16')->radioList($model->question_16_label); ?>
							
							<?=  $form->field($model, 'question_17')->radioList($model->question_17_label); ?>
							
							<?=  $form->field($model, 'question_18')->radioList($model->question_18_label); ?>
							
							<?=  $form->field($model, 'question_19')->radioList($model->question_19_label); ?>
							
							<?=  $form->field($model, 'question_20')->radioList($model->question_20_label); ?>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
							<?=  $form->field($model, 'question_21')->radioList($model->question_21_label); ?>
							
							<?=  $form->field($model, 'question_22')->radioList($model->question_22_label); ?>
							
							<?=  $form->field($model, 'question_23')->radioList($model->question_23_label); ?>
							
							<?=  $form->field($model, 'question_24')->radioList($model->question_24_label); ?>
							
							<?=  $form->field($model, 'question_25')->radioList($model->question_25_label); ?>
							
							<?=  $form->field($model, 'question_26')->radioList($model->question_26_label); ?>
							
							<?=  $form->field($model, 'question_27')->radioList($model->question_27_label); ?>
							
							<?=  $form->field($model, 'question_28')->radioList($model->question_28_label); ?>
							
							<?=  $form->field($model, 'question_29')->radioList($model->question_29_label); ?>
							
							<?=  $form->field($model, 'question_30')->radioList($model->question_30_label); ?>
							
							<?=  $form->field($model, 'question_31')->radioList($model->question_31_label); ?>
							
							<?=  $form->field($model, 'question_32')->radioList($model->question_32_label); ?>
							
							<?=  $form->field($model, 'question_33')->radioList($model->question_33_label); ?>
							
							<?=  $form->field($model, 'question_34')->radioList($model->question_34_label); ?>
							
							<?=  $form->field($model, 'question_35')->radioList($model->question_35_label); ?>
							
							<?=  $form->field($model, 'question_36')->radioList($model->question_36_label); ?>
							
							<?=  $form->field($model, 'question_37')->radioList($model->question_37_label); ?>
							
							<?=  $form->field($model, 'question_38')->radioList($model->question_38_label); ?>
							
							<?=  $form->field($model, 'question_39')->radioList($model->question_39_label); ?>
							
							<?=  $form->field($model, 'question_40')->radioList($model->question_40_label); ?>
						</div>
					</div>
					
					<div class="col-md-12"><div class="row"><hr /></div></div>
                    <div class="form-group text-center">
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary grid-button', 'name' => 'test-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
