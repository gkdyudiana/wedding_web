$(document).ready(function () {

    AOS.init();

    var countDownDate = new Date("Jan 01, 2021 08:00:00").getTime();


    var x = setInterval(function () {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days + " D";
        document.getElementById("hours").innerHTML = hours + " H";
        document.getElementById("minutes").innerHTML = minutes + " M";
        document.getElementById("seconds").innerHTML = seconds + " S";

        // If the count down is over, write some text 
        if (distance <= 0) {
            clearInterval(x);
            document.getElementById("days").innerHTML = "0";
            document.getElementById("hours").innerHTML = "0";
            document.getElementById("minutes").innerHTML = "0";
            document.getElementById("seconds").innerHTML = "0";
            document.getElementById("finish").innerHTML = "Congratulations! Wedding Day!";
        }
    }, 1000);

    $('.scroll-top').fadeOut();
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 640) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    $('#home').click(function () {
        $('html, body').animate({
            scrollTop: '0'
        });
    });

    $('.scroll-top').click(function () {
        $('html, body').animate({
            scrollTop: '0'
        });
    });

    $('#profile').click(function () {
        $('html, body').animate({
            scrollTop: ($('#section-profile').offset().top - 30)
        }, 300);
    });

    $('#gallery').click(function () {
        $('html, body').animate({
            scrollTop: ($('#section-gallery').offset().top)
        }, 300);
    });

    $('#party').click(function () {
        $('html, body').animate({
            scrollTop: ($('#section-party').offset().top - 40)
        })
    });

    $('#location').click(function () {
        $('html, body').animate({
            scrollTop: ($('#section-location').offset().top)
        })
    });
});