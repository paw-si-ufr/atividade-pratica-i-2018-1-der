 // Script usado como referencia: https://codepen.io/jonathanlcarroll/pen/rmRRNZ
  
	var slideCount = $('.module-section ul li').length;
	var slideWidth = $('.module-section ul li').width();
	var slideHeight = $('.module-section ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	//$('.module-section').css({ width: slideWidth, height: slideHeight });
	
	//$('.module-section ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('.module-section ul li:last-child').prependTo('.module-section ul');

    function moveLeft() {
        $('.module-section ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('.module-section ul li:last-child').prependTo('.module-section ul');
            $('.module-section ul').css('left', '');
        });
    };

    function moveRight() {
        $('.module-section ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('.module-section ul li:first-child').appendTo('.module-section ul');
            $('.module-section ul').css('left', '');
        });
    };

    $('.left-controls').click(function () {
        moveLeft();
    });

    $('.right-controls').click(function () {
        moveRight();
    });


//Proximos eventos

	var slideCount = $('.module-section-prox ul li').length;
	var slideWidth = $('.module-section-prox ul li').width();
	var slideHeight = $('.module-section-prox ul li').height();

    $('.module-section-prox ul li:last-child').prependTo('.module-section-prox ul');

    function moveLeftP() {
        $('.module-section-prox ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('.module-section-prox ul li:last-child').prependTo('.module-section-prox ul');
            $('.module-section-prox ul').css('left', '');
        });
    };

    function moveRightP() {
        $('.module-section-prox ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('.module-section-prox ul li:first-child').appendTo('.module-section-prox ul');
            $('.module-section-prox ul').css('left', '');
        });
    };

    $('.left-controls-prox').click(function () {
        moveLeftP();
    });

    $('.right-controls-prox').click(function () {
        moveRightP();
    });

//Eventos passados

	var slideCount = $('.module-section-pass ul li').length;
	var slideWidth = $('.module-section-pass ul li').width();
	var slideHeight = $('.module-section-pass ul li').height();

    $('.module-section-pass ul li:last-child').prependTo('.module-section-pass ul');

    function moveLeftA() {
        $('.module-section-pass ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('.module-section-pass ul li:last-child').prependTo('.module-section-pass ul');
            $('.module-section-pass ul').css('left', '');
        });
    };

    function moveRightA() {
        $('.module-section-pass ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('.module-section-pass ul li:first-child').appendTo('.module-section-pass ul');
            $('.module-section-pass ul').css('left', '');
        });
    };

    $('.left-controls-pass').click(function () {
        moveLeftA();
    });

    $('.right-controls-pass').click(function () {
        moveRightA();
    });
