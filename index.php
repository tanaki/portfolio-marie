    <?php
        if ( !isset($_POST["noLayout"]) ) {
            $bodyClass = "mosaic";
            include("_includes/header.php");
        }
    ?>
            <div class="content-inner">
                <div class="line-container">
                    <ul id="content-top">

                        <?php
                            $projectsTop = array(
                                array(
                                    "title" => "Strange Fruit",
                                    "client" => "Freelance",
                                    "slug" => "strange-fruit",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Punchline",
                                    "client" => "Freelance",
                                    "slug" => "punchline",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Yummy",
                                    "client" => "Gobelins",
                                    "slug" => "yummy",
                                    "keywords" => array(
                                        "Air Application", "Mobile"
                                    )
                                ),
                                array(
                                    "title" => "Howbama",
                                    "client" => "Gobelins",
                                    "slug" => "howbama",
                                    "keywords" => array(
                                        "Air Application", "Web"
                                    )
                                ),
                                array(
                                    "title" => "Ace",
                                    "client" => "Tonic",
                                    "slug" => "ace",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Costain",
                                    "client" => "Tonic",
                                    "slug" => "costain",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Sony Headphones",
                                    "client" => "Duke",
                                    "slug" => "sony-headphones",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Sony V.R",
                                    "client" => "Tonic",
                                    "slug" => "sony-voice-recorders",
                                    "keywords" => array(
                                        "Web"
                                    )
                                )
                            );

                            $i = 0;
                            foreach ( $projectsTop as $project ) :
                        ?>
                            <li class="project">
                                <a <?php if($i == 0) echo 'class="first"'; ?> href="/projects/<?php echo $project["slug"]; ?>">
                                    <span class="content-project">
                                        <img src="/img/projects/thumbs/<?php echo $project["slug"]; ?>_24.png" alt="<?php echo $project["title"]; ?> - <?php echo $project["client"]; ?>" />
                                        <span class="keywords">
                                            <span><?php echo $project["title"]; ?></span>
                                            <?php
                                                foreach ($project["keywords"] as $keyword) {
                                                    echo "<span>".$keyword."</span>";
                                                }
                                            ?>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php
                            $i++;
                            endforeach;
                        ?>
                    </ul>
                </div>
                <div class="line-container line-bottom">
                    <ul id="content-bottom">
                        <?php
                            $projectsBottom = array(
                                array(
                                    "title" => "McDo Monopoly",
                                    "client" => "Tonic",
                                    "slug" => "mcdo-monopoly",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Content Strategy",
                                    "client" => "Tonic",
                                    "slug" => "content-strategy",
                                    "keywords" => array(
                                        "Print"
                                    )
                                ),
                                array(
                                    "title" => "Levis Banner",
                                    "client" => "Duke",
                                    "slug" => "levis-banners",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Levis Black",
                                    "client" => "Duke",
                                    "slug" => "levis-black",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Levis Kids",
                                    "client" => "Duke",
                                    "slug" => "levis-kids",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Playstation Pink",
                                    "client" => "Duke",
                                    "slug" => "playstation-pink",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Drawings",
                                    "client" => "Personal",
                                    "slug" => "drawings",
                                    "keywords" => array()
                                ),
                                array(
                                    "title" => "Photomontages",
                                    "client" => "Personal",
                                    "slug" => "photomontages",
                                    "keywords" => array()
                                )
                            );

                            $i = 0;
                            foreach ( $projectsBottom as $project ) :
                        ?>
                            <li class="project">
                                <a <?php if($i == 0) echo 'class="first"'; ?> href="/projects/<?php echo $project["slug"]; ?>">
                                    <span class="content-project">
                                        <img src="/img/projects/thumbs/<?php echo $project["slug"]; ?>_24.png" alt="<?php echo $project["title"]; ?> - <?php echo $project["client"]; ?>" />
                                        <span class="keywords">
                                            <span><?php echo $project["title"]; ?></span>
                                            <?php
                                                foreach ($project["keywords"] as $keyword) {
                                                    echo "<span>".$keyword."</span>";
                                                }
                                            ?>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        <?php
                            $i++;
                            endforeach;
                        ?>
                    </ul>
                </div>
            </div>
            <span class="work-content">Click on one of the works below to see more details.</span>

        
<?php
    if ( !isset($_POST["noLayout"]) ) {
        include("_includes/footer.php");
    }
?>