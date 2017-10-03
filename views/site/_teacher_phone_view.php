<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\bootstrap\Carousel;

/*this view is for phone*/

?>

<?php 	
	/*$items = array();
	
	foreach($teacher_translation as $teacher) {
		$item['content'] = '<center><img class="img-responsive img-circle teacherPhone" src="' .Html::encode($teacher->teacher->directory .$teacher->teacher->image). '"/></center>';
		$item['caption'] = '<div class="col-md-12"><center><h4 class="titleColor">' .Html::encode($teacher->field). '</h4><h5 class="titleColor">' .Html::encode($teacher->firstname).' '.Html::encode($teacher->surname).' '.Html::encode($teacher->fathersname). '</h5></center><p class="homePageText">'.Html::encode($teacher->about).'</p></div>';
		
		array_push($items, $item );
	}
	
	echo Carousel::widget(['items' => $items]);*/
	
?>


<!--PHONE MODEL *****************************************************-->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php $count = 1; ?>
        <?php foreach($teacher_translation as $teacher): ?>
        <li data-target="#myCarousel" data-slide-to="<?= $count++ ?>"></li>
        <?php endforeach; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $active = 'active'; $counter = 0; ?>
        <?php foreach($teacher_translation as $teacher): ?>
        <?php if($counter > 0) {$active = '';}?>
        <div class="item <?= $active ?>">
            <center>
                <img src="<?= Html::encode($teacher->teacher->directory .$teacher->teacher->image) ?>" 
                     class="img-responsive img-circle teacherPhone" alt="<?= $teacher->teacher->image ?>">
            </center>
            <div class="col-md-12">
                <center>
                    <h4 class="titleColor"><b><?= Html::encode($teacher->firstname), ' ', Html::encode($teacher->surname), ' ', Html::encode($teacher->fathersname)?></b></h4>
                    <h5 class="titleColor"><b><?= Html::encode($teacher->field) ?></b></h5>
                </center>
                <p class="homePageText"><?= HtmlPurifier::process($teacher->about) ?></p>
            </div>
        </div>
        <?php $counter++; ?>
        <?php endforeach; ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>