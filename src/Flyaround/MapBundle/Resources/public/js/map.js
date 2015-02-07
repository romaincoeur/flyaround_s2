$(function () {

    //$('header').delay(1000).animate({marginTop: '-40px'});

    $('#news-button').click(function () {
        if ($('#news-panel').css('marginLeft') == '0px') {
            $('#news-panel').animate({marginLeft: '-45%'});
        }
        else {
            $(".panel").each(function (index) {
                $(this).animate({marginLeft: '-45%'});
            });
            $('#news-panel').animate({marginLeft: '0'});
        }
    });
    $('#flylist-button').click(function () {
        if ($('#flylist-panel').css('marginLeft') == '0px') {
            $('#flylist-panel').animate({marginLeft: '-45%'});
        }
        else {
            $(".panel").each(function (index) {
                $(this).animate({marginLeft: '-45%'});
            });
            $('#flylist-panel').animate({marginLeft: '0'});
        }
    });
    $('#myadds-button').click(function () {
        if ($('#myadds-panel').css('marginLeft') == '0px') {
            $('#myadds-panel').animate({marginLeft: '-45%'});
        }
        else {
            $(".panel").each(function (index) {
                $(this).animate({marginLeft: '-45%'});
            });
            $('#myadds-panel').animate({marginLeft: '0'});
        }
    });
    $('#favorites-button').click(function () {
        if ($('#favorites-panel').css('marginLeft') == '0px') {
            $('#favorites-panel').animate({marginLeft: '-45%'});
        }
        else {
            $(".panel").each(function (index) {
                $(this).animate({marginLeft: '-45%'});
            });
            $('#favorites-panel').animate({marginLeft: '0'});
        }
    });
    $('#profile-button').click(function () {
        if ($('#profile-panel').css('marginLeft') == '0px') {
            $('#profile-panel').animate({marginLeft: '-45%'});
        }
        else {
            $(".panel").each(function (index) {
                $(this).animate({marginLeft: '-45%'});
            });
            $('#profile-panel').animate({marginLeft: '0'});
        }
    });

    $(".vue").mouseenter(function(){
        $(this).addClass("effet");
    });
    $(".vue").mouseleave(function(){
        $(this).removeClass("effet");
    });

})


