<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Lazy Load Images using PHP & Javascript</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            .b-lazy {
                transform: scale(3);
                transition: all 500ms;
                opacity:0;
            }
            .b-loaded {
                transform: scale(1);
                opacity:1;
            }
        </style>
    </head>
    <body>
        <?php
        // set folder path
        $path = "image/";

        // count no. of images in dir
        $cnt = count(glob($path . "*.{jpg,jpeg}", GLOB_BRACE));

        if ($cnt > 0) {
            $fp = opendir($path);
            while ($image = readdir($fp)) {
                $ext = pathinfo($image, PATHINFO_EXTENSION);
                $allowed_ext = ['jpg', 'jpeg'];
                if (in_array($ext, $allowed_ext)) {
                    $image_path = $path . $image;
                    ?>
                    <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $image_path; ?>" alt="<?php echo $image; ?>" />
                <?php
                }
            }
            closedir($fp);
        } else {
            echo "Sorry! No images available in gallery!";
        }
        ?>

        <script src="js/blazy.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            ;
            (function () {
                var bLazy = new Blazy();
            })();
        </script>
    </body>
</html>