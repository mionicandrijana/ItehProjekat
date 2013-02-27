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
					<h2> Hannah - Straight Into Love (Slovenia 2013)</h2>
					<br>
					<br>
		 
	       <div class="vendor">
		   
        	<iframe width="560" height="315" src="http://www.youtube.com/embed/OMa3V0zqksE" frameborder="0" allowfullscreen></iframe>
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

                    $sql = "INSERT INTO  eurosong.komentari (video,ime, komentar) VALUES ('2','" . $ime . "', '" . $komentar . "')";
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

       // $sql= mysql_query( "SELECT ime, komentar FROM komentari WHERE video='2';");
      //while ($row = mysql_fetch_array($sql)) {
       // $ime = $row['ime'];
         // $komentar = $row['komentar'];
        ?>
	
<!--		<br>
<p style="outline: 4px double #198514;outline-offset: 10px;">
<span style="float: left; color: green; font-weight: bold"><?php echo $ime;?></span>
<br>
<?php echo strip_tags($komentar);?>


		
</p>
<br>-->

              

                
               <?php
               //}
                ?>


                <?php
  
  $tbl_name="komentari";   //your table name
  // How many adjacent pages should be shown on each side?
  $adjacents = 3;
  
  /* 
     First get total number of rows in data table. 
     If you have a WHERE clause in your query, make sure you mirror it here.
  */
  $query = "SELECT COUNT(*) as num FROM komentari";
  $total_pages = mysql_fetch_array(mysql_query($query));
  $total_pages = $total_pages[num];
  
  /* Setup vars for query. */
  $targetpage = "http://localhost/ItehProjekat/EurovisionSongContest/video2.php";   //your file name  (the name of this file)
  $limit = 5;                 //how many items to show per page
  $page = $_GET['page'];
  if($page) 
    $start = ($page - 1) * $limit;      //first item to display on this page
  else
    $start = 0;               //if no page var is given, set start to 0
  
  /* Get data. */
  $sql = "SELECT ime , komentar FROM $tbl_name ORDER BY id DESC LIMIT $start, $limit";
  $result = mysql_query($sql);
  
  /* Setup page vars for display. */
  if ($page == 0) $page = 1;          //if no page var is given, default to 1.
  $prev = $page - 1;              //previous page is page - 1
  $next = $page + 1;              //next page is page + 1
  $lastpage = ceil($total_pages/$limit);    //lastpage is = total pages / items per page, rounded up.
  $lpm1 = $lastpage - 1;            //last page minus 1
  
  /* 
    Now we apply our rules and draw the pagination object. 
    We're actually saving the code to a variable in case we want to draw it more than once.
  */
  $pagination = "";
  if($lastpage > 1)
  { 
    $pagination .= "<div class=\"pagination\">";
    //previous button
    if ($page > 1) 
      $pagination.= "<a href=\"$targetpage?page=$prev\">Prethodna</a>";
    else
      $pagination.= "<span class=\"disabled\">Prethodna</span>"; 
    
    //pages 
    if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
    { 
      for ($counter = 1; $counter <= $lastpage; $counter++)
      {
        if ($counter == $page)
          $pagination.= "<span class=\"current\">$counter</span>";
        else
          $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
      }
    }
    elseif($lastpage > 5 + ($adjacents * 2))  //enough pages to hide some
    {
      //close to beginning; only hide later pages
      if($page < 1 + ($adjacents * 2))    
      {
        for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
        {
          if ($counter == $page)
            $pagination.= "<span class=\"current\">$counter</span>";
          else
            $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
        }
        $pagination.= "...";
        $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
        $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";   
      }
      //in middle; hide some front and some back
      elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
      {
        $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
        $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
        $pagination.= "...";
        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
        {
          if ($counter == $page)
            $pagination.= "<span class=\"current\">$counter</span>";
          else
            $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
        }
        $pagination.= "...";
        $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
        $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";   
      }
      //close to end; only hide early pages
      else
      {
        $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
        $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
        $pagination.= "...";
        for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
        {
          if ($counter == $page)
            $pagination.= "<span class=\"current\">$counter</span>";
          else
            $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
        }
      }
    }
    
    //next button
    if ($page < $counter - 1) 
      $pagination.= "<a href=\"$targetpage?page=$next\">Naredna</a>";
    else
      $pagination.= "<span class=\"disabled\">Naredna</span>";
    $pagination.= "</div>\n";   
  }
?>

  <?php
    while($list = mysql_fetch_array($result))
    {
  
     echo "<table id='knjigau'>";

   echo "<tr><td>".$list['ime'] . "</td></tr><tr><td>" . $list['komentar'] . "</td></tr>";
   
   echo "</table>";
  
    }
  ?>

<?=$pagination?>
          	  
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
	