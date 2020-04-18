<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130876945-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130876945-1');
</script>

		<title>Travel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/JPG" href="images/favicons/globe_favicon.JPG"/>
		<!--Favicon from Font Awesome. License: https://fontawesome.com/license-->
	</head>
	<body class="is-preload">

		<?php include('sidebar.php'); ?>

		<!-- Main -->
			<div id="main">
					<section id="three">
						<h2>My Travels</h2>
						<iframe height="400" class="image fit thumb" src="https://www.youtube.com/embed/UWEL3jXsxUE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h3>Photo Albums</h3>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="https://photos.app.goo.gl/njtcH6vAnAuUQkq66" target="_blank" class="image fit thumb"><img src="images/thumbs/fuji.jpg" alt="Japan & South Korea" /></a>
								<h3>Japan & South Korea (Dec 2019 - Jan 2020)</h3>
								<p>Celebrated the new year in Tokyo! Click the thumbnail to view my photos.</a></p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="https://photos.app.goo.gl/R3g6zYqdEoZXKteq8" target="_blank" class="image fit thumb"><img src="images/thumbs/pv.jpg" alt="Puerto Vallarta" /></a>
								<h3>Puerto Vallarta (Mar 2019)</h3>
								<p>Spring break with friends!</a></p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="https://photos.app.goo.gl/4y4Gj4hsn5LA7EW28" target="_blank" class="image fit thumb"><img src="images/thumbs/hk.jpg" alt="Hong Kong" /></a>
								<h3>Hong Kong (Jan 2019)</h3>
								<p>Visited family in Hong Kong for the first time in almost 7 years!</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="https://photos.app.goo.gl/iw8ebjfG1ZFEafFPA" target="_blank" class="image fit thumb"><img src="images/thumbs/nyc.jpg" alt="New York City" /></a>
								<h3>New York City (Dec 2018)</h3>
								<p>Traveled up to NYC during the holiday season.</p>
							</article>
						</div>
					</section>
					<hr />
					<div class="col-6 col-12-xsmall">
						<h3>Places I Still Have To Visit</h3>
							<ul style="color: #676767">
								<li>Singapore</li>
								<li>Malaysia</li>
								<li>Taiwan</li>
								<li>Pretty much anywhere in Europe</li>
							</ul>
					</div>
					<form>
							<input type="button" value="Back" onclick="history.back();">
						</form>
			</div>

		<!-- Footer -->
			<?php include('footer.php'); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
