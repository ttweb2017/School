<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TestForm extends Model
{
	/*'title',
			'level',
			'total_question',
			'total_correct',
			'total_error',
            'score',*/
			
	private $sender;
	private $viewPath = '@app/views/mail';
	public $subject = 'Test Result';
	
	public $title;
	
    public $question_1;
	public $question_1_label = [0 => '1. are', 1 => '2. is', 2 => '3. be'];
	
	public $question_2;
	public $question_2_label = [0 => '1. from', 1 => '2. to', 2 => '3. at'];
	
	public $question_3;
	public $question_3_label = [0 => '1. Have', 1 => '2. Do', 2 => '3. Can'];
	
	public $question_4;
	public $question_4_label = [0 => '1. country', 1 => '2. nationality', 2 => '3. capital'];
	
	public $question_5;
	public $question_5_label = [0 => '1. in', 1 => '2. at', 2 => '3. on'];
	
	public $question_6;
	public $question_6_label = [0 => '1. mustn&CloseCurlyQuote;t', 1 => '2. won&CloseCurlyQuote;t', 2 => '3. doesn&CloseCurlyQuote;t have'];
	
	public $question_7;
	public $question_7_label = [0 => '1. Whose', 1 => '2. Who', 2 => '3. Who&CloseCurlyQuote;s'];
	
	public $question_8;
	public $question_8_label = [0 => '1. these', 1 => '2. that', 2 => '3. there'];
	
	public $question_9;
	public $question_9_label = [0 => '1. him', 1 => '2. he', 2 => '3. his'];
	
	public $question_10;
	public $question_10_label = [0 => '1. gos', 1 => '2. goes', 2 => '3. go'];
	
	public $question_11;
	public $question_11_label = [0 => '1. eats', 1 => '2. eat', 2 => '3. eates'];
	
	public $question_12;
	public $question_12_label = [0 => '1. write', 1 => '2. is writing', 2 => '3. writes'];
	
	public $question_13;
	public $question_13_label = [0 => '1. are you doing', 1 => '2. do you', 2 => '3. do you do'];
	
	public $question_14;
	public $question_14_label = [0 => '1. wearing', 1 => '2. is wearing', 2 => '3. is wear'];
	
	public $question_15;
	public $question_15_label = [0 => '1. go', 1 => '2. have gone', 2 => '3. went'];
	
	public $question_16;
	public $question_16_label = [0 => '1. did you visit', 1 => '2. are you visiting', 2 => '3. do you visit'];
	
	public $question_17;
	public $question_17_label = [0 => '1. nosiest', 1 => '2. noisy', 2 => '3. noisier'];
	
	public $question_18;
	public $question_18_label = [0 => '1. beautiful', 1 => '2. more beautiful', 2 => '3. most beautiful'];
	
	public $question_19;
	public $question_19_label = [0 => '1. Do you finish', 1 => '2. Have you finished', 2 => '3. Are you finishing'];
	
	public $question_20;
	public $question_20_label = [0 => '1. Will', 1 => '2. Do', 2 => '3. Are'];
	
	public $question_21;
	public $question_21_label = [0 => '1. although', 1 => '2. despite', 2 => '3. yet'];
	
	public $question_22;
	public $question_22_label = [0 => '1. ought', 1 => '2. hopes', 2 => '3. might'];
	
	public $question_23;
	public $question_23_label = [0 => '1. Neither do I', 1 => '2. So do I', 2 => '3. Nor do I'];
	
	public $question_24;
	public $question_24_label = [0 => '1. have drunk', 1 => '2. had drunk', 2 => '3. had been drinking'];
	
	public $question_25;
	public $question_25_label = [0 => '1. see', 1 => '2. seeing', 2 => '3. to see'];
	
	public $question_26;
	public $question_26_label = [0 => '1. hasn&CloseCurlyQuote;t you', 1 => '2. don&CloseCurlyQuote;t you', 2 => '3. have you'];
	
	public $question_27;
	public $question_27_label = [0 => '1. would have passed', 1 => '2. would pass', 2 => '3. will pass'];
	
	public $question_28;
	public $question_28_label = [0 => '1. to invite', 1 => '2. invite', 2 => '3. inviting'];
	
	public $question_29;
	public $question_29_label = [0 => '1. both', 1 => '2. neither', 2 => '3. either'];
	
	public $question_30;
	public $question_30_label = [0 => '1. didn&CloseCurlyQuote;t sleep', 1 => '2. doesn&CloseCurlyQuote;t sleep', 2 => '3. hasn&CloseCurlyQuote;t slept'];
	
	public $question_31;
	public $question_31_label = [0 => '1. have', 1 => '2. will have', 2 => '3. would have'];
	
	public $question_32;
	public $question_32_label = [0 => '1. must', 1 => '2. is can&CloseCurlyQuote;t', 2 => '3. mustn&CloseCurlyQuote;t'];
	
	public $question_33;
	public $question_33_label = [0 => '1. just', 1 => '2. still', 2 => '3. yet'];
	
	public $question_34;
	public $question_34_label = [0 => '1. someone', 1 => '2. no one', 2 => '3. anyone'];
	
	public $question_35;
	public $question_35_label = [0 => '1. am used to', 1 => '2. get used to', 2 => '3. used to'];
	
	public $question_36;
	public $question_36_label = [0 => '1. paint', 1 => '2. will paint', 2 => '3. would paint'];
	
	public $question_37;
	public $question_37_label = [0 => '1. starts', 1 => '2. is starting', 2 => '3. will start'];
	
	public $question_38;
	public $question_38_label = [0 => '1. worry', 1 => '2. to worry', 2 => '3. worrying'];
	
	public $question_39;
	public $question_39_label = [0 => '1. had been working', 1 => '2. has been working', 2 => '3. had working'];
	
	public $question_40;
	public $question_40_label = [0 => '1. one', 1 => '2. a', 2 => '3. the'];
	
	public $level;
	public $total_question = 40;
	public $total_correct = 0;
	public $total_error = 0;
	public $score = 0.0;
	
	public function calculateScore() {
		$this->title = Yii::t('app', 'Your test result');
		
		switch($this->question_1) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_2) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_3) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_4) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_5) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_6) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_7) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_8) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_9) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_10) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_11) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_12) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_13) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_14) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_15) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_16) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_17) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_18) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_19) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_20) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_21) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_22) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_23) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_24) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_25) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_26) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_27) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_28) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_29) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_30) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_31) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_32) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_33) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_34) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_35) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_36) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_37) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_38) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		switch($this->question_39) {
			case 0:
				$this->total_error = $this->total_error + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
		}
		
		switch($this->question_40) {
			case 0:
				$this->score = $this->score + 2.5;
				$this->total_correct = $this->total_correct + 1;
				break;
			case 1:
				$this->total_error = $this->total_error + 1;
				break;
			case 2:
				$this->total_error = $this->total_error + 1;
				break;
		}
		
		if($this->score < 25.0) {
			$this->level = 'Beginner';
		}
		
		if($this->score > 24.0 and $this->score < 50.0) {
			$this->level = 'Elementary';
		}
		
		if($this->score > 49.0 and $this->score < 75.0) {
			$this->level = 'Intermediate';
		}
		
		if($this->score > 74.0 and $this->score < 100.0) {
			$this->level = 'Upper - Intermediate';
		}
		
		if($this->score === 100.0) {
			$this->level = 'Advanced';
		}
	}
	
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'question_6', 'question_7', 'question_8', 'question_9', 'question_10',
			'question_11', 'question_12', 'question_13', 'question_14', 'question_15', 'question_16', 'question_17', 'question_18', 'question_19', 'question_20',
			'question_21', 'question_22', 'question_23', 'question_24', 'question_25', 'question_26', 'question_27', 'question_28', 'question_29', 'question_30',
			'question_31', 'question_32', 'question_33', 'question_34', 'question_35', 'question_36', 'question_37', 'question_38', 'question_39', 'question_40'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'question_1' => '1. My favorite sport ... tennis.',
			'question_2' => '2. Roberto is Italian. He is ... Italy.',
			'question_3' => '3. ... you help me, please?',
			'question_4' => '4. Ashgabat is the ... of Turkmenistan.',
			'question_5' => '5. I leave for work ... quarter past eight.',
			'question_6' => '6. The doctor told me that I ... smoke.',
			'question_7' => '7. ... that man in the red hat?',
			'question_8' => '8. Is ... your new car? It\'s great!',
			'question_9' => '9. This letter is for Tom. Give it to ... .',
			'question_10' => '10. We ... to school every day.',
			'question_11' => '11. She often ... fish because it\'s good for her.',
			'question_12' => '12. She ... a letter at the moment.',
			'question_13' => '13. What ... on Saturdays?',
			'question_14' => '14. Look at Maral! She ... a red dress today!',
			'question_15' => '15. Yesterday we ... to the cinema and saw a great film.',
			'question_16' => '16. When ... Rome? Last summer or last winter?',
			'question_17' => '17. London is ... than New York.',
			'question_18' => '18. Paris is the ...city I\'ve ever seen.',
			'question_19' => '19. ... your homework yet?',
			'question_20' => '20. ... you help me with my project, please?',
			'question_21' => '21. She was very tired, ... she couldn\'t sleep.',
			'question_22' => '22. She ... get a job as a teacher. She loves children.',
			'question_23' => '23. \'I love going to the beach.\' \'...\'',
			'question_24' => '24. By the time the rain stopped, we ... two pots of coffee.',
			'question_25' => '25. We\'re going to the theater ... a play.',
			'question_26' => '26. You have a pet, ...?',
			'question_27' => '27. If you had studied more, you ... The exam.',
			'question_28' => '28. He can\'t decide who ... to his birthday party.',
			'question_29' => '29. I tried on two pairs of trousers, but ... of them fitted me.',
			'question_30' => '30. He\'s tired. He ... properly for days.',
			'question_31' => '31. If I had a bigger flat, I ... a party.',
			'question_32' => '32. He ... be famous. I\'ve never heard of him.',
			'question_33' => '33. I have ... received a letter from my pen-friend.',
			'question_34' => '34. When I opened the door, there wasn\'t ... there.',
			'question_35' => '35. I live in the city, so I ... busy traffic.',
			'question_36' => '36. When I buy a new house, I ... every room myself.',
			'question_37' => '37. We must run to the cinema. The film ... In five minutes.',
			'question_38' => '38. It\'s no use ... about the exam results. You\'ll know soon enough.',
			'question_39' => '39. He was dirty because he ... In the garden.',
			'question_40' => '40. We live in ... large block of flats.',
			
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
    public function sendTestResult($view, $params = [])
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
