<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Eva C. Wilhelm: writes. designs. codes.</title>

	<link rel="stylesheet" type="text/css" media="screen, print" href="reset.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="screen.css" />
	<link rel="stylesheet" type="text/css" media="print" href="print.css" />

	<script type="text/javascript" src="http://use.typekit.com/iue5igd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1>Eva C. Wilhelm</h1>
			<h2>writes. designs. codes.</h2>
		</div>

        <div id="content">
			<div id="navigation">
				<ul>
					<li><a href="index.htm">Home</a></li>
					<li><a href="resume.htm">Resume</a></li>
					<li><a href="portfolio.htm">Portfolio</a></li>
					<li><a href="blog.php">Blog</a></li>
				</ul>

				<h3>Blog</h3>

			</div>
			<ul class="blog">
			    <li>
				<?php
					define('WP_USE_THEMES', false);
					require('./blog/wp-blog-header.php');
				?>

				<?php
                    $posts = get_posts('numberposts=10&order=DESC&orderby=post_title');
                    foreach ($posts as $post) : start_wp(); ?>
                    <?php the_title('<h5 class="blog">', '</h5>'); ?>
                    <p class="blog_date">posted <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                    <?php the_content('<p>','</p>'); ?>
                <?php
                    endforeach;
                ?>
                </li>
            </ul>
        </div>

		<div id="footer">
			<p class="license">
				This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>
			</p>

			<p class="validators">
				Valid <a href="http://validator.w3.org/check/referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
			</p>
		</div>

	</div>

	</body>

</html>

