$( document ).ready(function() {
    	$('.button').on('click', function(){
    		$('.roleTop').toggleClass('transition-top');
    		$('.roleLayer').toggleClass('transition-rolelayer');
    		$('.layer').toggleClass('transition-layer');
		});


        $('.morgens').on('click', function(){
           $('#sonne_mittag').css('display', 'none');
           $('#sterne').css('display', 'none');
           $('#mond').css('display', 'none');
        });
});

$(function () {
    var gruppe;
    $('.form').on('submit', function (e) {
        $("input[name='gruppe']:checked").each(function () {
            gruppe =  $(this).val();
        });

        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'result.php',
            dataType: 'json',
            data: 'gruppe='+gruppe,
            success: function(data){
                $('#cactus-body-1').css({
                    'transform': 'translate(0,' + data['antwort-1'].pixel + 'px)'
                });
                $('#antwort-1-text').text(Math.round(data['antwort-1'].prozent * 10) / 10 + '%');

                $('#cactus-body-2').css({
                    'transform': 'translate(0,' + data['antwort-2'].pixel + 'px)'
                });
                $('#antwort-2-text').text(Math.round(data['antwort-2'].prozent * 10) / 10 + '%');

                $('#cactus-body-3').css({
                    'transform': 'translate(0,' + data['antwort-3'].pixel + 'px)'
                });
                $('#antwort-3-text').text(Math.round(data['antwort-3'].prozent * 10) / 10 + '%');

                $('#cactus-body-4').css({
                    'transform': 'translate(0,' + data['antwort-4'].pixel + 'px)'
                });
                $('#antwort-4-text').text(Math.round(data['antwort-4'].prozent * 10) / 10 + '%');

                $('#cactus-body-5').css({
                    'transform': 'translate(0,' + data['antwort-5'].pixel + 'px)'
                });
                $('#antwort-5-text').text(Math.round(data['antwort-5'].prozent * 10) / 10 + '%');
            }
        });

    })

});

