$(document).ready(function() {
    if (window.pageYOffset >= 60) {
        $("#header").addClass("scrolled");
    } else {
        $("#header").removeClass("scrolled");
    }

    $(document).scroll(function() {
        if (window.pageYOffset >= 60) {
            $("#header").addClass("scrolled");
        } else {
            $("#header").removeClass("scrolled");
        }
    });

    $(".nav-button").click(function(e) {
        e.preventDefault();
        $(".nav").css("right", 0);

    });

    $(".close-btn").click(function(e) {
        e.preventDefault();
        $(".nav").css("right", "");

    });

    var roomdetailPagination = new Swiper(".roomdetailPagination", {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            730: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1000: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });

    var roomdetailSwiper = new Swiper(".roomdetailSwiper", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: roomdetailPagination,
        },
    });

    var roomSwiper = new Swiper(".roomSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            730: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1300: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    var restourantSwiper = new Swiper(".restourantSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            530: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            730: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1000: {
                slidesPerView: 4,
                spaceBetween: 5,
            },

            1300: {
                slidesPerView: 5,
                spaceBetween: 5,
            },
            1300: {
                slidesPerView: 6,
                spaceBetween: 5,
            },
        },
    });

    var otherRoomSwiper = new Swiper(".otherRoomSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        }
    });

    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

});