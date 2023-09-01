<!DOCTYPE html>
<html lang="en-GB">
<?php $thisPage="FUTURISM"; ?>  
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
                <h1><?php echo "FUTURISM"?></h1>
                
                <figure>
                    <img src="../images/fut1.jpeg">
                    <img src="../images/fut2.jpg">                        
                    <figcaption><em>From the artist 'Umberto Boccioni'</em></figcaption>
                </figure>

                <p>Umberto Boccioni was a prominent Italian artist and a key figure in the Futurism movement that emerged in the early 20th century. Futurism celebrated the modern world, technological advancements, and the dynamism of urban life. Boccioni's contributions were characterized by his passionate exploration of movement and the representation of speed in art. Through his paintings and sculptures, he aimed to capture the energy and vitality of contemporary society.  </p>
                <p>Boccioni's work often depicted human figures in a state of flux, transforming and melding with their surroundings. His manifesto "Futurist Painting: Technical Manifesto" emphasized the importance of capturing the sensation of movement and the fusion of humans with their machines, reflecting the era's fascination with progress and change.</p>

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