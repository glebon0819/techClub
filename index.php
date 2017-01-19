<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
        <link rel="stylesheet" href="reset.css" type="text/css">
        <link rel="stylesheet" href="home.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro:200" rel="stylesheet">
		<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
    	<title>Grossmont Tech Club</title>
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
            	<div id="welcome">Welcome!</div>
                <br>
                <p>This is the official home page for the Grossmont High School Tech Club. Here, we provide information and resources for members and non-members alike! </p>
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