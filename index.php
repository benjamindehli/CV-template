<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="style/paper.css">
	<link rel="stylesheet" type="text/css" href="style/page.css">
	<link rel="stylesheet" type="text/css" href="style/cv.css">
	<link rel="stylesheet" type="text/css" href="style/font-awesome.min.css">
</head>
<body>
	<div class="page">
		<header>
			<div class="headertext">
				<input id="name" type="text" placeholder="Fornavn Etternavn"></input>
				<textarea id="qualifications">Kvalifikasjoner</textarea>
			</div>
			<div class="header-image">
			<img src="profile.png"/>
			</div>
			<div class="clear-fix"></div>
			<div class="header-contact">
				<div class="contact-info">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
					</span>
					<input id="phone" type="text" placeholder="123 45 678"/>
				</div>
				<div class="contact-info">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
					</span>
					<input id="email" type="text" placeholder="navn@domene.no"/>
				</div>
				<div class="contact-info">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
					</span>
					<input id="address" type="text" placeholder="Adresse"/>
				</div>
				<div class="contact-info">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
					</span>
					<input id="website" type="text" placeholder="www.domene.no"/>
				</div>
				<div class="clear-fix"></div>
			</div>
		</header>
		<div class="section">
			<div class="section-label">
				<p>Mål:</p>
			</div>
			<div class="section-content">
				<textarea>Mål</textarea>
			</div>
			<div class="clear-fix"></div>
		</div>
		<div class="section">
			<div class="section-label">
				<p>Erfaring:</p>
			</div>
			<div class="section-content">
				<textarea>Erfaringer</textarea>
			</div>
			<div class="clear-fix"></div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/vue.min.js"></script>
	<script type="text/javascript" src="js/autosize.js"></script>
	<script type="text/javascript">autosize($('textarea'));</script>
</body>
</html>