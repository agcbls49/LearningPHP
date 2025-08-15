    include() - copies the content of a file (php, html, text) and includes it in your php file. secitions of your website become reusable. changes only need to be made in one place.

*This is basically importing other files. The files to be used are about.php, locations.php, index.php, header.html and footer.html*

**To use header.html in index.php (put this in index.php)**

    <?php
        include("header.html");
    ?>
