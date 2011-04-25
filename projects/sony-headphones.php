<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li>
                <img src="/img/projects/content/sony-headphones/sony-headphones_01.jpg" />
                <span class="caption">Coming Soon</span>
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
                Sony Headphones
            </div>
            <div class="bottom-project-desc"></div>
        </div>
    </div>
    <span class="work-content">
        My role: Design<br/>
        AGENCY: Tonic<br/>
        CLIENT: Sony<br/><br/>
        Designing the new Sony Headphones hub.
    </span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>