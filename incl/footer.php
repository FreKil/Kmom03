<?php
//===================================================
//File: footer.php
//Desc: Footer information.
//Author: Freddy
//Created: 30/04 - 2013
//===================================================

//---------------------------------------------------
//Create header information.
$footer = <<< input
<div id="footer">
	<hr>
	<footer id="bottom">
		<p>
			Verktyg:
			<a href="http://validator.w3.org/check/referer">HTML5</a>  
			<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
			<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
			<a href="source.php">Källkod</a>
		</p>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</footer>
</div>
</body>
</html>
input;
?>