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

            // background position
            // TODO

            if ( $.address.value() == "/" ) methods.home();
        },

        home : function(){

            // horizontally center
            var margin = "0 auto";
            if( $(window).width() < $(".content-inner").width() ) {
                margin = "0 0 0 " + Math.round( ( $(window).width() - $(".content-inner").width() ) / 2) + "px";
            }
            $(".line-container").css("margin", margin);

            var topWidth = $("#content-top li").length * 250 + 115;
            var bottomWidth = $("#content-bottom li").length * 250 + 115;
            $("#content-top").parent().css("width", topWidth);
            $("#content-bottom").parent().css("width", bottomWidth);
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