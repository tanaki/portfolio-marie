<?php
    if ( !isset($_POST["noLayout"]) ) {
        $bodyClass = "project";
        include("../_includes/header.php");
    }
?>
    <h1>Content</h1>
<?php
    if ( !isset($_POST["noLayout"]) ) {
        include("../_includes/footer.php");
    }
?>