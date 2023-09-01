<!DOCTYPE html>
<html lang="en-GB">
<?php $thisPage="KAZ BREKKER"; ?>  
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
                <h1><?php echo "KAZ BREKKER"?></h1>
                
                <figure>
                    <img src="../images/kaz1.jpeg">
                    <img src="../images/kaz2.jpeg">                        
                    <figcaption><em>From the book 'Six of Crows'</em></figcaption>
                </figure>

                <p>Born Kaz Rietveld, he was raised on a farm near Lij with his father and older brother Jordie Rietveld. When Kaz was nine, their father died in a plough accident. Jordie sold the farm and took Kaz to Ketterdam, where he intended for Kaz to attend school. Several days after their arrival in the city, Kaz and Jordie went to the East Stave to watch street magicians and met a boy named Filip selling wind-up dogs.</p>
                <p>Kaz usually appears calm and collected, rarely allowing his emotions or true thoughts to show. However, he holds a penchant for wrathful revenge, particularly when he is wronged or Inej is hurt. He vowed to avenge his deceased brother and lives by the motto "brick by brick" to take down his enemies. Kaz turned the tragedy and trauma of his childhood into a fearsome reputation, and he actively encourages rumors about his ruthlessness and lack of humanity. However, despite his ruthless nature he is not entirely without morals. He genuinely cares about his friends and their wellbeing. Unlike Pekka Rollins, he is openly against the idea of harming children and admits he never would, even if necessary.</p>

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