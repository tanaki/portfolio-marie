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

            methods.background();
            methods.footerBackground();

            if ( $.address.value() == "/" ) {
                methods.home();
            }
        },

        background : function(){

            if ( !$("#wrapper").hasClass("hasBackground") ) {
                $("#wrapper").addClass("hasBackground");
                return;
            }

            // background position
            var top = $("#logo").position().top - 73;
            var left = Math.round( ( $(window).width() - $(".content-inner").width() ) / 2) + 13;
            if ( $.address.value() != "/" ) left -= 8;
            $("#wrapper").css({
                "background-position" : (left +"px "+top+"px"),
                "background-image" : "url(/img/site/misc/bg_global_24.png)"
            });
        },

        footerBackground : function() {
			if ( !$("#footer-project ul").position() ) return;
            var left = ($.browser.msie || $("html").hasClass("mac")) ? parseInt($("#footer-project ul").css("margin-left")) : parseInt($("#footer-project ul").position().left);
            $("#footer-project").css("background-position", (left + 60) + "px top");
        },

        home : function(){

            var topWidth = $("#content-top li").length * 250 + 115;
            var bottomWidth = $("#content-bottom li").length * 250 + 103;
            $("#content-top").parent().css("width", topWidth);
            $("#content-bottom").parent().css("width", bottomWidth);
            
            // horizontally center
            var margin = "0 auto",
                marginLast = "0 auto";
            if( $(window).width() < $(".content-inner").width() ) {
                var marginLeft = Math.round( ( $(window).width() - $(".content-inner").width() ) / 2);
                margin = "0 0 0 " + marginLeft + "px";
                marginLast = "0 0 0 " + (marginLeft + 5) + "px";
            }
            $(".line-container:first").css("margin", margin);
            $(".line-container:last").css("margin", marginLast);

            if( $(window).width() + 100 < $(".content-inner").width() ) {
                $(".mosaic-prev-top, .mosaic-next-top, .mosaic-prev-bottom, .mosaic-next-bottom").removeClass("disable");
            } else {
                $(".mosaic-prev-top, .mosaic-next-top, .mosaic-prev-bottom, .mosaic-next-bottom").addClass("disable");
            }
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