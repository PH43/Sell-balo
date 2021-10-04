$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".navbar").addClass("navbar-scroll");
        } else {
            $(".navbar").removeClass("navbar-scroll");
        }
        if (scroll >= 0 && this.matchMedia("(min-width: 768px)").matches) {
            $(".navbar").addClass("navbar-light bg-white  ");
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