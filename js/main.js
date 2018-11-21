$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll >= 300 && scroll <= 400) {
	    $(".nav-style").css("background" , "rgba(0, 0, 0, 0.4)");
	  }
	  else if (scroll >= 400 && scroll <= 500) {
	    $(".nav-style").css("background" , "rgba(0, 0, 0, 0.5)");
	  }
	  else if (scroll >= 500 && scroll <= 600) {
	    $(".nav-style").css("background" , "rgba(0, 0, 0, 0.6)");
	  }
	  else if (scroll >= 600) {
	    $(".nav-style").css("background" , "rgba(0, 0, 0, 0.85)");
	  }
	  else{
		  $(".nav-style").css("background" , "rgba(0, 0, 0, 0.25)");  	
	  }
  })
})