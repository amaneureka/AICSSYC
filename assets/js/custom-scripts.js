$(function() {
    
  'use strict';

  /**
   * =======================================
   * Function: Home Section Fullscreen View.
   * =======================================
   */
  var fullscreen_home = function() {
    if(matchMedia( "(min-width: 768px) and (min-height: 500px)" ).matches) {
      var height = $(window).height() + "px";
      $(".header-overlay").css('min-height', height);
    }

    var top = Math.max($(window).height() / 2 - $("#header-body")[0].offsetHeight / 2, 0);
    $("#header-body").css('padding-top', top + "px").css('padding-bottom', (top - $('#header-navbar ').height()) + "px");
    $("#header-body").css('position', 'relative');
  }


  /**
   * =======================================
   * Function: Footer Top Closest Section Margin Bottom [ Show Footer Section ].
   * =======================================
   */
  var footer_section = function() {
    var el = $('footer');
    $( el.attr('data-for') ).css({
      'margin-bottom': el.height(),
      //'box-shadow': 'rgba(0, 0, 0, 0.6) 0px 5px 10px'
    })
  }


  /**
   * =======================================
   * Function: Resize Background For "two-cols-description-with-slider" Section.
   * =======================================
   */
  var Slider_height_width = function() {

    var el = $('.description-height');
    var height = el.height();

    if( $(window).width() >= 749 ) {
      $('.slides-height').css({
        'height': height
      });
    }else {
      $('.slides-height').css({
        'height': 350
      });
    }
  }


  /**
   * =================================
   * Animate Class Add 
   * =================================
   */
  var animate_class_add = function() {
    var el = $("[data-finiti-animate]");
    el.each(function() {
      $(this)
        .addClass('wow')
        .addClass( $(this).attr("data-finiti-animate") )
        .addClass('animated')
        .attr('data-wow-offset', '120')
        .attr('data-wow-duration', '1.5s');
    });  
  }



  // JQuery Windows Resize Method.
  $(document).on('resize', function() {

    // Call "fullscreen_home" Function.
    //fullscreen_home();

    // Call "footer_section"  Function.
    footer_section();

    // Call "Slider_height_width" Function.
    Slider_height_width();

  })
  

  // jQuery Document Ready Function.
  $(document).on('ready', function() {

    // Call "fullscreen_home" Function.
    //fullscreen_home();

    // Call "footer_section"  Function.
    footer_section();

    // Call "Slider_height_width" Function.
    Slider_height_width();

    // Call "resize_background" Function.
    //resize_background();

    //Animate class 
    animate_class_add();


    /**
     * ======================================
     *  STICKY NAVBAR 
     * ======================================
     */
    //if ( matchMedia( 'only screen and (min-width: 768px)' ).matches ) {
       $(document).on('scroll', function() {
          var scrollPos = $(this).scrollTop();

          if( scrollPos > 50 ) {
             $('.navbar-fixed-top').addClass('navbar-home');
          } 
          else {
             $('.navbar-fixed-top').removeClass('navbar-home');
          }
       });
    //}


    /**
     * =======================================
     *  Header Navbar put on a span
     * =======================================
     */
    $('.section-selector').each(function() {
        var el = $(this).find('a');
        var value = el.text();
        el.addClass('btn-left');
        el.html("<span class='section-name'>"+value+"</span>");
        
    });
    $('.section-selector-2').each(function() {
        var el = $(this).find('a');
        var value = el.text();
        el.addClass('btn-bottom');
        el.html("<span class='section-name'>"+value+"</span>");
        
    });


    /**
     * =======================================
     * Navigation Style 1 open Button 
     * =======================================
     */
    $("#toggle-switcher").on('click', function() {

      $(this).toggleClass('navbar-btn-colse');

      var el = $(this).closest('nav');

      if( el.hasClass('open-nav') ){
        el.removeClass('open-nav');
        $(this).find('i').removeClass('fa-rotate-180');
      }
      else{
        el.addClass('open-nav');
        $(this).find('i').addClass('fa-rotate-180');
      }
    });
    
    
    /**
     * =======================================
     * Map Hide and Show Button
     * =======================================
     */
    $('#map-btn').on('click', function() {
        var el = $(this).find('i');
        
        if( el.hasClass('fa-rotate-180') ){
            $(this).removeClass("active");
        el.removeClass('fa-rotate-180');
        $("#map-btn-tab").removeClass("contact-maps-outside");
        
      }
      else{
          $(this).addClass("active");
        el.addClass('fa-rotate-180');
        $("#map-btn-tab").addClass("contact-maps-outside");
      }
        
    });




    /**
    * ====================================
    * PopUp Images
    * ====================================
    */
    $('.zoom-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: false,
      closeBtnInside: false,
      mainClass: 'mfp-with-zoom mfp-img-mobile',
      image: {
        verticalFit: true,
        titleSrc: function(item) {
          return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
        }
      },
      gallery: {
        enabled: true
      },
      zoom: {
        enabled: true,
        duration: 300, // don't foget to change the duration also in CSS
        opener: function(element) {
          return element.find('img');
        }
      }

    });




    /**
     * ================================
     * COLLAPSE ICON CHANGE 
     * ===============================
     */
    var link = $('.panel-heading .panel-title a'),
    r = $('.panel:first-child .panel-heading .panel-title a');
    r.addClass('rotate');
    link.on('click', function(){
        if($(this).hasClass('rotate')){
            $(this).removeClass('rotate');
        }
        else{
            link.removeClass('rotate');
            $(this).addClass('rotate');
        }

    });




    /**
     * =======================================
     * NAVIGATION SCROLL
     * =======================================
     */
    $('#navbar-nav').onePageNav({
        currentClass: 'active',
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        scrollSpeed: 1000
    });

    /* Style-2 */
    $('#navbar-nav-2').onePageNav({
        currentClass: 'active',
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        scrollSpeed: 1000
    });

    if($(window).width() > 767){
        $('#navbar-nav-2').localScroll({
            offset: -Math.abs($('#navbar-nav-2').height())
      });

      /* SUBCRIBE  BUTTON SCROLL FROM HOME PAGE */
      $('.btn-scroll-2').localScroll({
            offset: -Math.abs($('#navbar-nav-2').height())
      });
          
    }else{
      $('#navbar-nav-2').localScroll({
          offset: -Math.abs($('.navbar-header').height())
      });

      /* SUBCRIBE  BUTTON SCROLL FROM HOME PAGE */
      $('.btn-scroll-2').localScroll({
            offset: -Math.abs($('.navbar-header').height())
      });
    }
    


    /**
     * =======================================
     * SUBCRIBE  BUTTON SCROLL FROM HOME PAGE
     * =======================================
     */
    $('.btn-scroll').localScroll({
        offset: -Math.abs($('#header-navbar').height())
    });



    /**
     * =======================================
     * Bootstrap Internet Explorer 10 in Windows 8 and Windows Phone 8 FIX
     * =======================================
     */
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement('style')
      msViewportStyle.appendChild(
        document.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
      )
      document.querySelector('head').appendChild(msViewportStyle)
    };



    /**
     * =======================================
     * WOW ANIMATION
     * =======================================
     */
    var wow = new WOW({ mobile: false });
    wow.init();


    /**
     * =======================================
     * PARALLAX
     * =======================================
     */
    $(window).stellar({
        responsive: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        horizontalOffset: 0,
        verticalOffset: 0,
      });



    /**
     * =======================================
     * SMOOTH SCROLL / CURRENTLY ENABLED IN niceScroll
     * =======================================
     */
    var scrollAnimationTime = 1200, 
        scrollAnimation = 'easeInOutExpo';

    $('a.scrollto').on('bind', 'click.smoothscroll', function (event) {
        event.preventDefault();
        var target = this.hash;
        
        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, scrollAnimationTime, scrollAnimation, function () {
            window.location.hash = target;
        });
    });


    /**
     * =========================================
     * Count Down
     * =========================================
     */       
    $('.count_down-1').countdown({
        end_time: "2015/12/19 23:59:59 +0530",
        wrapper: function(unit){
            var wrpr = $('<div></div>').
                addClass(unit.toLowerCase()+'_wrapper').
                addClass('col-sm-3').
                addClass('col-xs-6').
                addClass('col-md-3').
                addClass('custom');
            var background = $('<div></div>').
                addClass('background').
                addClass('time').
                appendTo(wrpr);

            $('<span class="counter style_all"></span>').appendTo(background);
            $('<span class="title">'+unit+'</span>').appendTo(background);
            return wrpr;
        }
    });
    $('.count_down-2').countdown({
        end_time: "2015/12/19 23:59:59 +0530",
        wrapper: function(unit){
            var wrpr = $('<div></div>').
                addClass(unit.toLowerCase()+'_wrapper').
                addClass('col-sm-3').
                addClass('col-xs-6').
                addClass('col-md-3').
                addClass('custom');
            var background = $('<div></div>').
                addClass('background').
                addClass('time').
                appendTo(wrpr);

            $('<span class="counter style_all"></span>').appendTo(background);
            $('<span class="title">'+unit+'</span>').appendTo(background);
            return wrpr;
        }
    });


    /**
     * =======================================
     * Numbers (Counter Up)
     * =======================================
     */
    $('.counter-up').counterUp({
      time: 1000
    });

    /**
     * =============================================
     * MAILCHIMP NEWSLETTER SUBSCRIPTION 
     * =============================================
     */
    $("#mailchimp-subscribe").ajaxChimp({
        callback: mailchimpCallback,
        url: "http://ieeensit.us11.list-manage1.com/subscribe/post?u=fb07d627163505a9d6abf7580&id=66eb1cf803"
    });

    function mailchimpCallback(resp) {
         if(resp.result === 'success') {
            $('.subscription-success')
                .html('<i class="fa fa-check"></i>' + "&nbsp;" + resp.msg)
                .delay(500)
                .fadeIn(1000);

            $('.subscription-failed').fadeOut(500);
            
        } else if(resp.result === 'error') {
            $('.subscription-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;" + resp.msg)
                .delay(500)
                .fadeIn(1000);
                
            $('.subscription-success').fadeOut(500);
        }  
    };



    /**
     * =======================================
     * Function for email address validation
     * =======================================
     */
    function isValidEmail(emailAddress) {

    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

        return pattern.test(emailAddress);

    };
    $("#register-form").submit(function(e) {
        e.preventDefault();
        var data = {
            name: $("#register-name").val(),
            email: $("#register-email").val(),
            telephone: $("#register-telephone").val(),
            member_id: $("#register-member_id").val(),
            TShirtSize: $("#registered-size").val(),
            Section: $("#registered-section").val(),
            IsMember: $("#registered-ismember").val(),
            Why: $("#register-why").val(),
            Expctation: $("#register-expectation").val(),
            volunteering: $("#register-volunteering").val(),
            comments: $("#register-comments").val()
        };
        //alert(JSON.stringify(data, null, 4));
        if (!isValidEmail(data['email']))
        {
            $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Enter a Valid Email Address!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
            return false;
        }
        else if (data['name'] == null || data['name'] == "")
        {
          $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Name Field can't be empty!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
          return false;
        }
        else if (isNaN(data['telephone']))
        {
          $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Invalid input in telephone field!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
          return false;
        }
        else if (data['member_id'] == null || data['member_id'] == "")
        {
          $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Member ID Field can't be empty!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
          return false;
        }
        else if (data['Why'] == null || data['Why'] == "")
        {
          $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Reason Field can't be empty!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
          return false;
        }
        else if (data['Expctation'] == null || data['Expctation'] == "")
        {
          $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Expctation Field can't be empty!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
          return false;
        }
        else if (data['volunteering'] == null || data['volunteering'] == "")
        {
          $('#register-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Volunteering Field can't be empty!")
                .delay(500)
                .fadeIn(1000);
                
            $('#register-success').fadeOut(500);
          return false;
        }

        $.ajax({
                type: "POST",
                url: "register.php",
                data: data,
                success: function() 
                {
                    $('#register-success')
                      .html('<i class="fa fa-check"></i>' + "&nbsp;we will contact you soon :)")
                      .delay(500)
                      .fadeIn(1000);

                    $('#register-failed').fadeOut(500);
                }
            });

        return false;
    });

    /**
     * ====================================
     * LOCAL NEWSLETTER SUBSCRIPTION
     * ====================================
     */
    $("#query-form").submit(function(e) {
        e.preventDefault();
        var data = {
            name: $("#query-name").val(),
            email: $("#query-email").val(),
            telephone: $("#query-telephone").val(),
            query: $("#query-query").val(),
        };

        if ( isValidEmail(data['email']) ) {
            $.ajax({
                type: "POST",
                url: "query.php",
                data: data,
                success: function() {
                    $('.query-success')
                      .html('<i class="fa fa-check"></i>' + "&nbsp;Registration Successfull")
                      .delay(500)
                      .fadeIn(1000);

                    $('.query-failed').fadeOut(500);
                }
            });
        } else {
            $('.query-failed')
                .html('<i class="fa fa-close"></i>' + "&nbsp;Something went wrong!")
                .delay(500)
                .fadeIn(1000);
                
            $('.query-success').fadeOut(500);
        }

        return false;
    });

    /**
     * ====================================
     * Contact Form 
     * ====================================
     */
    $("#contact").submit(function(e) {    	
        e.preventDefault();
        var data = {
            name: $("#contact-name").val(),
            email: $("#contact-email").val(),
            message: $("#contact-message").val()
        };

        if ( isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1) ) {
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: data,
                timeout: 5000,
                success: function(data) {
                    $('.email-success').delay(500).fadeIn(1000);
                    $('.email-failed').fadeOut(500);
                },
                error: function(xhr, textStatus, errorThrown){
                    $('.email-failed').delay(500).fadeIn(1000);
            		$('.email-success').fadeOut(500);
                }
            });
        } else {
            $('.email-failed').delay(500).fadeIn(1000);
            $('.email-success').fadeOut(500);
        }

        return false;
    });



    /**
     * =======================================
     * CAROUSEL SLIDER 
     * =======================================
     */
    var owl = $("#slider");

    /* TESTIMONIAL SYNC WITH CLIENTS */
    owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1190, 3], //5 items between 1000px and 901px
      itemsDesktopSmall     : [992,3], // 3 items betweem 992px and 769px
      itemsTablet       : [768,2], // 3 items between 768 and 601
      itemsTabletSmall       : [480,1], // 2 items in widen mobile device
      itemsMobile       : [320,1], // 1 items in any small mobile device
      pagination:true,
      responsiveRefreshRate : 100
    });


    /**
     * =======================================
     * TESTIMONIAL SYNC WITH CLIENTS
     * =======================================
     */
    var sync1 = $("#sync1"); // client's message
    var sync2 = $("#sync2"); // client's avatar

    sync1.owlCarousel({
      singleItem : true,
      slideSpeed : 1000,
      navigation: false,
      pagination:false,
      afterAction : syncPosition,
      responsiveRefreshRate : 200,
      autoPlay: 5000
    });


    sync2.owlCarousel({
      items : 3,        //# clients image will displace in single display
      itemsDesktop      : [1200,3],
      itemsDesktopSmall     : [992,3],
      itemsTablet       : [768,2],
      itemsTabletSmall       : [480,2],
      itemsMobile       : [320,1],
      pagination:false,
      responsiveRefreshRate : 100,
      afterInit : function(el){
        el.find(".owl-item").eq(0).addClass("synced");
      }
    });

    function syncPosition(el){
      var current = this.currentItem;
      $("#sync2")
        .find(".owl-item")
        .removeClass("synced")
        .eq(current)
        .addClass("synced")
      if($("#sync2").data("owlCarousel") !== undefined){
        center(current)
      }
    }

    $("#sync2").on("click", ".owl-item", function(e){
      e.preventDefault();
      var number = $(this).data("owlItem");
      sync1.trigger("owl.goTo",number);
    });

    function center(number){
      var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
      var num = number;
      var found = false;
      for(var i in sync2visible){
        if(num === sync2visible[i]){
          var found = true;
        }
      }

      if(found===false){
        if(num>sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", num - sync2visible.length+2)
        }else{
          if(num - 1 === -1){
            num = 0;
          }
          sync2.trigger("owl.goTo", num);
        }
      } else if(num === sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", sync2visible[1])
      } else if(num === sync2visible[0]){
        sync2.trigger("owl.goTo", num-1)
      }
    }

  });

  /**
   * =======================================
   * GOOGLE MAP 
   * =======================================
   */
  function init_map() {
    var myLocation = new google.maps.LatLng(28.6091309,77.0350686);
	var centermap = new google.maps.LatLng(28.609903226830212,77.05096592078917);

    var draggableValue;
      if($(document).width() <= 768){
      draggableValue = false;   /*This option is used for disabling drag.*/
    }
    else{
      draggableValue = true;   /*This option is used for disabling drag.*/
    }

    var mapOptions = {
      generate_controls : false,
      center: centermap,
      zoom: 14,
      mapTypeControl: true,           /*This option will hide map type.*/
      draggable: draggableValue,
      scaleControl: false,            //This option is used for disable zoom by scale.
      scrollwheel: false,             /*This option is used for disable zoom on mouse.*/
      navigationControl: true,  
      zoomControlOptions : {
        style : google.maps.ZoomControlStyle.SMALL,
      },
      styles: [{"stylers": [{"saturation": -100}]}],
      streetViewControl: true  
      
    };

    var marker = new google.maps.Marker({
      position: myLocation,
      title:"Netaji Subhash Instituate of Technology (NSIT)"});
      
    var map = new google.maps.Map(document.getElementById("map"),
      mapOptions);

    marker.setMap(map); 
  }
  google.maps.event.addDomListener(window, 'load', init_map);
 
});






/*********************************************/
/* Flex Slider*/
/*********************************************/
var $ = jQuery.noConflict();
$(window).load(function() {
  $('.flexslider').flexslider({
        animation: "fade"
  });

  $(function() {
    $('.show_menu').on('click', function() {
      $('.menu').fadeIn();
      $('.show_menu').fadeOut();
      $('.hide_menu').fadeIn();
    });
    $('.hide_menu').on('click', function() {
      $('.menu').fadeOut();
      $('.show_menu').fadeIn();
      $('.hide_menu').fadeOut();
    });
  });

  $('.prev').addClass('btn btn-1 btn-left').html("<i class='fa fa-angle-left'></i>");
  $('.next').addClass('btn btn-1 btn-left').html("<i class='fa fa-angle-right'></i>");;

});


