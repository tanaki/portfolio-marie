<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="content-inner">
        <div class="container-project">
            <ul class="content-project">
                <li>
                    <img src="/img/projects/content/costain/costain_01.jpg" />
                    <span class="caption">Sunny illustration</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_02.jpg" />
                    <span class="caption">Rainy illustration</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_03.jpg" />
                    <span class="caption">Website</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_04.jpg" />
                    <span class="caption">Website</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_05.jpg" />
                    <span class="caption">Storyboard/Mockup, full story</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_06.jpg" />
                    <span class="caption">Story part 1</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_07.jpg" />
                    <span class="caption">Story part 2</span>
                </li>
                <li>
                    <img src="/img/projects/content/costain/costain_08.jpg" />
                    <span class="caption">Story part 3</span>
                </li>
                <li>
                    <span class="swf-container">
                        <span id="costain-09-swf"></span>
                    </span>
                    <span class="caption">Prototype in AS3</span>
                </li>
                <li>
                    <span class="swf-container" style="padding-top:140px;">
                        <span id="costain-10-swf"></span>
                    </span>
                    <span class="caption">Loader in AS3</span>
                </li>
            </ul>
			<script type="text/javascript">
				$(window).bind("INIT_SWF", function(){
					swfobject.embedSWF("/img/projects/content/costain/costain_09.swf", "costain-09-swf", "667", "435", "9.0.0", "/data/swf/expressInstall.swf");
					swfobject.embedSWF("/img/projects/content/costain/costain_10.swf", "costain-10-swf", "160", "160", "9.0.0", "/data/swf/expressInstall.swf");
					$(window).unbind("INIT_SWF");
				});
			</script>
            <div class="arrows"></div>
            <a href="#" class="carousel-prev">PREV</a>
            <a href="#" class="carousel-next">NEXT</a>
        </div>
        <div class="bottom-project">
            <div class="bottom-project-inner">
                <div class="carousel-pagin">

                </div>
                <div class="bottom-project-title">
                    Costain
                </div>
                <div class="bottom-project-desc">
                    2010 - Site web
                </div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>:  Illustration / Design / Storyboarding / Design interaction<br/>
            <strong>Agency</strong>: Tonic<br/>
            <strong>Client</strong>: Costain<br/><br/>
            Creation of storyboard, mockup and assets for the Costain new website. <a href="http://www.costain.com/annual-report-2010/meeting-national-needs.aspx" target="_blank">Visit website</a>
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>