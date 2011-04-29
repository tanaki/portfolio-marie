<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="content-inner">
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
            <strong>My role</strong>: Design / Interactive design<br/>
            <strong>Agency</strong>: Duke/Avenue A Razorfish<br/>
            <strong>Client</strong>: McDonald’s Monopoly<br/><br/>
            Animation (Flash) of all the pages of the McDonald’s Monopoly minisite. <a target="_blank" href="http://www.mcdonalds.fr/monopoly/">Visit website</a><br/>
            Designing the Intranet site...
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>