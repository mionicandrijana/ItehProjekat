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
							<?php
//Zameniti URL putanjom serverskog dela REST servisa
$url = 'http://localhost/ItehProjekat/EurovisionSongContest/server1.php';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$json_objekat=json_decode($curl_odgovor);
?>
<h1>1st Semi-Final</h1>
<br>
<br>
<table>
<tr>

<th>Country</th>
<th>Performer</th>
<th>Song</th>

</tr>
<?php
foreach ($json_objekat->drzave as $t){

?>
<style>
                    td{
                        width: 200px;
                        height: 25px;
                    }
                    th{
                        background: #ddd;
                        height: 25px;
                        text-align: left;
                        padding-left: 5px;
                    }
					h1{margin: 0em;
	padding: 0em;
	font-size: 26pt;
	font-weight: 300;}
                </style>
<tr>

<td><?php echo $t->naziv;?></td>
<td><?php echo $t->ime_prezime;?></td>
<td><?php echo $t->pesma?></td>

</tr>
<?php
}
?></table>
<br>
<br>
						<?php
//Zameniti URL putanjom serverskog dela REST servisa
$url = 'http://localhost/ItehProjekat/EurovisionSongContest/server2.php';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$json_objekat=json_decode($curl_odgovor);
?>
<h1>2nd Semi-Final</h1>
<br>
<br>
<table>
<tr>

<th>Country</th>
<th>Performer</th>
<th>Song</th>

</tr>
<?php
foreach ($json_objekat->drzave as $t){

?>
<style>
                    td{
                        width: 200px;
                        height: 25px;
                    }
                    th{
                        background: #ddd;
                        height: 25px;
                        text-align: left;
                        padding-left: 5px;
                    }
					h1{margin: 0em;
	padding: 0em;
	font-size: 26pt;
	font-weight: 300;}
                </style>
<tr>

<td><?php echo $t->naziv;?></td>
<td><?php echo $t->ime_prezime;?></td>
<td><?php echo $t->pesma?></td>

</tr>
<?php
}
?></table>
<br>
<br>
<?php
//Zameniti URL putanjom serverskog dela REST servisa
$url = 'http://localhost/ItehProjekat/EurovisionSongContest/server3.php';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$json_objekat=json_decode($curl_odgovor);
?>
<h1>Final</h1>
<br>
<br>
<table>
<tr>

<th>Country</th>
<th>Performer</th>
<th>Song</th>

</tr>
<?php
foreach ($json_objekat->drzave as $t){

?>
<style>
                    td{
                        width: 200px;
                        height: 25px;
                    }
                    th{
                        background: #ddd;
                        height: 25px;
                        text-align: left;
                        padding-left: 5px;
                    }
					h1{margin: 0em;
	padding: 0em;
	font-size: 26pt;
	font-weight: 300;}
                </style>
<tr>

<td><?php echo $t->naziv;?></td>
<td><?php echo $t->ime_prezime;?></td>
<td><?php echo $t->pesma?></td>

</tr>
<?php
}
?></table>
		<head>
<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$(".button-style2").click(function(){
$.getJSON('server4.php', function(data) {
$.each (data.drzave,function(i, drzave){
$("#podaci").append(drzave.id_drz+" : "+drzave.naziv+"<br/>");

})


});
});
});
</script>
</head>
<head>
<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$(".button-style2").click(function(){
$.getJSON('server5.php', function(data) {
$.each (data.predstavnici,function(i, predstavnici){
$("#podaci2").append(predstavnici.id_pred+" : "+predstavnici.ime_prezime+"<br/>");

})


});
});
});
</script>
</head>
<body>
<br>
<br>
<div id = "podaci"><h1>All countries in order to performance</h1><form method="GET" action="" id="forma">
<p class="button-style2" ><a>View all countries</a></p>

</form></div> 
		



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