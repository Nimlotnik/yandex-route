$(document).ready(function(){
	$('#file').change(function(){
		files = this.files;
		s = '';
		for(var a=0;a<files.length;a++){
			s = s + '"' + files[a].name + '",' + ' ';
		}
		$('.img_input').val(s);
	})
})