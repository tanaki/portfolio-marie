(function( $ ){

    var methods = {
        init : function( options ) {
            Cufon.replace('#header a, .keywords span', {
                hover : true,
                fontFamily: 'Helvetica Neue'
            });
            Cufon.replace('#menu span.menu-content', {
                fontFamily: 'HelveticaNeueClassic'
            });
        },
        initProject : function(){
            Cufon.replace(".carousel-pagin, .bottom-project-title", {
                fontFamily: 'Helvetica Neue'
            });
            Cufon.replace(".bottom-project-desc", {
                fontFamily: 'HelveticaNeueClassic'
            });
        }
    };

    $.fn.MLFont = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLFont' );
        }

    };

})( jQuery );