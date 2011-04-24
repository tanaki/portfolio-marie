(function( $ ){

    var methods = {
        init : function( options ) {
            var self = this;
            
        },

        display : function(){

            $(window).MLResize("resize");
            $(".mosaic li.project").each(function(i, el){
                var index = i > 6 ? i-6 : i;
                $(el)
                    .delay(index*120)
                    .fadeIn(200);
            });
            methods.hover();
        },

        hover : function(){
            $(".mosaic a").hover(
                function(){
                    var self = this;
    //                $('img', self)
    //                    .stop(true)
    //                    .animate({
    //                        "opacity" : "0.5"
    //                    }, 100, function(){

                    if ( !$.browser.mozilla ) {
                        $('.keywords span', self).each(function(i, el){
                            $(el)
                                .stop()
                                .delay(i*100)
                                .animate({"margin-left": "1"});
                        });
                    } else {
                        $('.keywords span', self).css("margin-left", 1);
                    }

                },
                function(){
    //                $('img', this)
    //                    .stop()
    //                    .animate({
    //                        "opacity" : "1"
    //                    });
                    if ( !$.browser.mozilla ) {
                        $('.keywords span', this).each(function(i,el){
                            $(el)
                                .stop(true)
                                .delay(i*100)
                                .animate({"margin-left": "210"});
                        });
                    } else {
                        $('.keywords span', this).css("margin-left", 210);
                    }
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