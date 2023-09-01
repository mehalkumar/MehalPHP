<!DOCTYPE html>
<html lang="en-GB">
<?php $thisPage="POP ART"; ?>  
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
                <h1><?php echo "POP ART"?></h1>
                
                <figure>
                    <img src="../images/pop1.jpeg">
                    <img src="../images/pop2.jpeg">                        
                    <figcaption><em>From the artist 'Andy Warhol'</em></figcaption>
                </figure>

                <p>Andy Warhol, a pioneering figure in the art world, is celebrated for his profound impact on the emergence and development of Pop Art. Born in 1928 in Pittsburgh, Pennsylvania, Warhol's artistic journey began as a commercial illustrator in New York City. His innovative approach to art, characterized by the use of mass-produced imagery from consumer culture, reshaped the conventional notions of artistic creation. </p>
                <p>Warhol's connection to Pop Art lies in his relentless exploration of the intersection between art and popular culture. He saw art as a reflection of society's fascination with celebrity, consumerism, and media, and he ingeniously translated these themes onto his canvases.Central to Warhol's connection to Pop Art was his fascination with everyday objects and iconic figures. His breakthrough came with his series of Campbell's Soup Cans, which depicted everyday grocery items in a repetitious, almost factory-like manner. </p>

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