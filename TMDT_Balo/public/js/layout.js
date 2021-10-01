//parallax js
$(document).ready(function() {
    var $window = $(window);
    $('section[data-type="background"]').each(function() {
        var $bgobj = $(this); // assigning the object

        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Put together our final background position
            var coords = '50% ' + yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        });
    });
});

//menu transition js
$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".navbar").addClass("navbar-scroll");
        } else {
            $(".navbar").removeClass("navbar-scroll");
        }
        if (scroll > 500 && this.matchMedia("(min-width: 768px)").matches) {
            $(".navbar").addClass("navbar-light bg-white");
            $(".footers").addClass("bg-white ");
            $(".nav-link").addClass("active");
        } else {
            $(".navbar").removeClass("navbar-light bg-white");
            $(".footers").removeClass("bg-white ");
            $(".nav-link").addClass("active");
        }
        if (this.matchMedia("(max-width: 768px)").matches) {
            $(".footers").addClass("color-footer");
            $(".footers a, .footers p").addClass("text-white");
            $(".footers h4,.footers b").addClass("text-bom");
        } else {
            $(".footers").removeClass("color-footer");
            $(".footers a, .footers p").removeClass("text-white");
            $(".footers h4,.footers b").removeClass("text-bom");
        }
    })
});

function toggleDropdown(e) {
    const _d = $(e.target).closest('.dropdown'),
        _m = $('.dropdown-menu', _d);
    setTimeout(function() {
        const shouldOpen = e.type !== 'click' && _d.is(':hover');
        _m.toggleClass('show', shouldOpen);
        _d.toggleClass('show', shouldOpen);
        $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
    }, e.type === 'mouseleave' ? 900 : 0);
}

$('body')
    .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);