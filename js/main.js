

$(document).ready(function(){

    $('#countdownTimer').countdown('Feb 12,2015');

    var mainElement = $('.main');
    var eventContent = $('#event-content');


    //
    if(eventContent.length){
        eventContent.hide();
        var event = sessionStorage.getItem('data-event');

        if(event == null || event == ''){
            event = 'nfs';
        }

        callPost(event);
    }

    //if one scroll Plugin Exists
    if(jQuery().onepage_scroll) {
        mainElement.onepage_scroll(
            {
                sectionContainer: "section",
                easing: "ease",
                animationTime: 1000,
                pagination: false,
                updateURL: false,
                beforeMove: function(index) {},
                afterMove: function(index) {},
                loop: false,
                keyboard: true,
                responsiveFallback: false
            }
        );

        $('.scroll').click(function(e){
            e.preventDefault();
            mainElement.moveDown();
        });

        var scrollNav = $('.scroll-nav');
        scrollNav.hide();

        scrollNav.find('a').each(function(index){
            $(this).click(function(e){
                e.preventDefault();

                switch (index){
                    case 0:
                        mainElement.moveTo(1);
                        break;
                    case 1:
                        mainElement.moveTo(2);
                        break;
                    case 2:
                        mainElement.moveTo(3);
                        break;
                    case 3:
                        mainElement.moveTo(4);
                        break;
                }
            });

        });

        var sections = $('.main section');

        mainElement.onepage_scroll({
            afterMove: function() {
                if(sections.eq(0).hasClass('active')){
                    $('.scroll-nav').slideUp('ease');
                }else{
                    $('.scroll-nav').slideDown('ease');
                }

                sections.each(function(index){
                    if($(this).hasClass('active')){
                        $('.scroll-nav').find('li').removeClass('activeTab').eq(index).addClass('activeTab');
                    }
                });

            }
        });

    }

    //hammer for one scroll

    if(typeof Hammer != 'undefined'){
        Hammer(document).on("swipe", function(e) {
            e.preventDefault();

            if(e.gesture.direction == 'up'){
                $('.main').moveDown();
            }else if
            (e.gesture.direction == 'down'){
                $('.main').moveUp();
            }

        });
    }



    //if fittext plugin exists

    var mainRow =  $("#mainRow");
    var welcome = $("#welcome");

    if(jQuery().fitText()){
        mainRow.find('h1').fitText(1);
        mainRow.find('h2,h3,h4').fitText(2.7,{ minFontSize: '18px' });
        welcome.find('h1').fitText(1.8,{ minFontSize: '35px' });
        welcome.find('p').fitText(3.2,{minFontSize:'16px', maxFontSize: '20px' });
        $('#schedule-table-row').find('table').fitText(7,{minFontSize:'11px', maxFontSize:'14px'});
        $('#team-wrapper').find('h1').fitText(1.5,{minFontSize:'33px', maxFontSize:'70px'});

    }


    //if foundation plugin exists
    if(jQuery().foundation){
        $(this).foundation(
            {
                orbit: {
                    navigation_arrows: false,
                    slide_number: false,
                    timer: false, // Does the slider have a timer visible?
                    timer_speed: 10000,
                    next_on_click: false
                }
            }
        );
    }

    //if sticky plugin exists
    if(jQuery().sticky){
        $('.sticky').sticky();
    }




    $('.open-menu').click(function(e){
        e.preventDefault();
        $('.big-menu').slideToggle();
    });

    $('.orbit-container *').click(function(e){
        e.preventDefault();
    });

    //gaming-events php GET

    $('.off-canvas-list, .side-nav').find('a').click(function(e){

        e.preventDefault();
        var event = $(this).attr('data-event');

        callPost(event);

    });


    //events page click
    $('#gaming-events-column').find('a').click(function(e){
        e.preventDefault();
        var event = $(this).attr('data-event');
        sessionStorage.setItem('data-event',event);
        window.location.href = 'event.php';
    });

    //post function

    function callPost(event){
        $.post('e-details.php',{event: event},function(data){


            var e_array = JSON.parse(data);

            var breadcrumbs_li = $('.breadcrumbs').find('li');

            breadcrumbs_li.eq(1).text(e_array['type']);
            breadcrumbs_li.eq(2).text(e_array['title']);



            eventContent.fadeOut(function(){
                eventContent.find('img').attr('src',e_array['img']);
                eventContent.find('h1').text(e_array['title']);
                eventContent.find('p').eq(0).text(e_array['content']);
                eventContent.find('p').eq(1).text(e_array['participants']);
                eventContent.fadeIn();
            });

        });
    }


    if($().nanoGallery) {

        $('#gallery').nanoGallery({
            'kind': 'picasa',
            'userID': 'lezwon@gmail.com',
            album: '5981047078682037505',
            maxItemsPerLine: 6,
            maxWidth: 1200,
            thumbnailWidth: 160,
//            thumbnailHeight:120,
            thumbnailHoverEffect: [
                {'name': 'labelAppear'},
                {'name': 'labelSlideUp'},
                {'name': 'borderLighter'}
            ],
            thumbnailDisplayInterval: 10,
            thumbnailDisplayTransition: true,
            thumbnailLazyLoad: true,
            thumbnailLazyLoadTreshold: 900,
            paginationMaxLinesPerPage: 6

        });

    }

});




var subtract;
var element;



(function($){
    $.fn.countdown = function(date){
        element = this;
        var timestamp = Date.parse(date); //converts input date to numbers
        var gmt = (60 * 60 * 5) + (30 * 60); // +5:30 india time 19800secs
        subtract = timestamp-gmt; //adds input time - india time
        setInterval(timer,1000); // carry function per second
    }
}(jQuery));


function timer(){

    var currentTime =jQuery.now(); // gets current timestamp

    var timeLeft = ((subtract - currentTime) / 1000) ; //removes millisecs,diffrence,and adds subtract

    var secs = parseInt(timeLeft%60);
    var min = parseInt((timeLeft/60)%60);
    var hour = parseInt((timeLeft/(60*60))%24); // calc remaining hours and makes it show between 0-24 with %
    var day = parseInt(timeLeft/(60*60*24));// calc remaining days and makes it show countless

    // days(365)->hours(24)->minutes(60)->seconds(60)->milliseconds(1000)
    //timestamp is in milliseconds, numbers count difference from 1970
    secs = (secs<10?'0'+secs:secs);
    min = (min<10?'0'+min:min);
    hour = (hour<10?'0'+hour:hour);
    day = (day<10?'0'+day:day);


    element.text(day+' : '+hour+' : '+min+' : '+secs);

}

