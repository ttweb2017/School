<?php 

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseTranslationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
	
	<div class="col-md-12">
        <center>
            <h4 class="titleColor"><?= Yii::t('app', 'NEWS') ?></h4>
            <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
        </center>
    </div>

	<div class="row">
		<div class="col-md-9" style="margin-top: 5%;">
			<?php foreach($news as $new): ?>
			
			<div id="news<?= Html::encode($new->article_id) ?>" class="row marginTop3">
                <div class="col-md-12">
                    <h4 class="text-center titleColor"><?= Html::encode($new->title) ?></h4>
                    <div class="news_text">
                        <?= Html::img(Html::encode($new->article->directory .$new->article->image), 
								['alt' => $new->article->image, 'class' => 'img-responsive img-rounded', 'style' => 'width: 20%;']) ?>
					</div>
                    <p class="homePageText"><?= HtmlPurifier::process($new->body) ?></p>
                </div>
            </div>
			
			<!--<div class="media">
				<div class="media-left">
					<a href="#">
						<img src=".." alt="..">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">..</h4>
					<p class="homePageText">..</p>
				</div>
			</div>-->
			
			<?php endforeach; ?>
		</div>
		
		<div class="col-md-3" style="margin-top: 5%;">
			<div class="col-md-12"><i class="fa fa-2x fa-question-circle"></i> <b class="titleColor"><?= Yii::t('app', 'FAQ') ?></b></div>
			<?php $count = 0; $size = sizeof($faq); ?>
			<?php foreach($faq as $data): ?>
			<?php $count++ ?>
			<div class="col-md-12">
				<div class="row">
				
				<h5 class="titleColor"><?= Html::encode($data->title) ?></h5>
				
				<?= HtmlPurifier::process($data->body) ?>
				<?php if($count < $size): ?>
					<hr />
				<?php endif; ?>
				</div>
			</div>			
			<?php endforeach; ?>
		</div>
	</div>
</div>