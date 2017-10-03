<?php

/* @var $this yii\web\View */

$this->title = 'School';
?>

<div class="site-index">

    <!--CAROUSEL ************************************************************-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<center>
					<img src="img/baner/baner1.jpg" 
						 class="img-responsive img-thumbnail baner" alt="School" style="width: 100%;"><!--img/400x100_pic1.png-->
				</center>
				<div class="carousel-caption">
					<h2><b><?= \Yii::t('app', 'COURSE FOR EVERYONE') ?></b></h2>
					<h3><b><?= \Yii::t('app', 'We have courses for everyone') ?></b></h3>
				</div>
			</div>

			<div class="item">
				<center><img src="img/baner/baner2.jpg"  
							 class=" img-responsive img-thumbnail baner" alt="School" style="width: 100%;"><!--img/400x100_pic1.png-->
				</center>
				<div class="carousel-caption">
					<h2><b><?= \Yii::t('app', 'COURSE FOR EVERYONE') ?></b></h2>
					<h3><b><?= \Yii::t('app', 'We have courses for everyone') ?></b></h3>
				</div>
			</div>
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

<!-- Main container starts here *********************************-->
<div class="container-fluid">

    <!--Sub menu ************************************************************-->
    <div class="row homeNavBack" style="margin-top: 2%;">
		<div id="rollTop">
            <img class="img-responsive" src="img/rollPaperTop.png" alt="paperTop">
        </div>

        <div class="col-md-offset-1 col-md-10" style="padding-bottom: 1%;">

		<?= $this->render('/site/_menu', ['course_category_translations' => $course_category_translations, 
										  'course_translations' => $course_translations
										  ]) 
		?>

		</div>
		
		<div id="rollBottom">
            <img class="img-responsive" src="img/rollPaperBottom.png" alt="paperTop">
        </div>
    </div>

    <!--CERTIFICATE *********************************************************-->
    <div class="row marginSections">
        <div class="col-md-10" style="margin-top: 2%;">
            <div class="col-md-2 text-right">
                <img class="img-responsive" src="img/logo.png" alt="smallLogoPhoto">
            </div>
            <div class="col-md-10 col-md-push-0 text-left">
                <h2 class="titleColor"><?= Yii::t('app', 'JUST DO THINGS ON TIME') ?></h2>
            </div>


            <div class="col-md-12" style="margin-top: 2%;">
                <div class="col-md-4">
                    <h4 class="titleColor text-center"><?= Yii::t('app', '1. EXPERIENCE') ?></h4>
                    <p class="text-left homePageText"><?= Yii::t('app', 'About Experience') ?></p>
                </div>
                <div class="col-md-4">
                    <h4 class="titleColor text-center"><?= Yii::t('app', '2. EDUCATION') ?></h4>
                    <p class="text-left homePageText"><?= Yii::t('app', 'About Education') ?></p>
                </div>
                <div class="col-md-4">
                    <h4 class="titleColor text-center"><?= Yii::t('app', '3. CERTIFICATE') ?></h4>
                    <p class="text-left homePageText"><?= Yii::t('app', 'About Certificate') ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <img id="clock" class="img-responsive" src="img/clock.png" alt="clockPhoto">
        </div>
    </div>

    <!--About Us ************************************************************-->
    <div class="row marginSections">
        <!--Title About Us-->
        <div class="col-md-12 titleMargin">
            <center>
                <h4 class="titleColor"><?= Yii::t('app', 'ABOUT US') ?></h4>
                <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
            </center>
        </div>

        <div class="col-md-6" style="padding-left: 0;padding-bottom: 0.7%;">
            <img class="img-responsive img-rounded" src="img/baner/baner3.jpg" alt="photoSokol" style="width: 100%;padding-left:15px;">
        </div>
        <div class="col-md-6">
            <h5 class="titleColor text-center"><?= Yii::t('app', 'BUSINESS SCHOOL - SUCCESSFULLY SOCIAL-EDUCATIONAL PROJECT') ?></h5>
            <p class="homePageText"><?= Yii::t('app', 'Paragraf-1') ?></p>
            <p class="homePageText"><?= Yii::t('app', 'Paragraf-2') ?></p>
            <p class="homePageText"><?= Yii::t('app', 'Paragraf-3') ?></p>
            <p class="homePageText"><?= Yii::t('app', 'Paragraf-4') ?></p>

        </div>
    </div>

    <!--Advantages **********************************************************-->
    <div class="row marginSections">
        <!--Title Advantages-->
        <div class="col-md-12 titleMargin">
            <center>
                <h4 class="titleColor"><?= Yii::t('app', 'OUR ADVANTAGES') ?></h4>
                <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
            </center>
        </div>

        <div class="col-md-4" id="advantage1">
            <center>
                <img class="img-responsive" src="img/sunduk.png" alt="photo">
                <h4 class="titleColor"><?= Yii::t('app', 'BIG CHOISES') ?></h4>
            </center>
        </div>
        <div class="col-md-4" id="advantage2">
            <center>
                <img class="img-responsive" src="img/sokol4.png" alt="photo">
                <h4 class="titleColor"><?= Yii::t('app', 'BEST TEACHERS') ?></h4>
            </center>
        </div>
        <div class="col-md-4" id="advantage3">
            <center>
                <img class="img-responsive" src="img/shit2.png" alt="photo">
                <h4 class="titleColor"><?= Yii::t('app', 'AVAILABLE SCHEDULE') ?></h4>
            </center>
        </div>
    </div>

    <!--NEWS ****************************************************************-->
    <div class="row homeNav marginSections">
        <!--Title News-->
        <div class="col-md-12">
            <center>
                <h4 class="titleColor"><?= Yii::t('app', 'NEWS') ?></h4>
                <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
            </center>
        </div>

        <div class="col-md-offset-1 col-md-10">
            <div class="col-md-4">
                <img src="" alt="photo">
                <p class="homePageText"><?= Yii::t('app', 'News_1') ?></p>
            </div>
            <div class="col-md-4">
                <p class="homePageText"><?= Yii::t('app', 'News_2') ?></p>
                <img src="" alt="photo">
            </div>
            <div class="col-md-4">
                <img src="" alt="photo">
                <p class="homePageText"><?= Yii::t('app', 'News_3') ?></p>
            </div>
        </div>
    </div>

    <!--Saying **************************************************************-->
    <div class="row marginSections">
        <div class="col-md-12 img-rounded" 
             style="background-color: #521900;padding-bottom: 3%;padding-top: 3%;">
            <div id="arrowSignBig" class="col-md-4 text-right">
                <img class="img-responsive" src="img/angleSign.png" alt="sign">
            </div>

            <!--<div id="filosofSmall" class="col-md-4 col-md-pull-9">
                <img class="img-responsive" src="img/filosof.png" alt="sign">
            </div>-->

			<div id="filosof" class="col-md-2 col-md-pull-8">
				<img src="img/filosof.png" alt="sokratPhoto">
			</div>
            <div class="col-md-6">
                <h2 class="saying"><?= Yii::t('app', '"It doesn\'t metter how long you leaved, you should learn always"') ?></h2>
                <h3 class="saying text-right"><?= Yii::t('app', '-Seneca') ?></h3>
            </div>
        </div>
        <!--<div class="col-md-1">
            <img src="img/filosof.png" alt="sokratPhoto">
        </div>-->
    </div>

    <!--Teachers ************************************************************-->
    <div class="row marginSections">
        <div class="col-md-12 titleMargin">
            <center>
                <h4 class="titleColor"><?= Yii::t('app', 'TEACHERS') ?></h4>
                <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
            </center>
        </div>

		<?php foreach($teachers as $teacher): ?>
		
		<div class="col-md-6 teacherBack">
            <div class="col-md-12">
                <div class="col-md-4">
                    <img class="img-responsive img-rounded teacherPhoto" 
							src="<?= $teacher->teacher->directory, $teacher->teacher->image ?>" 
							alt="<?= $teacher->teacher->image?>">
                </div>

                <div class="col-md-6">
                    <h4 class="titleColor"><?= $teacher->firstname, ' ', $teacher->surname, ' ', $teacher->fathersname ?></h4>
                    <h6 class="titleColor"><?= $teacher->field ?></h6>
                    <p class="homePageText"><?= $teacher->little_about ?></p>
                </div>
            </div>
        </div>
		
		<?php endforeach; ?>
    </div>

    <!--Gallery *************************************************************-->
    <div class="row" id="galery">
        <!--Title Gallery-->
        <div class="col-md-12 titleMargin">
            <center>
                <h4 class="titleDecor"><?= Yii::t('app', 'PHOTO GALERY') ?></h4>
                <img class="img-responsive" src='img/titleDecor.png' alt='titleDecorPhoto'>
            </center>
        </div>

        <div class="col-md-12">
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery1.png" alt="photo" style="width: 100%;">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery2.png" alt="photo" style="width: 100%;">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery3.png" alt="photo" style="width: 100%;">
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 2%;">
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery4.png" alt="photo" style="width: 100%;">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery5.png" alt="photo" style="width: 100%;">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery6.png" alt="photo" style="width: 100%;">
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 2%;">
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery7.png" alt="photo" style="width: 100%;">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery8.png" alt="photo" style="width: 100%;">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-rounded" src="img/galery/galery9.png" alt="photo" style="width: 100%;">
            </div>
        </div>
    </div>

</div>
</div>
