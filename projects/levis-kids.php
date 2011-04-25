<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li>
                <img src="/img/projects/content/levis-kids/levis-kids_01.jpg" />
                <span class="caption">Levi's Newborn homepage</span>
            </li>
            <li>
                <img src="/img/projects/content/levis-kids/levis-kids_02.jpg" />
                <span class="caption">Levi's Newborn outfits</span>
            </li>
            <li>
                <img src="/img/projects/content/levis-kids/levis-kids_03.jpg" />
                <span class="caption">Levi's Kids showcase</span>
            </li>
            <li>
                <img src="/img/projects/content/levis-kids/levis-kids_04.jpg" />
                <span class="caption">Levi's Kids banners</span>
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
                Levis Kids
            </div>
            <div class="bottom-project-desc"></div>
        </div>
    </div>
    <span class="work-content">
        My role: Art direction / Design / Interactive design<br/>
        AGENCY: Duke/Avenue A Razorfish<br/>
        CLIENT: Levi’s<br/><br/>
        Update of the LEVI'S KIDS homepage, creation of images, showcases, emailings, web banners...
    </span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>