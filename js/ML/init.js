$(window).resize(function(){
    $(window).MLResize("resize");
});

$(window).ready(function(){

    // has JS basic
    $("html")
        .removeClass("noJS")
        .addClass("hasJS");

    // preload Images
    $(window).MLPreloadImages();

    $(window).MLFont();
    $("#logo").MLLogo();
    $("#menu").MLMenu();

    // resize ul
    if( $.address.value() == "/" ) {
        var topWidth = $("#content-top li").length * 250 + 115;
        var bottomWidth = $("#content-bottom li").length * 250 + 130;
        $("#content-top").parent().css("width", topWidth);
        $("#content-bottom").parent().css("width", bottomWidth);
    }
    // trigger first time
    $(window).resize();

});

$(window).bind({
    "LOAD_ITEM" : loadedItem,
    "LOAD_COMPLETE" : loadComplete,
    "NAV_DISPLAYED" : navDisplayed
});

function loadedItem(e, o){
    $("#content")
        .animate({
            "width" : (o.index * 100 / o.len) + "%"
        }, 20);
}

function loadComplete(){
    $("#menu").MLMenu("display");
}

function navDisplayed(){

    $("#content").css({
        "width" : "100%",
        "display" : "block"
    });
    
    if( $.address.value() != "/" ) {
        $(".mosaic a").MLOpenProject("open", $.address.value());
    } else {
        $(".mosaic").MLMosaic("display");
        $(".mosaic a").MLOpenProject();
    }
}

//$.address.change(function(event) {
//    console.log("address change", $.address.value());
//});
