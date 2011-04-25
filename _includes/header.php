<!DOCTYPE html>
<html lang="en" class="noJS">
    <head>
        <meta charset="utf-8" />
        <title>Marie Laurent - Interactive and Graphic Designer</title>

        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/default.css" type="text/css" />

        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script-->
        <script src="/js/lib/jquery.min.js" type="text/javascript"></script>

        <script src="/js/font/cufon-yui.js" type="text/javascript"></script>
        <script src="/js/font/HelveticaNeueClassic_400.font.js" type="text/javascript"></script>
        <script src="/js/font/Helvetica_Neue_500-Helvetica_Neue_700.font.js" type="text/javascript"></script>

        <script type="text/javascript">
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
                "/img/projects/thumbs/strategy_24.png",

                "/img/projects/content/yummy/yummy-1.jpg"    

            ];
        </script>
        
        <script src="/js/lib/jquery.imgpreload.min.js" type="text/javascript"></script>
        <script src="/js/lib/jquery.address-1.3.2.min.js" type="text/javascript"></script>
        <script src="/js/lib/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="/js/lib/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script src="/js/lib/jquery.animateToClass.js" type="text/javascript"></script>
        <script src="/js/lib/swfobject.js" type="text/javascript"></script>

        <script src="/js/ML/preload_images.js" type="text/javascript"></script>
        <script src="/js/ML/resize.js" type="text/javascript"></script>
        <script src="/js/ML/font.js" type="text/javascript"></script>
        <script src="/js/ML/menu.js" type="text/javascript"></script>
        <script src="/js/ML/logo.js" type="text/javascript"></script>
        <script src="/js/ML/mosaic.js" type="text/javascript"></script>
        <script src="/js/ML/open_project.js" type="text/javascript"></script>
        <script src="/js/ML/footer_project.js" type="text/javascript"></script>
        <script src="/js/ML/improved_carousel.js" type="text/javascript"></script>
        <script src="/js/ML/init.js" type="text/javascript"></script>

    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <div id="header-container">
                    <div id="header-left">
                        <a id="logo" href="/"><img src="/img/site/misc/icon_logo_24.png" alt="Marie Laurent Logo"/></a>
                        <ul class="sublogo">
                            <li id="resume">
                                <a target="_blank" href="/data/CV_Marie-Laurent.pdf">My Resume</a>
                            </li>
                            <li id="mail">
                                <a href="mailto:mawielauwent@gmail.com"></a>
                            </li>
                            <li id="linkedin">
                                <a target="_blank" href="http://www.linkedin.com/pub/marie-laurent/23/364/b13/en"></a>
                            </li>
                            <li id="twitter">
                                <a target="_blank" href="http://twitter.com/mawiemawie"></a>
                            </li>
                        </ul>
                    </div>
                    <div id="header-right">
                        <ul id="menu">
                            <li id="work">
                                <a href="#" data-index="0">Work</a>
                                <span class="menu-content">Click on one of the works below to see more details.</span>
                            </li>
                            <li id="short-bio">
                                <a href="#" data-index="1">Short Bio</a>
                                <span class="menu-content">
                                    Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco liquip ex ea consequat.
                                </span>
                            </li>
                            <li id="skills">
                                <a href="#" data-index="2">Skills</a>
                                <span class="menu-content">
                                    Art direction, User interface design, webdesign, flash animation...
                                    <br/><br/>
                                    TOOLS<br/>
                                    Sketches, wireframes, storyboards, mock-ups...<br/>
                                    Type of projects : websites, web-apps, mobile applications...
                                </span>
                            </li>
                            <li id="credits" class="last">
                                <a href="#" data-index="3">Credits</a>
                                <span class="menu-content">Lorem Ipsum</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" class="<?php echo $bodyClass; ?>">