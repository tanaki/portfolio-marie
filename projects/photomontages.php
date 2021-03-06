<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="content-inner">
        <div class="container-project">
            <ul class="content-project">
                <li><img src="/img/projects/content/photomontages/photomontages_01.jpg" /></li>
                <li><img src="/img/projects/content/photomontages/photomontages_02.jpg" /></li>
                <li><img src="/img/projects/content/photomontages/photomontages_03.jpg" /></li>
            </ul>
            <div class="arrows"></div>
            <a href="#" class="carousel-prev">PREV</a>
            <a href="#" class="carousel-next">NEXT</a>
        </div>
        <div class="bottom-project">
            <div class="bottom-project-inner">
                <div class="carousel-pagin"></div>
                <div class="bottom-project-title">
                    Photomontages
                </div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content"></span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>