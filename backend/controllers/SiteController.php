<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\MailDrivers;
use yii\data\Pagination;
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
	public $enableCsrfValidation = false;
	/**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['Mehanic'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	/*$this->layout = 'main';*/
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
    	$this->layout = 'auth';
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
    	
    	if(isset($_GET['sv'])){
    		
    		
    		switch($_GET['sv']){
    			case "0": $auto = AutoArenda::find()->where(['maska_svobody'=> 0])->asArray()->all();break;
    			case "1": $auto = AutoArenda::find()->where(['maska_svobody'=> 1])->asArray()->all();break;
    			default: $auto = AutoArenda::find()->orderBy('maska_svobody')->asArray()->all();
    		}
    	}else{
    		$auto = AutoArenda::find()->orderBy('maska_svobody')->asArray()->all();
    	}
    	 
    	
    	$cpp = TypeCpp::find()->asArray()->all();
    	$gbo = TypeGbo::find()->asArray()->all();
    	
    	
    	return $this->render('auto_arenda', ['auto_arenda'=>$auto, 'cpp'=>$cpp, 'gbo'=>$gbo]);
    }
    public function actionArendaAdd(){
    	
    	
    	$upload_dir = $_SERVER['DOCUMENT_ROOT'].'/images/';
    	
    	if(!empty($_GET['auto']) && empty($_POST)){
    		
    		$auto = AutoArenda::findOne($_GET['auto']);
    		
    		$cpp = TypeCpp::find()->asArray()->all();
    		$gbo = TypeGbo::find()->asArray()->all();
    		$marka = CarMark::find()->asArray()->all(); 
    		$model = CarModel::find()->where(['id_car_mark'=>$auto->marka])->asArray()->all();
    		return $this->render('auto_arenda_add', ['cpp'=> $cpp, 'gbo'=>$gbo, 'auto'=>$auto, 'marka'=>$marka, 'model'=>$model]);
    	}elseif(!empty($_POST)){
    		$photo = '';
    		if(!empty($_FILES)){
    			$cnt = count($_FILES['files']['name']) - 1;
    			for($i=0; $i <= $cnt; $i++){
    				$tmp_name = $_FILES["files"]["tmp_name"][$i];
    				$file = explode('.', $_FILES["files"]["name"][$i]);
    				$cnts = count($file)-1;
    				$len = strlen($file[$cnts]) * -1; 
    				$fl = substr($_FILES["files"]["name"][$i], 0, $len);
    				$n = $fl.'_'.time().'.'.$file[$cnts];
    				$name = basename($n);
    				if(move_uploaded_file($tmp_name, "$upload_dir/$name")){
    					$photo .= $name.', ';
    				}
    				
    			}
    		}
    		
    		if(!empty($_GET['auto'])){
    			$new_auto = AutoArenda::findOne($_GET['auto']);
    			if($_FILES['files']['error'][0] != 4){
    				$new_auto->photo = $photo;
    			}
    		}else{
    			$new_auto = new AutoArenda;
    			$new_auto->photo     = $photo;
    		}
    		$new_auto->marka         = Yii::$app->request->post('marka');
    		$new_auto->model         = Yii::$app->request->post('model');
    		$new_auto->year          = Yii::$app->request->post('year');
    		$new_auto->type_gbo      = Yii::$app->request->post('type_gbo');
    		$new_auto->type_kpp      = Yii::$app->request->post('type_kpp');
    		$new_auto->description   = Yii::$app->request->post('description');
    		$new_auto->phone         = Yii::$app->request->post('phone');
    		$new_auto->maska_svobody = (Yii::$app->request->post('maska_svobody')=="on")?1:0;
    		$new_auto->price         = Yii::$app->request->post('price');
    		$new_auto->maska_vykyp   = (Yii::$app->request->post('maska_vykyp')=="on")?1:0;
    		$new_auto->gos_number    = Yii::$app->request->post('gos_number');

    		
			if($new_auto->save()){
    			$this->redirect('/admin/arenda');
    		}else{
    			echo "<pre>";
    			print_r($new_auto->getErrors());
    			echo "</pre>";
    		}
    	}else{
    		$marka = CarMark::find()->asArray()->all(); 
	    	$cpp = TypeCpp::find()->asArray()->all();
	    	
	    	$gbo = TypeGbo::find()->asArray()->all();
	    	return $this->render('auto_arenda_add', ['cpp'=> $cpp, 'gbo'=>$gbo, 'marka'=>$marka]);
    	}
    }
    
    public function actionDriversAdd(){
    	if(Yii::$app->request->post()){
    		$driver = new Drivers;
    		$driver->position = Yii::$app->request->post('position');
    		$driver->name = Yii::$app->request->post('name');
    		$driver->vin = Yii::$app->request->post('vin');
    		
    		if($driver->save()){
    			return $this->redirect(['site/drivers']);
    		}else{
    			echo "Ошибка SQL";
    		}
    	}else{
    		return $this->render('drivers-add');
    	}
    }
    public function actionDrivers(){
    	$query = Drivers::find()->orderBy('position ASC');
    	$countQuery = clone $query;
    	$pages = new Pagination(['totalCount' => $countQuery->count()]);
    	
    	$drivers = $query->offset($pages->offset)->limit($pages->limit)->all();
    	
    	return $this->render('drivers-all', ['drivers' => $drivers, 'pages'=>$pages]);
    }
	public function actionMails(){
		
		if(!empty($_GET['id'])){
			$mails = MailDrivers::findOne($_GET['id']);
			return $this->render('get_driver_mails', ['driver'=>$mails]);
		}else{
			$query = MailDrivers::find()->orderBy('date_add DESC');
			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count()]);
			
			$mails = $query->offset($pages->offset)->limit($pages->limit)->all();
			return $this->render('mails', ['drivers'=>$mails, 'pages'=>$pages]);	
		}
		
		
	}
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
