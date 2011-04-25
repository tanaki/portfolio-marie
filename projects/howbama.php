<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <div class="container-project">
        <ul class="content-project">
            <li><img src="/img/projects/content/howbama/howbama_01.jpg" /></li>
            <li><img src="/img/projects/content/howbama/howbama_02.jpg" /></li>
            <li><img src="/img/projects/content/howbama/howbama_03.jpg" /></li>
            <li><img src="/img/projects/content/howbama/howbama_04.jpg" /></li>
            <li><img src="/img/projects/content/howbama/howbama_05.jpg" /></li>
            <li><img src="/img/projects/content/howbama/howbama_06.jpg" /></li>
            <li><img src="/img/projects/content/howbama/howbama_07.jpg" /></li>
        </ul>
        <div class="arrows"></div>
        <a href="#" class="carousel-prev">PREV</a>
        <a href="#" class="carousel-next">NEXT</a>
    </div>
    <div class="bottom-project">
        <div class="bottom-project-inner">
            <div class="carousel-pagin"></div>
            <div class="bottom-project-title">
                Howbama
            </div>
            <div class="bottom-project-desc"></div>
        </div>
    </div>
    <span class="work-content">Howbama - This is the content</span>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>