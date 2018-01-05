$(document).ready(function(){
	$("input.form-control").focus(function(){
		$(this).parent().addClass("focused");
	}).blur(function(){
		$(this).parent().removeClass("focused");
	});


/* waves effect */
	$('button[type="submit"],.btn.btn-flat').append("<div class='wave'></div>");
	$('button[type="submit"],.btn.btn-flat').mousedown(function(e){
		var wave = $(this).children('.wave');
	  var className = 'material-btn--active';
	  if($(this).hasClass(className)){
	  	$(this).removeClass(className);
	  }
		var left = e.clientX - $(this).offset().left;
	  var top = e.clientY - $(this).offset().top + $(window).scrollTop(); 
	  wave.css("left",left);
	  wave.css("top",top);
	  $(this).addClass(className);
	});
	/*waves effect*/



});