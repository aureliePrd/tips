if(window.location.hash) {
	console.log('there is a hash in the current location');
}

if(window.location.hash.substring(1)  == 'myhashhere') {
	console.log('in the current location, hash value is myhashhere');
}

$('body').on('click', 'a.mylink', function (e) {      
  var url = this.href
      hash = url.split('#')[1];

  if (hash == 'top') {
      e.preventDefault();          
      setTimeout(function(){        
        $('html, body').animate({scrollTop: $('.element_wheretoScroll').offset().top - 0}, 300);      
        $(".element_wheretoScroll input:text").first().focus();
      }, 100); 
  } 

});




/* Depuis footer, element avec id #top => Scroll To Top */
$("#top").on('click', function(){
    $("html, body").animate({ scrollTop: 0 }, "slow");   
 });

/*ScrollTo specific element */
var scrollToTarget = $('.element_wheretoScroll');
$('html, body').animate({scrollTop: scrollToTarget.offset().top - 0}, 600);


//$('body').scrollTo('#target');

$('body').on('click', 'a.button', function (e) {
    if (/#/.test(this.href)) {
    //if ($(this).is('[href*="#"]')) {
        e.preventDefault();
    }
});