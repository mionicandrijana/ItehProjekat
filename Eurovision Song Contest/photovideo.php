<?php
include 'include/meta.php';
include 'include/header.php';
?>
<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">
			<div class="row">
				<div class="9u mobileUI-main-content" id="content">
					<section>
						<div class="post">
						<head>
						<script type="text/javascript" src="js/jquery.js"></script>
						<script type="text/javascript" src="js/jq-galerija.js"></script>
		<link href="css/galerija.css" rel="stylesheet" type="text/css"/>

<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	
	
<!--<link rel="Stylesheet" type="text/css" href="css/pageStyle.css" />
	<!-- jQuery library - I get it from Google API's -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>-->
	<!-- jQuery UI widget factory -->
	<!-- You can download it as a part of jQuery UI Core
		 http://jqueryui.com/download -->
	<script src="js/jquery.ui.widget.js" type="text/javascript"></script>
	
	<!-- Smooth Div Scroll 1.0 - minified for faster loading-->
	<script src="js/jquery.smoothDivScroll-1.0-min.js" type="text/javascript"></script>

	 <script type="text/javascript">
		$(function() {
			$("div#makeMeScrollable").smoothDivScroll({ autoScroll: "onstart", 
														autoScrollDirection: "backandforth",
														autoScrollStep: 1,
														autoScrollInterval: 15,
														startAtElementId: "startAtMe",
														visibleHotSpots: "always" });
			
		});
		
	</script></head>
<div id="makeMeScrollable">
		<div class="scrollingHotSpotLeft" style="opacity: 0;"></div>
		<div class="scrollingHotSpotRight" style="opacity: 0;"></div>
		
		<div class="scrollWrapper">
			<div class="scrollableArea" id="gallery">
				<a href="images/slika1l.jpg" target="_blank"><img class="ScrollableImage" src="images/slika1s.jpg" alt="Demo image" width="500" height="300" id="startAtMe"/></a>
				<a href="images/FX-2L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-2L small.jpg" alt="Demo image" width="500" height="300" id="startAtMe"/></a>
				<a href="images/FX-3L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-3L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-4L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-4L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-5L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-5L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-6L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-6L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-7L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-7L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-8L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-8L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-9L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-9L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-10L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-10L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-11L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-11L small.jpg" alt="Demo image" width="500" height="300"/></a>
				<a href="images/FX-12L.jpg" target="_blank"><img class="ScrollableImage" src="images/FX-12L small.jpg" alt="Demo image" width="500" height="300"/></a>
				
				</div>
		</div>
	</div>
	
	<div id="col1" align="center">
		<p><img id="largeImg" src="images/FX-1L.jpg" alt="Large image" /></p>
	</div>
	
	
						</div>
					</section>
				</div>
				<?php
include 'include/sidebar.php';
?>
			</div>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>
	