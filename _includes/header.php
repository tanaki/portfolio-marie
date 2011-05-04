<!DOCTYPE html>
<html lang="en" class="noJS">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/gif" href="favicon.gif" />
        <link rel="shortcut icon" type="image/gif" href="favicon.gif" />

        <title>Marie Laurent - Interactive and Graphic Designer</title>

        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/default.css" type="text/css" />

        <script src="/js/lib/jquery.min.js" type="text/javascript"></script>
        <script src="/js/lib/plugins.min.js" type="text/javascript"></script>

        <script src="/js/font/cufon-yui.js" type="text/javascript"></script>
        <script src="/js/font/HelveticaNeueClassic_400-HelveticaNeueClassic_700.font.js" type="text/javascript"></script>
        <script src="/js/font/Helvetica_Neue_500-Helvetica_Neue_700.font.js" type="text/javascript"></script>

        <script type="text/javascript">
            // preload images
            var aImages = [];

			var aImagesProject = [
                "/img/site/misc/icon_logo_24.png",
                "/img/site/misc/bg_global_24.png",
                "/img/site/misc/sprite_icon-contact_24.png",
				
                "/img/projects/thumbs/strange-fruit_24.png",
                "/img/projects/thumbs/punchline_24.png",
                "/img/projects/thumbs/yummy_24.png",
                "/img/projects/thumbs/howbama_24.png",
                "/img/projects/thumbs/ace_24.png",
                "/img/projects/thumbs/costain_24.png",
                "/img/projects/thumbs/sony-headphones_24.png",
                "/img/projects/thumbs/sony-voice-recorders_24.png",
                "/img/projects/thumbs/mcdo-monopoly_24.png",
                "/img/projects/thumbs/content-strategy_24.png",
                "/img/projects/thumbs/levis-banners_24.png",
                "/img/projects/thumbs/levis-black_24.png",
                "/img/projects/thumbs/levis-kids_24.png",
                "/img/projects/thumbs/playstation-pink_24.png",
                "/img/projects/thumbs/drawings_24.png",
                "/img/projects/thumbs/photomontages_24.png",
				
                "/img/projects/mini/strange-fruit_24.png",
                "/img/projects/mini/punchline_24.png",
                "/img/projects/mini/yummy_24.png",
                "/img/projects/mini/howbama_24.png",
                "/img/projects/mini/ace_24.png",
                "/img/projects/mini/costain_24.png",
                "/img/projects/mini/sony-headphones_24.png",
                "/img/projects/mini/sony-voice-recorders_24.png",
                "/img/projects/mini/mcdo-monopoly_24.png",
                "/img/projects/mini/content-strategy_24.png",
                "/img/projects/mini/levis-banners_24.png",
                "/img/projects/mini/levis-black_24.png",
                "/img/projects/mini/levis-kids_24.png",
                "/img/projects/mini/playstation-pink_24.png",
                "/img/projects/mini/drawings_24.png",
                "/img/projects/mini/photomontages_24.png",
			
				"/img/projects/content/ace/ace_01.jpg",
				"/img/projects/content/ace/ace_02.jpg",
				"/img/projects/content/ace/ace_03.jpg",
				"/img/projects/content/ace/ace_04.jpg",
				"/img/projects/content/ace/ace_05.jpg",
				
				"/img/projects/content/content-strategy/content-strategy_01.jpg",
				"/img/projects/content/content-strategy/content-strategy_02.jpg",
				"/img/projects/content/content-strategy/content-strategy_03.jpg",
				
				"/img/projects/content/costain/costain_01.jpg",
				"/img/projects/content/costain/costain_02.jpg",
				"/img/projects/content/costain/costain_03.jpg",
				"/img/projects/content/costain/costain_04.jpg",
				
				"/img/projects/content/drawings/drawings_01.jpg",
				"/img/projects/content/drawings/drawings_02.jpg",
				"/img/projects/content/drawings/drawings_03.jpg",
				"/img/projects/content/drawings/drawings_04.jpg",
				"/img/projects/content/drawings/drawings_05.jpg",
				
				"/img/projects/content/howbama/howbama_01.jpg",
				"/img/projects/content/howbama/howbama_02.jpg",
				"/img/projects/content/howbama/howbama_03.jpg",
				"/img/projects/content/howbama/howbama_04.jpg",
				"/img/projects/content/howbama/howbama_05.jpg",
				"/img/projects/content/howbama/howbama_06.jpg",
				"/img/projects/content/howbama/howbama_07.jpg",
				
				"/img/projects/content/levis-banners/levis-banners_01.jpg",
				"/img/projects/content/levis-banners/levis-banners_02.jpg",
				"/img/projects/content/levis-banners/levis-banners_03.jpg",
				
				"/img/projects/content/levis-black/levis-black_01.jpg",
				"/img/projects/content/levis-black/levis-black_03.jpg",
				
				"/img/projects/content/levis-kids/levis-kids_01.jpg",
				"/img/projects/content/levis-kids/levis-kids_02.jpg",
				"/img/projects/content/levis-kids/levis-kids_03.jpg",
				"/img/projects/content/levis-kids/levis-kids_04.jpg",
				
				"/img/projects/content/mcdo-monopoly/mcdo-monopoly_01.jpg",
				"/img/projects/content/mcdo-monopoly/mcdo-monopoly_02.jpg",
				"/img/projects/content/mcdo-monopoly/mcdo-monopoly_03.jpg",
				"/img/projects/content/mcdo-monopoly/mcdo-monopoly_04.jpg",
				"/img/projects/content/mcdo-monopoly/mcdo-monopoly_05.jpg",
				
				"/img/projects/content/photomontages/photomontages_01.jpg",
				"/img/projects/content/photomontages/photomontages_02.jpg",
				"/img/projects/content/photomontages/photomontages_03.jpg",
				
				"/img/projects/content/playstation-pink/playstation-pink_01.jpg",
				"/img/projects/content/playstation-pink/playstation-pink_02.jpg",
				"/img/projects/content/playstation-pink/playstation-pink_03.jpg",
				
				"/img/projects/content/punchline/punchline_01.jpg",
				
				"/img/projects/content/sony-headphones/sony-headphones_01.jpg",
				"/img/projects/content/sony-headphones/sony-headphones_02.jpg",
				
				"/img/projects/content/sony-voice-recorders/sony-voice-recorders_01.jpg",
				
				"/img/projects/content/strange-fruit/strange-fruit_01.jpg",
				
				"/img/projects/content/yummy/yummy_03.jpg",
				"/img/projects/content/yummy/yummy_04.jpg",
				"/img/projects/content/yummy/yummy_05.jpg",
				"/img/projects/content/yummy/yummy_06.jpg",
				"/img/projects/content/yummy/yummy_07.jpg",
				"/img/projects/content/yummy/yummy_08.jpg",
				"/img/projects/content/yummy/yummy_09.jpg",
				"/img/projects/content/yummy/yummy_10.jpg"
			];
            $.imgpreload(aImagesProject, {
                all : function(){}
            });
        </script>
		<!--script src="/js/ML/plugins.min.js" type="text/javascript"></script-->
		<script src="/js/ML/font.js" type="text/javascript"></script>
		<script src="/js/ML/footer_project.js" type="text/javascript"></script>
		<script src="/js/ML/improved_carousel.js" type="text/javascript"></script>
		<script src="/js/ML/logo.js" type="text/javascript"></script>
		<script src="/js/ML/menu.js" type="text/javascript"></script>
		<script src="/js/ML/mosaic.js" type="text/javascript"></script>
		<script src="/js/ML/open_project.js" type="text/javascript"></script>
		<script src="/js/ML/preload_images.js" type="text/javascript"></script>
		<script src="/js/ML/resize.js" type="text/javascript"></script>

		<script src="/js/ML/init.js" type="text/javascript"></script>
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-22951732-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
    </head>

    <body>
        <div id="loader"></div>
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
                                <a class="menu-link" href="#" data-index="0">Work</a>
                                <span class="menu-content">Click on one of the works below to see more details.</span>
                            </li>
                            <li id="short-bio">
                                <a class="menu-link" href="#" data-index="1">Short Bio</a>
                                <span class="menu-content">
                                    Hello!<br/>
                                    My name is Marie Laurent, I am a 24 years old interactive and graphic designer.<br/>
                                    I graduated with a master's degree in digital design and production from Gobelins, Paris in 2010.<br/>
                                    I just finished a 6 month internship at Tonic London, and I am currently looking for a full time position in London.<br/>
                                    Please feel free to get in touch with me!
                                </span>
                            </li>
                            <li id="skills">
                                <a class="menu-link" href="#" data-index="2">Skills</a>
                                <span class="menu-content">
                                    Art direction, user interface design, webdesign, flash animation, illustration...
                                    <br/><br/>
                                    <strong>Tools</strong>: Sketches, wireframes, storyboards, mock-ups...<br/>
                                    <strong>Projects</strong>: Websites, web-apps, mobile applications...
                                </span>
                            </li>
                            <li id="credits" class="last">
                                <a class="menu-link" href="#" data-index="3">Credits</a>
                                <span class="menu-content">
                                    Art direction: <a href="mailto:mawielauwent@gmail.com">Marie Laurent</a><br/>
                                    Developement: <a target="_blank" href="http://www.nicolaspigelet.com/">Nicolas Pigelet</a>
                                    <strong class="performance">For a better experience, please use <a href="http://www.google.com/chrome">Chrome</a> or <a href="http://www.apple.com/safari/">Safari</a>.</strong>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" class="<?php echo $bodyClass; ?>">