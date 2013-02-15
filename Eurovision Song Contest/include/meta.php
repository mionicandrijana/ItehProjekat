<!DOCTYPE HTML>
<html>
<head>
<title> Eurovision Song Contest</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel="shortcut icon" href="favicon.ico" />
</noscript>

<link rel="stylesheet" type="text/css"
 href="js/jquery.ad-gallery.css">
 <script type="text/javascript" src="js/jquery.min.js"></script>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ad-gallery.min.js"></script>
<script type="text/javascript" src="js/jquery.ad-gallery.js"></script>
<script type="text/javascript" src="js/jquery.history.js"></script>
<script type="text/javascript">
            $(document).ready(function () {
	
                //Check if url hash value exists (for bookmark)
                $.history.init(pageload);	
	    
                //highlight the selected link
                $('a[href=' + document.location.hash + ']').addClass('selected');
	
                //Seearch for link with REL set to ajax
                $('a[rel=ajax]').click(function () {
		
                    //grab the full url
                    var hash = this.href;
		
                    //remove the # value
                    hash = hash.replace(/^.*#/, '');
		
                    //for back button
                    $.history.load(hash);	
	 	
                    //clear the selected class and add the class class to the selected link
                    $('a[rel=ajax]').removeClass('selected');
                    $(this).addClass('selected');
	 	
                    //hide the content and show the progress bar
                    $('.6u').hide();
                    $('.loading').show();
	 	
                    //run the ajax
                    getPage();
	
                    //cancel the anchor tag behaviour
                    return false;
                });	
            });
	

            function pageload(hash) {
                //if hash value exists, run the ajax
                if (hash) getPage();    
            }
		
            function getPage() {
	
                //generate the parameter for the php script
                var data = 'page=' + encodeURIComponent(document.location.hash);
                $.ajax({
                    url: "ajax.php",	
                    type: "GET",		
                    data: data,		
                    cache: false,
                    success: function (html) {	
		
                        //hide the progress bar
                        $('.loading').hide();	
			
                        //add the content retrieved from ajax and put it in the #content div
                        $('.6u').html(html);
			
                        //display the body with fadeIn transition
                        $('.6u').fadeIn('fast');		
                    }		
                });
            }
        </script>
</head><body class="homepage">