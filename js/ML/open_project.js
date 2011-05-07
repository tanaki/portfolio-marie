(function( $ ){

    var methods = {
        init : function(){
            
            var self = this;
            $(self).click(function(){
                $.address.value($(this).attr('href'));
                methods.closeMosaic(this);
                return false;
            });
        },

        open : function (href, loadContent){
            $.post(
                href,
                {
                    "noLayout" : "true"
                },
                function(htmlLoaded){
						
					$("#content")
						.removeClass("mosaic")
						.addClass("project-detail")
						.html(htmlLoaded);

					$(window).MLFont("initProject");
					$(window).MLResize("resize");
					
					$("#footer-project").MLFooterProject();
					
					if ( loadContent ) {
						methods._initProject();
					} else {
						$(window).MLPreloadImages();
					}
                }
            );
        },

        openMosaic : function(){
            $.post(
                "/",
                {
                    noLayout: true
                },
                function(htmlLoaded){
                    $("#content")
                        .removeClass("project-detail")
                        .addClass("mosaic")
                        .html(htmlLoaded)
                        .fadeIn(function(){
                            $(window).MLResize("home");
                            $(".mosaic").MLMosaic("display");
                            $(".mosaic ul a").MLOpenProject();

                            $("#menu #work .menu-link")
                                .html("work");
                            $("#menu #work .menu-content")
                                .html($(".work-content").html());
                        
                            $(window).MLFont();
                        });
                }
            );
        },

        _initProject : function(){
			$("#content").fadeIn(100, function(){
				var lis = $("ul.content-project li").length;
                var startValue = 1;//Math.ceil( lis / 2);
                $("ul.content-project")
                    .jcarousel({
                        start: startValue,
                        scroll : 1,
                        wrap : "both",
                        animation : 800,
                        easing : "easeInOutSine",
                        itemFallbackDimension : 1100,
                        itemVisibleInCallback : {
                            onBeforeAnimation : function(){
                                $(window).trigger("IS_ANIMATING");
                            },
                            onAfterAnimation : function(){
                                $(window).trigger("END_ANIMATING");
                            }
                        }
                    })
                    .animate({
                        "opacity" : 1
                    }, function(){
					
						$(window).MLResize("resize");

						$("#menu").MLMenu("reset");
						$("#menu a.current").removeClass("current");
						$("#menu #work a").addClass("current");
						
						$("#menu #work .menu-link")
							.html($(".bottom-project-title").html());

						$("#menu #work .menu-content")
							.html($(".work-content").html());

						$(window).MLFont("work");
						$("#menu").MLMenu("open", 0);
						
						$(window).trigger("INIT_SWF");
					})
                    .MLImprovedCarousel({
                        carousel : $("ul.content-project").data("jcarousel"),
                        startValue : startValue-1
                    });
            });
        },

        closeMosaic : function(target){

            $("#content-top").animate({
//                marginLeft : $(window).width()
                marginTop: 228
            });

            $("#content-bottom").animate({
//                marginLeft : - $(window).width()
                marginTop: -228
            }, function(){
                methods.open($(target).attr("href"));
            });
        }
    }


    $.fn.MLOpenProject = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.MLOpenProject' );
        }

    };

})( jQuery );
