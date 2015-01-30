$(function () {
    $('.carousel a:gt(4)').css('display', 'none');
    var div = $('.carousel')[0];
    $.data(div, 'values', {orignal_carousel: true, offset: 0, transDivs: 0});

    $('#right-arrow').click(function () {
        if ($.data(div, 'values').orignal_carousel) {
            //Decalage vers la gauche
            $('.carousel a:first').animate({marginLeft: '-145px'}).css({ 'opacity': 0.5 }).queue(function () {
                $.data(div, 'values', {orignal_carousel: false, offset: -145, transDivs: 1});

                //Affichage d'un nouveau thumbnail à droite
                $('.carousel a:eq(5)').css('display', 'inline-block').css({ 'opacity': 0.5 });

                $(this).dequeue();
            });

        }
        else {
            //Decalage vers la gauche et mise en transparence
            var marginLeft = $.data(div, 'values').offset - 290;
            var transdiv = $.data(div, 'values').transDivs + 1;
            $('.carousel a:first').animate({marginLeft: marginLeft + 'px'}).queue(function () {
                $('.carousel a:eq(' + (transdiv - 1) + ')').css({ 'opacity': 0.5 });
                $.data(div, 'values', {orignal_carousel: false, offset: marginLeft, transDivs: transdiv});

                //Affichage d'un nouveau thumbnail à droite
                $('.carousel a:eq(' + (3 + transdiv) + ')').css({ 'opacity': 1 });
                $('.carousel a:eq(' + (4 + transdiv) + ')').css('display', 'inline-block').css({ 'opacity': 0.5 });

                $(this).dequeue();
            });

        }

    });

    $('#left-arrow').click(function () {
        if ($.data(div, 'values').transDivs == 1) {
            //Ce cas correspond a une remise a zero
            $('.carousel a:first').animate({marginLeft: '0px'}).css({ 'opacity': 1 });
            $.data(div, 'values', {orignal_carousel: true, offset: 0, transDivs: 0});
            $('.carousel a:gt(4)').css('display', 'none');
        }
        else if ($.data(div, 'values').transDivs > 1) {
            // Offset et transparence à gauche
            var marginLeft = $.data(div, 'values').offset + 290;
            var transdiv = $.data(div, 'values').transDivs - 1;
            $('.carousel a:first').animate({marginLeft: marginLeft + 'px'});
            $('.carousel a:eq(' + (transdiv) + ')').css({ 'opacity': 1 });
            $.data(div, 'values', {orignal_carousel: false, offset: marginLeft, transDivs: transdiv});

            // Affichage a droite
            $('.carousel a:eq(' + (4 + transdiv) + ')').css({ 'opacity': 0.5 });
            $('.carousel a:eq(' + (5 + transdiv) + ')').css('display', 'none');
        }
    });
})


