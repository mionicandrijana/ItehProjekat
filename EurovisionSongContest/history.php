
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
                                                    require_once "konekcija.php";
                                                    $sql = "SELECT history.year, drzave.grad, drzave.naziv, history.winner 
                                                        FROM history, drzave
                                                        WHERE history.id_drz=drzave.id_drz
                                                        ORDER BY history.year ASC";
                                                    $dom = new DomDocument('1.0', 'utf-8');
                                                    $history = $dom->appendChild($dom->createElement('history'));
                                                    if (!$q = $mysqli->query($sql)) {
                                                        $greska = $history->appendChild($dom->createElement('error'));
                                                        $greska->appendChild($dom->createTextNode("query error"));
                                                    } else {
                                                        if ($q->num_rows > 0) {
                                                            $niz = array();
                                                            while ($red = $q->fetch_object()) {

                                                                $eurosong_year = $history->appendChild($dom->createElement('eurosong_year'));
                                                                $year = $eurosong_year->appendChild($dom->createElement('year'));
                                                                $year->appendChild($dom->createTextNode($red->year));
                                                                $grad = $eurosong_year->appendChild($dom->createElement('grad'));
                                                                $grad->appendChild($dom->createTextNode($red->grad));
                                                                $naziv = $eurosong_year->appendChild($dom->createElement('naziv'));
                                                                $naziv->appendChild($dom->createTextNode($red->naziv));
                                                                $winner = $eurosong_year->appendChild($dom->createElement('winner'));
                                                                $winner->appendChild($dom->createTextNode($red->winner));
                                                            }
                                                        } else {
                                                            $greska = $history->appendChild($dom->createElement('Error'));
                                                            $greska->appendChild($dom->createTextNode("No entries"));
                                                        }
                                                    }
                                                    $xml_string = $dom->saveXML();
                                                    $dom->save('xmlfile.xml');
                                                    $mysqli->close();
                                                    ?><br>
                                                    <h2>Eurosong history</h2><br><br>
                                                    <?php
                                                    $history = new SimpleXMLElement('xmlfile.xml', null, true);
                                                    ?>
                                                    <table>
                                                        <tr>
                                                            <th>Year</th>
                                                            <th>City</th>
                                                            <th>Country</th>
                                                            <th>Winner</th>
                                                        </tr>

                                                        <?php
                                                        foreach ($history as $p) {
                                                            ?>
                                                            <style>
                                                                td{
                                                                    width: 170px;
                                                                    height: 20px;
                                                                }
                                                                th{
                                                                    background: #ddd;
                                                                    height: 25px;
                                                                    text-align: left;
                                                                    padding-left: 5px;
                                                                }
                                                            </style>
                                                            <tr>
                                                                <td><?php echo $p->year; ?></td>
                                                                <td><?php echo $p->grad; ?></td>
                                                                <td><?php echo $p->naziv; ?></td>
                                                                <td><?php echo $p->winner; ?></td>

                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </table>
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
	