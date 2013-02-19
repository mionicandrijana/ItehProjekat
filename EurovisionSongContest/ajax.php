<?php


switch ($_GET['page']) {
    

       
    case '#tickets' : $page = '<style>#6u{padding: 10px 30px; text-align:left; line-height:1.5em;}
	h1{margin: 0em;
	padding: 0em;
	font-size: 26pt;
	font-weight: 300;}</style>
       <br>
	   <br>
	   <h1>Ticket sales</h1>
	   <br>
	   <hr>
<div><p>Tickets for the 2013 Eurovision Song Contest went on sale on the 26th of November at 10:00 CET. The general audience can buy tickets for the six rehearsals as well as the live shows.</p></div><div class="body"><p>Tickets are offered to nine shows: two Dress Rehearsals for each Semi-Final and the Grand Final, plus three live broadcasts.</p>
<br><p><strong>Tickets for the live show of the Grand Final were sold out.</strong></p><br>
<p>See the full schedule of the shows below:</p><br>
<style>
                    td{
                        width: 250px;
                        height: 30px;
                    }
                    th{
                        background: #ddd;
                        height: 25px;
                        text-align: left;
                        padding-left: 5px;
                    }
                </style>
<table>
<tbody>
<tr><th>Show</th><th>Show date</th><th>Start of sale</th><th>Note</th></tr>
<tr>
<td>1st Semi-Final (Jury Rehearsal)</td>
<td>13 May 2013</td>
<td>26 November 2012</td>
</tr>
<tr>
<td>1st Semi-Final (Dress Rehearsal)</td>
<td>14 May 2013</td>
<td>26 November 2012</td>
</tr>
<tr>
<td><strong>1st Semi-Final (LIVE SHOW)</strong></td>
<td><strong>14 May 2013</strong></td>
<td>26 November 2012</td>
</tr>
<tr>
<td>2nd Semi-Final (Jury Rehearsal)</td>
<td>15 May 2013</td>
<td>26 November 2012</td>
</tr>
<tr>
<td>2nd Semi-Final (Dress Rehearsal)</td>
<td>16 May 2013</td>
<td>26 November 2012</td>
</tr>
<tr>
<td><strong>2nd Semi-Final (LIVE SHOW)</strong></td>
<td><strong>16 May 2013</strong></td>
<td>26 November 2012</td>
</tr>
<tr>
<td>Final (Jury Rehearsal)</td>
<td>17 May 2013</td>
<td>26 November 2012</td>
<td><strong>Sold out</strong></td>
</tr>
<tr>
<td>Final (Dress Rehearsal)</td>
<td>18 May 2013</td>
<td>26 November 2013</td>
<td><strong>Sold out</strong></td>
</tr>
<tr>
<td><strong>Final (LIVE SHOW)</strong></td>
<td><strong>18 May 2013</strong></td>
<td>26 November 2012</td>
<td><strong>Sold out</strong></td>
</tr>
</tbody>
</table><br>
<p>The prices for tickets are between 10 and 216 euros.</p>
<p>The tickets for the Semi-Finals and all Dress Rehearsals can be bought online at <a href="http://www.Ticnet.se">Ticnet.se</a>, on the phone at +46 77 578 00 00 and at Ticnet outlets.</p>
<p><span style="text-decoration: underline;">Tickets for the live show of the Grand Final will be available only on <a href="http://www.Ticnet.se">Ticnet.se</a> and on +46 77 578 00 00. </span></p>

<br><p><strong>FOR NON-EUROPEAN CARD HOLDERS: You can use your local card when purchasing the tickets over the phone.</strong></p>
<p>More tickets will be available in the upcoming months after all technical details are finished.</p>
         ';
break;
		
	case '#events' : $page = '<style>#6u{padding: 10px 30px; text-align:left; line-height:1.5em;}</style>
       <br>
	   <br>
	   <h3>Upcoming events</h3><br>
            <hr>
            <h2>Forma</h2>
            <p>Forma je implementirana na starnici prijava za mailing listu na koju se dolazi klikom na dugme prijava na pocetnoj strani.<br>frm.js<br>
                - Vrsi validaciju forme tj. proverava da li su svi neophodni podaci uneti i ako nisu izbacuje poruku upozorenja<br>
                - Ako se izabere opcija da se postavi automatski generisano pitanje otkriva se forma za izbor generisanog pitanja</p><hr><br>
            <h2>Objekti</h2>
            <p>-Osobine objekata su koriscene na starnici novosti gde pomocu funkcije preusmeri() i osobine window.location vraca na pocetu stranu.(preusmeri.js)<br>-Zatim se koristi objekat Date na svim stranicama u futeru prikazuje vreme i tu se takodje koristi document.write.(VremeDatum.js)<br></p><hr><br>
            <h2>Meni</h2>
            <p>-Meni je implementiran na strani domaci i on kilkom na odgovarajuci zahtev domaceg vodi na starnu gde je taj zahtev ispunjen.(menu.css; meni.js)</p><hr><br>
            <h2>Kuki</h2>
            <p>-Kuki je dat na stranici domaci<br>-Strana sadrzi js koji kreira kuki koji prilikom prve posete trazi od posetioca ime, a nakon toga, prilikom sledece posete pozeli dobrodoslicu istom posetiocu </p><hr><br>
            <h2>Galerija</h2>
            <p>Galerija je realizovana na stranici galerija, pomocu jQuerija jq-galerija.js</p><hr><br>
            <h2>Pretraga</h2>
            <p>Takodje na vecini stranica postoji pretraga za tu stranu koja radi samo u IE</p><br>.';    
            
		
		
		break;
		case '#takepart' : $page = '<style>#sadrzaj{padding: 10px 30px; text-align:left; line-height:1.5em;}
		h1{margin: 0em;
	padding: 0em;
	font-size: 26pt;
	font-weight: 300;}</style>
       <br>
	   <br>
	   <h1>How can I take part?</h1><br>
            <hr>
            <p>In the lead up to the Eurovision Song Contest, national selections take place in the represented countries. These national selections are being organized by the respective national public broadcasters who are Active Members of the European Broadcasting Union (EBU). In the United Kingdom, the BBC is taking care of the national selection, in Sweden its SVT, in Germany its NDR, etc.
Good to know
First of all, it is important to know that the EBU is not involved in the national selections. It is entirely up to the participating broadcasters to decide how they pick their entry. However, the EBU does demand full transparency on the chosen procedure
    In most countries, televised national selections take place, and usually anyone can send in songs. A selection committee then picks the songs that will take part in the national selection, and a jury or viewers (or a mix of both) decide upon the winner
    Some broadcasters pick their entry for the Eurovision Song Contest internally. A selection committee then picks the representing artists, and sometimes also the song to be performed

Sending in your song

To take part in the Eurovision Song Contest, you need to win a national selection, or be selected by one of the participating broadcasters.

    Keep an eye on announcements made by your national public broadcaster. Usually, these announcements are made available through their website, and include details on how to send in your song
    Note that not all broadcasters accept songs from foreigh artists, song writers and composers
    If there is no public broadcaster in your country taking part in the Eurovision Song Contest, it is not possible to represent your country. To take part in the Eurovision Song Contest, you would have to enter your song for nomination in another country. Should you be selected to take part in the Eurovision Song Contest, you will then of course represent the respective country

Note that most broadcasters set their deadlines to submit songs somewhere between September and December.

If you sent in your song, the respective public broadcaster will inform you whether you have been selected for the national final, or not. From there, everything speaks for itself; you will have to win the national selection to represent the respective country at the Eurovision Song Contest.</p>';

               
            break;
		case '#countdown' : $page = '<style>#sadrzaj{padding: 10px 30px; text-align:left; line-height:1.5em;}</style>
       <br>
	   <br>
	   <h3>Countdown</h3><br>
            <hr>
           <head> <script type="text/javascript">
        TargetDate = "05/14/2013 12:01 AM";
        BackColor = "red";
        ForeColor = "white";
        CountActive = true;
        CountStepper = -1;
        LeadingZero = true;
        DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
        FinishMessage = "It is here!";
    </script>
    <script type="text/javascript" src="js/countdown.js"></script>
	</head>
	<body>
	
           ';    
            break;
		
}

echo $page;
?>