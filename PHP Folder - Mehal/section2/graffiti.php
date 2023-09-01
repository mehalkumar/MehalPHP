<!DOCTYPE html>
<html lang="en-GB">
<?php $thisPage="GRAFFITI"; ?>  
<?php $thisSECTION="SECTION 2"; ?>  
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
                <h1><?php echo "GRAFFITI"?></h1>
                
                <figure>
                    <img src="../images/graf1.jpeg">
                    <img src="../images/graf2.jpg">                        
                    <figcaption><em>From the artist 'Banksy'</em></figcaption>
                </figure>

                <p>Banksy, an enigmatic and pseudonymous street artist, has emerged as a central figure in the realm of graffiti art. Hailing from the United Kingdom, Banksy's true identity remains concealed, adding an air of mystery to his prolific career. His connection to graffiti is profound, as he rose to prominence by using stencils to create intricate and thought-provoking artworks on walls, bridges, and buildings across the world. Banksy's works often combine visually striking images with sharp social commentary, addressing themes such as politics, consumerism, war, and societal inequalities.</p>
                <p>Banksy's impact on the graffiti art world goes beyond his remarkable creations. His art challenges traditional notions of where art belongs, frequently taking place in public spaces and blurring the lines between vandalism and artistic innovation. Through his clever manipulation of urban environments, Banksy engages with a wide audience, prompting contemplation and discourse on critical issues. His provocative style has not only redefined the possibilities of graffiti but has also inspired a new generation of artists to use public spaces as canvases for social commentary.</p>

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