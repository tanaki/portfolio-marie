<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li><img src="/img/projects/content/mcdo-monopoly/mcdo-monopoly_01.jpg" /></li>
            <li><img src="/img/projects/content/mcdo-monopoly/mcdo-monopoly_02.jpg" /></li>
            <li><img src="/img/projects/content/mcdo-monopoly/mcdo-monopoly_03.jpg" /></li>
            <li><img src="/img/projects/content/mcdo-monopoly/mcdo-monopoly_04.jpg" /></li>
            <li><img src="/img/projects/content/mcdo-monopoly/mcdo-monopoly_05.jpg" /></li>
        </ul>
        <div class="arrows"></div>
        <a href="#" class="carousel-prev">PREV</a>
        <a href="#" class="carousel-next">NEXT</a>
    </div>
    <div class="bottom-project">
        <div class="bottom-project-inner">
            <div class="carousel-pagin"></div>
            <div class="bottom-project-title">
                McDonald's Monopoly
            </div>
            <div class="bottom-project-desc"></div>
        </div>
    </div>
    <span class="work-content">
        My role: Design / Interactive design<br/>
        AGENCY: Duke/Avenue A Razorfish<br/>
        CLIENT: McDonald’s Monopoly<br/><br/>
        Animation (Flash) of all the pages of the McDonald’s Monopoly minisite. <a target="_blank" href="#">Visit website</a><br/>
        Designing the Intranet site...
    </span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>