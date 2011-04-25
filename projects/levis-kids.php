<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li><img src="/img/projects/content/levis-kids/levis-kids_01.jpg" /></li>
            <li><img src="/img/projects/content/levis-kids/levis-kids_02.jpg" /></li>
            <li><img src="/img/projects/content/levis-kids/levis-kids_03.jpg" /></li>
            <li><img src="/img/projects/content/levis-kids/levis-kids_04.jpg" /></li>
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
    <span class="work-content">Levis Kids - This is the content</span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>