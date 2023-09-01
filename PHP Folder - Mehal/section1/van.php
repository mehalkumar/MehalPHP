<!DOCTYPE html>
<html lang="en-GB">
<?php $thisPage="VAN GOGH"; ?>  
<?php $thisSECTION="SECTION 1"; ?>  
    <head>       
       
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">

      
        <title>D12.E1 · Multipage PHP website</title>

         <?php include("../php/meta.php"); ?>
       

    </head>       

    <body>
        
    <?php include("../php/header.php"); ?>

        <div class="content-wrap">
        
            <main>
                <h1><?php echo "VAN GOGH"?></h1>
                
                <figure>
                    <img src="../images/van1.jpeg">
                    <img src="../images/van2.jpg">                        
                    <figcaption><em>From the artist 'Van Gogh'</em></figcaption>
                </figure>

                <p>Vincent van Gogh, in full Vincent Willem van Gogh, (born March 30, 1853, Zundert, Netherlands—died July 29, 1890, Auvers-sur-Oise, near Paris, France), Dutch painter, generally considered the greatest after Rembrandt van Rijn, and one of the greatest of the Post-Impressionists. The striking colour, emphatic brushwork, and contoured forms of his work powerfully influenced the current of Expressionism in modern art. </p>
                <p>Van Gogh’s art became astoundingly popular after his death, especially in the late 20th century, when his work sold for record-breaking sums at auctions around the world and was featured in blockbuster touring exhibitions. In part because of his extensive published letters, van Gogh has also been mythologized in the popular imagination as the quintessential tortured artist.</p>

            </main>
        
            <aside>

            <?php include("../php/nav.php"); ?>

                <br>
                <hr>
                <p class="s">(This is an extra paragraph in the aside element)</p>
            </aside>
        </div>
        
        <?php include("../php/footer.php"); ?>

    </body>
</html>



<!-- REFERENCE PHP CODE: -->
<!--
Declare variables
<?php $thisSection=""; ?>

Echo function w. if statement
<?php if ($thisPage!="") echo "$thisPage"; ?>

Include function
<?php include("php/something.php"); ?>

Add an ID to an element dynamically
<?php if ($thisPage=="Page One") echo " id=\"currentpage\""; ?>
Add this as an attribute within an element

Date
<?php
date_default_timezone_set('Asia/Kolkata');
echo "" . date("Y") ;
?>
-->