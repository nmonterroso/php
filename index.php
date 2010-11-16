<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta name="description" content="Nelson Monterroso is a web developer always looking for new challenges and practical solutions to those problems" />
		<meta name="keywords" content="Nelson Monterroso, web programmer, web developer, drupal developer, jquery developer" />
		<title>Nelson Monterroso</title>
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.js"></script>
		<script type="text/javascript" src="/js/index.js"></script>
		<link rel="stylesheet" href="/css/style.css" />
	</head>
	<body>
		<div id="content_container">
			<div id="me">
				<img src="http://en.gravatar.com/userimage/18090563/f8fbcfe285e8c5eb21c81dd22245b4ce.jpg?size=100"
					 alt="Hey look, it's me!" title="Hey look, it's me!" />
			</div>
			<div id="header">
				<div id="title">
					<h2 id="page_title">Nelson Monterroso</h2>
					<h3>Web Developer Extraordinaire</h3>
				</div>
				<div id="tabs">
					<div id="about">
						<a>About Me</a>
					</div>
					<div id="tech">
						<a>Tech</a>
					</div>
					<div id="sites">
						<a>Sites</a>
					</div>
					<div id="qualifications">
						<a>Qualifications</a>
					</div>
					<div id="contact">
						<a>Contact</a>
					</div>
				</div>
				
				<div class="clear"></div>
				
				<p>
					Hi, welcome to nmonterroso.net. This site has info on me and some of the things I can be (at least partially) blamed for.
					<!-- For a more traditional view of this info, download my resume in <a href="/files/resume.pdf">pdf</a> format. -->
				</p>
			</div>
			<div class="clear"></div>
			<hr>
			<div id="data">
				<div id="about_data" class="selected">
					<?php require("about.php"); ?>
				</div>
				<div id="tech_data">
					<?php require("tech.php"); ?>
				</div>
				<div id="sites_data">
					<?php require("sites.php"); ?>
				</div>
				<div id="qualifications_data">
					<?php require("qualifications.php"); ?>
				</div>
				<div id="contact_data">
					<?php require("contact.php"); ?>
				</div>
			</div>
		</div>
	</body>
</html>