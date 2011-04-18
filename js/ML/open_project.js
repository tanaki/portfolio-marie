(function( $ ){

    var closeMosaic = function(target){
        $("#content-top").animate({
            marginTop: 228
        });
        
        $("#content-bottom").animate({
            marginTop: -228
        }, function(){
            $(".mosaic").fadeOut(function(){
                $(target).trigger("INIT_PROJECT");
            });
        });
    }

	$.fn.openProject = function() {
		var self = this;

        $(this).click(function(){
            $.address.value($(this).attr('href'));
            closeMosaic(this);
            return false;
        });

        $(this).bind("INIT_PROJECT", function(){

            $.post(
                $(this).attr("href"),
                {
                    "noLayout" : "true"
                },
                function(htmlLoaded){
                    $("#content")
                        .removeClass("mosaic")
                        .addClass("project")
                        .html(htmlLoaded);

                    $(window).trigger("OPEN_CONTENT");
                }
            );
        });

	};

})( jQuery );
