<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
        <link rel="stylesheet" href="reset.css" type="text/css">
        <link rel="stylesheet" href="home.css" type="text/css">
    	<title>Subjects</title>
    </head>
    
    <body>
    	<div id="container">
        	<header id="header">
				<?php
                    include("/home/benrud/public_html/student/globalit/2016/04_04/tinker/techClub/assets/includes/header.html");
                ?>
            </header>
            <nav id="menu" class="clearfix">
                <?php
                    include("/home/benrud/public_html/student/globalit/2016/04_04/tinker/techClub/assets/includes/nav.html");
                ?>
            </nav>
            
            <section id="content">
            	<a href="../techClub/pages/hardware/"><h3>Hardware</h3></a>
                <a href="../techClub/pages/software/"><h3>Software</h3></a>
            </section>
            
            <aside  id="sidebar">
				<?php
                    include("/home/benrud/public_html/student/globalit/2016/04_04/tinker/techClub/assets/includes/sidebar.html");
                ?>
            </aside>
            
            <footer id="footer" class="clearfix">
				<?php
                    include("/home/benrud/public_html/student/globalit/2016/04_04/tinker/techClub/assets/includes/footer.html");
                ?>
            </footer>
    	</div>
    </body>
</html>