
    //init scrollspy

    $('body').scrollspy({target: '#main-nav'});

    //smooth scroll

    $("#main-nav").on('click', function (event) {
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

