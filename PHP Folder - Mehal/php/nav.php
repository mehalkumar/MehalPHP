  <nav>
                    <p>POSTS:</p>
                    <!-- section 1 menu-->
                    <a class="sectiontitle" <?php if ($thisSECTION=="SECTION 1") echo " id=\"currentsection\""; ?>>Section 1</a>
                    <ul>
                        <li><a href="../section1/artem.php" <?php if ($thisPage=="ARTEMS PAGE") echo " id=\"currentpage\""; ?>> Artem Kostyukevich</a></li>

                        <li><a href="../section1/kaz.php" <?php if ($thisPage=="KAZ BREKKER") echo " id=\"currentpage\""; ?>>Kaz Brekker</a></li>
                        <li><a href="../section1/van.php" <?php if ($thisPage=="VAN GOGH") echo " id=\"currentpage\""; ?>>Van Gogh</a></li>

                    </ul>
                    
                    <!-- section 2 menu-->
                    <a class="sectiontitle" <?php if ($thisSECTION=="SECTION 2") echo " id=\"currentsection\""; ?>>Section 2</a>
                    <ul>
                        <li><a href="../section2/fut.php" <?php if ($thisPage=="FUTURISM") echo " id=\"currentpage\""; ?>> Futurism</a></li>

                        <li><a href="../section2/graffiti.php" <?php if ($thisPage=="GRAFFITI") echo " id=\"currentpage\""; ?>>Graffiti</a></li>
                        <li><a href="../section2/popart.php" <?php if ($thisPage=="POP ART") echo " id=\"currentpage\""; ?>>Pop Art</a></li>

                    </ul>

                </nav>