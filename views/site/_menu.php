<?php

/*
 * This file is part of the Dektrium project
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\bootstrap\Nav;
use yii\helpers\Url;

?>

<?= Nav::widget([
		'options' => [
			'class' => 'nav-tabs',
			'style' => 'margin-bottom: 15px',
		],
		'items' => [
			[
				'label' => $course_category_translations[0]->name,
				'url' => ['/site/index', 'id' => $course_category_translations[0]->courseCategory->id],
				/*'options' => ['class' => 'active']*/
			],
			[
				'label' => $course_category_translations[1]->name,
				'url' => ['/site/index', 'id' => $course_category_translations[1]->courseCategory->id],
			],
			[
				'label' => $course_category_translations[2]->name,
				'url' => ['/site/index', 'id' => $course_category_translations[2]->courseCategory->id],
			],
			[
				'label' => $course_category_translations[3]->name,
				'url' => ['/site/index', 'id' => $course_category_translations[3]->courseCategory->id],
			],
			[
				'label' => $course_category_translations[4]->name,
				'url' => ['/site/index', 'id' => $course_category_translations[4]->courseCategory->id],
			],
			[
				'label' => $course_category_translations[5]->name,
				'url' => ['/site/index', 'id' => $course_category_translations[5]->courseCategory->id],
			],
		],
	]) 
?>

<div class="row">
	<div class="col-md-12">
		<div class="row">
		<?php $count = 0; ?>
		<?php foreach($course_translations as $course_translation) :?>
			<?php if($count < 5): ?>
			<div class="col-md-2 img-rounded panel">
				<div class="row">
					<a href="<?= Url::to(['site/about-course', 'id' => $course_translation->course->id])?>">
						<div class="col-md-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="<?= $course_translation->course->directory, $course_translation->course->image ?>" 
								 alt="<?= $course_translation->course->image ?>" style="width: 100%;">

						</div>
					</a>
					<div class="text-center">
						<p>
							<b><?= substr($course_translation->course_name, 0, 30), '...' ?></b>
						</p>
						<p class="star">
							<i class="glyphicon glyphicon-star"></i>
							<i class="glyphicon glyphicon-star"></i>
							<i class="glyphicon glyphicon-star"></i>
							<i class="glyphicon glyphicon-star"></i>
						</p>
						
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php $count++; ?>
		<?php endforeach; ?>
		
			<div class="col-md-push-4 col-md-4 peroPic" id="pero_panel">
				
			</div>
		</div>
	</div>
</div>
