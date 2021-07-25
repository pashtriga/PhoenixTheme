//diffcomponent
    
var countDownDate = new Date("Jun 5, 2022 15:37:25").getTime();

var x = setInterval(function () {

    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("demo1").innerHTML = days;
    document.getElementById("demo2").innerHTML = hours;
    document.getElementById("demo3").innerHTML = minutes;
    document.getElementById("demo4").innerHTML = seconds;

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);


//changeFjalite
var wordsArray = ["Comunity support", "Volunter and fundraise", "Give a helping hand", "Donate to make a difference"];

var count = 0;

function word() {
    if (count < (wordsArray.length)) {
        $("#word").fadeOut(400, function () {
            $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
            count++;
        })
    } else {
        stop;
    }
}
setInterval(word, 2000);

