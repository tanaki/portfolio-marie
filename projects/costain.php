<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li>
                <img src="/img/projects/content/costain/costain_01.jpg" />
                <span class="caption">Storyboard/Mockup, full story</span>
            </li>
            <li>
                <img src="/img/projects/content/costain/costain_02.jpg" />
                <span class="caption">Story part 1</span>
            </li>
            <li>
                <img src="/img/projects/content/costain/costain_03.jpg" />
                <span class="caption">Story part 2</span>
            </li>
            <li>
                <img src="/img/projects/content/costain/costain_04.jpg" />
                <span class="caption">Story part 3</span>
            </li>
        </ul>
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
        My role:  Illustration / Design / Storyboarding / Design interaction<br/>
        AGENCY: Tonic<br/>
        CLIENT: Costain<br/><br/>
        Creation of storyboard, mockup and assets for the Costain new website...
    </span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>