(function( $ ){

    var methods = {
        init : function( options ) {

            var self = this,
                len = aImages.length,
                width = $(window).width(),
                i = 1;
            
            $.imgpreload(aImages, {
                each: function() {
                    $(window).trigger("LOAD_ITEM", {
                        index : i,
                        width : width,
                        len : len
                    });
                    i++;
                },
                all:function() {
                    $(window).trigger("LOAD_COMPLETE");
                }
            });


        }
    };

    $.fn.MLPreloadImages = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLPreloadImages' );
        }

    };

})( jQuery );