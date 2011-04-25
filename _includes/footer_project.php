<div id="footer-project">
    <ul>

        <?php

            $aProjects = array(
                array(
                    "title" => "Levis",
                    "slug" => "levis"
                ),
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
                    "title" => "Monopoly",
                    "slug" => "monopoly"
                ),
                array(
                    "title" => "Costain",
                    "slug" => "costain"
                ),
                array(
                    "title" => "Levis Black",
                    "slug" => "levis-black"
                ),
                array(
                    "title" => "Drawings",
                    "slug" => "drawings"
                ),
                array(
                    "title" => "Howbama",
                    "slug" => "howbama"
                ),
                array(
                    "title" => "Sony",
                    "slug" => "sony"
                ),
                array(
                    "title" => "Levis Kids",
                    "slug" => "levis-kids"
                ),
                array(
                    "title" => "Playstation",
                    "slug" => "playstation"
                ),
                array(
                    "title" => "Photomontage",
                    "slug" => "photomontage"
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