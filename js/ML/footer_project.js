(function( $ ){

    var methods = {
        init : function( options ) {

            var self = this;
            
            $("a", this)
                .click(function(){
                    $.address.value($(this).attr('href'));
                    $(window).MLOpenProject("open", $(this).attr("href"));
                    return false;
                });

            Cufon.replace("#footer-project a", {
                fontFamily: 'Helvetica Neue'
            });
        }
    };

    $.fn.MLFooterProject = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLFooterProject' );
        }

    };

})( jQuery );