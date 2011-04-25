<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <!--li>
                <span class="swf-container">
                    <span id="yummy-swf"></span>
                    <script type="text/javascript">
                        swfobject.embedSWF("/img/projects/content/yummy/dummy.swf", "yummy-swf", "1100", "435", "9.0.0", "/data/swf/expressInstall.swf");
                    </script>
                </span>
                <span class="caption">Caption 1 <a href="#">Link</a></span>
            </li>
            <li>
                <span class="swf-container">
                    <iframe src="http://player.vimeo.com/video/12290292?title=0&amp;byline=0&amp;portrait=0&amp;color=F70064" width="773" height="435" frameborder="0"></iframe>
                </span>
                <span class="caption">Caption 2</span>
            </li-->
            <li>
                <img src="/img/projects/content/yummy/yummy_03.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_04.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_05.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_06.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_07.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_08.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_09.jpg" />
            </li>
            <li>
                <img src="/img/projects/content/yummy/yummy_10.jpg" />
            </li>
        </ul>
        <div class="arrows"></div>
        <a href="#" class="carousel-prev">PREV</a>
        <a href="#" class="carousel-next">NEXT</a>
    </div>
    <div class="bottom-project">
        <div class="bottom-project-inner">
            <div class="carousel-pagin"></div>
            <div class="bottom-project-title">Yummy</div>
            <div class="bottom-project-desc"></div>
        </div>
    </div>
    <span class="work-content">2010 - AIR Application + Mobile - Gobelins, l'&eacute;cole de l'image - Conception, art direction, design - <a href="http://www.projet-yummy.com" target="_blank">www.projet-yummy.com</a></span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>