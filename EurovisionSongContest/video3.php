<?php
include 'include/meta.php';
include 'include/header.php';
include 'konekcija1.php';
?>
<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">
			<div class="row">
				<div class="9u mobileUI-main-content" id="content">
					<h2> Natália Kelly to represent Austria in Malmö</h2>
					<br>
					<br>
	       <div class="vendor">
        	<iframe width="560" height="315" src="http://www.youtube.com/embed/MgKt9pm4Wcc" frameborder="0" allowfullscreen></iframe>
	      </div>
		   <br>
		  <br>
		  
		  <form  method="POST" action="" >
   <p> Enter your name: </p><input type="text" name="ime" /><br>
  <p> Enter your comment: </p><textarea name="komentar" rows="3" cols="50"></textarea><br>
   <br>
   <style type="text/css">
            form input[type=submit]{
                background-color:#198514;
                
                font-family:Arial,Helvetica,sans-serif;
				font-color: gray;
                border:1px solid gray;
            }
        </style>
    <input type="submit" name="unos" value="Leave comment" />
</form>
<br>
<br>
 <?php
// include 'konekcija.php';
            if (isset($_POST["unos"])) {
//Prikupljanje podataka sa forme

                if (isset($_POST['ime']) && isset($_POST['komentar']) && $_POST['ime']!=''&& $_POST['komentar']!='') {
                    $ime = $_POST['ime'];
                    $komentar = $_POST['komentar'];
                 
//Operacije nad bazom

                    $sql = "INSERT INTO  eurosong.komentari (video,ime, komentar) VALUES ('3','" . $ime . "', '" . $komentar . "')";
                    if (mysql_query($sql)) {
                      $success = '<style type="text/css">#success{visibility: visible !important;}</style>Comment is succesfuly add.';
                                    echo '<p id="success" >' . $success . '</p>';
                    } else {
                        echo "<p>error</p>" . mysql_error();
                    }
                } else {
//Ako POST parametri nisu prosledeni
                   // echo "Nisu prosledeni parametri!";
                     $error = '<style type="text/css">#greska{visibility: visible !important;}</style>Empty!';
                    echo '<p id="greska" >'.$error.'</p>';
                }
            }
          
		
	//include 'konekcija.php';

        $sql= mysql_query( "SELECT ime, komentar FROM komentari WHERE video='3';");
      while ($row = mysql_fetch_array($sql)) {
        $ime = $row['ime'];
          $komentar = $row['komentar'];
        ?>
	
		<br>
<p style="outline: 4px double #198514;outline-offset: 10px;">
<span style="float: left; color: green; font-weight: bold"><?php echo $ime;?></span>
<br>
<?php echo strip_tags($komentar);?>


		
</p>
<br>

              

                
               <?php
               }
                ?>
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
	