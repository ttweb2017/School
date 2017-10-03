<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegisterForm;
use app\models\TestForm;
use app\models\CourseCategory;
use app\models\CourseCategoryTranslation;
use app\models\Course;
use app\models\CourseTranslation;
use app\models\Teacher;
use app\models\TeacherTranslation;
use app\models\Article;
use app\models\ArticleTranslation;
use app\models\Comment;
use app\models\CommentTranslation;

use app\models\CourseTranslationSearch;
use yii\web\NotFoundHttpException;

use kartik\mpdf\Pdf;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		$this->setLanguage();
		
		$lang_id = Yii::$app->session->get('langId');
		
		$course_category_id = Yii::$app->request->get('id');
		if($course_category_id === null){
			$course_category_id = 1;
		}
		//here we get all categories with proper values
		$query_1 = CourseCategoryTranslation::find()
												->joinWith('courseCategory')
												->where([
															'course_category_translation.language_id' => $lang_id, 
														]);
		
		//here we get all categories with proper values
		$query_2 = CourseTranslation::find()
											->joinWith('course')
											->where([
															'course_translation.language_id' => $lang_id,
															'course.course_category_id' => $course_category_id
														]);
		
		//here we get all categories with proper values
		$query_3 = TeacherTranslation::find()
										->joinWith('teacher')
										->where([
													'teacher_translation.language_id' => $lang_id,
												]);
		
		/*$countQuery = clone $query;
		$totalCount = $countQuery->count();
		$pages = new Pagination(['totalCount' => $totalCount]);
		$pages->setPageSize(4);*/
		$course_category_translations = $query_1->all();
		$course_translations = $query_2->all();
		$teachers = $query_3->limit(4)->all();
		
        return $this->render('index', ['course_category_translations' => $course_category_translations,
									   'course_translations' => $course_translations,
									   'teachers' => $teachers
									   ]);
    }
	
	/**
     * Course action.
     *
     * @return Response|string
     */
    public function actionCourses() {
		$this->setLanguage();
		
		$searchModel = new CourseTranslationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('courses', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
	
	/**
     * Course action.
     *
     * @return Response|string
     */
    public function actionAboutCourse() {
		$this->setLanguage();
		$course_id = Yii::$app->request->get('id');
		$lang_id = Yii::$app->session->get('langId');
		
		$categories = CourseCategoryTranslation::find()
												->where([
															'course_category_translation.language_id' => $lang_id,
														])->all();

        //here we get all categories with proper values
		$courses_1 = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.course_category_id' => 1
													])
											->limit(7)
											->all();
		
		//here we get all categories with proper values
		$courses_2 = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.course_category_id' => 2
													])
											->limit(5)
											->all();
		
		//here we get all categories with proper values
		$courses_3 = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.course_category_id' => 3
													])
											->limit(4)
											->all();
		
		//here we get all categories with proper values
		$courses_4 = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.course_category_id' => 4
													])
											->limit(5)
											->all();
		
		//here we get all categories with proper values
		$courses_5 = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.course_category_id' => 5
													])
											->limit(5)
											->all();
		
		//here we get all categories with proper values
		$courses_6 = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.course_category_id' => 6
													])
											->limit(5)
											->all();
		
		//here we get all categories with proper values
		$course = CourseTranslation::find()
											->joinWith('course')
											->where([
														'course_translation.language_id' => $lang_id,
														'course.id' => $course_id
													])
											->one();
		
		//here we get all categories with proper values
		$teachers = TeacherTranslation::find()
										->joinWith('teacher')
										->where([
													'teacher_translation.language_id' => $lang_id,
													'teacher.course_id' => $course_id
												])->all();
		
		//here we get all categories with proper values
		$comments = CommentTranslation::find()
										->joinWith('comment')
										->where([
													'comment_translation.language_id' => $lang_id,
													'comment.course_id' => $course_id
												])->all();
		
		$items_1 = array();
		foreach($courses_1 as $course_1) {
			$item1['label'] = $course_1->course_name;
			$item1['active'] = $course_1->course_name;
			$item1['id'] = $course_1->course_id;
			
			array_push($items_1, $item1);
		}
		
		$items_2 = array();
		foreach($courses_2 as $course_2) {
			$item2['label'] = $course_2->course_name;
			$item2['active'] = $course_2->course_name;
			$item2['id'] = $course_2->course_id;
			
			array_push($items_2, $item2);
		}
		
		$items_3 = array();
		foreach($courses_3 as $course_3) {
			$item3['label'] = $course_3->course_name;
			$item3['active'] = $course_3->course_name;
			$item3['id'] = $course_3->course_id;
			
			array_push($items_3, $item3);
		}
		
		$items_4 = array();
		foreach($courses_4 as $course_4) {
			$item4['label'] = $course_4->course_name;
			$item4['active'] = $course_4->course_name;
			$item4['id'] = $course_4->course_id;
			
			array_push($items_4, $item4);
		}
		
		$items_5 = array();
		foreach($courses_5 as $course_5) {
			$item5['label'] = $course_5->course_name;
			$item5['active'] = $course_5->course_name;
			$item5['id'] = $course_5->course_id;
			
			array_push($items_5, $item5);
		}
		
		$items_6 = array();
		foreach($courses_6 as $course_6) {
			$item6['label'] = $course_6->course_name;
			$item6['active'] = $course_6->course_name;
			$item6['id'] = $course_6->course_id;
			
			array_push($items_6, $item6);
		}
		
		$items = array();
		foreach($categories as $category) {
			$item['label'] = $category->name;
			$item['active'] = $category->name;
			$item['id'] = $category->course_category_id;
			
			array_push($items, $item);
		}
		
		return $this->render('about_course', [
            'items_1' => $items_1,
            'items_2' => $items_2,
            'items_3' => $items_3,
            'items_4' => $items_4,
            'items_5' => $items_5,
            'items_6' => $items_6,
            'items' => $items,
            'course' => $course,
            'active' => $course_id,
            'teachers' => $teachers,
            'comments' => $comments,
        ]);
	}
	
	/**
     * Course action.
     *
     * @return Response|string
     */
	public function actionTeachers() {
		$this->setLanguage();
		
		$lang_id = Yii::$app->session->get('langId');
		
		//here we get all categories with proper values
		$query = TeacherTranslation::find()
										->joinWith('teacher')
										->where([
													'teacher_translation.language_id' => $lang_id,
												]);
		
		$teacher_translation_all = $query->all();
		
		$countQuery = clone $query;
		$totalCount = $countQuery->count();
		$pages = new Pagination(['totalCount' => $totalCount]);
		$pages->setPageSize(6);
		$teacher_translation = $query->offset($pages->offset)
			->limit($pages->limit)
			->all();
		
		return $this->render('teachers', [
            'teacher_translation' => $teacher_translation,
			'pages' => $pages,
			'teacher_translation_all' => $teacher_translation_all,
        ]);
	}
	
	/**
     * News action.
     *
     * @return Response|string
     */
    public function actionNews() {
		
		$this->setLanguage();
		$lang_id = Yii::$app->session->get('langId');
		
		//here we get all categories with proper values
		$faq_query = ArticleTranslation::find()
										->joinWith('article')
										->where([
													'article_translation.language_id' => $lang_id,
													'article.article_category_id' => 2,
												]);
		
		//here we get all categories with proper values
		$query = ArticleTranslation::find()
										->joinWith('article')
										->where([
													'article_translation.language_id' => $lang_id,
													'article.article_category_id' => 1,
												]);

		$faq = $faq_query->all();	
		
        $countQuery = clone $query;
		$totalCount = $countQuery->count();
		$pages = new Pagination(['totalCount' => $totalCount]);
		$pages->setPageSize(4);
		$news = $query->offset($pages->offset)
			->limit($pages->limit)
			->all();
			
			
		return $this->render('news', [
            'news' => $news,
			'faq' => $faq,
            'pages' => $pages,
        ]);
	}
	
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
		$this->setLanguage();
		
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
		$this->setLanguage();
		
        return $this->render('about');
    }
	
	/**
     * Displays register page.
     *
     * @return Response|string
     */
    public function actionRegister()
    {
		$this->setLanguage();
		
        $model = new RegisterForm();
		
		if ($model->load(Yii::$app->request->post())) {
            //return $this->render('view', ['model' => $model]);
			
			$model->setValues();
			// get your HTML raw content without any layouts or scripts
			/*$content = $this->renderPartial('view', ['model' => $model]);
			
			$pdf = Yii::$app->pdf;
			$pdf->content = $content;
			$pdf->options = ['title' => Yii::t('app', 'School registration form')];
			$pdf->methods = ['SetHeader' => [Yii::t('app', 'registration form')], 'SetFooter' => ['{PAGENO}']];*/
			
			$model->sendPdf('welcome', ['model' => $model]);
			
			/*$pdf = Yii::$app->pdf; // or new Pdf();
			$mpdf = $pdf->api; // fetches mpdf api
			$mpdf->SetHeader('Register header'); // call methods or set any properties
			$mpdf->WriteHtml($content); // call mpdf write html
			$mpdf->Output('register.pdf'); */
			
			//return $pdf->render();
			Yii::$app->session->setFlash('registerFormSubmitted');
			return $this->refresh();
			
        } else {
            return $this->render('register', [
                'model' => $model,
            ]);
        }
		
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('registerFormSubmitted');

            return $this->refresh();
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }
	
	/**
     * Displays a single pdf model.
     * @param integer $model
     * @return mixed
     */
    public function actionView($model)
    {
        return $this->render('view', [
            'model' => $model,
        ]);
    }
	
	/**
     * Displays test page.
     *
     * @return Response|string
     */
    public function actionTest()
    {
		$this->setLanguage();
		
        $model = new TestForm();
        if ($model->load(Yii::$app->request->post()) /*&& $model->contact(Yii::$app->params['adminEmail'])*/) {
            Yii::$app->session->setFlash('testFormSubmitted');

			$model->calculateScore();
			
            return $this->render('test', [
				'model' => $model,
			]);
        }
        return $this->render('test', [
            'model' => $model,
        ]);
    }
	
	/**
     * Finds the CourseTranslation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $language_id
     * @param string $course_id
     * @return CourseTranslation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($language_id, $course_id)
    {
        if (($model = CourseTranslation::findOne(['language_id' => $language_id, 'course_id' => $course_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
	
	/**
     * Handles language toggle button action.
     *
     * @return string
     */
    public function actionTranslate(){
	
		if(Yii::$app->request->get('id') === 'RU'){
			
			Yii::$app->session->set('lang', 'RU');
			Yii::$app->session->set('langId', 1);
			
			Yii::$app->language = 'ru';
		}
		if(Yii::$app->request->get('id') === 'TM'){
			
			Yii::$app->session->set('lang', 'TM');
			Yii::$app->session->set('langId', 2);
			
			Yii::$app->language = 'tk';
		}
		
        return $this->goHome();
    }
	
	/**
     * Sets display Language.
     *
     */
    public function setLanguage(){
	
		if(Yii::$app->session->has('lang')){
			if(Yii::$app->session->get('lang') === 'RU'){
				Yii::$app->language = 'ru';
			}else{
				Yii::$app->language = 'tk';
			}
		}else{
			Yii::$app->language = 'ru';
			Yii::$app->session->set('langId', 1);
		}
    }
	
	/*public function setLanguage(){
		
		$cookies = Yii::$app->response->cookies;
		if($cookies->getValue('language') === 'ru') {
			Yii::$app->session->set('langId', 1);
		}else{
			Yii::$app->session->set('langId', 2);
		}
	}	*/	
}
