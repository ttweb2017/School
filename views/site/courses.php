<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseTranslationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Courses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-translation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a(Yii::t('app', 'Create Course Translation'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	<div class="table-responsive">
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				//'language_id',
				//'course_id',
				'course_name',
				//'course_description',
				'course_period',
				'course_price',
				'course_level',

				//['class' => 'yii\grid\ActionColumn'],
			],
		]); ?>
	</div>
    <?php Pjax::end(); ?>
</div>
