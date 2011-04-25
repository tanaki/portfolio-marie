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
                                    "title" => "Levis",
                                    "client" => "Duke",
                                    "slug" => "levis",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
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
                                    "title" => "Monopoly",
                                    "client" => "Duke",
                                    "slug" => "monopoly",
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
                                    "title" => "Levis Black",
                                    "client" => "Duke",
                                    "slug" => "levis-black",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "TBD",
                                    "client" => "TBD",
                                    "slug" => "tbd",
                                    "keywords" => array(
                                        "TBD"
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
                                    "title" => "Drawings",
                                    "client" => "Personal",
                                    "slug" => "drawings",
                                    "keywords" => array()
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
                                    "title" => "Sony",
                                    "client" => "Tonic",
                                    "slug" => "sony",
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
                                    "title" => "Playstation",
                                    "client" => "Duke",
                                    "slug" => "playstation",
                                    "keywords" => array(
                                        "Web"
                                    )
                                ),
                                array(
                                    "title" => "Photomontage",
                                    "client" => "Personal",
                                    "slug" => "photomontage",
                                    "keywords" => array()
                                ),
                                array(
                                    "title" => "Strategy",
                                    "client" => "Tonic",
                                    "slug" => "strategy",
                                    "keywords" => array(
                                        "Print"
                                    )
                                ),
                                array(
                                    "title" => "TBD",
                                    "client" => "TBD",
                                    "slug" => "tbd",
                                    "keywords" => array(
                                        "TBD"
                                    )
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