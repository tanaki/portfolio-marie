(function( $ ){

    var methods = {
        init : function( options ) {

            var self = this;

            $(this).click(function(){
                
                $("#menu").MLMenu("reset");
                if( $.address.value() != "/" ) {
                    $.address.value("/");
                    $("#content").fadeOut(300, function(){
                        $(".project-detail").MLOpenProject("openMosaic");
                    })
                }

                return false;
            });

        }
    };

    $.fn.MLLogo = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLLogo' );
        }

    };

})( jQuery );