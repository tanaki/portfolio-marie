(function( $ ){

    var context = null,
        currentIndex = null,
        isAnimating = false,
        lis = null;

    var methods = {
        init : function( options ) {
            
            var self = this;

            lis = $("li", self);
            context = this;
            $(".menu-link", self).click(function(){

                var index = $(this).data("index");
                if ( isAnimating ) return false;

                if ( currentIndex == null || currentIndex != index ) {

                    $("#menu a.current").removeClass("current");
                    $(this).addClass("current");

                    methods.open(index);
                } else {
                    methods.reset();
                }

                return false;
            });
        },
        open : function(index){

            isAnimating = true;

            var indexes = [0, 1, 2, 3];
            indexes.splice( index, 1);
            
            for ( var i = 0; i < indexes.length; i++ ){
                $(lis[indexes[i]]).animate({
                    "width" :  "15.2%",
                    "margin-top" : 135
                });
            }
            
            $(lis[index]).animate({
                "width" :  "51.2%"
            }, function(){
                var $span = $( "span", this);
                $span.css("display", "block");
                var marginTop = $span.height() > 0 ? 125 - $span.height() : 135;
                $(this).animate({
                    "margin-top" : marginTop
                }, function(){
                    isAnimating = false;
                });
            });

            currentIndex = index;
        },
        reset : function(  ) {

            if (isAnimating) return false;
            $("a.current", context).removeClass("current");
            $("li", context).each(function(i, el){
                $(el).animate({
                    "width" : "24.2%",
                    "margin-top" : 135
                }, function(){
                    currentIndex = null;
                    isAnimating = false;
                });
            });
        },
        display : function(){
            var lis = $("#menu li");
            $("#header-left").fadeIn(300, function(){
                $("#copyright").fadeIn();
                lis.each(function(i, el){
                    $(el).delay(i*100).fadeIn(200, function(){
                        if( i == lis.length-1 ) {
                            $(window).trigger("NAV_DISPLAYED");
                        }
                    });
                });
            });
        }
    };

    $.fn.MLMenu = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.menu' );
        }

    };

})( jQuery );