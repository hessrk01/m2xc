
    //init scrollspy

    $('body').scrollspy({target: '.nav-scroll'});

    //smooth scroll

    $(".nav-scroll").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 1000, function () {

            window.location.hash = hash;
            });
        }
    });
    

