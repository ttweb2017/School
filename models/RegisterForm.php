<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class RegisterForm extends Model
{
	private $sender;
	private $viewPath = '@app/views/mail';
	public $subject = 'Registration Form';
	
    public $firstname;
	public $lastname;
	public $fathersname;
	public $address;
    public $email;
    public $mobile_phone;
    public $work_phone;
    public $home_phone;
    public $age;
    public $education;
	public $radio_list_ru = [0 => 'Среднее', 1 => 'Среднее специальное', 2 => 'Неоконченное высшее', 3 => 'Высшее'];
	public $radio_list_tk = [0 => 'Orta', 1 => 'Orta ýörüteleşdirilen', 2 => 'Gutarylmadyk ýokary', 3 => 'Ýokary'];
    public $education_place_name;
    //public $grafik;
	//public $list_ru = [0 => 'Утром', 1 => 'Днем', 2 => 'Вечером'];
	//public $list_tk = [0 => 'Irden', 1 => 'Gündüz', 2 => 'Öýlan'];
    public $heard_from_where;
	public $radio_heard_ru = [0 => 'От знакомых', 1 => 'Из СМИ', 2 => 'Интернет', 3 => 'Другое'];
	public $radio_heard_tk = [0 => 'Tanyşlarymdan', 1 => 'KHS-den', 2 => 'Internetden', 3 => 'Başka'];
    public $extra_courses;
    public $work_place_name;
    public $work_place_type;
	public $radio_type_ru = [0 => 'Государственная', 1 => 'Частная'];
	public $radio_type_tk = [0 => 'Höküwmet', 1 => 'Hususy'];
    public $work_title;
    public $verifyCode;

	public $education_value;
	public $work_place_type_value;
	public $grafik_value;
	public $heard_from_where_value;

	public function setValues() {
		switch($this->education) {
			case 0:
				$this->education_value = Yii::t('app', 'high school');
				break;
			case 1:
				$this->education_value = Yii::t('app', 'collage');
				break;
			case 2:
				$this->education_value = Yii::t('app', 'undergraduate');
				break;
			case 3:
				$this->education_value = Yii::t('app', 'graduate');
				break;
		}
		
		switch($this->heard_from_where) {
			case 0:
				$this->heard_from_where_value = Yii::t('app', 'friends');
				break;
			case 1:
				$this->heard_from_where_value = Yii::t('app', 'news');
				break;
			case 2:
				$this->heard_from_where_value = Yii::t('app', 'internet');
				break;
			case 3:
				$this->heard_from_where_value = Yii::t('app', 'other');
				break;
		}
		
		switch($this->work_place_type) {
			case 0:
				$this->work_place_type_value = Yii::t('app', 'goverment');
				break;
			case 1:
				$this->work_place_type_value = Yii::t('app', 'private');
				break;
		}
	}
	
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['firstname', 'lastname', 'fathersname', 'address', 'email', 
			'mobile_phone', 'home_phone', 'work_phone', 'age', 'education', 
			'education_place_name', 'heard_from_where', 'extra_courses', 
			'work_place_name', 'work_place_type', 'work_title'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'firstname' => \Yii::t('app', 'First Name'),
			'lastname' => \Yii::t('app', 'Last Name'),
			'fathersname' => \Yii::t('app', 'Fathers Name'),
			'address' => \Yii::t('app', 'Address'),
			'email' => \Yii::t('app', 'Email'),
			'mobile_phone' => \Yii::t('app', 'Mobile Phone'),
			'work_phone' => \Yii::t('app', 'Work Phone'),
			'home_phone' => \Yii::t('app', 'Home Phone'),
			'age' => \Yii::t('app', 'Age'),
			'education' => \Yii::t('app', 'Education'),
			'education_place_name' => \Yii::t('app', 'Name of Institution'),
			//'grafik' => \Yii::t('app', 'Grafik'),
			'heard_from_where' => \Yii::t('app', 'Where did you heard about us?'),
			'extra_courses' => \Yii::t('app', 'Which extra classes would you like to visit?'),
			'work_place_name' => \Yii::t('app', 'Work Place Name'),
			'work_place_type' => \Yii::t('app', 'Type of organization'),
			'work_title' => \Yii::t('app', 'Job title'),
			'verifyCode' => \Yii::t('app', 'Verification Code'),
			
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->firstname])
                ->setSubject('Register')
                ->setTextBody('barla')
                ->send();

            return true;
        }
        return false;
    }
	
	/**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function sendPdf($view, $params = [])
    {
			
			$mailer = Yii::$app->mailer;
			$mailer->viewPath = $this->viewPath;
			$mailer->getView()->theme = Yii::$app->view->theme;
			
			if ($this->sender === null) {
            $this->sender = isset(Yii::$app->params['adminEmail']) ?
                Yii::$app->params['adminEmail']
                : 'no-reply@example.com';
			}
			
            Yii::$app->mailer->compose(['html' => $view], $params) //['html' => $view, 'text' => 'text/' . $view], $params
                ->setTo($this->email)
                ->setFrom($this->sender)
                ->setSubject($this->subject)
				//->attach($filePath)
                ->send();
            return true;
    }
}
