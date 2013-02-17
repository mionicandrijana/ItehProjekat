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
				<a href="images/sl1l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl1s.jpg" alt="Demo image" width="300" height="180" id="startAtMe"/></a>
				<a href="images/sl2l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl2s.jpg" alt="Demo image" width="300" height="180" id="startAtMe"/></a>
				<a href="images/sl3l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl3s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl4l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl4s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl5l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl5s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl6l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl6s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl7l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl7s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl8l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl8s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl9l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl9s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl10l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl10s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl11l.jpg" target="_blank"><img class="ScrollableImage" src="images/sl11s.jpg" alt="Demo image" width="300" height="180"/></a>
				<a href="images/sl12l.jpg" target="_blank"><img class="ScrollableImage" src="i=sl12s.jpg" alt="Demo image" width="300" height="180"/></a>
				
				</div>
		</div>
	</div>
	
	<div id="col1" align="center">
		<p><img id="largeImg" src="images/sl1l.jpg" alt="Large image" /></p>
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
	