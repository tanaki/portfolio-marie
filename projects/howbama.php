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
                    <img src="/img/projects/content/howbama/howbama_01.jpg" />
                    <span class="caption">Logo</span>
                </li>
                <li>
                    <img src="/img/projects/content/howbama/howbama_02.jpg" />
                    <span class="caption">Application / History section</span>
                </li>
                <li>
                    <img src="/img/projects/content/howbama/howbama_03.jpg" />
                    <span class="caption">Application / Culture and Worldmap sections</span>
                </li>
                <li>
                    <img src="/img/projects/content/howbama/howbama_04.jpg" />
                    <span class="caption">Application / Biography and Obama's life section</span>
                </li>
                <li>
                    <img src="/img/projects/content/howbama/howbama_05.jpg" />
                    <span class="caption">Website / VOD</span>
                </li>
                <li>
                    <img src="/img/projects/content/howbama/howbama_06.jpg" />
                    <span class="caption">Website / Homepage and Cultural events page</span>
                </li>
                <li>
                    <img src="/img/projects/content/howbama/howbama_07.jpg" />
                    <span class="caption">DVD Cover</span>
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
                    Howbama
                </div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>: Art direction / Interactive design<br/>
            <strong>School</strong>: Gobelins, l'&Eacute;cole de l'image<br/><br/>
            How'Bama is a first year project, it is a documentary application.The subject was "create an interactive & multimedia application to (re)visit a moment of History". We chose to work on the path from the end of the segregation to the election of Barack Obama. I worked in team with Nicolas Pigelet (developer). <a target="_blank" href="http://www.howbama.fr/">Visit website</a>
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>