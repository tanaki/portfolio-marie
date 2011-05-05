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
	//$(window).trigger("LOAD_COMPLETE");
	
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
    "LOAD_ITEM" : loadedItem,
    "LOAD_COMPLETE" : loadComplete,
    "NAV_DISPLAYED" : navDisplayed
});

function loadedItem(e, o){
    $("#loader")
        .animate({
            "width" : (o.index * 100 / o.len) + "%"
        }, 20);
}

function loadComplete(){
    $("#loader").fadeOut(300, function(){
        $("#menu").MLMenu("display");
    });
}

function navDisplayed(){

    $("#content").css({
        "width" : "100%",
        "display" : "block",
        "min-width" : 1240
    });
    $(window).MLResize("resize");
    if( $.address.value() != "/" ) {
        $(".mosaic ul a").MLOpenProject("open", $.address.value());
    } else {
        $(".mosaic").MLMosaic("display");
        $(".mosaic ul a").MLOpenProject();
    }
}

//$.address.change(function(event) {
//    console.log("address change", $.address.value());
//});
