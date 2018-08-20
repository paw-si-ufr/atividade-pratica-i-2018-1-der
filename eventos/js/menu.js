 // https://www.youtube.com/watch?v=IgOwSW9DxDY

    var controleNav = false;

    $(document).scroll(function(e) {

        var scrollTop = $(document).scrollTop();

        if (scrollTop > $('.navbar').height()) {

            if (controleNav == false) {

                $('.navbar').removeClass('navbar-static-top').addClass('fixed-top');

                $('a.nav-logo-center-menu img').animate({height: '50px'}, 500);

                controleNav = true;
            }
        } else {

            if (controleNav == true) {

                $('.navbar').removeClass('fixed-top').addClass('navbar-static-top');

                $('a.nav-logo-center-menu img').animate({height: '70px'}, 500);
 
                controleNav = false;
            }
        }
    });
