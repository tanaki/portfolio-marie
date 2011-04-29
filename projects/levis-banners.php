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
                    <img src="/img/projects/content/levis-banners/levis-banners_01.jpg" />
                    <span class="caption">Levi's Redtab showcase</span>
                </li>
                <li>
                    <img src="/img/projects/content/levis-banners/levis-banners_02.jpg" />
                    <span class="caption">Levi's Kids banners</span>
                </li>
                <li>
                    <img src="/img/projects/content/levis-banners/levis-banners_03.jpg" />
                    <span class="caption">Levi's men and women banners</span>
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
                    Levis
                </div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>: Design / Interactive design<br/>
            <strong>Agency</strong>: Duke/Avenue A Razorfish<br/>
            <strong>Client</strong>: Levi’s<br/><br/>
            Creation of images, showcases, emailings, web banners...
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>