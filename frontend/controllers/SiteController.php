<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
use common\models\MailDrivers;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Posts;
use frontend\models\News;
use frontend\models\Labels;
use yii\data\Pagination;
use yii\web\Cookie;
use common\models\Drivers;
use common\models\TypeCpp;
use common\models\TypeGbo;
use common\models\AutoArenda;
use common\models\CarMark;
use common\models\CarModel;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * {@inheritdoc}
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
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	public function actionTest()
    {
        return $this->render('test');
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionOrder(){
    	Yii::$app->controller->enableCsrfValidation = false;
    	return $this->render('order');
    }
	public function actionFaq(){
		return $this->render('faq');
	}
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    public function actionArenda(){
    	$auto_filter = CarMark::find()->asArray()->all();
    	$gbo = TypeGbo::find()->asArray()->all();
    	$models = CarModel::find()->all();
    	if(!empty(Yii::$app->request->get())){
    		
    		$filter = array();
    		
    		
    		if(!empty(Yii::$app->request->get('marka'))){
    			$filter += ['marka'=>Yii::$app->request->get('marka')];
    			
    			
    		}
    		if(!empty(Yii::$app->request->get('model'))){
    			$filter += ['model'=>Yii::$app->request->get('model')];
    		}
    		if(!empty(Yii::$app->request->get('type_gbo'))){
    			$filter += ['type_gbo'=>Yii::$app->request->get('type_gbo')];
    		}
    		if(!empty($filter)){
    			$auto = AutoArenda::find()->where($filter)->orderBy('maska_svobody')->asArray()->all();
    		}else{
    			$auto = AutoArenda::find()->orderBy('maska_svobody')->asArray()->all();
    		}
    		
    		
    		
    		$modelss = CarModel::find()->where(['id_car_mark'=>Yii::$app->request->get('marka')])->asArray()->all();
    		
    	}else{
    		$auto = AutoArenda::find()->orderBy('maska_svobody')->asArray()->all();

    	}
    	$modelss = '';
    	return $this->render('arenda', ['gbo'=>$gbo, 'auto_filter'=>$auto_filter, 'auto'=>$auto, 'models'=>$models,'modelss'=>$modelss]);
    } 
    public function actionAuto(){
    	if(!empty(Yii::$app->request->get('id'))){
    		$auto = AutoArenda::find()->where(['id'=>Yii::$app->request->get('id')])->asArray()->one();
    		
    		$models = CarModel::findOne($auto['model']);
    		$marks = CarMark::findOne($auto['marka']);
    		
    		$gbo = TypeGbo::findOne($auto['type_gbo']);
    		$kpp = TypeCpp::findOne($auto['type_kpp']);
    		return $this->render('auto', ['auto'=>$auto, 'model'=>$models, 'marka'=>$marks, 'gbo'=>$gbo, 'kpp'=>$kpp]);
    	}
    }
    public function actionGet_model(){
    	
    	$models = CarModel::find()->where(['id_car_mark'=>Yii::$app->request->get('marka_id')])->asArray()->all();
    	$models = json_encode($models);
    	echo $models;
    }
    public function actionSpares(){
    	
    	if (!isset(Yii::$app->request->cookies['position'])) {
    		if(Yii::$app->request->post()){
    			//Авторизация водителя
    			$driver = Drivers::find()->where(['position'=>Yii::$app->request->post('pos')])->asArray()->one();
    			
    			if(!empty($driver)){
    				//успешно	
    				//Добавление куки
    				Yii::$app->response->cookies->add(new Cookie([
    						'name' => 'position',
    						'value' => $driver['position'],
    						'expire' => time() + 900  //Храниение авторизации 15 минут
    				]));
    				$this->redirect(['site/spares']);
    			}else{
    				//неуспешно
    				$this->redirect(['site/spares']);	
    			}
    		}else{
    			return $this->render('spares-form');
    		}
    	}else{
    		$cookie = Yii::$app->request->cookies['position'];
    		$driver = Drivers::find()->where(['position'=> $cookie->value])->asArray()->one();
    		
    		
    		
    		return $this->render('spares', ['driver'=>$driver]);
    	}
    	
    	
    	//return $this->render('spares');
    }
	public function actionNews(){
		$query = News::find();
		
		$pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
		
		$news = $query->orderBy('create_date DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		
		return $this->render('news',[
            'news' => $news,
            'pagination' => $pagination,
        ]);
	}
	public function actionPosts(){
		
		$labels = Labels::find()->asArray()->all();
		$key = 0;
		foreach($labels as $label){
			$labels[$key]['count'] = Posts::find()->where(['labels_id'=>$label['id']])->count();
			$key++;
		}
		
		
		
		$query = Posts::find();
		
		$all_query = $query->count();
		
		
		
		if(empty($_GET['label'])){
			$pagination = new Pagination([
	            'defaultPageSize' => 10,
	            'totalCount' => $query->count(),
	        ]);
			$posts = $query->orderBy('create_date DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
			->asArray()
            ->all();	
			
		}else{
			$label_id = intval($_GET['label']);
			$pagination = new Pagination([
	            'defaultPageSize' => 10,
	            'totalCount' => $query->where(['labels_id'=>$label_id])->count(),
	        ]);
			$posts = $query->orderBy('create_date DESC')
			->where(['labels_id'=>$label_id])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
			->asArray()
            ->all();
		}
		
		
		
		return $this->render('posts',[
            'posts' => $posts,
            'pagination' => $pagination,
            'labels' => $labels,
            'all_posts' => $all_query
        ]);
	}
	public function actionPost($id){
		$post = Posts::findOne($id);
		return $this->render('post_view',['post'=>$post]);
	}
	public function actionNew($id){
		$new = News::findOne($id);
		return $this->render('post_view',['post'=>$new]);
	}
	public function actionConnect_go(){
		$post = Yii::$app->request->post();
		
		if(!empty($post)){
			// Сохраняем водителя
			$driver = new MailDrivers();
			
			$driver->family 	   = Yii::$app->request->post('family');
			$driver->name 		   = Yii::$app->request->post('name');
			$driver->last_name 	   = Yii::$app->request->post('lastname');
			$driver->phone 		   = Yii::$app->request->post('phone');
			$driver->vu_seria      = Yii::$app->request->post('v-seria');
			$driver->vu_number     = Yii::$app->request->post('v-number');
			$driver->vu_date_start = Yii::$app->request->post('v-date');
			$driver->vu_date_stop  = Yii::$app->request->post('v-date-end');
			$driver->sts_marka     = Yii::$app->request->post('a-marka');
			$driver->sts_model     = Yii::$app->request->post('a-model');
			$driver->sts_year      = Yii::$app->request->post('a-year');
			$driver->sts_color     = Yii::$app->request->post('a-color');
			$driver->sts_gosnumber = Yii::$app->request->post('a-number');
			$driver->type          = Yii::$app->request->post('type');
			$driver->save();
			
			// Запрашиваем email пользователей у которых включено оповещение о новых водителей
			$users = User::find()->joinWith('info')->where(['user_info.message_ya' => 1])->all();
			 // Собираем все email для оповещения
			foreach($users as $user){
				if($i = 1){
					$emails = $user->email;	
				}else{
					$emails .= ', '.$user->email;	
				}
				
			}
			
			$messg = '<ul>
				<li>Фамилия: '.Yii::$app->request->post('family').'</li>
				<li>Имя: '.Yii::$app->request->post('name').'</li>
				<li>Отчество: '.Yii::$app->request->post('lastname').'</li>
				<li>Телефон: '.Yii::$app->request->post('phone').'</li>
			</ul>
			<p>Заявка водителя добавлена в БД в личном кабинете</p>';
			
			//$mail = new swiftmailer();
			
			Yii::$app->mailer->compose()
		    ->setFrom('info@route34.ru')
		    ->setTo($emails)
		    ->setSubject('Заявка от нового водителя на подключение к yandex такси')
		    ->setHtmlBody($messg)
		    ->send();
			Yii::$app->view->registerMetaTag(['http-equiv' => 'Refresh','content' => '5; url=/']);
			return $this->render('connect_go');	
		}else{
			echo "ОШИБКА";
		}
		
	}
	public function actionConnect(){
		return $this->render('form');
	}
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
