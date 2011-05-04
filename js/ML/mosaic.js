(function( $ ){

    var isAnimatingTop = false,
        isAnimatingBottom = false;
    var methods = {
        init : function( options ) {
            var self = this;
        },

        display : function(){

            $(window).MLResize("resize");

            var max = $(".line-container:first li").length - 1;
            $(".mosaic li.project").each(function(i, el){
                var index = i > max ? i-max : i;
                $(el)
                    .delay(index*120)
                    .fadeIn(200);
            });
            
            methods.hover();
            methods.carousel();
        },

        hover : function(){
            $(".mosaic ul a").hover(
                function(){
                    var self = this;
    //                $('img', self)
    //                    .stop(true)
    //                    .animate({
    //                        "opacity" : "0.5"
    //                    }, 100, function(){

                    // if ( !$.browser.mozilla ) {
                        $('.keywords span', self).each(function(i, el){
                            $(el)
                                .stop()
                                .delay(i*100)
                                .animate({"margin-left": "1"});
                        });
                    // } else {
                        // $('.keywords span', self).css("margin-left", 1);
                    // }

                },
                function(){
    //                $('img', this)
    //                    .stop()
    //                    .animate({
    //                        "opacity" : "1"
    //                    });
                    // if ( !$.browser.mozilla ) {
                        $('.keywords span', this).each(function(i,el){
                            $(el)
                                .stop(true)
                                .delay(i*100)
                                .animate({"margin-left": "210"});
                        });
                    // } else {
                        // $('.keywords span', this).css("margin-left", 210);
                    // }
                });

        },
        carousel : function(){
            $(".mosaic-prev-top").mouseover(function(){
                methods._prev(".line-container:first", -135, "top");
            });

            $(".mosaic-next-top").mouseover(function(){
                var max = $(window).width() - $(".line-container:first").width() + 100;
                methods._next(".line-container:first", max, "top");
            });

            $(".mosaic-prev-bottom").mouseover(function(){
                methods._prev(".line-container:last", -135, "bottom");
            });

            $(".mosaic-next-bottom").mouseover(function(){
                var max = $(window).width() - $(".line-container:last").width() + 100;
                methods._next(".line-container:last", max, "bottom");
            });

        },
        _prev : function(target, max, origin){
            var base = parseInt($(target).css("margin-left"));
            if ( isAnimatingTop || isAnimatingBottom || base > max ) {
                return false;
            }
            if (origin == "top") isAnimatingTop = true;
            if (origin == "bottom") isAnimatingBottom = true;

            while( base < max ) {
                 base += 232;
            }

            $(target)
                .animate({
                    "margin-left" : base
                }, 600, "easeInOutSine", function(){
                    $(".mosaic-prev-"+origin).addClass("disable");
                    $(".mosaic-next-"+origin).removeClass("disable");
                    if (origin == "top") isAnimatingTop = false;
                    if (origin == "bottom") isAnimatingBottom = false;
                });
        },
        _next : function(target, max, origin){
            var base = parseInt($(target).css("margin-left"));
            if ( isAnimatingTop || isAnimatingBottom || base < max ) {
                return false;
            }
            if (origin == "top") isAnimatingTop = true;
            if (origin == "bottom") isAnimatingBottom = true;

            while( base > max ) {
                 base -= 232;
            }

            $(target)
                .animate({
                    "margin-left" : base
                }, 600, "easeInOutSine", function(){
                    $(".mosaic-next-"+origin).addClass("disable");
                    $(".mosaic-prev-"+origin).removeClass("disable");
                    if (origin == "top") isAnimatingTop = false;
                    if (origin == "bottom") isAnimatingBottom = false;
                });
        }
    };

    $.fn.MLMosaic = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLMosaic' );
        }

    };

})( jQuery );