$(document).ready(function () {
    AOS.init();

    // Set the date we're counting down to
    var countDownDate = new Date("Jan 01, 2021 08:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
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

    // $(window).scroll(function() {
    //     console.log($(window).scrollTop());
    // });

    $('.scroll-top').fadeOut();
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 640) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    $('.scroll-top').click(function () {
        $('html, body').animate({
            scrollTop: '0'
        });
    });

    $('#profile').click(function () {
        $("html, body").animate({
            scrollTop: '640'
        });
    });

    $('#gallery').click(function () {
        $('html, body').animate({
            scrollTop: '1024'
        });
    });

    $('#party').click(function () {
        $('html, body').animate({
            scrollTop: '2080'
        });
    });

    $('#location').click(function () {
        $('html, body').animate({
            scrollTop: '2495'
        });
    });
});