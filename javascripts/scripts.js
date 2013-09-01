$(document).ready(function(){

    function isiPhone(){
    return (
    //Detect iPhone
    //var isiPad = navigator.userAgent.match(/iPad/i) != null;
    (navigator.platform.indexOf("iPhone") != -1) ||
    //Detect iPod
    (navigator.platform.indexOf("iPad") != -1)
    );
    }

    if(isiPhone()){

    }
    else{
        return paralax();
    }

    function paralax(){
    ////paralax
        $('section[data-type="background"]').each(function(){
            var $bgobj = $(this); // assigning the object
            $(window).scroll(function() {
                var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
                // Put together our final background position
                var coords = '50% '+ yPos + 'px';
                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            });
        });
    }



});
