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
                    <span id="yummy-01-swf" class="swf-container"></span>
                    <span class="caption">Teaser 2010</span>
                </li>
                <li>
                    <span id="yummy-02-swf" class="swf-container"></span>
                    <span class="caption">Concept</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_03.jpg" />
                    <span class="caption">Touchscreen Application</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_04.jpg" />
                    <span class="caption">Touchscreen Application</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_05.jpg" />
                    <span class="caption">Touchscreen Application</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_06.jpg" />
                    <span class="caption">Mobile Application</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_07.jpg" />
                    <span class="caption">Logo</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_08.jpg" />
                    <span class="caption">Logo Research</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_09.jpg" />
                    <span class="caption">Booklet and Stickers</span>
                </li>
                <li>
                    <img src="/img/projects/content/yummy/yummy_10.jpg" />
                    <span class="caption">Booklet and Stickers</span>
                </li>
            </ul>
			<script type="text/javascript">
				$(window).bind("INIT_SWF", function(){
					$("#yummy-01-swf").html( '<iframe src="http://player.vimeo.com/video/12290292?title=0&amp;byline=0&amp;portrait=0&amp;color=F70064" width="773" height="435" frameborder="0"></iframe>' );
					$("#yummy-02-swf").html( '<iframe title="YouTube video player" width="720" height="435" src="http://www.youtube.com/embed/mCgDMyp4bug?rel=0&amp;hd=1" frameborder="0" allowfullscreen></iframe>' );
					$(window).unbind("INIT_SWF");
				});
			</script>
            <div class="arrows"></div>
            <a href="#" class="carousel-prev">PREV</a>
            <a href="#" class="carousel-next">NEXT</a>
        </div>
        <div class="bottom-project">
            <div class="bottom-project-inner">
                <div class="carousel-pagin"></div>
                <div class="bottom-project-title">Yummy</div>
                <div class="bottom-project-desc"></div>
            </div>
        </div>
        <span class="work-content">
            <strong>My role</strong>: Art direction / Interactive design<br/>
            <strong>School</strong>: Gobelins, l'&Eacute;cole de l'image<br/>
            <strong>Europrix Nominee 2010</strong> in mobile contents and applications category.<br/><br/>
            Yummy is a diploma project produced by five students from the digital design and production course at Gobelins, l'&Eacute;cole de l'Image. Yummy is a Multimedia culinary companion for the entire family. <a target="_blank" href="http://www.projet-yummy.com/en">Visit website</a>
        </span>
    </div>

<?php
    include("../_includes/footer_project.php");
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>