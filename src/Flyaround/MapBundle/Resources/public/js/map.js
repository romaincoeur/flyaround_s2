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
    $('#newfly-button').click(function () {
        if ($('#newfly-panel').css('marginLeft') == '0px') {
            $('#newfly-panel').animate({marginLeft: '-45%'});
        }
        else {
            $(".panel").each(function (index) {
                $(this).animate({marginLeft: '-45%'});
            });
            $('#newfly-panel').animate({marginLeft: '0'});

            // creation du marker
            //création du marqueur
            marqueur = new google.maps.Marker({
                position: new google.maps.LatLng(48.8567,2.3508),
                draggable: true,
                map: map
            });
            google.maps.event.addListener(marqueur, 'dragend', function(event) {
                map.setCenter(marqueur.getPosition());
                $('input[name="flyaround_mapbundle_fly[latitude]"]').attr('value', marqueur.getPosition().lat());
                $('input[name="flyaround_mapbundle_fly[longitude]"]').attr('value', marqueur.getPosition().lng());
            });
            google.maps.event.addListener(map, 'dragend', function() {
                marqueur.setPosition(map.getCenter());
                $('input[name="flyaround_mapbundle_fly[latitude]"]').attr('value', map.getCenter().lat());
                $('input[name="flyaround_mapbundle_fly[longitude]"]').attr('value', map.getCenter().lng());
            });
            google.maps.event.addListener(map, 'zoom_changed', function() {
                marqueur.setPosition(map.getCenter());
                $('input[name="flyaround_mapbundle_fly[latitude]"]').attr('value', map.getCenter().lat());
                $('input[name="flyaround_mapbundle_fly[longitude]"]').attr('value', map.getCenter().lng());
            });
        }
    });

    $(".vue").mouseenter(function(){
        $(this).addClass("effet");
    });
    $(".vue").mouseleave(function(){
        $(this).removeClass("effet");
    });

});

function closeAirportPanel() {
    $(".panel").each(function (index) {
        $(this).animate({marginLeft: '-45%'});
    });
    markers.forEach(function(current){
        current.setIcon(icon_airport);
    })
}

