<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li>
                <img src="/img/projects/content/levis-black/levis-black_01.jpg" />
                <span class="caption">Levi's Flash banner</span>
            </li>
            <li>
                <span class="swf-container" style="padding-top:35px;">
                    <span id="levis-black-02-swf"></span>
                    <script type="text/javascript">
                        swfobject.embedSWF("/img/projects/content/levis-black/levis-black_02.swf", "levis-black-02-swf", "545", "365", "9.0.0", "/data/swf/expressInstall.swf");
                    </script>
                </span>
                <span class="caption">Banner in AS3</span>
            </li>
            <li>
                <img src="/img/projects/content/levis-black/levis-black_03.jpg" />
                <span class="caption">Levi's Email and banners</span>
            </li>
        </ul>
        <div class="arrows"></div>
        <a href="#" class="carousel-prev">PREV</a>
        <a href="#" class="carousel-next">NEXT</a>
    </div>
    <div class="bottom-project">
        <div class="bottom-project-inner">
            <div class="carousel-pagin"></div>
            <div class="bottom-project-title">
                Levis Black
            </div>
            <div class="bottom-project-desc"></div>
        </div>
    </div>
    <span class="work-content">
        My role: Design / Interactive design<br/>
        AGENCY: Duke/Avenue A Razorfish<br/>
        CLIENT: Levi’s<br/><br/>
        Creation of images, showcases, emailings, flash animated banners...
    </span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>