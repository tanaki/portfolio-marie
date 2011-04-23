(function( $ ){

    var context = null,
        currentValue = 0,
        max = 0,
        idAnimated = 0,
        carousel = null;

    var methods = {
        init : function( options ) {
            var self = this;

            carousel = options.carousel;
            context = this;
            max = carousel.size();
            currentValue = options.startValue;
            idAnimated = currentValue;
            methods._opacity(self);
            methods._updatePagin();

            $(window).keyup(function(e){
                if(e.keyCode == 37) {
                    carousel.prev();
                    methods._prev();
                }
                if(e.keyCode == 39) {
                    carousel.next();
                    methods._next();
                }
            });

            $(".carousel-prev").click(function(){
                carousel.prev();
                methods._prev();
                return false;
            });
            $(".carousel-next").click(function(){
                carousel.next();
                methods._next();
                return false;
            });

            $(window).bind({
                "IS_ANIMATING" : function(){
                    idAnimated = currentValue;
                },
                "END_ANIMATING" : function(){
                    idAnimated = currentValue;
                    console.log( carousel );
                }
            });

        },
        _prev : function(){
            if(currentValue != idAnimated) return;
            currentValue = (currentValue > 0) ? (currentValue - 1) : max - 1;
            methods._opacity();
            methods._updatePagin();
        },
        _next : function(){
            if(currentValue != idAnimated) return;
            currentValue = (currentValue > max - 2) ? 0 : currentValue + 1;
            methods._opacity();
            methods._updatePagin();
        },
        _opacity : function(){
            $(".carousel-current-item")
                .animate({
                    "opacity": 0.6
                });

            var currentLi = $("li", context).get(currentValue);
            $(currentLi)
                .animate({
                    "opacity": 1
                }, function(){
                    $(this).addClass("carousel-current-item");
                });
        },
        _updatePagin : function(){
            $(".carousel-pagin").html((currentValue+1) + "/" + max );
            Cufon.replace(".carousel-pagin", {
                fontFamily: 'Helvetica Neue'
            });
        }
    };

    $.fn.MLImprovedCarousel = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLImprovedCarousel' );
        }

    };

})( jQuery );