(function( $ ){
    
	$.fn.mosaicHover = function() {
	
        $(this).hover(
            function(){
                var self = this;
                $('img', self)
                    .stop(true)
                    .animate({
                        "opacity" : "0.5"
                    }, 200, function(){
                        $('.keywords span', self).each(function(i, el){
                            $(el)
                                .stop()
                                .delay(i*100)
                                .animate({"margin-left": "1"});
                        });
                    });
            },
            function(){
                $('img', this)
                    .stop()
                    .animate({
                        "opacity" : "1"
                    });
                $('.keywords span', this).each(function(i,el){
                    $(el)
                        .stop(true)
                        .delay(i*100)
                        .animate({"margin-left": "210"});
                });
            });

        return this;
	};

})( jQuery );
