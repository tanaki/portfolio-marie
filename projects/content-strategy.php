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
                    <img src="/img/projects/content/content-strategy/content-strategy_01.jpg" />
                    <span class="caption">Web banners</span>
                </li>
                <li>
                    <img src="/img/projects/content/content-strategy/content-strategy_02.jpg" />
                    <span class="caption">Bag and Booklet</span>
                </li>
                <li>
                    <img src="/img/projects/content/content-strategy/content-strategy_03.jpg" />
                    <span class="caption">Large Banner</span>
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
                    Content Strategy
                </div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>:  Art direction<br/>
            <strong>Agency</strong>: Duke/Avenue A Razorfish<br/>
            <strong>Client</strong>: Content Strategy Forum 2010<br/><br/>
            Creation of banners for the 2010 Content strategy forum in Paris. This creation was turned into bags, badges and booklet.
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>