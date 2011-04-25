<div id="footer-project">
    <ul>

        <?php

            $aProjects = array(
                array(
                    "title" => "Strange Fruit",
                    "slug" => "strange-fruit"
                ),
                array(
                    "title" => "Punchline",
                    "slug" => "punchline"
                ),
                array(
                    "title" => "Yummy",
                    "slug" => "yummy"
                ),
                array(
                    "title" => "Howbama",
                    "slug" => "howbama"
                ),
                array(
                    "title" => "Ace",
                    "slug" => "ace"
                ),
                array(
                    "title" => "Costain",
                    "slug" => "costain"
                ),
                array(
                    "title" => "Sony Headphones",
                    "slug" => "sony-headphones"
                ),
                array(
                    "title" => "Sony V.R",
                    "slug" => "sony-voice-recorders"
                ),
                array(
                    "title" => "McDo Monopoly",
                    "slug" => "mcdo-monopoly"
                ),
                array(
                    "title" => "Content Strategy",
                    "slug" => "content-strategy"
                ),
                array(
                    "title" => "Levis Banners",
                    "slug" => "levis-banners"
                ),
                array(
                    "title" => "Levis Black",
                    "slug" => "levis-black"
                ),
                array(
                    "title" => "Levis Kids",
                    "slug" => "levis-kids"
                ),
                array(
                    "title" => "Playstation Pink",
                    "slug" => "playstation-pink"
                ),
                array(
                    "title" => "Drawings",
                    "slug" => "drawings"
                ),
                array(
                    "title" => "Photomontages",
                    "slug" => "photomontages"
                )
            );

            foreach ( $aProjects as $project ):
        ?>
            <li>
                <a href="/projects/<?php echo $project["slug"]; ?>" class="project-mini">
                    <span class="content-project">
                        <img src="/img/projects/mini/<?php echo $project["slug"]; ?>_24.png" alt="<?php echo $project["title"]; ?>" />
                    </span>
                </a>
                <a href="/projects/<?php echo $project["slug"]; ?>" class="project-caption"><span><?php echo $project["title"]; ?></span></a>
            </li>
        <?php
            endforeach;
        ?>
    </ul>
</div>