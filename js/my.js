$( document ).ready(function() {

    /* function for layer */
    $('.button').on('click', function(){
        $('.roleTop').toggleClass('transition-top');
        $('.roleLayer').toggleClass('transition-rolelayer');
        $('.layer').toggleClass('transition-layer');
    });

    /* function for navigation - window transition */
    $('.mittags').on('click', function(){
       $('#sonne_morgens').css({
           'transform' : 'translate(75px, -145px)',
           'transition' : 'transform 2s'
       });
       $('#himmel').css({
           'fill': '#B9E3F3',
           'transition' : 'fill 2s'
       })
       $('#sterne').css('display', 'none');

        $('#mond').css({
            'transform' : 'translate(300px, 330px)',
            'transition' : 'transform 2s'
        });
    });


    $('.morgens').on('click', function(){
        $('#sonne_morgens').css({
            'transform' : 'translate(0, 0)',
            'transition' : 'transform 2s'
        });
        $('#himmel').css({
            'fill': '#408CBB',
            'transition' : 'fill 2s'
        })
        $('#sterne').css('display', 'block');
        $('#mond').css({
            'transform' : 'translate(-300px, 330px)',
            'transition' : 'transform 2s'
        });
    });

    $('.abends').on('click', function(){
        $('#sonne_morgens').css({
            'transform' : 'translate(270px, 260px)',
            'transition' : 'transform 2s'
        });
        $('#himmel').css({
            'fill': '#000',
            'transition' : 'fill 2s'
        })
        $('#sterne').css('display', 'block');
        $('#mond').css({
            'transform' : 'translate(15px, -25px)',
            'transition' : 'transform 2s'
        });
    });
});


/* ajax function for dynamic grow of cati (diagram)  */
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
