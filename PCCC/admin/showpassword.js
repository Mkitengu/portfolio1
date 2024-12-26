$(document).ready(function(){
	$('#eye').click(function(){
		$(this).toggleClass('open');
		$(this).children('i').toggleClass('icon-eye-close open');
		if($(this).hasClass('open')){
			$(this).prev().attr('type','email');
		}else{
		   $(this).prev().attr('type', 'password')
		}
	});
	
});