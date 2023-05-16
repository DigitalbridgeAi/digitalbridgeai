function checkScroll(){
	if ($(window).scrollTop() >= 100) {
			$('header').addClass('scrolled');
	} else {
			$('header').removeClass('scrolled');
	}
}

$(document).ready(function(){
var winWidth = window.innerWidth;
	checkScroll();
	$(window).scroll(checkScroll);

$(document).on('click','.LoadMore',function(e) {
  e.preventDefault();
  var El = $(this);
  El.html('<img src="/images/layout/loading.gif" />');
  $.get(El.attr('href'),function(data) {
  El.replaceWith(data);
  });
});

$('.sp').click(function() {
		var thisHash = this.hash;
		$('html, body').animate({
					scrollTop: $(thisHash).offset().top - 70
						}, 900);
		});

}); 



if(window.location.hash) {
		// smooth scroll to the anchor id
		$('html, body').animate({
				scrollTop: $(window.location.hash).offset().top - 70
		}, 900);
}

$(function() {
	if( getCookie('DB-cookie-notice-accepted') == '' ) {
		$('#cookie-notice').removeClass('accepted');
	}
	$(document).on('click','#cn-accept-cookie',function() {
		setCookie('DB-cookie-notice-accepted','1',30);
		$('#cookie-notice').addClass('accepted');
	});
});

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
} 