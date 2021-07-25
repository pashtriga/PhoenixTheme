/*
    Validate Form 
*/
(function ($) {
    "use strict";
  
    var name = $('.validate-input input[name="contactName"]');
    var email = $('.validate-input input[name="email"]');
    var message = $('.validate-input textarea[name="comments"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }

        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }
        if (check == true) {
            alert(vars.messageSent);
        }
        return check;
    });


    $('.validate-form .input1').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);



/*
    INITIALIZE MAP
*/
function initialize() {

   
    var prishtina = new google.maps.LatLng(42.6629, 21.1655);              

    var mapOptions = {
        zoom: 16,
        center: prishtina,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    };

    var map = new google.maps.Map(document.getElementById("map_prishtina"), mapOptions);

    firstmarker = new google.maps.Marker({
        map:map,
        draggable:false,
        animation: google.maps.Animation.DROP,
        title: 'Your Client',
        position: prishtina
    });

    var contentString1 = '<p>The Address<br />Of your client<br />in<br />here</p>';


    var infowindow1 = new google.maps.InfoWindow({
        content: contentString1
    });

    google.maps.event.addListener(firstmarker, 'click', function() {
        infowindow1.open(map,firstmarker);
    });

}
google.maps.event.addDomListener(window, 'load', initialize);

////////////
$('.location-btn').hover(function() {
    $('.fa-map-marker').toggleClass('icon-location');
});




