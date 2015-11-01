$( document ).ready(function() {
    	$('.button').on('click', function(){
    		$('.roleTop').toggleClass('transition-top');
    		$('.roleLayer').toggleClass('transition-rolelayer');
    		$('.layer').toggleClass('transition-layer');
            $('.layer').empty();
		});



        $('.morgens').on('click', function(){
           $('#sonne_mittag').css('display', 'none');
           $('#stern').css('display', 'none');
           $('#mond').css('display', 'none');
        });
});
