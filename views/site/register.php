<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\form\ActiveField;
use yii\captcha\Captcha;

$this->title = Yii::t('app', 'Register');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('registerFormSubmitted')): ?>

        <div class="alert alert-success">
            <?= Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.') ?>
        </div>

    <?php else: ?>

        <p class="text-center">
			<?= Yii::t('app', 'If you would like to register to our classes, please fill out the following form. Thank you!') ?>
        </p>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">

                <?php $form = ActiveForm::begin(['id' => 'register-form', 
												'type' => ActiveForm::TYPE_VERTICAL,
												'formConfig' => ['labelSpan' => 4, 'deviceSize' => ActiveForm::SIZE_SMALL]]); ?>

                    <?= $form->field($model, 'firstname', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'user',
											'success' => 'user-plus',
											'error' => 'user-times',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter first name...')]);
					?>
					
					<?= $form->field($model, 'lastname', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'user',
											'success' => 'user-plus',
											'error' => 'user-times',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter first name...')]);
					?>
					
					<?= $form->field($model, 'fathersname', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'user',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter first name...')]);
					?>
					
					<?= $form->field($model, 'address', [
											'hintType' => ActiveField::HINT_SPECIAL,
											'hintSettings' => ['placement' => 'right', 'onLabelClick' => true, 'onLabelHover' => false]
										])->textArea([
											'id' => 'address-input', 
											'placeholder' => 'Enter address...', 
											'rows' => 4
										])->hint(Yii::t('app', 'Enter address in 4 lines. First 2 lines must contain the street details and next 2 lines the city, zip, and country detail.'));
					?>
					
                    <?= $form->field($model, 'email', [
										'feedbackIcon' => ['default' => 'envelope', 
														   'success' => 'ok',
                                                           'error' => 'exclamation-sign',
                                                           'defaultOptions' => ['class'=>'text-primary']]
									])->textInput(['placeholder' => Yii::t('app', 'Enter email...')]);
					?>
					
					<?= $form->field($model, 'mobile_phone', [
										'feedbackIcon' => ['prefix' => 'fa fa-',
															'default' => 'mobile-phone',
															'success' => 'check-circle',
															'error' => 'exclamation-circle',]
									])->widget('yii\widgets\MaskedInput', [
										'mask' => '999-99-99-99'
									]);
					?>
					
					<?= $form->field($model, 'home_phone', [
										'feedbackIcon' => ['prefix' => 'fa fa-',
															'default' => 'phone',
															'success' => 'check-circle',
															'error' => 'exclamation-circle',]
									])->widget('yii\widgets\MaskedInput', [
										'mask' => '999-99-99-99'
									]);
					?>
					
					<?= $form->field($model, 'work_phone', [
										'feedbackIcon' => ['prefix' => 'fa fa-',
															'default' => 'phone',
															'success' => 'check-circle',
															'error' => 'exclamation-circle',]
									])->widget('yii\widgets\MaskedInput', [
										'mask' => '999-99-99-99'
									]);
					?>
					
					<?= $form->field($model, 'age')->input('number', ['min'=>6, 'max'=>150, 'placeholder' => Yii::t('app', 'Enter age...')]) ?>
					
					<?php if(Yii::$app->session->get('langId') === 1): ?>
						<?=  $form->field($model, 'education')->radioList($model->radio_list_ru, ['inline' => true]); ?>
					<?php else: ?>
						<?=  $form->field($model, 'education')->radioList($model->radio_list_tk, ['inline' => true]); ?>
					<?php endif; ?>
					
					<?= $form->field($model, 'education_place_name', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'university',
											'success' => 'university',
											'error' => 'warning',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter school name...')]);
					?>
					
					<?php if(Yii::$app->session->get('langId') === 1): ?>
						<?=  $form->field($model, 'heard_from_where')->radioList($model->radio_heard_ru, ['inline' => true]); ?>
					<?php else: ?>
						<?=  $form->field($model, 'heard_from_where')->radioList($model->radio_heard_tk, ['inline' => true]); ?>
					<?php endif; ?>
					
					<?= $form->field($model, 'extra_courses', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'book',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter school name...')]);
					?>
					
					<?= $form->field($model, 'work_place_name', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'building',
											'success' => 'building',
											'error' => 'building-o',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter school name...')]);
					?>
					
					<?php if(Yii::$app->session->get('langId') === 1): ?>
						<?=  $form->field($model, 'work_place_type')->radioList($model->radio_type_ru, ['inline' => true]); ?> <!--Yii::t('app', 'Morning')-->
					<?php else: ?>
						<?=  $form->field($model, 'work_place_type')->radioList($model->radio_type_tk, ['inline' => true]); ?>
					<?php endif; ?>
					
					<?= $form->field($model, 'work_title', [
										'feedbackIcon' => [
											'prefix' => 'fa fa-',
											'default' => 'star',
											'defaultOptions' => ['class'=>'text-primary']
										]
									])->textInput(['placeholder' => Yii::t('app', 'Enter school name...')]);
					?>
					
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
