$(window).ready(function(){

    // has JS basic
    $("html")
        .removeClass("noJS")
        .addClass("hasJS");

    Cufon.replace('#header a, .keywords span', {
        hover : true
    });

    $("#logo").click(function(){
        // TODO create back animation
        console.log("Back Animation");
        return false;
    });

    // vertically center
    var marginTop = Math.floor(($(window).height() / 2) - 230 - 164);
    if ( marginTop > 0 ) $("#header").css("margin-top", marginTop);

    // Resize ul
    $("#content-top").css("width", $("#content-top li").length * 250 + 115);
    $("#content-bottom").css("width", $("#content-bottom li").length * 250 + 130 - 255);

    // preload images
    var aImages = [
        "/img/site/misc/icon_logo_24.png",

        "/img/projects/thumbs/levis_24.png",
        "/img/projects/thumbs/strange-fruit_24.png",
        "/img/projects/thumbs/punchline_24.png",
        "/img/projects/thumbs/yummy_24.png",
        "/img/projects/thumbs/monopoly_24.png",
        "/img/projects/thumbs/costain_24.png",
        "/img/projects/thumbs/levis-black_24.png",
        "/img/projects/thumbs/drawings_24.png",
        "/img/projects/thumbs/howbama_24.png",
        "/img/projects/thumbs/sony_24.png",
        "/img/projects/thumbs/levis-kids_24.png",
        "/img/projects/thumbs/playstation_24.png",
        "/img/projects/thumbs/photomontage_24.png",
        "/img/projects/thumbs/strategy_24.png"

    ];
    var
        len = aImages.length,
        width = $(window).width(),
        i = 1;
    $.imgpreload(aImages, {
        each: function() {
            $(window).trigger("LOAD_ITEM", {
                index : i,
                width : width,
                len : len
            });
            i++;
        },
        all:function() {
            $(window).trigger("LOAD_COMPLETE");
        }
    });
});

$(window).bind({
    "LOAD_ITEM" : loadedItem,
    "LOAD_COMPLETE" : displayNav,
    "NAV_DISPLAYED" : displayMosaic,
    "MOSAIC_DISPLAYED" : initControls,
    "OPEN_CONTENT" : openContent
});

function loadedItem(e, o){
    $("#content")
//        .stop(true, true)
        .animate({
            "width" : ((o.index * o.width) / o.len)
        }, 20);
}

function openContent(){
    $("#content").fadeIn();
}

function displayNav(){
    var lis = $("#menu li");
    $("#header-left").fadeIn(300, function(){
        lis.each(function(i, el){
            $(el).delay(i*100).fadeIn(200, function(){
                if( i == lis.length-1 ) {
                    $(window).trigger("NAV_DISPLAYED");
                }
            });
        });
    });
}

function displayMosaic(){
    $(".mosaic li.project").each(function(i, el){
        var index = i > 6 ? i-6 : i;
        $(el)
            .delay(index*120)
            .fadeIn(200);
    });
    $(window).trigger("MOSAIC_DISPLAYED");
}

function initControls (){
    
    $(".mosaic a")
            .mosaicHover()
            .openProject();
    /*
    // Menu
    $("#menu a").hover(
        function(){

        },
        function(){

        }
    );
    */
}