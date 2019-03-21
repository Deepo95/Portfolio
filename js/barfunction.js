function main(){
(

function(){
	$(window).bind('scroll',function(){
		var navHeight = $(window).height() - 200;
		if($('#nav1').offset().top > navHeight)
		{$('.masterbar').addClass('abc');}
	else{$('.masterbar').removeClass('abc');}
	})
          }
  ()
)

}
main();