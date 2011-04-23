(function( $ ){

    var methods = {
        init : function( options ) {
            var self = this;
        },
        resize : function(){

            // vertically center
            var marginTop = Math.floor(($(window).height() / 2) - 394);
            if ( marginTop > 0 ) $("#header").css("margin-top", marginTop);
            else $("#header").css("margin-top", 0);

            // horizontally center
            var margin = "0 auto";
            if( $(window).width() < $(".content-inner").width() ) {
                margin = "0 0 0 " + Math.round( ( $(window).width() - $(".content-inner").width() ) / 2) + "px";
            }
            $(".line-container").css("margin", margin);

            // background position
            // TODO
                        
        }
    };

    $.fn.MLResize = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLResize' );
        }

    };

})( jQuery );