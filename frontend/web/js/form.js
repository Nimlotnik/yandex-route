$(document).ready(function(){
	$('input[name=v-seria]').focus(function(){
		$(this).removeAttr('style');
		$('.vu-photo-block').css('background', "url('../images/v_seria.jpg') no-repeat left top /contain");
		$('.vu-photo-block2').css('background', "url('../images/v_seria2.jpg') no-repeat left top /contain");
	})
	$('input[name=v-seria]').focusout(function(){
		$('.vu-photo-block').removeAttr('style');
		$('.vu-photo-block2').removeAttr('style');
	})
	
	$('input[name=v-number]').focus(function(){
		$(this).removeAttr('style');
		$('.vu-photo-block').css('background', "url('../images/v_number.jpg') no-repeat left top /contain");
		$('.vu-photo-block2').css('background', "url('../images/v_number2.jpg') no-repeat left top /contain");
	})
	$('input[name=v-number]').focusout(function(){
		$('.vu-photo-block').removeAttr('style');
		$('.vu-photo-block2').removeAttr('style');
	})
	
	$('input[name=v-date]').focus(function(){
		$(this).removeAttr('style');
		$('.vu-photo-block').css('background', "url('../images/v_data.jpg') no-repeat left top /contain");
		$('.vu-photo-block2').css('background', "url('../images/v_data2.jpg') no-repeat left top /contain");
	})
	$('input[name=v-date]').focusout(function(){
		$('.vu-photo-block').removeAttr('style');
		$('.vu-photo-block2').removeAttr('style');
	})
	
	$('input[name=v-date-end]').focus(function(){
		$(this).removeAttr('style');
		$('.vu-photo-block').css('background', "url('../images/v_data_end.jpg') no-repeat left top /contain");
		$('.vu-photo-block2').css('background', "url('../images/v_data_end2.jpg') no-repeat left top /contain");
	})
	$('input[name=v-date-end]').focusout(function(){
		$('.vu-photo-block').removeAttr('style');
		$('.vu-photo-block2').removeAttr('style');
	})
	
	$('input[name=a-marka],input[name=a-model]').focus(function(){
		$(this).removeAttr('style');
		$('.sts-photo-block').css('background', "url('../images/marka_model.jpg') no-repeat left top /contain");
	})
	$('input[name=a-marka],input[name=a-model]').focusout(function(){
		$('.sts-photo-block').removeAttr('style');
	})
	$('input[name=a-year]').focus(function(){
		$(this).removeAttr('style');
		$('.sts-photo-block').css('background', "url('../images/god.jpg') no-repeat left top /contain");
	})
	$('input[name=a-year]').focusout(function(){
		$('.sts-photo-block').removeAttr('style');
	})
	$('input[name=a-number]').focus(function(){
		$(this).removeAttr('style');
		$('.sts-photo-block').css('background', "url('../images/gos_number.jpg') no-repeat left top /contain");
	})
	$('input[name=a-number]').focusout(function(){
		$('.sts-photo-block').removeAttr('style');
	})
	$('select[name=a-color], input[name=family], input[name=name], input[name=lastname], input[name=phone]').focus(function(){
		$(this).removeAttr('style');
	})
	$('#go-form').click(function(){
		var err = false;
		var err2 = false;
		if(!$('input[name=family]').val().trim()){
			$('input[name=family]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=name]').val().trim()){
			$('input[name=name]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=lastname]').val().trim()){
			$('input[name=lastname]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=phone]').val().trim()){
			$('input[name=phone]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=v-seria]').val().trim()){
			$('input[name=v-seria]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=v-number]').val().trim()){
			$('input[name=v-number]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=v-date]').val().trim()){
			$('input[name=v-date]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=v-date-end]').val().trim()){
			$('input[name=v-date-end]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=a-marka]').val().trim()){
			$('input[name=a-marka]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=a-model]').val().trim()){
			$('input[name=a-model]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=a-year]').val().trim()){
			$('input[name=a-year]').css('border-color', 'red');
			err = true;
		}
		if(!$('input[name=a-number]').val().trim()){
			$('input[name=a-number]').css('border-color', 'red');
			err = true;
		}
		if(!$('select[name=a-color]').val().trim()){
			$('select[name=a-color]').css('border-color', 'red');
			err = true;
		}
		if(!$('#dogovor_check').prop("checked")){
			err2 = true;
		}
		if(err){
			$('.error').css('visibility', 'visible');
		}else{
			$('.error').css('visibility', 'hidden');
			//$('.my-form').submit();
		}
		if(err2){
			$('.error-check').css('visibility', 'visible');
		}else{
			$('.error-check').css('visibility', 'hidden');
		}
		if(!err && !err2){
			$('.my-form').submit();
		}
	})
})
