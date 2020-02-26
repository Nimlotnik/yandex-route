<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html; 
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<div class="auth-form">
	<div class="box-form">
	    <h1>Авторизация</h1>
	
	
	    <div class="row">
	        <div class="col-lg-12 auth-input">
	            
	
	                <?= $form->field($model, 'username')->textInput(['placeholder'=>'Логин'])->label(false)->error(false) ?>
	
	                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Пароль'])->label(false)->error(false) ?>
	
	                <div class="form-group">
	                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
	                </div>
	        </div>
	    </div>
    </div>
    <div class="row">
    	<div class="col-md-6">
    		<!-- /request-password-reset -->
    		<a href="#" class="forgot-pass">Забыли пароль?</a>
    	</div>
    	<div class="col-md-6 text-right">
    		<?= $form->field($model, 'rememberMe')->checkbox()->label("Запомнить") ?>		
    	</div>
    </div>
	    
</div>

 <?php ActiveForm::end(); ?>