$( document ).ready(function() {

    /* function for layer */
    $('.button').on('click', function(){
        $('.roleTop').toggleClass('transition-top');
        $('.roleLayer').toggleClass('transition-rolelayer');
        $('.layer').toggleClass('transition-layer');
    });

    /* function for navigation - window transition */
    var flag = 0; /* flag for my practice function to decide which practice to show */

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

        flag = 1
    });

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

        flag = 2
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

        flag = 3

    });

    /* show the practices */

    $('#lampe').on('click', function() {
        if (flag === 1) {
            $('#uebung-morgen').css({
                'display' : 'block'
            });
        }
        else if (flag === 2 ) {
            $('#uebung-mittag').css({
                'display' : 'block'
            });
        }

        else if (flag === 3 ) {
            $('#uebung-abend').css({
                'display' : 'block'
            });
        }
        else {
            console.log('flag isnt 1, 2 or 3' );
        }

    });

    /* close the practices */

    $('#uebung-morgen').on('click', function () {
        $('#uebung-morgen').css({
            'display' : 'none'
        });
    });

    $('#uebung-mittag').on('click', function () {
        $('#uebung-mittag').css({
            'display' : 'none'
        });
    });

    $('#uebung-abend').on('click', function () {
        $('#uebung-abend').css({
            'display' : 'none'
        });
    });

    /* making answer-text visible on hover */

    $('#cactus-1').on('mouseenter', function() {
        $('#antwort-1-text').css({
            'display': 'block'
        });
    });

    $('#cactus-1').on('mouseleave', function() {
        $('#antwort-1-text').css({
            'display': 'none'
        });
    });

    $('#cactus-2').on('mouseenter', function() {
        $('#antwort-2-text').css({
            'display': 'block'
        });
    });

    $('#cactus-2').on('mouseleave', function() {
        $('#antwort-2-text').css({
            'display': 'none'
        });
    });

    $('#cactus-3').on('mouseenter', function() {
        $('#antwort-3-text').css({
            'display': 'block'
        });
    });

    $('#cactus-3').on('mouseleave', function() {
        $('#antwort-3-text').css({
            'display': 'none'
        });
    });

    $('#cactus-4').on('mouseenter', function() {
        $('#antwort-4-text').css({
            'display': 'block'
        });
    });

    $('#cactus-4').on('mouseleave', function() {
        $('#antwort-4-text').css({
            'display': 'none'
        });
    });

    $('#cactus-5').on('mouseenter', function() {
        $('#antwort-5-text').css({
            'display': 'block'
        });
    });

    $('#cactus-5').on('mouseleave', function() {
        $('#antwort-5-text').css({
            'display': 'none'
        });
    });
});


/* ajax function for dynamic grow of cati (diagram) */
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
                $('#antwort-1-ergebnis').text(Math.round(data['antwort-1'].prozent * 10) / 10 + '%');

                $('#cactus-body-2').css({
                    'transform': 'translate(0,' + data['antwort-2'].pixel + 'px)'
                });
                $('#antwort-2-ergebnis').text(Math.round(data['antwort-2'].prozent * 10) / 10 + '%');

                $('#cactus-body-3').css({
                    'transform': 'translate(0,' + data['antwort-3'].pixel + 'px)'
                });
                $('#antwort-3-ergebnis').text(Math.round(data['antwort-3'].prozent * 10) / 10 + '%');

                $('#cactus-body-4').css({
                    'transform': 'translate(0,' + data['antwort-4'].pixel + 'px)'
                });
                $('#antwort-4-ergebnis').text(Math.round(data['antwort-4'].prozent * 10) / 10 + '%');

                $('#cactus-body-5').css({
                    'transform': 'translate(0,' + data['antwort-5'].pixel + 'px)'
                });
                $('#antwort-5-ergebnis').text(Math.round(data['antwort-5'].prozent * 10) / 10 + '%');
            }
        });

    })

});
