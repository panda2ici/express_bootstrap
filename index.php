<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/02/16
 * Time: 8:11 PM
 */
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <title>修女岛快递代理点：包裹追踪</title>
    <?php require_once ('head-meta.php'); ?>
    <link href="css/portal.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php require_once ('menu.php'); ?>
<?php require_once ('track.php'); ?>
<!-- Container (About Section) -->
<?php require_once ('about.php'); ?>
<!-- Container (Services Section) -->
<?php require_once ('services.php'); ?>
<!-- Container (Portfolio Section) -->

<!-- Container (Pricing Section) -->
<?php require_once ('pricing.php'); ?>
<?php require_once ('member.php'); ?>
<!-- Container (Contact Section) -->
<?php require_once ('contact.php'); ?>
<?php require_once ('login.php'); ?>
<?php require_once ('footer.php'); ?>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>