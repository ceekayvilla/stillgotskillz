$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        //$('#back-to-top').tooltip('show');

});


$(document).ready(function() {
    $('#thumbslide').carousel({
        interval: 10000
    })
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}



$(document).ready(function () {

    $(".accordionContainer .accordionTitle").click(openAccordion);

    function openAccordion() {

        if ($(this).hasClass('open')) {

            $(".accordionContainer .accordionTitle").removeClass('open');
            $(".accordionContainer .accordion").slideUp();
            $(this).removeClass("open").next(".accordion").slideUp();

        } else {

            $(".accordionContainer .accordionTitle").removeClass('open');
            $(".accordionContainer .accordion").slideUp();
            $(this).addClass("open").next(".accordion").slideDown(function () {

            });

        }

    }
});

jQuery.fn.liScroll = function(settings) {
    settings = jQuery.extend({
        travelocity: 0.03
        }, settings);       
        return this.each(function(){
                var $strip = jQuery(this);
                $strip.addClass("newsticker")
                var stripHeight = 1;
                $strip.find("li").each(function(i){
                    stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
                });
                var $mask = $strip.wrap("<div class='mask'></div>");
                var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");                             
                var containerHeight = $strip.parent().parent().height();    //a.k.a. 'mask' width   
                $strip.height(stripHeight);         
                var totalTravel = stripHeight;
                var defTiming = totalTravel/settings.travelocity;   // thanks to Scott Waye     
                function scrollnews(spazio, tempo){
                $strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
                }
                scrollnews(totalTravel, defTiming);             
                $strip.hover(function(){
                jQuery(this).stop();
                },
                function(){
                var offset = jQuery(this).offset();
                var residualSpace = offset.top + stripHeight;
                var residualTime = residualSpace/settings.travelocity;
                scrollnews(residualSpace, residualTime);
                });         
        }); 
};

$(function(){
    $("ul#ticker01").liScroll();
});




function scrollWin() {
    window.scroll({top: 700, left: 0, behavior: 'smooth'});
  }

  
 // $('.video').parent().click(function () {
  //  if($(this).children(".video").get(0).paused){
   //     $(this).children(".video").get(0).play();
   //     $(this).children(".playpause").fadeOut();
  //  }else{
    //   $(this).children(".video").get(0).pause();
     //   $(this).children(".playpause").fadeIn();
  //  }
//});


        //<![CDATA[ 
            $(function() {
                function onScrollInit(items, trigger) {
                    items.each(function() {
                        var osElement = $(this),
                            osAnimationClass = osElement.attr(
                                'data-os-animation'),
                            osAnimationDelay = osElement.attr(
                                'data-os-animation-delay');
                        osElement.css({
                            '-webkit-animation-delay': osAnimationDelay,
                            '-moz-animation-delay': osAnimationDelay,
                            'animation-delay': osAnimationDelay
                        });
                        var osTrigger = (trigger) ? trigger :
                            osElement;
                        osTrigger.waypoint(function() {
                            osElement.addClass(
                                'animated').addClass(
                                osAnimationClass
                            );
                        }, {
                            triggerOnce: true,
                            offset: '90%'
                        });
                    });
                }
                onScrollInit($('.os-animation'));
                onScrollInit($('.staggered-animation'), $(
                    '.staggered-animation-container'));
            }); //]]>

            $(document).ready(function(){

                // Service Icon Option	
                $(".playpause").hover(function(){

                    $('.media-item__title',this).css("bottom","-100px");
                    $('.media-item__title',this).stop().animate({'bottom': '15%'}, 300 );
                }, function(){});	
                
                
            });

           $(document).ready(function(){
               $(".search_icon").click(function(){
                    $(".mobile_input_search").toggle();
                 });
             });

                      // Add hover effect to menus
jQuery('ul.nav li.dropdown').hover(function() {
  jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
}, function() {
  jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
});


// Instantiate the Bootstrap carousel
//$('.multi-item-carousel').carousel({
 // interval: false
//});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
    




(function($) {
            
    $.fn.visible = function(partial) {
      
        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
      
      return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  
    };
      
  })(jQuery);
  
  $(window).scroll(function(event) {
    
    $(".bannertitle").each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("animated  fadeInUp"); 
      } else {
        el.removeClass(" animated fadeInUp");
      }
    });
    
  });





  

//$(document).ready(function() {
//$('#my-video').backgroundVideo();
//});


$("#exampleModalLong1").on('hidden.bs.modal', function (e) {
    $("#exampleModalLong1 iframe").attr("src", $("#exampleModalLong1 iframe").attr("src"));
});

           

jQuery(document).ready(function($) {
 
    $('#popupslider').carousel({
            interval: 5000
    });
    //Handles the carousel thumbnails
   $('[id^=carousel-selector-]').click( function(){
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        $('#popupslider').carousel(id);
    });

});

 //Handles the MultiCarousel thumbnails
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});



    