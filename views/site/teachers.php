<?php 

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'Teachers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-translation-index">

	<div class="col-md-12 text-center" style="margin-top:3%;margin-bottom:5%;">
        <h3 class="titleColor"><?= Yii::t('app', 'OUR TEACHERS') ?></h3>
        <h5 class="titleColor"><?= Yii::t('app', 'WE PROUD OF OUR TEACHERS') ?></h5>
    </div>
	
	<div class="row teachers">
		<div class="col-md-12">
			<?php foreach($teacher_translation as $teacher): ?>
			
			<div class="col-md-2">
				<a onmouseover="show('teacher<?= $teacher->teacher->id ?>')" onmouseout="hide('teacher<?= $teacher->teacher->id ?>')" style="text-decoration: none;">
					<div class="row">
						<div class="image">
						<center><?= Html::img(Html::encode($teacher->teacher->directory .$teacher->teacher->image), 
											['alt' => $teacher->teacher->image, 'class' => 'img-responsive img-circle', 'style' => 'width: 80%;']) ?>
							
						<h5 class="titleColor">
							<?= Html::encode($teacher->firstname) ?>
								
							<?= Html::encode($teacher->surname) ?>
								
							<?= Html::encode($teacher->fathersname) ?>
						</h5></center>
						</div>
					</div>
				</a>
			</div>
			
			<?php endforeach; ?>
		</div>
		
		<div class="row teachers marginSections">
		
		<?php foreach($teacher_translation as $teacher): ?>
			<div id="teacher<?= $teacher->teacher->id ?>" class="col-md-12" style="display: none;margin-top:5%;margin-bottom:5%;">
				<p class="homePageText"><?= HtmlPurifier::process($teacher->about) ?></p>
			</div>
		<?php endforeach; ?>
		
		</div>
		
		<div class="row col-md-12 text-center" style="margin-top: 10%;">
			<?php 
				
				echo LinkPager::widget([
											'pagination' => $pages,
										])
			?>
		</div>
	</div>
	
	<div class="row teacherCarousel">
		<div class="col-md-12">
			<?= $this->render('/site/_teacher_phone_view', ['teacher_translation' => $teacher_translation_all]) ?>
		</div>
	</div>
</div>