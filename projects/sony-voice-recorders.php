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
                    <img src="/img/projects/content/sony-voice-recorders/sony-voice-recorders_01.jpg" />
                    <span class="caption">Sony voice recorders hub</span>
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
                    Sony Voice Recorders
                </div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>: Design<br/>
            <strong>Agency</strong>: Tonic<br/>
            <strong>Client</strong>: Sony<br/><br/>
            Designing the new Sony Voice recorder hub. <a href="http://www.sony.co.uk/hub/voice-recorders" target="_blank">Visit website</a>
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>