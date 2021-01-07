$(document).ready(function () {

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            // for window greater than 0 viewport
            0: {
                items: 1
            },
            // for window greater than 600 vp
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            // for window greater than 0 viewport
            0: {
                items: 1
            },
            // for window greater than 600 vp
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });



    

    // product quantity section
    let $qty_down = $(".qty .qty-down");
    let $qty_up = $(".qty .qty-up");
    // let $input = $(".qty .qty_input");

    // click event on qty up button
    $qty_up.click(function (e) {
        // returns the data id of the button
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 9) {
            // i = current index, val = current value
            $input.val(function (i, val) {
                return ++val;
            });
        }
    });

    // click event on qty down button
    $qty_down.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, val) {
                return --val;
            });
        }
    });




});
