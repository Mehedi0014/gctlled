
$(document).ready(function() {

    $(".owl-carousel").owlCarousel({
        loop: 1,
        autoplay: 1,
        margin: 0,
        nav: 0,
        dots: 0,
        // lazyLoad: 1,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    // $(".owl-carousel .owl-item img").addClass("owl-lazy");
    // $(".owl-carousel .owl-item img").css({"opacity":"1"});

    // var src1 = 'url_to_img';
    // $(".owl-carousel .owl-item img").attr("data-src", src1);

    // var src2 = 'url_to_highres_img';
    // $(".owl-carousel .owl-item img").attr("data-src-retina", src2);

    






    $(window).scroll(function(){
      if ($(window).scrollTop() >= 100) {
        $('.sticky_header').addClass('fixedElement');
       }
       else {
        $('.sticky_header').removeClass('fixedElement');
       }
    });
    
    
    
  
	$('.moreless-button').click(function() {
	  $('.homePageReadMoreLessOneBottom').slideToggle();
	  if ($('.moreless-button').text() == "Read more") {
	    $(this).text("Read less")
	  } else {
	    $(this).text("Read more")
	  }
	});

    
    
    
    
    
    


}); // Close document dot ready.





// Accordion JQuery Version ===================================

$(".accordion").click(function(){
	var aaa = $(this)
	var has = aaa.hasClass("active")
	$(".accordion").each(function(){
		$(this).removeClass("active")
		$(".panel").css({"height": "0"})
	});
	if (has) {
		aaa.removeClass("active")
		aaa.next(".panel").css({"height": "0"})
	}else{
		aaa.addClass("active")
		aaa.next(".panel").css({"height": "auto"})
	}
});
