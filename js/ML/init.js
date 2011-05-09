$(window).resize(function(){
    $(window).MLResize("resize");
});

$(window).ready(function(){
    
    // has JS basic
    $("html")
        .removeClass("noJS")
        .addClass("hasJS");

    if ( $.browser.mozilla ) $("html").addClass("ff");
    if ( $.browser.webkit ) $("html").addClass("webkit");
    if (navigator.appVersion.indexOf("Mac")!=-1) $("html").addClass("mac");

    // preload Images
    $(window).MLPreloadImages();
	
    $(window).MLFont();
    $("#logo").MLLogo();
    $("#menu").MLMenu();
    
    $(window).MLResize("resize");

    // prevent mailto issue in Chrome
//    if( /chrome/gi.test(navigator.userAgent) ) {
//        $("#mail a").click(function(){
//            prompt("Direct mail links don't seem to work on Chrome, Please use your usual way to send an email at :", "mawielauwent@gmail.com");
//            return false;
//        });
//    }
});

$(window).bind({
	"LOAD_STARTED" : loadStarted,
    "LOAD_ITEM" : loadedItem,
    "LOAD_COMPLETE" : loadComplete,
    "NAV_DISPLAYED" : navDisplayed
});

function loadStarted (){
	$("#loader")
		.html("<div>0%</div>")
		.css("width", "1%")
		.fadeIn(100);
}

function loadedItem(e, o){
    $("#loader")
		.html("<div>" + Math.round(o.index * 100 / o.len) + "%</div>")
		.stop(true, true)
        .animate({
            "width" : (o.index * 100 / o.len) + "%"
        }, 20);
	Cufon.replace("#loader div", {
		fontFamily: 'Helvetica Neue'
	});
}

function loadComplete(e, o){
	if(o.direct) {
		initContent();
	} else {
		$("#loader")
			.stop(true, true)
			.css("width", "100%")
			.fadeOut(300, function(){
				initContent();
			});
	}
}

function initContent(){
	if ( $("#header-left").css("display") == "block" ) {
		if ($.address.value() == "/") {
	        $(".project-detail").MLOpenProject("openMosaic");
		} else {
			$(".mosaic ul a").MLOpenProject("open", $.address.value(), true);			
		}
	} else {
		$("#menu").MLMenu("display");
	}
}

function navDisplayed(){
    $("#content").css({
        "width" : "100%",
        "display" : "block",
        "min-width" : 1240
    });
    $(window).MLResize("resize");
    if( $.address.value() != "/" ) {
        $(".mosaic ul a").MLOpenProject("open", $.address.value(), true);
    } else {
        $(".mosaic").MLMosaic("display");
        $(".mosaic ul a").MLOpenProject();
    }
}

//$.address.change(function(event) {
//    console.log("address change", $.address.value());
//});


function in_array (needle, haystack, argStrict) {
    var key = '',
        strict = !! argStrict;
 
    if (strict) {
        for (key in haystack) {
            if (haystack[key] === needle) {
                return true;
            }
        }
    } else {
        for (key in haystack) {
            if (haystack[key] == needle) {
                return true;
            }
        }
    }
 
    return false;
}