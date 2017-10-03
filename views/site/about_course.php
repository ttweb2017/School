<?php 

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use kartik\sidenav\SideNav;
use yii\helpers\Url;
use yii\bootstrap\Button;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseTranslationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'About Course');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12 courseBack">

        <!--Course Choose section (column first) ************************-->
        <div class="col-md-4">
			<div class="row">

            <?= SideNav::widget([
					'type' => 'success',//$type,
					'encodeLabels' => false,
					'heading' => Yii::t('app', 'All Course Categories'),//$heading
					'items' => [
						['label' => $items[0]['label'], 'icon' => 'book', 'items' => [
																			['label' => $items_1[0]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[0]['id']]), 'active' => ($active == $items_1[0]['id'])],
																			['label' => $items_1[1]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[1]['id']]), 'active' => ($active == $items_1[1]['id'])],
																			['label' => $items_1[2]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[2]['id']]), 'active' => ($active == $items_1[2]['id'])],
																			['label' => $items_1[3]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[3]['id']]), 'active' => ($active == $items_1[3]['id'])],
																			['label' => $items_1[4]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[4]['id']]), 'active' => ($active == $items_1[4]['id'])],
																			//['label' => $items_1[5]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[5]['id']]), 'active' => ($active == $items_1[5]['id'])],
																			['label' => $items_1[6]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_1[6]['id']]), 'active' => ($active == $items_1[6]['id'])],
																			]],
						['label' => $items[1]['label'], 'icon' => 'book', 'items' => [
																			['label' => $items_2[0]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_2[0]['id']]), 'active' => ($active == $items_2[0]['id'])],
																			['label' => $items_2[1]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_2[1]['id']]), 'active' => ($active == $items_2[1]['id'])],
																			['label' => $items_2[2]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_2[2]['id']]), 'active' => ($active == $items_2[2]['id'])],
																			['label' => $items_2[3]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_2[3]['id']]), 'active' => ($active == $items_2[3]['id'])],
																			['label' => $items_2[4]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_2[4]['id']]), 'active' => ($active == $items_2[4]['id'])],
																			]],
						['label' => $items[2]['label'], 'icon' => 'book', 'items' => [
																			['label' => $items_3[0]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_3[0]['id']]), 'active' => ($active == $items_3[0]['id'])],
																			['label' => $items_3[1]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_3[1]['id']]), 'active' => ($active == $items_3[1]['id'])],
																			['label' => $items_3[2]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_3[2]['id']]), 'active' => ($active == $items_3[2]['id'])],
																			['label' => $items_3[3]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_3[3]['id']]), 'active' => ($active == $items_3[3]['id'])],
																			]],
						['label' => $items[3]['label'], 'icon' => 'book', 'items' => [
																			['label' => $items_4[0]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_4[0]['id']]), 'active' => ($active == $items_4[0]['id'])],
																			['label' => $items_4[1]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_4[1]['id']]), 'active' => ($active == $items_4[1]['id'])],
																			['label' => $items_4[2]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_4[2]['id']]), 'active' => ($active == $items_4[2]['id'])],
																			['label' => $items_4[3]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_4[3]['id']]), 'active' => ($active == $items_4[3]['id'])],
																			['label' => $items_4[4]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_4[4]['id']]), 'active' => ($active == $items_4[4]['id'])],
																			]],
						['label' => $items[4]['label'], 'icon' => 'book', 'items' => [
																			['label' => $items_5[0]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_5[0]['id']]), 'active' => ($active == $items_5[0]['id'])],
																			['label' => $items_5[1]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_5[1]['id']]), 'active' => ($active == $items_5[1]['id'])],
																			['label' => $items_5[2]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_5[2]['id']]), 'active' => ($active == $items_5[2]['id'])],
																			['label' => $items_5[3]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_5[3]['id']]), 'active' => ($active == $items_5[3]['id'])],
																			['label' => $items_5[4]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_5[4]['id']]), 'active' => ($active == $items_5[4]['id'])],
																			]],
						/*['label' => $items[5]['label'], 'icon' => 'book', 'items' => [
																			['label' => $items_6[0]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_6[0]['id']]), 'active' => ($active == $items_6[0]['id'])],
																			['label' => $items_6[1]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_6[1]['id']]), 'active' => ($active == $items_6[1]['id'])],
																			['label' => $items_6[2]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_6[2]['id']]), 'active' => ($active == $items_6[2]['id'])],
																			['label' => $items_6[3]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_6[3]['id']]), 'active' => ($active == $items_6[3]['id'])],
																			['label' => $items_6[4]['label'], 'icon' => 'book', 'url' => Url::to(['/site/about-course', 'id'=>$items_6[4]['id']]), 'active' => ($active == $items_6[4]['id'])],
																			]],*/
					]
				])
			?>
			</div>
			
			<div class="row" style="margin-top: 10%;">
				<?php if(!empty($teachers)): ?>
				<h4 class="text-center"><b><?= Yii::t('app', 'Teachers') ?></b></h4>
				<?php endif; ?>
				<?php foreach($teachers as $teacher) :?>
				
				<div class="col-md-11 img-rounded panel">
					<div class="row">
						<div class="col-md-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
									 src="<?= $teacher->teacher->directory, $teacher->teacher->image ?>" 
									 alt="<?= $teacher->teacher->image ?>" style="width: 50%;">

						</div>
						<div class="text-center" style="padding: 5px;">
							<h4 class="text-center titleColor"><?= $teacher->firstname, ' ', $teacher->surname, ' ', $teacher->fathersname ?></h4>
							<p class="homePageText"><?= $teacher->little_about ?></p>
						</div>
					</div>
				</div>
				
				<?php endforeach; ?>
			</div>
		</div>
		
		<div class="col-md-8">
				
			<div class="row">
                <div class="col-md-12">
                              <h4 class="titleColor text-center"><?= $course->course_name ?></h4>
                </div>
                <div class="col-md-12">
					<div class="row">
                        <center>
							<img class="img-responsive img-rounded" 
									src="<?= $course->course->directory, $course->course->image ?>" 
									alt="<?= $course->course->image ?>" 
									style="width: 50%;" />
						</center>
					</div>
                </div>

                <div class="col-md-12" style="margin-top: 3%;">
                    <p class="homePageText"><?= $course->course_description ?></p>
					
                </div>
				
				<?php if($course->course->id === $items_1[0]['id']): ?>
				<div class="col-md-12 text-center">
					<?= Html::a(Yii::t('app', 'Pass Test'), ['/site/test'], ['class'=>'btn btn-primary grid-button']) ?>
				</div>
				<?php endif; ?>
            </div>
			
			<div class="row marginSections">

                    <div class="col-md-12">
                        <h4 class="text-center titleColor"><?= Yii::t('app', 'PASS ALL THE LEVELS AND GET') ?></h4>
                    </div>

                    <div class="col-md-12 marginTop3" style="padding-right: 7%;padding-bottom: 10%;">
                        <div class="col-md-4 levelBorder">
                            <center>
                                <img class="img-responsive" src="img/certificate.png" alt="photo" style="width: 40%;">
                                <h5 class="titleColor"><?= Yii::t('app', 'CERTIFICATE') ?></h5>
                                <p class="homePageText"><?= Yii::t('app', 'Get a certificate after successfully completion') ?></p>
                            </center>
                        </div>
                        <div class="col-md-4 levelBorder">
                            <center>
                                <img class="img-responsive" src="img/bussines.png" alt="photo" style="width: 46%;">
                                <h5 class="titleColor"><?= Yii::t('app', 'CAREER') ?></h5>
                                <p class="homePageText"><?= Yii::t('app', 'Update your resume with new skill') ?></p>
                            </center>
                        </div>
                        <div class="col-md-4 levelBorder">
                            <center>
                                <img class="img-responsive" src="img/pieCake.png" alt="photo" style="width: 37%;">
                                <h5 class="titleColor"><?= Yii::t('app', 'FUTURE') ?></h5>
                                <p class="homePageText"><?= Yii::t('app', 'Knowladge is the tool for successfull life') ?></p>
                            </center>
                        </div>
                    </div>
			</div>
			
			<div class="col-md-12">
				<div class="col-md-12 titleMargin">
                    <center>
                        <h3 class="titleColor"><?= Yii::t('app', 'FEEDBACKS') ?></h3>
                        <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
                    </center>
                </div>
				<?php foreach($comments as $comment): ?>
                    <div class="col-md-12">
                        <h5 class="titleColor"><?= $comment->name ?></h5>
                        <p class="homePageText"><?= $comment->comment ?></p>
                    </div>
				<?php endforeach; ?>
            </div>
		</div>
		
	</div>		
</div>	