$('.boat-slider').slick({
    	dots: false,
        fade: true,
        arrows: true,
        autoplay: false,
        infinite: true,
        autoplaySpeed: 0,
        prevArrow: '<div class="slick-left"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-right"><i class="fas fa-chevron-right"></i></div>',
});


$('.boat-slider-new-excess').slick({
    slidesToShow: 3,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 3000,
    autoplaySpeed: 10000,
    dots: true,
    responsive: [{
        breakpoint: 500,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,

        }
    }]
});

function dummy() {
    var cw = jQuery('.inventory-box .inventory-box-each .inven-img img').width();
    jQuery('.inventory-box .inventory-box-each .inven-img img').height(cw);
}
dummy();
jQuery(window).resize(function() {
    dummy();

})



jQuery('.page-template-EXCESS11 section.excess-vdo .excess-sec-vdo .play-icn img').click(function() {
    jQuery('.page-template-EXCESS11 section.excess-vdo .excess-sec-vdo video')[0].play();
    jQuery('.page-template-EXCESS11 section.excess-vdo .excess-sec-vdo .play-icn img').hide();

});



$(".tgl-ico-btn span").click(function() {
    $(".mobile-header").slideDown();
});

$(".tgl-ico-btn h6").click(function() {
    $(".mobile-header").slideUp();
});


$(".mobile-header .canvas-head-cross").click(function() {
    $(".mobile-header").slideUp();
});


$(".canvas-head-cross.mobile").click(function() {
    $(".mobile-header").slideUp();
});

$(".tgl-ico-btn span").click(function() {
    $(".header-desk-tgl.mob").addClass("cross");
});

$(".hdr-mob-left .canvas-head-cross.mobile").click(function() {
    $(".header-desk-tgl.mob").removeClass("cross");
});

$(".header-desk-tgl.mob .tgl-ico-btn h6").click(function() {
    $(".header-desk-tgl.mob").removeClass("cross");
});


if ($(window).width() > 991) {
    $(".tgl-ico-btn h6").click(function() {
        $(".desk-show-room-are").slideDown();
    });

    $(".canvas-head-cross").click(function() {
        $(".desk-show-room-are").slideUp();
    });
    $(".tgl-ico-btn span").click(function() {
        $(".desk-show-room-are").slideUp();
    });
}

if ($(window).width() < 991) {
    $(".tgl-ico-btn h6").click(function() {
        $(".mobile-showroom").slideDown();
    });

    $(".canvas-head-cross").click(function() {
        $(".mobile-showroom").slideUp();
    });

    $(".tgl-ico-btn h6").click(function() {
        $(".header-desk-tgl.mob").addClass("cross");
    });

}



$("span.invent-drop").click(function() {
    if ($(this).hasClass('inven-btn-new')) {
        $('.inventory-drop-list').hide();
        $('span.invent-drop').removeClass('inven-btn-new');
        $(this).removeClass('inven-btn-new');
        $(this).siblings("ul").hide();
    } else {
        $('.inventory-drop-list').hide();
        $('span.invent-drop').removeClass('inven-btn-new');
        $(this).addClass('inven-btn-new');
        $(this).siblings("ul").show()
    }
});