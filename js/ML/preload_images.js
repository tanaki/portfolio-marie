(function( $ ){
	
	var alreadyLoaded = [];
	
    var methods = {
        init : function( options ) {

            var self = this,
                width = $(window).width(),
                i = 1;
            
			var imagesArray = alreadyLoaded.length > 0 ? [] : siteImages;
			
			if( $.address.value() != "/" ) {
				var pathNames = $.address.pathNames();
				var name = pathNames[pathNames.length-1];
				
				if(in_array(name, alreadyLoaded)) {
                    $(window).trigger("LOAD_COMPLETE", {
						direct : true
					});
					return;
				}
				alreadyLoaded.push(name);
				$( projectImages[name] ).each(function(i, item){
					imagesArray.push(item);
				});
				
				$(mini).each(function(i, item){
					imagesArray.push(item);
				});
				
			} else {
				$(thumbs).each(function(i, item){
					imagesArray.push(item);
				});
			}
			
			var len = imagesArray.length;
			$(window).trigger("LOAD_STARTED");
            $.imgpreload(imagesArray, {
                each: function() {
					$(window).trigger("LOAD_ITEM", {
                        index : i,
                        width : width,
                        len : len
                    });
                    i++;
                },
                all:function() {
                    $(window).trigger("LOAD_COMPLETE", {
						direct : false
					});
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