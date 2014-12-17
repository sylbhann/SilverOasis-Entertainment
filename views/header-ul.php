<?php foreach($nav as $action => $text) : ?>
    <li>
    <a href='/index.php?action=<?php echo $action ?>' id='<?php  ?>'><?php echo $text ?></a>
    </li>
<?php endforeach; ?>

    == login ==
    
                            <?php if ($page == 'home') { ?><li><a href="home.php" class="active" title="Home">Home</a></li>
                            <?php } else { ?><li><a href="home.php" title="Home">Home</a><?php } ?>
                                
                            <?php if ($page == 'about') { ?><li><a href="about.php" class="active" title="About">About</a></li>
                            <?php } else { ?><li><a href="about.php" title="About">About</a><?php } ?>

                            <?php if ($page == 'projects') { ?><li><a href="project.php" class="active" title="Projects">Projects</a></li>
                            <?php } else { ?><li><a href="project.php" title="Projects">Projects</a><?php } ?>

                            <?php if ($page == 'contact') { ?><li><a href="contact.php" class="active" title="Contact">Contact</a></li>
                            <?php } else { ?><li><a href="contact.php" title="Contact">Contact</a><?php } ?>
                                
                            <?php if ($page == 'login') { ?><li><a href="login.php" class="active" title="Login">Login</a></li>
                            <?php } else { ?><li><a href="login.php" title="Login">Login</a><?php } ?>