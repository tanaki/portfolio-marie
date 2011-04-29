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
                    <img src="/img/projects/content/playstation-pink/playstation-pink_01.jpg" />
                    <span class="caption">Playstation Pink minisite</span>
                </li>
                <li>
                    <img src="/img/projects/content/playstation-pink/playstation-pink_02.jpg" />
                    <span class="caption">Playstation Pink minisite</span>
                </li>
                <li>
                    <img src="/img/projects/content/playstation-pink/playstation-pink_03.jpg" />
                    <span class="caption">Playstation Pink emails</span>
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
                    Playstation Pink
                </div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>:  Art direction<br/>
            <strong>Agency</strong>: Duke/Avenue A Razorfish<br/>
            <strong>Client</strong>: Playstation<br/><br/>
             Art direction of the PLAYSTATION PINK minisite and emailings.
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>