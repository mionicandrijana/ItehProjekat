
<?php
include 'include/meta.php';
include 'include/header.php';
include 'konekcija.php';
?>
<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">
			<div class="row">
				<div class="9u mobileUI-main-content" id="content">
					<section>
						<div class="post">
							<h2>News</h2>
							
							<?php 
							$sql= mysql_query( "SELECT naslov, tekst, datum FROM tektovi");
      while ($row = mysql_fetch_array($sql)) {
        $naslov = $row['naslov'];
          $tekst = $row['tekst'];
		  $datum = $row['datum'];
		  ?>
		  
		  <h2><?php echo $naslov;?></h2>
<br/>


<p style="outline: 4px double #198514;
outline-offset: 10px;"><?php echo $tekst;?></p>
<br/>



 <span style="float: right; color: green; font-weight: bold"><?php echo $datum;?></span>
 <br>
 <br>
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