<table border="0" width="500" cellspacing="0" cellpadding="0">
				<tbody><tr><td>
					<img src="gfx/x.gif" alt="" width="500" height="26" align="top">
				</td></tr>
				
			<!-- begin hoofdkop -->
			<tr><td class="pageTD">
				<div class="pageH1">
					Activeren mobiele telefoon
				</div>
				<br>				
				

				
				
				</td></tr>
		<!-- einde hoofdkop -->
		
		
		
		
		<!-- einde inpage paginanavigatie -->
		
		
		<tr>
		<td>
		

		

			
			
			

	

	
			
			
			
 						
			
 			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

	

	
			
			
			
						

			
				
			

			

		




			
			

	

	
			
			
			
						

			
				
			

			

		




			
			<form action="/content.cfm?action=telecom_submit_mobiele_telefonie_form" method="post" name="telecom_mobiele_telefonie_form">
			<table border="0" cellspacing="0" cellpadding="0" align="center" width="460">
			<tbody><tr><td><table border="0" cellspacing="0" cellpadding="6" align="center" width="460">
			

			
								
				<tbody><tr>
					<td colspan="6" class="pageText" align="left" valign="top">&nbsp;</td>
				</tr>
				
			

			
			<tr>
				<td class="pageText" colspan="6"><hr></td>
			</tr>
				<tr class="cellLichtGrijs">
					<td colspan="3" class="pageText" align="left">&nbsp;</td>
					
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_mobiele_telefonie_form.submit()">Verzend</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_mobiele_telefonie_form.reset()">Wis</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="home.cfm?menuID=2">Sluiten</a>
					</td>
				</tr>
				<tr>
				<td colspan="6">
				<table border="0" cellspacing="0" cellpadding="0" align="center" width="460">
					<tbody><tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">GSM nummer:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="telefoonnummer_gsm" tabindex="1" value="" size="12" maxlength="10">
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">SIM kaartnummer:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							8931440300&nbsp;-&nbsp;<input type="text" name="simkaartnummer" tabindex="2" value="" size="11" maxlength="9">
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Verkort kiesnummer:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="verkort_kiesnummer" tabindex="3" value="" size="7" maxlength="5">
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Restrictie:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<select name="verkeersklasse" tabindex="4">
								
									
										
											<option value="Data-only">Data-only</option>
										
									
								
									
										
											<option value="Intern">Intern</option>
										
									
								
									
										
											<option value="Internationaal">Internationaal</option>
										
									
								
									
										
											<option value="Nationaal" selected="">Nationaal</option>
										
									
								
							</select>
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Gebruiker GSM:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="gebruiker_gsm" tabindex="5" value="" size="30" maxlength="100">
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Vast nummer gebruiker:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="telefoonnummer_vast" tabindex="6" value="" size="7" maxlength="5">
							&nbsp;&nbsp;&nbsp;<a onclick="window.open('content.cfm?action=viewtel&amp;pagelet=true&amp;searchword=' + document.telecom_mobiele_telefonie_form.telefoonnummer_vast.value, '', 'scrollbars,menubar=no,toolbar=no,width=530,height=450');"><img src="images/info-knop2.gif" width="28" height="27" alt="" border="0"></a>
						</td>
					</tr>

					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">VU-eenheid:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<select id="vu_eenheid" name="vu_eenheid" tabindex="7" onchange="eventVUEenheid(event)">
								
									<option value="" selected="">Kies een VU-eenheid...</option>
								
								
									
										<option value="Bureau van de Vereniging" class="2">Bureau van de Vereniging</option>
									
								
									
										<option value="Faculteit der Godgeleerdh" class="8">Faculteit der Godgeleerdh</option>
									
								
									
										<option value="Faculteit der Wijsbegeerte" class="9">Faculteit der Wijsbegeerte</option>
									
								
									
										<option value="Faculteit der Letteren" class="10">Faculteit der Letteren</option>
									
								
									
										<option value="Faculteit der Rechtsgeleerdheid/Faculty of Law" class="11">Faculteit der Rechtsgeleerdheid/Faculty of Law</option>
									
								
									
										<option value="ACTA" class="13">ACTA</option>
									
								
									
										<option value="Faculteit der Bewegingswetensc" class="18">Faculteit der Bewegingswetensc</option>
									
								
									
										<option value="Faculteit der Psychologie en Pedagogiek" class="19">Faculteit der Psychologie en Pedagogiek</option>
									
								
									
										<option value="Faculteit der Sociale Wetensch" class="20">Faculteit der Sociale Wetensch</option>
									
								
									
										<option value="Faculteit der Economische Wetenschappen en Bedrijfskunde" class="21">Faculteit der Economische Wetenschappen en Bedri</option>
									
								
									
										<option value="Faculteit der Exacte Wetenscha" class="26">Faculteit der Exacte Wetenscha</option>
									
								
									
										<option value="Faculteit der Aard- en Levenswetenschappen" class="27">Faculteit der Aard- en Levenswetenschappen</option>
									
								
									
										<option value="Blaise Pascal Instituut" class="29">Blaise Pascal Instituut</option>
									
								
									
										<option value="Universiteitsbibliotheek VU" class="30">Universiteitsbibliotheek VU</option>
									
								
									
										<option value="Centrum internationale samenwe" class="33">Centrum internationale samenwe</option>
									
								
									
										<option value="Student- &amp; Onderwijszaken" class="34">Student- &amp; Onderwijszaken</option>
									
								
									
										<option value="Communicatie &amp; Marketing" class="36">Communicatie &amp; Marketing</option>
									
								
									
										<option value="Accountantsdienst" class="39">Accountantsdienst</option>
									
								
									
										<option value="Informatietechnologie" class="42">Informatietechnologie</option>
									
								
									
										<option value="Audiovisueel Centrum" class="43">Audiovisueel Centrum</option>
									
								
									
										<option value="Dienst Arbo en Milieu" class="44">Dienst Arbo en Milieu</option>
									
								
									
										<option value="Facilitaire Campus Organisatie, Facility" class="45">Facilitaire Campus Organisatie, Facility</option>
									
								
									
										<option value="Facilitaire Campus Organisatie, Energiebedrijf" class="46">Facilitaire Campus Organisatie, Energiebedrijf</option>
									
								
									
										<option value="Bestuurszaken" class="47">Bestuurszaken</option>
									
								
									
										<option value="Olifantje 't" class="128886">Olifantje 't</option>
									
								
									
										<option value="Facilitaire Campus Organisatie" class="274747">Facilitaire Campus Organisatie</option>
									
								
									
										<option value="College van Bestuur" class="712560">College van Bestuur</option>
									
								
									
										<option value="Technology Transfer Office VU &amp; VUmc (TTO)" class="764852">Technology Transfer Office VU &amp; VUmc (TTO)</option>
									
								
									
										<option value="Zuidas Academie" class="828421">Zuidas Academie</option>
									
								
									
										<option value="Homij" class="828426">Homij</option>
									
								
									
										<option value="HRM, Arbo &amp; Milieu" class="2086226">HRM, Arbo &amp; Milieu</option>
									
								
									
										<option value="Financiën &amp; Audit" class="2086227">Financiën &amp; Audit</option>
									
								
									
										<option value="Adm. en Ondersteunende Processen" class="2086228">Adm. en Ondersteunende Processen</option>
									
								
									
										<option value="Mega Elektra" class="7861579">Mega Elektra</option>
									
								
									
										<option value="Brothers Horeca Groep" class="7944433">Brothers Horeca Groep</option>
									
								
									
										<option value="VU-Vereniging/VUconnected" class="14937803">VU-Vereniging/VUconnected</option>
									
								
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Kostenplaatscode:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<select name="kostenplaatscode" id="kostenplaatscode" tabindex="8">
									<option value="" selected="">Kies een kostenplaats...</option>
								
									
										
									
									
										<option value="5702" class="39" style="display: block;">5702 Accountantsdienst- sector ziekenhuis</option>
									
								
									
										
									
									
										<option value="5701" class="39" style="display: block;">5701 Leiding en algemeen</option>
									
								
									
										
									
									
										<option value="1690" class="13" style="display: block;">1690 ACTA BV's</option>
									
								
									
										
									
									
										<option value="1620" class="13" style="display: block;">1620 Bedrijfsvoering/Zorg</option>
									
								
									
										
									
									
										<option value="1652" class="13" style="display: block;">1652 CEP</option>
									
								
									
										
									
									
										<option value="1671" class="13" style="display: block;">1671 Conserverende en Preventieve tandheelk</option>
									
								
									
										
									
									
										<option value="1611" class="13" style="display: block;">1611 Fac. Bureau</option>
									
								
									
										
									
									
										<option value="1614" class="13" style="display: block;">1614 Facilitaire Dienst</option>
									
								
									
										
									
									
										<option value="1610" class="13" style="display: block;">1610 Faculteit algemeen</option>
									
								
									
										
									
									
										<option value="1613" class="13" style="display: block;">1613 F&amp;C</option>
									
								
									
										
									
									
										<option value="1672" class="13" style="display: block;">1672 Functieleer en Restauratieve tandheelk</option>
									
								
									
										
									
									
										<option value="1608" class="13" style="display: block;">1608 Hogeschool Inholland-MZK</option>
									
								
									
										
									
									
										<option value="1612" class="13" style="display: block;">1612 HRM</option>
									
								
									
										
									
									
										<option value="1616" class="13" style="display: block;">1616 ICT</option>
									
								
									
										
									
									
										<option value="1617" class="13" style="display: block;">1617 Marketing &amp; Communicatie</option>
									
								
									
										
									
									
										<option value="1628" class="13" style="display: block;">1628 Medewerkerspraktijk</option>
									
								
									
										
									
									
										<option value="1670" class="13" style="display: block;">1670 Mondgezondh</option>
									
								
									
										
									
									
										<option value="1661" class="13" style="display: block;">1661 Mondziekten en Kaakchirurgie</option>
									
								
									
										
									
									
										<option value="1630" class="13" style="display: block;">1630 Onderwijsinst</option>
									
								
									
										
									
									
										<option value="1649" class="13" style="display: block;">1649 Onderwijsprakti</option>
									
								
									
										
									
									
										<option value="1640" class="13" style="display: block;">1640 Onderzoeksinst</option>
									
								
									
										
									
									
										<option value="1651" class="13" style="display: block;">1651 Orale functieleer</option>
									
								
									
										
									
									
										<option value="1663" class="13" style="display: block;">1663 Orthodontie &amp; sociale tandheelkunde</option>
									
								
									
										
									
									
										<option value="1654" class="13" style="display: block;">1654 Parodontologie</option>
									
								
									
										
									
									
										<option value="1631" class="13" style="display: block;">1631 Postac.Onderwij</option>
									
								
									
										
									
									
										<option value="1609" class="13" style="display: block;">1609 Stichting voor Bijzondere Tandheelkunde</option>
									
								
									
										
									
									
										<option value="1655" class="13" style="display: block;">1655 Thk basiswetenschappen</option>
									
								
									
										
									
									
										<option value="16AA" class="13" style="display: block;">16AA Verv (Bijz.hgl)</option>
									
								
									
										
									
									
										<option value="1633" class="13" style="display: block;">1633 Vervallen (Alg. ziekteleer en inw. gen.)</option>
									
								
									
										
									
									
										<option value="1606" class="13" style="display: block;">1606 Vervallen (Algemene Voorzieningen)</option>
									
								
									
										
									
									
										<option value="1624" class="13" style="display: block;">1624 Vervallen (Anatomieea)</option>
									
								
									
										
									
									
										<option value="1607" class="13" style="display: block;">1607 Vervallen (Audiovisueel Centrum)</option>
									
								
									
										
									
									
										<option value="1601" class="13" style="display: block;">1601 Vervallen (Directie en bestuur)</option>
									
								
									
										
									
									
										<option value="1605" class="13" style="display: block;">1605 Vervallen (Facilitaire dienst)</option>
									
								
									
										
									
									
										<option value="1603" class="13" style="display: block;">1603 Vervallen (Financiele en econ. zaken)</option>
									
								
									
										
									
									
										<option value="1604" class="13" style="display: block;">1604 Vervallen (Griffie)</option>
									
								
									
										
									
									
										<option value="1619" class="13" style="display: block;">1619 Vervallen (Klinische/tandh. keuze ond.)</option>
									
								
									
										
									
									
										<option value="1635" class="13" style="display: block;">1635 Vervallen (Orale celbiologie)</option>
									
								
									
										
									
									
										<option value="1629" class="13" style="display: block;">1629 Vervallen (Orale microbiologie)</option>
									
								
									
										
									
									
										<option value="1632" class="13" style="display: block;">1632 Vervallen (Orale pathologie)</option>
									
								
									
										
									
									
										<option value="1634" class="13" style="display: block;">1634 Vervallen (Orthodontie)</option>
									
								
									
										
									
									
										<option value="1615" class="13" style="display: block;">1615 Vervallen (Patientenadministratie)</option>
									
								
									
										
									
									
										<option value="1626" class="13" style="display: block;">1626 Vervallen (Pedodontologie)</option>
									
								
									
										
									
									
										<option value="1602" class="13" style="display: block;">1602 Vervallen (Personeel en organisatie)</option>
									
								
									
										
									
									
										<option value="1622" class="13" style="display: block;">1622 Vervallen (Prothetische tandheelkunde)</option>
									
								
									
										
									
									
										<option value="1636" class="13" style="display: block;">1636 Vervallen (Radiologie)</option>
									
								
									
										
									
									
										<option value="1637" class="13" style="display: block;">1637 Vervallen (Sociale tandh./Voorlicht.)</option>
									
								
									
										
									
									
										<option value="1618" class="13" style="display: block;">1618 Vervallen(Polikliniek/centr. indicatie)</option>
									
								
									
										
									
									
										<option value="1627" class="13" style="display: block;">1627 Vervallen(Tandheelkundige materiaalwet.)</option>
									
								
									
										
									
									
										<option value="1621" class="13" style="display: block;">1621 Vest. Den Haag</option>
									
								
									
										
									
									
										<option value="1623" class="13" style="display: block;">1623 Vestiging Almer</option>
									
								
									
										
									
									
										<option value="1625" class="13" style="display: block;">1625 Vestiging Hoorn</option>
									
								
									
										
									
									
										<option value="7307" class="2086228" style="display: block;">7307 Archiefbureau</option>
									
								
									
										
									
									
										<option value="7302" class="2086228" style="display: block;">7302 Bedrijfsbureau</option>
									
								
									
										
									
									
										<option value="7305" class="2086228" style="display: block;">7305 Cash Management en Assurantiën</option>
									
								
									
										
									
									
										<option value="7303" class="2086228" style="display: block;">7303 Concern Boekhouding en Administraties</option>
									
								
									
										
									
									
										<option value="7301" class="2086228" style="display: block;">7301 Directie</option>
									
								
									
										
									
									
										<option value="7304" class="2086228" style="display: block;">7304 Financiële Administratie Diensten</option>
									
								
									
										
									
									
										<option value="7306" class="2086228" style="display: block;">7306 Functioneel Beheer ERP-systemen</option>
									
								
									
										
									
									
										<option value="6101" class="43" style="display: block;">6101 Audiovisueel Centrum</option>
									
								
									
										
									
									
										<option value="7050" class="47" style="display: block;">7050 BBZ</option>
									
								
									
										
									
									
										<option value="7022" class="47" style="display: block;">7022 BPR</option>
									
								
									
										
									
									
										<option value="7020" class="47" style="display: block;">7020 PCB algemeen</option>
									
								
									
										
									
									
										<option value="7021" class="47" style="display: block;">7021 Reorganisatieteam</option>
									
								
									
										
									
									
										<option value="7012" class="47" style="display: block;">7012 Samenwerking VU-UvA</option>
									
								
									
										
									
									
										<option value="7023" class="47" style="display: block;">7023 Strategisch Programmamanagement</option>
									
								
									
										
									
									
										<option value="7011" class="47" style="display: block;">7011 Toezeggingen CvB</option>
									
								
									
										
									
									
										<option value="7080" class="47" style="display: block;">7080 Vastgoed</option>
									
								
									
										
									
									
										<option value="7030" class="47" style="display: block;">7030 Vervallen (Archieven)</option>
									
								
									
										
									
									
										<option value="7040" class="47" style="display: block;">7040 Vervallen (Bestuursstaf algemeen)</option>
									
								
									
										
									
									
										<option value="7090" class="47" style="display: block;">7090 Vervallen (Communicatie)</option>
									
								
									
										
									
									
										<option value="7001" class="47" style="display: block;">7001 Vervallen (CvB incl. secrataris)</option>
									
								
									
										
									
									
										<option value="7010" class="47" style="display: block;">7010 Vervallen (FAB)</option>
									
								
									
										
									
									
										<option value="7060" class="47" style="display: block;">7060 Vervallen (Financien)</option>
									
								
									
										
									
									
										<option value="7070" class="47" style="display: block;">7070 Vervallen (P&amp;O)</option>
									
								
									
										
									
									
										<option value="4201" class="29" style="display: block;">4201 Blaise Pascal Instituut</option>
									
								
									
										
									
									
										<option value="0526" class="7944433" style="display: block;">0526 Brothers Horeca Groep</option>
									
								
									
										
									
									
										<option value="0901" class="2" style="display: block;">0901 Bureau van de Vereniging</option>
									
								
									
										
									
									
										<option value="5201" class="33" style="display: block;">5201 CIS</option>
									
								
									
										
									
									
										<option value="5030" class="712560" style="display: block;">5030 Adviseurs CvB</option>
									
								
									
										
									
									
										<option value="5020" class="712560" style="display: block;">5020 Bureau Bestuuszaken - secretariaat</option>
									
								
									
										
									
									
										<option value="5010" class="712560" style="display: block;">5010 College van Bestuur</option>
									
								
									
										
									
									
										<option value="5040" class="712560" style="display: block;">5040 Raad van Toezicht</option>
									
								
									
										
									
									
										<option value="5502" class="36" style="display: block;">5502 Ad Valvas</option>
									
								
									
										
									
									
										<option value="5509" class="36" style="display: block;">5509 Afd. Strategie &amp; Beleid</option>
									
								
									
										
									
									
										<option value="5517" class="36" style="display: block;">5517 Afdeling Planning en Support</option>
									
								
									
										
									
									
										<option value="5518" class="36" style="display: block;">5518 Afdeling Webproject</option>
									
								
									
										
									
									
										<option value="5512" class="36" style="display: block;">5512 Alumnibureau</option>
									
								
									
										
									
									
										<option value="5560" class="36" style="display: block;">5560 Alumnirelaties</option>
									
								
									
										
									
									
										<option value="5561" class="36" style="display: block;">5561 Alumnirelaties Cluster Faculteiten</option>
									
								
									
										
									
									
										<option value="5533" class="36" style="display: block;">5533 Art Direction</option>
									
								
									
										
									
									
										<option value="5501" class="36" style="display: block;">5501 Bedrbureau</option>
									
								
									
										
									
									
										<option value="5551" class="36" style="display: block;">5551 Cluster 1 FEW-FALW</option>
									
								
									
										
									
									
										<option value="5552" class="36" style="display: block;">5552 Cluster 2 GGL-WBG-LETT-FPP-FBW</option>
									
								
									
										
									
									
										<option value="5553" class="36" style="display: block;">5553 Cluster 3 FEWEB-FSW-Rechten</option>
									
								
									
										
									
									
										<option value="5554" class="36" style="display: block;">5554 Cluster 4 Diensten</option>
									
								
									
										
									
									
										<option value="5521" class="36" style="display: block;">5521 Comm. &amp; Marketing Expertise Services</option>
									
								
									
										
									
									
										<option value="5530" class="36" style="display: block;">5530 Congres en Mediacenter</option>
									
								
									
										
									
									
										<option value="5523" class="36" style="display: block;">5523 Externe Communicatie</option>
									
								
									
										
									
									
										<option value="5516" class="36" style="display: block;">5516 (Informatie-)/Datamanagement</option>
									
								
									
										
									
									
										<option value="5515" class="36" style="display: block;">5515 Interne Communicatie</option>
									
								
									
										
									
									
										<option value="5522" class="36" style="display: block;">5522 Interne Communicatie</option>
									
								
									
										
									
									
										<option value="5542" class="36" style="display: block;">5542 Ledenorganisatie</option>
									
								
									
										
									
									
										<option value="5540" class="36" style="display: block;">5540 Maatschappelijke profilering</option>
									
								
									
										
									
									
										<option value="5524" class="36" style="display: block;">5524 Marketing</option>
									
								
									
										
									
									
										<option value="5514" class="36" style="display: block;">5514 Merk- en Reputatiemanagement</option>
									
								
									
										
									
									
										<option value="5504" class="36" style="display: block;">5504 Pro &amp; Mediarela</option>
									
								
									
										
									
									
										<option value="5541" class="36" style="display: block;">5541 Programmering</option>
									
								
									
										
									
									
										<option value="5513" class="36" style="display: block;">5513 Projectmanagement en traffic</option>
									
								
									
										
									
									
										<option value="5531" class="36" style="display: block;">5531 Staf CMc</option>
									
								
									
										
									
									
										<option value="5520" class="36" style="display: block;">5520 Stategie &amp; Beleid</option>
									
								
									
										
									
									
										<option value="5510" class="36" style="display: block;">5510 Studentenwerv</option>
									
								
									
										
									
									
										<option value="5534" class="36" style="display: block;">5534 Tools Management</option>
									
								
									
										
									
									
										<option value="5532" class="36" style="display: block;">5532 Traffic</option>
									
								
									
										
									
									
										<option value="5511" class="36" style="display: block;">5511 Vormgeving &amp; Fotografie</option>
									
								
									
										
									
									
										<option value="5506" class="36" style="display: block;">5506 Webredactie</option>
									
								
									
										
									
									
										<option value="6203" class="44" style="display: block;">6203 Bedrijfsbureau</option>
									
								
									
										
									
									
										<option value="6202" class="44" style="display: block;">6202 Gezondheid en Welzijn</option>
									
								
									
										
									
									
										<option value="6201" class="44" style="display: block;">6201 Werkplek en Milieu</option>
									
								
									
										
									
									
										<option value="6663" class="274747" style="display: block;">6663 Accountmanagement</option>
									
								
									
										
									
									
										<option value="6620" class="274747" style="display: block;">6620 Assetmanagement</option>
									
								
									
										
									
									
										<option value="6602" class="274747" style="display: block;">6602 Assetmanagement</option>
									
								
									
										
									
									
										<option value="6681" class="274747" style="display: block;">6681 Campusontwikkeling</option>
									
								
									
										
									
									
										<option value="6610" class="274747" style="display: block;">6610 Campusontwikkeling</option>
									
								
									
										
									
									
										<option value="6611" class="274747" style="display: block;">6611 Campusontwikkeling Inhuur projecten</option>
									
								
									
										
									
									
										<option value="6634" class="274747" style="display: block;">6634 Civiele zaken</option>
									
								
									
										
									
									
										<option value="6671" class="274747" style="display: block;">6671 Consultancy</option>
									
								
									
										
									
									
										<option value="6662" class="274747" style="display: block;">6662 Contractmanagement</option>
									
								
									
										
									
									
										<option value="6601" class="274747" style="display: block;">6601 Directie &amp; Secretariaat FCO</option>
									
								
									
										
									
									
										<option value="6685" class="274747" style="display: block;">6685 Directie en Secretariaat</option>
									
								
									
										
									
									
										<option value="6605" class="274747" style="display: block;">6605 Energiebedrijf</option>
									
								
									
										
									
									
										<option value="6673" class="274747" style="display: block;">6673 Energiecentrum</option>
									
								
									
										
									
									
										<option value="6687" class="274747" style="display: block;">6687 Finance &amp; Ctrl</option>
									
								
									
										
									
									
										<option value="6632" class="274747" style="display: block;">6632 Floormanagement</option>
									
								
									
										
									
									
										<option value="6672" class="274747" style="display: block;">6672 Gebouwbeheer</option>
									
								
									
										
									
									
										<option value="6636" class="274747" style="display: block;">6636 Hortus</option>
									
								
									
										
									
									
										<option value="6603" class="274747" style="display: block;">6603 Human Resource Management</option>
									
								
									
										
									
									
										<option value="6635" class="274747" style="display: block;">6635 Logistiek</option>
									
								
									
										
									
									
										<option value="6631" class="274747" style="display: block;">6631 Onderhoud</option>
									
								
									
										
									
									
										<option value="6642" class="274747" style="display: block;">6642 Onderhoudsmanagement</option>
									
								
									
										
									
									
										<option value="6688" class="274747" style="display: block;">6688 Parkeerbedrijf VU-VUmc</option>
									
								
									
										
									
									
										<option value="6661" class="274747" style="display: block;">6661 Portfoliomanagement</option>
									
								
									
										
									
									
										<option value="6654" class="274747" style="display: block;">6654 Projectbureau</option>
									
								
									
										
									
									
										<option value="6615" class="274747" style="display: block;">6615 Realisatiemanagement</option>
									
								
									
										
									
									
										<option value="6616" class="274747" style="display: block;">6616 Realisatiemanagement Inhuur projecten</option>
									
								
									
										
									
									
										<option value="6633" class="274747" style="display: block;">6633 Reprografie</option>
									
								
									
										
									
									
										<option value="6664" class="274747" style="display: block;">6664 Ruimteplanning &amp; Exploitatie zalen</option>
									
								
									
										
									
									
										<option value="6665" class="274747" style="display: block;">6665 Servicedesk</option>
									
								
									
										
									
									
										<option value="6660" class="274747" style="display: block;">6660 Services</option>
									
								
									
										
									
									
										<option value="6630" class="274747" style="display: block;">6630 Uitvoeringsorganisatie</option>
									
								
									
										
									
									
										<option value="6670" class="274747" style="display: block;">6670 Vastgoedbeheer</option>
									
								
									
										
									
									
										<option value="6655" class="274747" style="display: block;">6655 VERVALLEN Bediening, Storingen en Systeembeheer</option>
									
								
									
										
									
									
										<option value="6651" class="274747" style="display: block;">6651 VERVALLEN Bedrijfsbureau Bouwbeheer</option>
									
								
									
										
									
									
										<option value="6641" class="274747" style="display: block;">6641 VERVALLEN Consultancy</option>
									
								
									
										
									
									
										<option value="6680" class="274747" style="display: block;">6680 VERVALLEN Directie Huisvesting</option>
									
								
									
										
									
									
										<option value="6640" class="274747" style="display: block;">6640 VERVALLEN Directie O&amp;TB</option>
									
								
									
										
									
									
										<option value="6650" class="274747" style="display: block;">6650 VERVALLEN FCO Bouwbeheer</option>
									
								
									
										
									
									
										<option value="6652" class="274747" style="display: block;">6652 VERVALLEN Gebouwen, E&amp;W</option>
									
								
									
										
									
									
										<option value="6653" class="274747" style="display: block;">6653 VERVALLEN Klimaatinstallaties</option>
									
								
									
										
									
									
										<option value="6656" class="274747" style="display: block;">6656 VERVALLEN Personele capaciteit</option>
									
								
									
										
									
									
										<option value="6643" class="274747" style="display: block;">6643 VERVALLEN Techn Klantaanvr &amp; Onderhoudsprojecten</option>
									
								
									
										
									
									
										<option value="6501" class="46" style="display: block;">6501 Energiebedrijf VU / VUmc</option>
									
								
									
										
									
									
										<option value="6308" class="45" style="display: block;">6308 Accountmanagement</option>
									
								
									
										
									
									
										<option value="6341" class="45" style="display: block;">6341 Beleid en Advies</option>
									
								
									
										
									
									
										<option value="6365" class="45" style="display: block;">6365 Beveiliging/receptie</option>
									
								
									
										
									
									
										<option value="6368" class="45" style="display: block;">6368 Bureau Pedel</option>
									
								
									
										
									
									
										<option value="6362" class="45" style="display: block;">6362 Congrescoordinatie</option>
									
								
									
										
									
									
										<option value="6332" class="45" style="display: block;">6332 Contractbeheer </option>
									
								
									
										
									
									
										<option value="6392" class="45" style="display: block;">6392 Contractbeheer catering</option>
									
								
									
										
									
									
										<option value="6334" class="45" style="display: block;">6334 Coördinatie Onderwijsruimte</option>
									
								
									
										
									
									
										<option value="6344" class="45" style="display: block;">6344 Facilitaire Helpdesk</option>
									
								
									
										
									
									
										<option value="6394" class="45" style="display: block;">6394 Facility Contractbeheer Automaten</option>
									
								
									
										
									
									
										<option value="6390" class="45" style="display: block;">6390 FZ Cateraar</option>
									
								
									
										
									
									
										<option value="6305" class="45" style="display: block;">6305 Hortus</option>
									
								
									
										
									
									
										<option value="6310" class="45" style="display: block;">6310 Human Resource Management</option>
									
								
									
										
									
									
										<option value="6361" class="45" style="display: block;">6361 Interne Zaken</option>
									
								
									
										
									
									
										<option value="6364" class="45" style="display: block;">6364 Logistiek</option>
									
								
									
										
									
									
										<option value="6333" class="45" style="display: block;">6333 Management Frontoffice</option>
									
								
									
										
									
									
										<option value="6330" class="45" style="display: block;">6330 Management Frontoffice / Services</option>
									
								
									
										
									
									
										<option value="6363" class="45" style="display: block;">6363 Reprografie</option>
									
								
									
										
									
									
										<option value="6311" class="45" style="display: block;">6311 VERVALEN Financiën &amp; Control FB</option>
									
								
									
										
									
									
										<option value="6371" class="45" style="display: block;">6371 VERVALLEN Bruin Cafe HG</option>
									
								
									
										
									
									
										<option value="6391" class="45" style="display: block;">6391 VERVALLEN Campuscafé</option>
									
								
									
										
									
									
										<option value="6380" class="45" style="display: block;">6380 VERVALLEN Congresbureau</option>
									
								
									
										
									
									
										<option value="6377" class="45" style="display: block;">6377 VERVALLEN DE-cafe</option>
									
								
									
										
									
									
										<option value="6381" class="45" style="display: block;">6381 VERVALLEN DE-Hoofdgebouw</option>
									
								
									
										
									
									
										<option value="6360" class="45" style="display: block;">6360 VERVALLEN Dienst Facilitaire Zaken</option>
									
								
									
										
									
									
										<option value="6331" class="45" style="display: block;">6331 VERVALLEN Exposorium BO</option>
									
								
									
										
									
									
										<option value="6340" class="45" style="display: block;">6340 VERVALLEN FZ/Secretariaat</option>
									
								
									
										
									
									
										<option value="6366" class="45" style="display: block;">6366 VERVALLEN Gecoördineerde Inkoop</option>
									
								
									
										
									
									
										<option value="6320" class="45" style="display: block;">6320 VERVALLEN Huisvesting en Ruimtebeheer</option>
									
								
									
										
									
									
										<option value="6304" class="45" style="display: block;">6304 VERVALLEN Inactief person</option>
									
								
									
										
									
									
										<option value="6379" class="45" style="display: block;">6379 VERVALLEN Metropolitan</option>
									
								
									
										
									
									
										<option value="6367" class="45" style="display: block;">6367 VERVALLEN Postkamer</option>
									
								
									
										
									
									
										<option value="6382" class="45" style="display: block;">6382 VERVALLEN RB Zomerterras</option>
									
								
									
										
									
									
										<option value="6372" class="45" style="display: block;">6372 VERVALLEN Restaurant HG</option>
									
								
									
										
									
									
										<option value="6376" class="45" style="display: block;">6376 VERVALLEN Restaurant MF</option>
									
								
									
										
									
									
										<option value="6375" class="45" style="display: block;">6375 VERVALLEN Restaurant WN</option>
									
								
									
										
									
									
										<option value="6370" class="45" style="display: block;">6370 VERVALLEN Restauratief Bedrijf</option>
									
								
									
										
									
									
										<option value="6347" class="45" style="display: block;">6347 VERVALLEN Sectie Facilitaire Projectcoordinatie</option>
									
								
									
										
									
									
										<option value="6312" class="45" style="display: block;">6312 VERVALLEN Security Beleid</option>
									
								
									
										
									
									
										<option value="6321" class="45" style="display: block;">6321 VERVALLEN 6321</option>
									
								
									
										
									
									
										<option value="6359" class="45" style="display: block;">6359 VEVALLEN Inkoop / Bestelbureau</option>
									
								
									
										
									
									
										<option value="2933" class="27" style="display: block;">2933 Aarde&amp;Economie</option>
									
								
									
										
									
									
										<option value="3002" class="27" style="display: block;">3002 Acacia Institute</option>
									
								
									
										
									
									
										<option value="2920" class="27" style="display: block;">2920 afdeling Aardwetenschappen</option>
									
								
									
										
									
									
										<option value="2940" class="27" style="display: block;">2940 afdeling Athena</option>
									
								
									
										
									
									
										<option value="2970" class="27" style="display: block;">2970 afdeling Ecologische Wetenschappen</option>
									
								
									
										
									
									
										<option value="2990" class="27" style="display: block;">2990 afdeling Geo-bioarcheologie</option>
									
								
									
										
									
									
										<option value="2943" class="27" style="display: block;">2943 afdeling Gezondheidswetenschappen</option>
									
								
									
										
									
									
										<option value="2950" class="27" style="display: block;">2950 afdeling Moleculaire Celbiologie</option>
									
								
									
										
									
									
										<option value="2960" class="27" style="display: block;">2960 afdeling Neurowetenschappen</option>
									
								
									
										
									
									
										<option value="2901" class="27" style="display: block;">2901 Algemene Facultaire Budgetten</option>
									
								
									
										
									
									
										<option value="2995" class="27" style="display: block;">2995 Amsterdam Global Change Institute</option>
									
								
									
										
									
									
										<option value="2916" class="27" style="display: block;">2916 Beleidsruimte Onderwijs</option>
									
								
									
										
									
									
										<option value="29AA" class="27" style="display: block;">29AA Bijzonder hoogleraren Fac. Aard- en Levenswetens</option>
									
								
									
										
									
									
										<option value="2922" class="27" style="display: block;">2922 cluster Aarde en Klimaat</option>
									
								
									
										
									
									
										<option value="2924" class="27" style="display: block;">2924 cluster Aarde en Natuurlijke Hulpbronnen</option>
									
								
									
										
									
									
										<option value="2923" class="27" style="display: block;">2923 cluster Diepe Aarde</option>
									
								
									
										
									
									
										<option value="2967" class="27" style="display: block;">2967 CNCR</option>
									
								
									
										
									
									
										<option value="2981" class="27" style="display: block;">2981 Dep. Chemistry and Biology</option>
									
								
									
										
									
									
										<option value="2983" class="27" style="display: block;">2983 Dep. Environmental Economics</option>
									
								
									
										
									
									
										<option value="2985" class="27" style="display: block;">2985 Dep. Environmental Policy Analysis</option>
									
								
									
										
									
									
										<option value="2987" class="27" style="display: block;">2987 Dep. Spatial Analysis and Decision Support</option>
									
								
									
										
									
									
										<option value="2902" class="27" style="display: block;">2902 Faculteitsbestuur;Medezeg.organen;Directie Bedri</option>
									
								
									
										
									
									
										<option value="2911" class="27" style="display: block;">2911 Fijnmech. Bèta</option>
									
								
									
										
									
									
										<option value="2904" class="27" style="display: block;">2904 FPCA</option>
									
								
									
										
									
									
										<option value="2935" class="27" style="display: block;">2935 Gesteentebewerking</option>
									
								
									
										
									
									
										<option value="2908" class="27" style="display: block;">2908 Huisvesting- en Gebouwzaken</option>
									
								
									
										
									
									
										<option value="2980" class="27" style="display: block;">2980 Institute for Environmental Studies (IVM)</option>
									
								
									
										
									
									
										<option value="2912" class="27" style="display: block;">2912 Instrumentmakerij Aardwetenschappen</option>
									
								
									
										
									
									
										<option value="2932" class="27" style="display: block;">2932 ISES</option>
									
								
									
										
									
									
										<option value="2910" class="27" style="display: block;">2910 IT</option>
									
								
									
										
									
									
										<option value="2927" class="27" style="display: block;">2927 Klimaat &amp; Landschap</option>
									
								
									
										
									
									
										<option value="3003" class="27" style="display: block;">3003 Klimaatcentrum</option>
									
								
									
										
									
									
										<option value="2936" class="27" style="display: block;">2936 Laboratorium Geochemische Analyse</option>
									
								
									
										
									
									
										<option value="2937" class="27" style="display: block;">2937 Laboratorium Massaspectrometrie</option>
									
								
									
										
									
									
										<option value="2938" class="27" style="display: block;">2938 Laboratorium Microanalyse</option>
									
								
									
										
									
									
										<option value="2939" class="27" style="display: block;">2939 Laboratorium Sedimentanalyse</option>
									
								
									
										
									
									
										<option value="2909" class="27" style="display: block;">2909 Mark. &amp; werving</option>
									
								
									
										
									
									
										<option value="2956" class="27" style="display: block;">2956 MC/subgroep Kooijman</option>
									
								
									
										
									
									
										<option value="2955" class="27" style="display: block;">2955 MC/subgroep Schat</option>
									
								
									
										
									
									
										<option value="2906" class="27" style="display: block;">2906 Onderwijsbureau</option>
									
								
									
										
									
									
										<option value="2915" class="27" style="display: block;">2915 Onderwijsdirectie</option>
									
								
									
										
									
									
										<option value="2919" class="27" style="display: block;">2919 Opl Aarde&amp;Econ</option>
									
								
									
										
									
									
										<option value="2914" class="27" style="display: block;">2914 Opl. gez &amp; lev</option>
									
								
									
										
									
									
										<option value="2905" class="27" style="display: block;">2905 P&amp;O</option>
									
								
									
										
									
									
										<option value="3010" class="27" style="display: block;">3010 Programmabureau Klimaatonderzoek</option>
									
								
									
										
									
									
										<option value="2918" class="27" style="display: block;">2918 School for Earth and Environmental Sciences</option>
									
								
									
										
									
									
										<option value="2917" class="27" style="display: block;">2917 School for Life Sciences</option>
									
								
									
										
									
									
										<option value="2903" class="27" style="display: block;">2903 Secretar.van bestuur,directie en bureaus</option>
									
								
									
										
									
									
										<option value="2962" class="27" style="display: block;">2962 sectie Functionele Genoomanalyse</option>
									
								
									
										
									
									
										<option value="2948" class="27" style="display: block;">2948 sectie Gezondheid en Levenswetenschappen Zwolle</option>
									
								
									
										
									
									
										<option value="2944" class="27" style="display: block;">2944 sectie Gezondheidseconomie- en Doelmatigheidsond</option>
									
								
									
										
									
									
										<option value="2947" class="27" style="display: block;">2947 Sectie Infectieziekten</option>
									
								
									
										
									
									
										<option value="2961" class="27" style="display: block;">2961 sectie Integratieve Neurofysiologie</option>
									
								
									
										
									
									
										<option value="2949" class="27" style="display: block;">2949 sectie Methodologie en Toegepaste Biostatistiek</option>
									
								
									
										
									
									
										<option value="2963" class="27" style="display: block;">2963 sectie Moleculaire en Cellulaire Neurobiologie</option>
									
								
									
										
									
									
										<option value="2945" class="27" style="display: block;">2945 sectie Preventie en Volksgezondheid</option>
									
								
									
										
									
									
										<option value="2946" class="27" style="display: block;">2946 sectie Voeding en Gezondheid</option>
									
								
									
										
									
									
										<option value="2941" class="27" style="display: block;">2941 subafdeling Biologie en Samenleving</option>
									
								
									
										
									
									
										<option value="2971" class="27" style="display: block;">2971 subafdeling Dierecologie</option>
									
								
									
										
									
									
										<option value="2954" class="27" style="display: block;">2954 subafdeling Genetica</option>
									
								
									
										
									
									
										<option value="2991" class="27" style="display: block;">2991 subafdeling Geoarcheologie</option>
									
								
									
										
									
									
										<option value="2926" class="27" style="display: block;">2926 subafdeling Hydrologie en Geo-Milieuwetenschappe</option>
									
								
									
										
									
									
										<option value="2929" class="27" style="display: block;">2929 subafdeling Isotopengeochemie</option>
									
								
									
										
									
									
										<option value="2952" class="27" style="display: block;">2952 subafdeling Moleculaire Celfysiologie</option>
									
								
									
										
									
									
										<option value="2951" class="27" style="display: block;">2951 subafdeling Moleculaire Microbiologie</option>
									
								
									
										
									
									
										<option value="2953" class="27" style="display: block;">2953 subafdeling Structuurbiologie</option>
									
								
									
										
									
									
										<option value="2957" class="27" style="display: block;">2957 subafdeling Systeembioinformatica</option>
									
								
									
										
									
									
										<option value="2972" class="27" style="display: block;">2972 subafdeling Systeemecologie</option>
									
								
									
										
									
									
										<option value="2925" class="27" style="display: block;">2925 subafdeling Tektoniek</option>
									
								
									
										
									
									
										<option value="2942" class="27" style="display: block;">2942 subafdeling Wetenschapscommunicatie</option>
									
								
									
										
									
									
										<option value="3005" class="27" style="display: block;">3005 Universitair Proefdiercentrum</option>
									
								
									
										
									
									
										<option value="2934" class="27" style="display: block;">2934 Veldwerkmagazijn</option>
									
								
									
										
									
									
										<option value="3001" class="27" style="display: block;">3001 Vervallen (CIMO)</option>
									
								
									
										
									
									
										<option value="2973" class="27" style="display: block;">2973 Vervallen (EFP)</option>
									
								
									
										
									
									
										<option value="2964" class="27" style="display: block;">2964 Vervallen (OGN)</option>
									
								
									
										
									
									
										<option value="2407" class="18" style="display: block;">2407 Afdeling Bewegingsgedrag</option>
									
								
									
										
									
									
										<option value="2406" class="18" style="display: block;">2406 Afdeling Kinesi</option>
									
								
									
										
									
									
										<option value="24AA" class="18" style="display: block;">24AA Bijzonder hoogleraren Bewegingswetensch.</option>
									
								
									
										
									
									
										<option value="2402" class="18" style="display: block;">2402 Bureau</option>
									
								
									
										
									
									
										<option value="2408" class="18" style="display: block;">2408 EXPOSZ opleiden in sport en zorg</option>
									
								
									
										
									
									
										<option value="2401" class="18" style="display: block;">2401 Huisdrukkerij</option>
									
								
									
										
									
									
										<option value="2403" class="18" style="display: block;">2403 IFKB (onderzoek</option>
									
								
									
										
									
									
										<option value="2404" class="18" style="display: block;">2404 Onderwijsraad</option>
									
								
									
										
									
									
										<option value="2706" class="21" style="display: block;">2706 Accounting</option>
									
								
									
										
									
									
										<option value="2792" class="21" style="display: block;">2792 AMBER</option>
									
								
									
										
									
									
										<option value="2755" class="21" style="display: block;">2755 Bedrijfswetenschappen</option>
									
								
									
										
									
									
										<option value="27AA" class="21" style="display: block;">27AA Bijzonder hoogleraren FEWEB</option>
									
								
									
										
									
									
										<option value="2708" class="21" style="display: block;">2708 Doctoraal Accountancy</option>
									
								
									
										
									
									
										<option value="2750" class="21" style="display: block;">2750 Econometrie</option>
									
								
									
										
									
									
										<option value="2704" class="21" style="display: block;">2704 Economics</option>
									
								
									
										
									
									
										<option value="2701" class="21" style="display: block;">2701 Faculteitsbureau</option>
									
								
									
										
									
									
										<option value="2713" class="21" style="display: block;">2713 Faculteitsbureau - oud</option>
									
								
									
										
									
									
										<option value="2705" class="21" style="display: block;">2705 Finance</option>
									
								
									
										
									
									
										<option value="2702" class="21" style="display: block;">2702 I,L&amp;I</option>
									
								
									
										
									
									
										<option value="2703" class="21" style="display: block;">2703 Management en Organisatiekunde</option>
									
								
									
										
									
									
										<option value="2709" class="21" style="display: block;">2709 Marketing</option>
									
								
									
										
									
									
										<option value="2776" class="21" style="display: block;">2776 PGO ACBA</option>
									
								
									
										
									
									
										<option value="2760" class="21" style="display: block;">2760 PGO Accountancy</option>
									
								
									
										
									
									
										<option value="2765" class="21" style="display: block;">2765 PGO CMA/CFM</option>
									
								
									
										
									
									
										<option value="2770" class="21" style="display: block;">2770 PGO Compl&amp;IntMg</option>
									
								
									
										
									
									
										<option value="2761" class="21" style="display: block;">2761 PGO Controllers</option>
									
								
									
										
									
									
										<option value="2777" class="21" style="display: block;">2777 PGO ExecuTeamCo</option>
									
								
									
										
									
									
										<option value="2773" class="21" style="display: block;">2773 PGO Executive Coaching</option>
									
								
									
										
									
									
										<option value="2772" class="21" style="display: block;">2772 PGO ExecutivEdu</option>
									
								
									
										
									
									
										<option value="2775" class="21" style="display: block;">2775 PGO FinProBnkng</option>
									
								
									
										
									
									
										<option value="2771" class="21" style="display: block;">2771 PGO Health Care Management</option>
									
								
									
										
									
									
										<option value="2767" class="21" style="display: block;">2767 PGO InvestmtMgt</option>
									
								
									
										
									
									
										<option value="2762" class="21" style="display: block;">2762 PGO IT Audit</option>
									
								
									
										
									
									
										<option value="2763" class="21" style="display: block;">2763 PGO MCO</option>
									
								
									
										
									
									
										<option value="2774" class="21" style="display: block;">2774 PGO Risk Management for Financial Instit</option>
									
								
									
										
									
									
										<option value="2766" class="21" style="display: block;">2766 PGO Treasury Ma</option>
									
								
									
										
									
									
										<option value="2768" class="21" style="display: block;">2768 PGO Verandermgt</option>
									
								
									
										
									
									
										<option value="2769" class="21" style="display: block;">2769 PGO ZijlstraCnt</option>
									
								
									
										
									
									
										<option value="2707" class="21" style="display: block;">2707 Ruimtelijke Economie</option>
									
								
									
										
									
									
										<option value="2791" class="21" style="display: block;">2791 St. Onderzoek Wereldvoedselvoorziening</option>
									
								
									
										
									
									
										<option value="2819" class="26" style="display: block;">2819 Algemene Vorming</option>
									
								
									
										
									
									
										<option value="2870" class="26" style="display: block;">2870 Algemene Vorming</option>
									
								
									
										
									
									
										<option value="2842" class="26" style="display: block;">2842 Analyse</option>
									
								
									
										
									
									
										<option value="2865" class="26" style="display: block;">2865 Astro- &amp; Deeltjesfysica</option>
									
								
									
										
									
									
										<option value="2864" class="26" style="display: block;">2864 Atomen, Moleculen en Lasers</option>
									
								
									
										
									
									
										<option value="2802" class="26" style="display: block;">2802 Bedrijfsvoering FEW</option>
									
								
									
										
									
									
										<option value="28AA" class="26" style="display: block;">28AA Bijzonder hoogleraren Exacte Wetenschap.</option>
									
								
									
										
									
									
										<option value="2882" class="26" style="display: block;">2882 Biochem&amp;Mol.Bio</option>
									
								
									
										
									
									
										<option value="2869" class="26" style="display: block;">2869 Biofotonica en Medische Beeldverwerking</option>
									
								
									
										
									
									
										<option value="2861" class="26" style="display: block;">2861 Biofysica, Fotosynthese &amp; Energie</option>
									
								
									
										
									
									
										<option value="2826" class="26" style="display: block;">2826 Bioinformatica</option>
									
								
									
										
									
									
										<option value="2881" class="26" style="display: block;">2881 Biomoleculaire Analyse en Spectroscopie</option>
									
								
									
										
									
									
										<option value="2825" class="26" style="display: block;">2825 Business, Web en Media</option>
									
								
									
										
									
									
										<option value="2821" class="26" style="display: block;">2821 Computersystemen</option>
									
								
									
										
									
									
										<option value="2808" class="26" style="display: block;">2808 Elektronica Bèta-VU</option>
									
								
									
										
									
									
										<option value="2801" class="26" style="display: block;">2801 Faculteitsbureau</option>
									
								
									
										
									
									
										<option value="2883" class="26" style="display: block;">2883 Farmacochemie</option>
									
								
									
										
									
									
										<option value="2810" class="26" style="display: block;">2810 FEW Algemeen</option>
									
								
									
										
									
									
										<option value="2807" class="26" style="display: block;">2807 Fijnmechanische en Glastechnische Instrumentmake</option>
									
								
									
										
									
									
										<option value="2805" class="26" style="display: block;">2805 Finance &amp; Control</option>
									
								
									
										
									
									
										<option value="2867" class="26" style="display: block;">2867 Fotoconversie Materialen</option>
									
								
									
										
									
									
										<option value="2868" class="26" style="display: block;">2868 Fysica van Levende Systemen</option>
									
								
									
										
									
									
										<option value="2884" class="26" style="display: block;">2884 Fysische Chemie</option>
									
								
									
										
									
									
										<option value="2820" class="26" style="display: block;">2820 Informatica</option>
									
								
									
										
									
									
										<option value="2829" class="26" style="display: block;">2829 Informatica Onderwijs</option>
									
								
									
										
									
									
										<option value="2822" class="26" style="display: block;">2822 InformatieManagement &amp; Software Engineering</option>
									
								
									
										
									
									
										<option value="2809" class="26" style="display: block;">2809 IT-groep</option>
									
								
									
										
									
									
										<option value="2823" class="26" style="display: block;">2823 Kunstmatige Intelligentie</option>
									
								
									
										
									
									
										<option value="2806" class="26" style="display: block;">2806 Marketing &amp; Communicatie Bèta-VU</option>
									
								
									
										
									
									
										<option value="2841" class="26" style="display: block;">2841 Meetkunde</option>
									
								
									
										
									
									
										<option value="2887" class="26" style="display: block;">2887 Moleculaire en Computationele Toxicologie</option>
									
								
									
										
									
									
										<option value="2860" class="26" style="display: block;">2860 Natuur- &amp; Sterrenkunde</option>
									
								
									
										
									
									
										<option value="2863" class="26" style="display: block;">2863 Natuurkundige Informatica</option>
									
								
									
										
									
									
										<option value="2862" class="26" style="display: block;">2862 Natuurkundige Practica en Didaktiek</option>
									
								
									
										
									
									
										<option value="2804" class="26" style="display: block;">2804 Onderwijsbureau</option>
									
								
									
										
									
									
										<option value="2885" class="26" style="display: block;">2885 Organische Chemie</option>
									
								
									
										
									
									
										<option value="2803" class="26" style="display: block;">2803 Personeel &amp; Organisatie</option>
									
								
									
										
									
									
										<option value="2832" class="26" style="display: block;">2832 Projecten Bestuur</option>
									
								
									
										
									
									
										<option value="2880" class="26" style="display: block;">2880 Scheikunde en Farmaceutische Wetenschappen </option>
									
								
									
										
									
									
										<option value="2888" class="26" style="display: block;">2888 Science Business &amp; Innovation</option>
									
								
									
										
									
									
										<option value="2889" class="26" style="display: block;">2889 SFW Onderwijs</option>
									
								
									
										
									
									
										<option value="2843" class="26" style="display: block;">2843 Stochastiek</option>
									
								
									
										
									
									
										<option value="2886" class="26" style="display: block;">2886 Theoretische Chemie</option>
									
								
									
										
									
									
										<option value="2824" class="26" style="display: block;">2824 Theoretische Informatica</option>
									
								
									
										
									
									
										<option value="2866" class="26" style="display: block;">2866 Theoretische Natuurkunde</option>
									
								
									
										
									
									
										<option value="2840" class="26" style="display: block;">2840 Wiskunde</option>
									
								
									
										
									
									
										<option value="2849" class="26" style="display: block;">2849 Wiskunde Onderwijs</option>
									
								
									
										
									
									
										<option value="1010" class="8" style="display: block;">1010 Bijbelwetensch</option>
									
								
									
										
									
									
										<option value="1070" class="8" style="display: block;">1070 Bijbelwetensch</option>
									
								
									
										
									
									
										<option value="10AA" class="8" style="display: block;">10AA Bijzonder hoogleraren Godgeleerdheid</option>
									
								
									
										
									
									
										<option value="1002" class="8" style="display: block;">1002 Bureau der Fac</option>
									
								
									
										
									
									
										<option value="1099" class="8" style="display: block;">1099 Docenten Joint Bachelor (PThU)</option>
									
								
									
										
									
									
										<option value="1030" class="8" style="display: block;">1030 Dogmat &amp; Oecum</option>
									
								
									
										
									
									
										<option value="1005" class="8" style="display: block;">1005 Finance&amp;Control</option>
									
								
									
										
									
									
										<option value="1050" class="8" style="display: block;">1050 GF &amp; VGW</option>
									
								
									
										
									
									
										<option value="1020" class="8" style="display: block;">1020 Islamit Theol</option>
									
								
									
										
									
									
										<option value="1040" class="8" style="display: block;">1040 Kerkgeschiedenis</option>
									
								
									
										
									
									
										<option value="1007" class="8" style="display: block;">1007 Marketing&amp;Comm</option>
									
								
									
										
									
									
										<option value="1003" class="8" style="display: block;">1003 Onderwijsbureau</option>
									
								
									
										
									
									
										<option value="1004" class="8" style="display: block;">1004 Onderzoeksbur.</option>
									
								
									
										
									
									
										<option value="1006" class="8" style="display: block;">1006 P&amp;O</option>
									
								
									
										
									
									
										<option value="1060" class="8" style="display: block;">1060 Praxis</option>
									
								
									
										
									
									
										<option value="1080" class="8" style="display: block;">1080 Seminaries</option>
									
								
									
										
									
									
										<option value="1001" class="8" style="display: block;">1001 Wetenschappelijk personeel Godgeleerdh.</option>
									
								
									
										
									
									
										<option value="1306" class="10" style="display: block;">1306 Archeologie en Prehistorie</option>
									
								
									
										
									
									
										<option value="1301" class="10" style="display: block;">1301 Bestuur en Raad</option>
									
								
									
										
									
									
										<option value="13AA" class="10" style="display: block;">13AA Bijzonder hoogleraren Letteren</option>
									
								
									
										
									
									
										<option value="1308" class="10" style="display: block;">1308 Engelse Taal en Cultuur</option>
									
								
									
										
									
									
										<option value="1302" class="10" style="display: block;">1302 Faculteitsbureau</option>
									
								
									
										
									
									
										<option value="1335" class="10" style="display: block;">1335 Geschiedenis</option>
									
								
									
										
									
									
										<option value="1310" class="10" style="display: block;">1310 Geschiedenis</option>
									
								
									
										
									
									
										<option value="1351" class="10" style="display: block;">1351 Hendrik Brunsting Stichting</option>
									
								
									
										
									
									
										<option value="1334" class="10" style="display: block;">1334 Kunst en cultuur</option>
									
								
									
										
									
									
										<option value="1336" class="10" style="display: block;">1336 Literatuur en Cultuur</option>
									
								
									
										
									
									
										<option value="1331" class="10" style="display: block;">1331 Moderne talen en culturen</option>
									
								
									
										
									
									
										<option value="1332" class="10" style="display: block;">1332 Oudheid</option>
									
								
									
										
									
									
										<option value="1333" class="10" style="display: block;">1333 Taal en communicatie</option>
									
								
									
										
									
									
										<option value="1352" class="10" style="display: block;">1352 Taalcentrum VU</option>
									
								
									
										
									
									
										<option value="1317" class="10" style="display: block;">1317 Toegepaste Taalwetenschap (TTW)</option>
									
								
									
										
									
									
										<option value="1323" class="10" style="display: block;">1323 VASVU</option>
									
								
									
										
									
									
										<option value="1322" class="10" style="display: block;">1322 VU-NT2 (Nederlands als tweede taal)</option>
									
								
									
										
									
									
										<option value="2543" class="19" style="display: block;">2543 Afd. Arbeids-&amp; Organisatiepsychologie</option>
									
								
									
										
									
									
										<option value="2542" class="19" style="display: block;">2542 Afd. Biologisch</option>
									
								
									
										
									
									
										<option value="2548" class="19" style="display: block;">2548 Afd. Cognit Psy</option>
									
								
									
										
									
									
										<option value="2544" class="19" style="display: block;">2544 Afd. Klin. Psy.</option>
									
								
									
										
									
									
										<option value="2549" class="19" style="display: block;">2549 Afd. Kl.Neu.Psy</option>
									
								
									
										
									
									
										<option value="2539" class="19" style="display: block;">2539 Afd. Methoden</option>
									
								
									
										
									
									
										<option value="2559" class="19" style="display: block;">2559 Afd Ond.NeuroWs</option>
									
								
									
										
									
									
										<option value="2547" class="19" style="display: block;">2547 Afd. Ontw. Psyc</option>
									
								
									
										
									
									
										<option value="2553" class="19" style="display: block;">2553 Afd. Ontw.ped.</option>
									
								
									
										
									
									
										<option value="2541" class="19" style="display: block;">2541 Afd. Soc&amp;OrgPsy</option>
									
								
									
										
									
									
										<option value="2545" class="19" style="display: block;">2545 Afd. Theor. Psy</option>
									
								
									
										
									
									
										<option value="2555" class="19" style="display: block;">2555 Afdeling Onderwijspedagogiek</option>
									
								
									
										
									
									
										<option value="2546" class="19" style="display: block;">2546 Afdeling Sociale Psychologie</option>
									
								
									
										
									
									
										<option value="2552" class="19" style="display: block;">2552 Afdeling Theoretische &amp; Historische Pedagogiek</option>
									
								
									
										
									
									
										<option value="2531" class="19" style="display: block;">2531 Bureau Faculteit</option>
									
								
									
										
									
									
										<option value="2530" class="19" style="display: block;">2530 Faculteit FPP A</option>
									
								
									
										
									
									
										<option value="2532" class="19" style="display: block;">2532 Inf,Techn&amp;Media</option>
									
								
									
										
									
									
										<option value="2551" class="19" style="display: block;">2551 Learn!</option>
									
								
									
										
									
									
										<option value="2556" class="19" style="display: block;">2556 OCVU</option>
									
								
									
										
									
									
										<option value="2560" class="19" style="display: block;">2560 Onderwijsbureau</option>
									
								
									
										
									
									
										<option value="2554" class="19" style="display: block;">2554 Onderwijswetenschappen &amp; Theoretische Pedagogiek</option>
									
								
									
										
									
									
										<option value="2538" class="19" style="display: block;">2538 Sec.Cogn_neurps</option>
									
								
									
										
									
									
										<option value="2537" class="19" style="display: block;">2537 Secretariaat Ontwikkelingspsychologie &amp; Pedagogi</option>
									
								
									
										
									
									
										<option value="25AA" class="19" style="display: block;">25AA Verv (Bijz.hgl)</option>
									
								
									
										
									
									
										<option value="1490" class="11" style="display: block;">1490 Afdeling notarieel en fiscaal recht</option>
									
								
									
										
									
									
										<option value="1460" class="11" style="display: block;">1460 Afdeling sociaal recht</option>
									
								
									
										
									
									
										<option value="14AA" class="11" style="display: block;">14AA Bijzonder hoogleraren Rechtsgeleerdheid</option>
									
								
									
										
									
									
										<option value="1410" class="11" style="display: block;">1410 Bureau van de faculteit</option>
									
								
									
										
									
									
										<option value="1402" class="11" style="display: block;">1402 Bureau van de faculteit</option>
									
								
									
										
									
									
										<option value="1401" class="11" style="display: block;">1401 Faculteitsraad en bestuur</option>
									
								
									
										
									
									
										<option value="1420" class="11" style="display: block;">1420 IT en recht</option>
									
								
									
										
									
									
										<option value="1495" class="11" style="display: block;">1495 NSCR</option>
									
								
									
										
									
									
										<option value="1450" class="11" style="display: block;">1450 Privaatrecht</option>
									
								
									
										
									
									
										<option value="1430" class="11" style="display: block;">1430 Rechtstheorie en rechtsgeschiedenis</option>
									
								
									
										
									
									
										<option value="1470" class="11" style="display: block;">1470 Staats- en bestuursrecht</option>
									
								
									
										
									
									
										<option value="1480" class="11" style="display: block;">1480 Strafrecht en Criminologie</option>
									
								
									
										
									
									
										<option value="1440" class="11" style="display: block;">1440 Transnational Legal Studies</option>
									
								
									
										
									
									
										<option value="2609" class="20" style="display: block;">2609 Afd. Cultuur, Organisatie en Management</option>
									
								
									
										
									
									
										<option value="2607" class="20" style="display: block;">2607 Afd. Sociale en Culturele Antropologie</option>
									
								
									
										
									
									
										<option value="2652" class="20" style="display: block;">2652 Afdeling Bestuurswetenschap en Politicologie</option>
									
								
									
										
									
									
										<option value="2605" class="20" style="display: block;">2605 Afdeling Bestuurswetenschappen</option>
									
								
									
										
									
									
										<option value="2656" class="20" style="display: block;">2656 Afdeling Communicatiewetenschap</option>
									
								
									
										
									
									
										<option value="2606" class="20" style="display: block;">2606 Afdeling Methoden &amp; Technieken</option>
									
								
									
										
									
									
										<option value="2658" class="20" style="display: block;">2658 Afdeling Organisatiewetenschap</option>
									
								
									
										
									
									
										<option value="2654" class="20" style="display: block;">2654 Afdeling Organisatiewetenschappen</option>
									
								
									
										
									
									
										<option value="2655" class="20" style="display: block;">2655 Afdeling Politicologie</option>
									
								
									
										
									
									
										<option value="2604" class="20" style="display: block;">2604 Afdeling Sociologie</option>
									
								
									
										
									
									
										<option value="2653" class="20" style="display: block;">2653 Afdeling Sociologie</option>
									
								
									
										
									
									
										<option value="26AA" class="20" style="display: block;">26AA Bijzonder hoogleraren Fac.Soc-Cult.Wet.</option>
									
								
									
										
									
									
										<option value="2657" class="20" style="display: block;">2657 CAMeRA</option>
									
								
									
										
									
									
										<option value="2612" class="20" style="display: block;">2612 Centre of Comparative Social Studies</option>
									
								
									
										
									
									
										<option value="2621" class="20" style="display: block;">2621 Comm PRV</option>
									
								
									
										
									
									
										<option value="2601" class="20" style="display: block;">2601 Directie</option>
									
								
									
										
									
									
										<option value="2610" class="20" style="display: block;">2610 Faculteitsbestuur FSW</option>
									
								
									
										
									
									
										<option value="2644" class="20" style="display: block;">2644 FIL</option>
									
								
									
										
									
									
										<option value="2623" class="20" style="display: block;">2623 Fin &amp; Contr</option>
									
								
									
										
									
									
										<option value="2603" class="20" style="display: block;">2603 ICT</option>
									
								
									
										
									
									
										<option value="2622" class="20" style="display: block;">2622 Internat Office</option>
									
								
									
										
									
									
										<option value="2602" class="20" style="display: block;">2602 Onderwijsbureau</option>
									
								
									
										
									
									
										<option value="2620" class="20" style="display: block;">2620 Onderz bureau</option>
									
								
									
										
									
									
										<option value="2624" class="20" style="display: block;">2624 P&amp;O</option>
									
								
									
										
									
									
										<option value="2611" class="20" style="display: block;">2611 Vervallen (SCW AIO's)</option>
									
								
									
										
									
									
										<option value="11AA" class="9" style="display: block;">11AA Bijzonder hoogleraren Wijsbegeerte</option>
									
								
									
										
									
									
										<option value="1102" class="9" style="display: block;">1102 Bureau der faculteit</option>
									
								
									
										
									
									
										<option value="1105" class="9" style="display: block;">1105 Finance &amp; Control</option>
									
								
									
										
									
									
										<option value="1130" class="9" style="display: block;">1130 Historische filosofie</option>
									
								
									
										
									
									
										<option value="1107" class="9" style="display: block;">1107 Marketing&amp;Comm</option>
									
								
									
										
									
									
										<option value="1103" class="9" style="display: block;">1103 Onderwijsbureau</option>
									
								
									
										
									
									
										<option value="1104" class="9" style="display: block;">1104 Onderzoeksbureau</option>
									
								
									
										
									
									
										<option value="1106" class="9" style="display: block;">1106 Personeel &amp; Organisatie</option>
									
								
									
										
									
									
										<option value="1110" class="9" style="display: block;">1110 Praktische filosofie</option>
									
								
									
										
									
									
										<option value="1120" class="9" style="display: block;">1120 Theoretische filosofie</option>
									
								
									
										
									
									
										<option value="1101" class="9" style="display: block;">1101 Wetenschappelijk personeel Wijsbegeerte</option>
									
								
									
										
									
									
										<option value="7220" class="2086227" style="display: block;">7220 Audit</option>
									
								
									
										
									
									
										<option value="7207" class="2086227" style="display: block;">7207 Corporate Finance</option>
									
								
									
										
									
									
										<option value="7210" class="2086227" style="display: block;">7210 Directie</option>
									
								
									
										
									
									
										<option value="7204" class="2086227" style="display: block;">7204 Financiële Administratie Diensten</option>
									
								
									
										
									
									
										<option value="7203" class="2086227" style="display: block;">7203 FSC</option>
									
								
									
										
									
									
										<option value="7206" class="2086227" style="display: block;">7206 Functioneel Beheer ERP-systemen</option>
									
								
									
										
									
									
										<option value="7208" class="2086227" style="display: block;">7208 Inkoopmanagement</option>
									
								
									
										
									
									
										<option value="7201" class="2086227" style="display: block;">7201 P&amp;C</option>
									
								
									
										
									
									
										<option value="7202" class="2086227" style="display: block;">7202 Staf en secretariaat</option>
									
								
									
										
									
									
										<option value="0522" class="828426" style="display: block;">0522 Homij</option>
									
								
									
										
									
									
										<option value="7180" class="2086226" style="display: block;">7180 Arbo &amp; Milieu</option>
									
								
									
										
									
									
										<option value="7160" class="2086226" style="display: block;">7160 Beleid en Organisatieontwikkeling</option>
									
								
									
										
									
									
										<option value="7106" class="2086226" style="display: block;">7106 Beleid en organisatieontwikkeling</option>
									
								
									
										
									
									
										<option value="7110" class="2086226" style="display: block;">7110 Bureau Projecten</option>
									
								
									
										
									
									
										<option value="7150" class="2086226" style="display: block;">7150 Centrum voor loopbaan en ontwikkeling</option>
									
								
									
										
									
									
										<option value="7101" class="2086226" style="display: block;">7101 Directie</option>
									
								
									
										
									
									
										<option value="7120" class="2086226" style="display: block;">7120 Directie en Staf</option>
									
								
									
										
									
									
										<option value="7140" class="2086226" style="display: block;">7140 Expertisecentrum</option>
									
								
									
										
									
									
										<option value="7103" class="2086226" style="display: block;">7103 Juridische en Beleidszaken</option>
									
								
									
										
									
									
										<option value="7105" class="2086226" style="display: block;">7105 Loopbaancentrum</option>
									
								
									
										
									
									
										<option value="7102" class="2086226" style="display: block;">7102 Personeel en Organisatie</option>
									
								
									
										
									
									
										<option value="7130" class="2086226" style="display: block;">7130 Personeelsadvies en -beheer</option>
									
								
									
										
									
									
										<option value="7104" class="2086226" style="display: block;">7104 Personeelsvoorzieningen</option>
									
								
									
										
									
									
										<option value="7170" class="2086226" style="display: block;">7170 Secretariaat</option>
									
								
									
										
									
									
										<option value="6005" class="42" style="display: block;">6005 Afdeling Adviesdiensten (vervallen)</option>
									
								
									
										
									
									
										<option value="6007" class="42" style="display: block;">6007 Afdeling Exploitatiecentrum (vervallen)</option>
									
								
									
										
									
									
										<option value="6008" class="42" style="display: block;">6008 Afdeling Informatiesystemen (vervallen)</option>
									
								
									
										
									
									
										<option value="6006" class="42" style="display: block;">6006 Afdeling Netwerkinfrastructuur (vervallen)</option>
									
								
									
										
									
									
										<option value="6004" class="42" style="display: block;">6004 Afdeling Servicedesk (vervallen)</option>
									
								
									
										
									
									
										<option value="6011" class="42" style="display: block;">6011 Directie en staf</option>
									
								
									
										
									
									
										<option value="6015" class="42" style="display: block;">6015 Funct Beheer</option>
									
								
									
										
									
									
										<option value="6017" class="42" style="display: block;">6017 Functioneel Beheer ERP-systemen</option>
									
								
									
										
									
									
										<option value="6016" class="42" style="display: block;">6016 Programma's</option>
									
								
									
										
									
									
										<option value="6014" class="42" style="display: block;">6014 Proj &amp; Innov</option>
									
								
									
										
									
									
										<option value="6012" class="42" style="display: block;">6012 Service &amp; Expl</option>
									
								
									
										
									
									
										<option value="6013" class="42" style="display: block;">6013 Servicecentrum</option>
									
								
									
										
									
									
										<option value="6099" class="42" style="display: block;">6099 UC-IT Algemeen (vervallen)</option>
									
								
									
										
									
									
										<option value="0525" class="7861579" style="display: block;">0525 Mega Elektra</option>
									
								
									
										
									
									
										<option value="1495" class="10034888" style="display: block;">1495 NSCR</option>
									
								
									
										
									
									
										<option value="0502" class="128886" style="display: block;">0502 Olifantje 't</option>
									
								
									
										
									
									
										<option value="5301" class="34" style="display: block;">5301 Algemeen Bureau</option>
									
								
									
										
									
									
										<option value="5303" class="34" style="display: block;">5303 Centrum voor Studie en Loopbaan</option>
									
								
									
										
									
									
										<option value="5305" class="34" style="display: block;">5305 Cultuurcentrum VU Griffioen</option>
									
								
									
										
									
									
										<option value="5306" class="34" style="display: block;">5306 International Office</option>
									
								
									
										
									
									
										<option value="5308" class="34" style="display: block;">5308 Onderw&amp;Kwalit</option>
									
								
									
										
									
									
										<option value="5304" class="34" style="display: block;">5304 Sportcentrum VU</option>
									
								
									
										
									
									
										<option value="5302" class="34" style="display: block;">5302 Studentenadministratie en Studentenbalie</option>
									
								
									
										
									
									
										<option value="0520" class="764852" style="display: block;">0520 Technology Transfer Office VU &amp; VUmc (TTO)</option>
									
								
									
										
									
									
										<option value="4511" class="30" style="display: block;">4511 Bijzondere Collecties eenheid</option>
									
								
									
										
									
									
										<option value="4519" class="30" style="display: block;">4519 Bureau AVC</option>
									
								
									
										
									
									
										<option value="4512" class="30" style="display: block;">4512 Digitale Diensten</option>
									
								
									
										
									
									
										<option value="4501" class="30" style="display: block;">4501 Directie &amp; Staf</option>
									
								
									
										
									
									
										<option value="4530" class="30" style="display: block;">4530 Divisie Bedrijfsvoering</option>
									
								
									
										
									
									
										<option value="4520" class="30" style="display: block;">4520 Divisie Relatiebeheer</option>
									
								
									
										
									
									
										<option value="4509" class="30" style="display: block;">4509 Documentverw</option>
									
								
									
										
									
									
										<option value="4513" class="30" style="display: block;">4513 Elektronische Bronnen</option>
									
								
									
										
									
									
										<option value="4504" class="30" style="display: block;">4504 FPC</option>
									
								
									
										
									
									
										<option value="4503" class="30" style="display: block;">4503 HDC</option>
									
								
									
										
									
									
										<option value="4505" class="30" style="display: block;">4505 Huisv &amp; Mat Zkn</option>
									
								
									
										
									
									
										<option value="4508" class="30" style="display: block;">4508 ICT</option>
									
								
									
										
									
									
										<option value="4510" class="30" style="display: block;">4510 Informatie-/collectiemanagement</option>
									
								
									
										
									
									
										<option value="4522" class="30" style="display: block;">4522 Mediaproducties</option>
									
								
									
										
									
									
										<option value="4502" class="30" style="display: block;">4502 Medische Bibliotheek</option>
									
								
									
										
									
									
										<option value="4540" class="30" style="display: block;">4540 Onderwijsadvisering</option>
									
								
									
										
									
									
										<option value="4507" class="30" style="display: block;">4507 Publieksdnstn</option>
									
								
									
										
									
									
										<option value="4506" class="30" style="display: block;">4506 Saneringsteam</option>
									
								
									
										
									
									
										<option value="4523" class="30" style="display: block;">4523 Technische service</option>
									
								
									
										
									
									
										<option value="4524" class="30" style="display: block;">4524 Verhuurservice</option>
									
								
									
										
									
									
										<option value="4521" class="30" style="display: block;">4521 VUMediaXperience</option>
									
								
									
										
									
									
										<option value="9114" class="14937803" style="display: block;">9114 Alumni</option>
									
								
									
										
									
									
										<option value="9111" class="14937803" style="display: block;">9111 Leiding &amp; Secretariaat</option>
									
								
									
										
									
									
										<option value="9113" class="14937803" style="display: block;">9113 Marketing &amp; Communicatie</option>
									
								
									
										
									
									
										<option value="9112" class="14937803" style="display: block;">9112 Programmering</option>
									
								
									
										
									
									
										<option value="9101" class="14937803" style="display: block;">9101 Raad van Toezicht</option>
									
								
									
										
									
									
										<option value="0521" class="828421" style="display: block;">0521 Zuidas Academie</option>
									
								
							</select>
						</td>
					</tr>
					<script type="text/javascript">
				        var aryKostenplaatsen = new Array();
						
			            
			                aryKostenplaatsen[0] = new Array("5702", "39", "Accountantsdienst- sector ziekenhuis");
				            
			            
			                aryKostenplaatsen[1] = new Array("5701", "39", "Leiding en algemeen");
				            
			            
			                aryKostenplaatsen[2] = new Array("1690", "13", "ACTA BV\'s");
				            
			            
			                aryKostenplaatsen[3] = new Array("1620", "13", "Bedrijfsvoering/Zorg");
				            
			            
			                aryKostenplaatsen[4] = new Array("1652", "13", "CEP");
				            
			            
			                aryKostenplaatsen[5] = new Array("1671", "13", "Conserverende en Preventieve tandheelk");
				            
			            
			                aryKostenplaatsen[6] = new Array("1611", "13", "Fac. Bureau");
				            
			            
			                aryKostenplaatsen[7] = new Array("1614", "13", "Facilitaire Dienst");
				            
			            
			                aryKostenplaatsen[8] = new Array("1610", "13", "Faculteit algemeen");
				            
			            
			                aryKostenplaatsen[9] = new Array("1613", "13", "F&C");
				            
			            
			                aryKostenplaatsen[10] = new Array("1672", "13", "Functieleer en Restauratieve tandheelk");
				            
			            
			                aryKostenplaatsen[11] = new Array("1608", "13", "Hogeschool Inholland-MZK");
				            
			            
			                aryKostenplaatsen[12] = new Array("1612", "13", "HRM");
				            
			            
			                aryKostenplaatsen[13] = new Array("1616", "13", "ICT");
				            
			            
			                aryKostenplaatsen[14] = new Array("1617", "13", "Marketing & Communicatie");
				            
			            
			                aryKostenplaatsen[15] = new Array("1628", "13", "Medewerkerspraktijk");
				            
			            
			                aryKostenplaatsen[16] = new Array("1670", "13", "Mondgezondh");
				            
			            
			                aryKostenplaatsen[17] = new Array("1661", "13", "Mondziekten en Kaakchirurgie");
				            
			            
			                aryKostenplaatsen[18] = new Array("1630", "13", "Onderwijsinst");
				            
			            
			                aryKostenplaatsen[19] = new Array("1649", "13", "Onderwijsprakti");
				            
			            
			                aryKostenplaatsen[20] = new Array("1640", "13", "Onderzoeksinst");
				            
			            
			                aryKostenplaatsen[21] = new Array("1651", "13", "Orale functieleer");
				            
			            
			                aryKostenplaatsen[22] = new Array("1663", "13", "Orthodontie & sociale tandheelkunde");
				            
			            
			                aryKostenplaatsen[23] = new Array("1654", "13", "Parodontologie");
				            
			            
			                aryKostenplaatsen[24] = new Array("1631", "13", "Postac.Onderwij");
				            
			            
			                aryKostenplaatsen[25] = new Array("1609", "13", "Stichting voor Bijzondere Tandheelkunde");
				            
			            
			                aryKostenplaatsen[26] = new Array("1655", "13", "Thk basiswetenschappen");
				            
			            
			                aryKostenplaatsen[27] = new Array("16AA", "13", "Verv (Bijz.hgl)");
				            
			            
			                aryKostenplaatsen[28] = new Array("1633", "13", "Vervallen (Alg. ziekteleer en inw. gen.)");
				            
			            
			                aryKostenplaatsen[29] = new Array("1606", "13", "Vervallen (Algemene Voorzieningen)");
				            
			            
			                aryKostenplaatsen[30] = new Array("1624", "13", "Vervallen (Anatomieea)");
				            
			            
			                aryKostenplaatsen[31] = new Array("1607", "13", "Vervallen (Audiovisueel Centrum)");
				            
			            
			                aryKostenplaatsen[32] = new Array("1601", "13", "Vervallen (Directie en bestuur)");
				            
			            
			                aryKostenplaatsen[33] = new Array("1605", "13", "Vervallen (Facilitaire dienst)");
				            
			            
			                aryKostenplaatsen[34] = new Array("1603", "13", "Vervallen (Financiele en econ. zaken)");
				            
			            
			                aryKostenplaatsen[35] = new Array("1604", "13", "Vervallen (Griffie)");
				            
			            
			                aryKostenplaatsen[36] = new Array("1619", "13", "Vervallen (Klinische/tandh. keuze ond.)");
				            
			            
			                aryKostenplaatsen[37] = new Array("1635", "13", "Vervallen (Orale celbiologie)");
				            
			            
			                aryKostenplaatsen[38] = new Array("1629", "13", "Vervallen (Orale microbiologie)");
				            
			            
			                aryKostenplaatsen[39] = new Array("1632", "13", "Vervallen (Orale pathologie)");
				            
			            
			                aryKostenplaatsen[40] = new Array("1634", "13", "Vervallen (Orthodontie)");
				            
			            
			                aryKostenplaatsen[41] = new Array("1615", "13", "Vervallen (Patientenadministratie)");
				            
			            
			                aryKostenplaatsen[42] = new Array("1626", "13", "Vervallen (Pedodontologie)");
				            
			            
			                aryKostenplaatsen[43] = new Array("1602", "13", "Vervallen (Personeel en organisatie)");
				            
			            
			                aryKostenplaatsen[44] = new Array("1622", "13", "Vervallen (Prothetische tandheelkunde)");
				            
			            
			                aryKostenplaatsen[45] = new Array("1636", "13", "Vervallen (Radiologie)");
				            
			            
			                aryKostenplaatsen[46] = new Array("1637", "13", "Vervallen (Sociale tandh./Voorlicht.)");
				            
			            
			                aryKostenplaatsen[47] = new Array("1618", "13", "Vervallen(Polikliniek/centr. indicatie)");
				            
			            
			                aryKostenplaatsen[48] = new Array("1627", "13", "Vervallen(Tandheelkundige materiaalwet.)");
				            
			            
			                aryKostenplaatsen[49] = new Array("1621", "13", "Vest. Den Haag");
				            
			            
			                aryKostenplaatsen[50] = new Array("1623", "13", "Vestiging Almer");
				            
			            
			                aryKostenplaatsen[51] = new Array("1625", "13", "Vestiging Hoorn");
				            
			            
			                aryKostenplaatsen[52] = new Array("7307", "2086228", "Archiefbureau");
				            
			            
			                aryKostenplaatsen[53] = new Array("7302", "2086228", "Bedrijfsbureau");
				            
			            
			                aryKostenplaatsen[54] = new Array("7305", "2086228", "Cash Management en Assurantiën");
				            
			            
			                aryKostenplaatsen[55] = new Array("7303", "2086228", "Concern Boekhouding en Administraties");
				            
			            
			                aryKostenplaatsen[56] = new Array("7301", "2086228", "Directie");
				            
			            
			                aryKostenplaatsen[57] = new Array("7304", "2086228", "Financiële Administratie Diensten");
				            
			            
			                aryKostenplaatsen[58] = new Array("7306", "2086228", "Functioneel Beheer ERP-systemen");
				            
			            
			                aryKostenplaatsen[59] = new Array("6101", "43", "Audiovisueel Centrum");
				            
			            
			                aryKostenplaatsen[60] = new Array("7050", "47", "BBZ");
				            
			            
			                aryKostenplaatsen[61] = new Array("7022", "47", "BPR");
				            
			            
			                aryKostenplaatsen[62] = new Array("7020", "47", "PCB algemeen");
				            
			            
			                aryKostenplaatsen[63] = new Array("7021", "47", "Reorganisatieteam");
				            
			            
			                aryKostenplaatsen[64] = new Array("7012", "47", "Samenwerking VU-UvA");
				            
			            
			                aryKostenplaatsen[65] = new Array("7023", "47", "Strategisch Programmamanagement");
				            
			            
			                aryKostenplaatsen[66] = new Array("7011", "47", "Toezeggingen CvB");
				            
			            
			                aryKostenplaatsen[67] = new Array("7080", "47", "Vastgoed");
				            
			            
			                aryKostenplaatsen[68] = new Array("7030", "47", "Vervallen (Archieven)");
				            
			            
			                aryKostenplaatsen[69] = new Array("7040", "47", "Vervallen (Bestuursstaf algemeen)");
				            
			            
			                aryKostenplaatsen[70] = new Array("7090", "47", "Vervallen (Communicatie)");
				            
			            
			                aryKostenplaatsen[71] = new Array("7001", "47", "Vervallen (CvB incl. secrataris)");
				            
			            
			                aryKostenplaatsen[72] = new Array("7010", "47", "Vervallen (FAB)");
				            
			            
			                aryKostenplaatsen[73] = new Array("7060", "47", "Vervallen (Financien)");
				            
			            
			                aryKostenplaatsen[74] = new Array("7070", "47", "Vervallen (P&O)");
				            
			            
			                aryKostenplaatsen[75] = new Array("4201", "29", "Blaise Pascal Instituut");
				            
			            
			                aryKostenplaatsen[76] = new Array("0526", "7944433", "Brothers Horeca Groep");
				            
			            
			                aryKostenplaatsen[77] = new Array("0901", "2", "Bureau van de Vereniging");
				            
			            
			                aryKostenplaatsen[78] = new Array("5201", "33", "CIS");
				            
			            
			                aryKostenplaatsen[79] = new Array("5030", "712560", "Adviseurs CvB");
				            
			            
			                aryKostenplaatsen[80] = new Array("5020", "712560", "Bureau Bestuuszaken - secretariaat");
				            
			            
			                aryKostenplaatsen[81] = new Array("5010", "712560", "College van Bestuur");
				            
			            
			                aryKostenplaatsen[82] = new Array("5040", "712560", "Raad van Toezicht");
				            
			            
			                aryKostenplaatsen[83] = new Array("5502", "36", "Ad Valvas");
				            
			            
			                aryKostenplaatsen[84] = new Array("5509", "36", "Afd. Strategie & Beleid");
				            
			            
			                aryKostenplaatsen[85] = new Array("5517", "36", "Afdeling Planning en Support");
				            
			            
			                aryKostenplaatsen[86] = new Array("5518", "36", "Afdeling Webproject");
				            
			            
			                aryKostenplaatsen[87] = new Array("5512", "36", "Alumnibureau");
				            
			            
			                aryKostenplaatsen[88] = new Array("5560", "36", "Alumnirelaties");
				            
			            
			                aryKostenplaatsen[89] = new Array("5561", "36", "Alumnirelaties Cluster Faculteiten");
				            
			            
			                aryKostenplaatsen[90] = new Array("5533", "36", "Art Direction");
				            
			            
			                aryKostenplaatsen[91] = new Array("5501", "36", "Bedrbureau");
				            
			            
			                aryKostenplaatsen[92] = new Array("5551", "36", "Cluster 1 FEW-FALW");
				            
			            
			                aryKostenplaatsen[93] = new Array("5552", "36", "Cluster 2 GGL-WBG-LETT-FPP-FBW");
				            
			            
			                aryKostenplaatsen[94] = new Array("5553", "36", "Cluster 3 FEWEB-FSW-Rechten");
				            
			            
			                aryKostenplaatsen[95] = new Array("5554", "36", "Cluster 4 Diensten");
				            
			            
			                aryKostenplaatsen[96] = new Array("5521", "36", "Comm. & Marketing Expertise Services");
				            
			            
			                aryKostenplaatsen[97] = new Array("5530", "36", "Congres en Mediacenter");
				            
			            
			                aryKostenplaatsen[98] = new Array("5523", "36", "Externe Communicatie");
				            
			            
			                aryKostenplaatsen[99] = new Array("5516", "36", "(Informatie-)/Datamanagement");
				            
			            
			                aryKostenplaatsen[100] = new Array("5515", "36", "Interne Communicatie");
				            
			            
			                aryKostenplaatsen[101] = new Array("5522", "36", "Interne Communicatie");
				            
			            
			                aryKostenplaatsen[102] = new Array("5542", "36", "Ledenorganisatie");
				            
			            
			                aryKostenplaatsen[103] = new Array("5540", "36", "Maatschappelijke profilering");
				            
			            
			                aryKostenplaatsen[104] = new Array("5524", "36", "Marketing");
				            
			            
			                aryKostenplaatsen[105] = new Array("5514", "36", "Merk- en Reputatiemanagement");
				            
			            
			                aryKostenplaatsen[106] = new Array("5504", "36", "Pro & Mediarela");
				            
			            
			                aryKostenplaatsen[107] = new Array("5541", "36", "Programmering");
				            
			            
			                aryKostenplaatsen[108] = new Array("5513", "36", "Projectmanagement en traffic");
				            
			            
			                aryKostenplaatsen[109] = new Array("5531", "36", "Staf CMc");
				            
			            
			                aryKostenplaatsen[110] = new Array("5520", "36", "Stategie & Beleid");
				            
			            
			                aryKostenplaatsen[111] = new Array("5510", "36", "Studentenwerv");
				            
			            
			                aryKostenplaatsen[112] = new Array("5534", "36", "Tools Management");
				            
			            
			                aryKostenplaatsen[113] = new Array("5532", "36", "Traffic");
				            
			            
			                aryKostenplaatsen[114] = new Array("5511", "36", "Vormgeving & Fotografie");
				            
			            
			                aryKostenplaatsen[115] = new Array("5506", "36", "Webredactie");
				            
			            
			                aryKostenplaatsen[116] = new Array("6203", "44", "Bedrijfsbureau");
				            
			            
			                aryKostenplaatsen[117] = new Array("6202", "44", "Gezondheid en Welzijn");
				            
			            
			                aryKostenplaatsen[118] = new Array("6201", "44", "Werkplek en Milieu");
				            
			            
			                aryKostenplaatsen[119] = new Array("6663", "274747", "Accountmanagement");
				            
			            
			                aryKostenplaatsen[120] = new Array("6620", "274747", "Assetmanagement");
				            
			            
			                aryKostenplaatsen[121] = new Array("6602", "274747", "Assetmanagement");
				            
			            
			                aryKostenplaatsen[122] = new Array("6681", "274747", "Campusontwikkeling");
				            
			            
			                aryKostenplaatsen[123] = new Array("6610", "274747", "Campusontwikkeling");
				            
			            
			                aryKostenplaatsen[124] = new Array("6611", "274747", "Campusontwikkeling Inhuur projecten");
				            
			            
			                aryKostenplaatsen[125] = new Array("6634", "274747", "Civiele zaken");
				            
			            
			                aryKostenplaatsen[126] = new Array("6671", "274747", "Consultancy");
				            
			            
			                aryKostenplaatsen[127] = new Array("6662", "274747", "Contractmanagement");
				            
			            
			                aryKostenplaatsen[128] = new Array("6601", "274747", "Directie & Secretariaat FCO");
				            
			            
			                aryKostenplaatsen[129] = new Array("6685", "274747", "Directie en Secretariaat");
				            
			            
			                aryKostenplaatsen[130] = new Array("6605", "274747", "Energiebedrijf");
				            
			            
			                aryKostenplaatsen[131] = new Array("6673", "274747", "Energiecentrum");
				            
			            
			                aryKostenplaatsen[132] = new Array("6687", "274747", "Finance & Ctrl");
				            
			            
			                aryKostenplaatsen[133] = new Array("6632", "274747", "Floormanagement");
				            
			            
			                aryKostenplaatsen[134] = new Array("6672", "274747", "Gebouwbeheer");
				            
			            
			                aryKostenplaatsen[135] = new Array("6636", "274747", "Hortus");
				            
			            
			                aryKostenplaatsen[136] = new Array("6603", "274747", "Human Resource Management");
				            
			            
			                aryKostenplaatsen[137] = new Array("6635", "274747", "Logistiek");
				            
			            
			                aryKostenplaatsen[138] = new Array("6631", "274747", "Onderhoud");
				            
			            
			                aryKostenplaatsen[139] = new Array("6642", "274747", "Onderhoudsmanagement");
				            
			            
			                aryKostenplaatsen[140] = new Array("6688", "274747", "Parkeerbedrijf VU-VUmc");
				            
			            
			                aryKostenplaatsen[141] = new Array("6661", "274747", "Portfoliomanagement");
				            
			            
			                aryKostenplaatsen[142] = new Array("6654", "274747", "Projectbureau");
				            
			            
			                aryKostenplaatsen[143] = new Array("6615", "274747", "Realisatiemanagement");
				            
			            
			                aryKostenplaatsen[144] = new Array("6616", "274747", "Realisatiemanagement Inhuur projecten");
				            
			            
			                aryKostenplaatsen[145] = new Array("6633", "274747", "Reprografie");
				            
			            
			                aryKostenplaatsen[146] = new Array("6664", "274747", "Ruimteplanning & Exploitatie zalen");
				            
			            
			                aryKostenplaatsen[147] = new Array("6665", "274747", "Servicedesk");
				            
			            
			                aryKostenplaatsen[148] = new Array("6660", "274747", "Services");
				            
			            
			                aryKostenplaatsen[149] = new Array("6630", "274747", "Uitvoeringsorganisatie");
				            
			            
			                aryKostenplaatsen[150] = new Array("6670", "274747", "Vastgoedbeheer");
				            
			            
			                aryKostenplaatsen[151] = new Array("6655", "274747", "VERVALLEN Bediening, Storingen en Systeembeheer");
				            
			            
			                aryKostenplaatsen[152] = new Array("6651", "274747", "VERVALLEN Bedrijfsbureau Bouwbeheer");
				            
			            
			                aryKostenplaatsen[153] = new Array("6641", "274747", "VERVALLEN Consultancy");
				            
			            
			                aryKostenplaatsen[154] = new Array("6680", "274747", "VERVALLEN Directie Huisvesting");
				            
			            
			                aryKostenplaatsen[155] = new Array("6640", "274747", "VERVALLEN Directie O&TB");
				            
			            
			                aryKostenplaatsen[156] = new Array("6650", "274747", "VERVALLEN FCO Bouwbeheer");
				            
			            
			                aryKostenplaatsen[157] = new Array("6652", "274747", "VERVALLEN Gebouwen, E&W");
				            
			            
			                aryKostenplaatsen[158] = new Array("6653", "274747", "VERVALLEN Klimaatinstallaties");
				            
			            
			                aryKostenplaatsen[159] = new Array("6656", "274747", "VERVALLEN Personele capaciteit");
				            
			            
			                aryKostenplaatsen[160] = new Array("6643", "274747", "VERVALLEN Techn Klantaanvr & Onderhoudsprojecten");
				            
			            
			                aryKostenplaatsen[161] = new Array("6501", "46", "Energiebedrijf VU / VUmc");
				            
			            
			                aryKostenplaatsen[162] = new Array("6308", "45", "Accountmanagement");
				            
			            
			                aryKostenplaatsen[163] = new Array("6341", "45", "Beleid en Advies");
				            
			            
			                aryKostenplaatsen[164] = new Array("6365", "45", "Beveiliging/receptie");
				            
			            
			                aryKostenplaatsen[165] = new Array("6368", "45", "Bureau Pedel");
				            
			            
			                aryKostenplaatsen[166] = new Array("6362", "45", "Congrescoordinatie");
				            
			            
			                aryKostenplaatsen[167] = new Array("6332", "45", "Contractbeheer ");
				            
			            
			                aryKostenplaatsen[168] = new Array("6392", "45", "Contractbeheer catering");
				            
			            
			                aryKostenplaatsen[169] = new Array("6334", "45", "Coördinatie Onderwijsruimte");
				            
			            
			                aryKostenplaatsen[170] = new Array("6344", "45", "Facilitaire Helpdesk");
				            
			            
			                aryKostenplaatsen[171] = new Array("6394", "45", "Facility Contractbeheer Automaten");
				            
			            
			                aryKostenplaatsen[172] = new Array("6390", "45", "FZ Cateraar");
				            
			            
			                aryKostenplaatsen[173] = new Array("6305", "45", "Hortus");
				            
			            
			                aryKostenplaatsen[174] = new Array("6310", "45", "Human Resource Management");
				            
			            
			                aryKostenplaatsen[175] = new Array("6361", "45", "Interne Zaken");
				            
			            
			                aryKostenplaatsen[176] = new Array("6364", "45", "Logistiek");
				            
			            
			                aryKostenplaatsen[177] = new Array("6333", "45", "Management Frontoffice");
				            
			            
			                aryKostenplaatsen[178] = new Array("6330", "45", "Management Frontoffice / Services");
				            
			            
			                aryKostenplaatsen[179] = new Array("6363", "45", "Reprografie");
				            
			            
			                aryKostenplaatsen[180] = new Array("6311", "45", "VERVALEN Financiën & Control FB");
				            
			            
			                aryKostenplaatsen[181] = new Array("6371", "45", "VERVALLEN Bruin Cafe HG");
				            
			            
			                aryKostenplaatsen[182] = new Array("6391", "45", "VERVALLEN Campuscafé");
				            
			            
			                aryKostenplaatsen[183] = new Array("6380", "45", "VERVALLEN Congresbureau");
				            
			            
			                aryKostenplaatsen[184] = new Array("6377", "45", "VERVALLEN DE-cafe");
				            
			            
			                aryKostenplaatsen[185] = new Array("6381", "45", "VERVALLEN DE-Hoofdgebouw");
				            
			            
			                aryKostenplaatsen[186] = new Array("6360", "45", "VERVALLEN Dienst Facilitaire Zaken");
				            
			            
			                aryKostenplaatsen[187] = new Array("6331", "45", "VERVALLEN Exposorium BO");
				            
			            
			                aryKostenplaatsen[188] = new Array("6340", "45", "VERVALLEN FZ/Secretariaat");
				            
			            
			                aryKostenplaatsen[189] = new Array("6366", "45", "VERVALLEN Gecoördineerde Inkoop");
				            
			            
			                aryKostenplaatsen[190] = new Array("6320", "45", "VERVALLEN Huisvesting en Ruimtebeheer");
				            
			            
			                aryKostenplaatsen[191] = new Array("6304", "45", "VERVALLEN Inactief person");
				            
			            
			                aryKostenplaatsen[192] = new Array("6379", "45", "VERVALLEN Metropolitan");
				            
			            
			                aryKostenplaatsen[193] = new Array("6367", "45", "VERVALLEN Postkamer");
				            
			            
			                aryKostenplaatsen[194] = new Array("6382", "45", "VERVALLEN RB Zomerterras");
				            
			            
			                aryKostenplaatsen[195] = new Array("6372", "45", "VERVALLEN Restaurant HG");
				            
			            
			                aryKostenplaatsen[196] = new Array("6376", "45", "VERVALLEN Restaurant MF");
				            
			            
			                aryKostenplaatsen[197] = new Array("6375", "45", "VERVALLEN Restaurant WN");
				            
			            
			                aryKostenplaatsen[198] = new Array("6370", "45", "VERVALLEN Restauratief Bedrijf");
				            
			            
			                aryKostenplaatsen[199] = new Array("6347", "45", "VERVALLEN Sectie Facilitaire Projectcoordinatie");
				            
			            
			                aryKostenplaatsen[200] = new Array("6312", "45", "VERVALLEN Security Beleid");
				            
			            
			                aryKostenplaatsen[201] = new Array("6321", "45", "VERVALLEN 6321");
				            
			            
			                aryKostenplaatsen[202] = new Array("6359", "45", "VEVALLEN Inkoop / Bestelbureau");
				            
			            
			                aryKostenplaatsen[203] = new Array("2933", "27", "Aarde&Economie");
				            
			            
			                aryKostenplaatsen[204] = new Array("3002", "27", "Acacia Institute");
				            
			            
			                aryKostenplaatsen[205] = new Array("2920", "27", "afdeling Aardwetenschappen");
				            
			            
			                aryKostenplaatsen[206] = new Array("2940", "27", "afdeling Athena");
				            
			            
			                aryKostenplaatsen[207] = new Array("2970", "27", "afdeling Ecologische Wetenschappen");
				            
			            
			                aryKostenplaatsen[208] = new Array("2990", "27", "afdeling Geo-bioarcheologie");
				            
			            
			                aryKostenplaatsen[209] = new Array("2943", "27", "afdeling Gezondheidswetenschappen");
				            
			            
			                aryKostenplaatsen[210] = new Array("2950", "27", "afdeling Moleculaire Celbiologie");
				            
			            
			                aryKostenplaatsen[211] = new Array("2960", "27", "afdeling Neurowetenschappen");
				            
			            
			                aryKostenplaatsen[212] = new Array("2901", "27", "Algemene Facultaire Budgetten");
				            
			            
			                aryKostenplaatsen[213] = new Array("2995", "27", "Amsterdam Global Change Institute");
				            
			            
			                aryKostenplaatsen[214] = new Array("2916", "27", "Beleidsruimte Onderwijs");
				            
			            
			                aryKostenplaatsen[215] = new Array("29AA", "27", "Bijzonder hoogleraren Fac. Aard- en Levenswetens");
				            
			            
			                aryKostenplaatsen[216] = new Array("2922", "27", "cluster Aarde en Klimaat");
				            
			            
			                aryKostenplaatsen[217] = new Array("2924", "27", "cluster Aarde en Natuurlijke Hulpbronnen");
				            
			            
			                aryKostenplaatsen[218] = new Array("2923", "27", "cluster Diepe Aarde");
				            
			            
			                aryKostenplaatsen[219] = new Array("2967", "27", "CNCR");
				            
			            
			                aryKostenplaatsen[220] = new Array("2981", "27", "Dep. Chemistry and Biology");
				            
			            
			                aryKostenplaatsen[221] = new Array("2983", "27", "Dep. Environmental Economics");
				            
			            
			                aryKostenplaatsen[222] = new Array("2985", "27", "Dep. Environmental Policy Analysis");
				            
			            
			                aryKostenplaatsen[223] = new Array("2987", "27", "Dep. Spatial Analysis and Decision Support");
				            
			            
			                aryKostenplaatsen[224] = new Array("2902", "27", "Faculteitsbestuur;Medezeg.organen;Directie Bedri");
				            
			            
			                aryKostenplaatsen[225] = new Array("2911", "27", "Fijnmech. Bèta");
				            
			            
			                aryKostenplaatsen[226] = new Array("2904", "27", "FPCA");
				            
			            
			                aryKostenplaatsen[227] = new Array("2935", "27", "Gesteentebewerking");
				            
			            
			                aryKostenplaatsen[228] = new Array("2908", "27", "Huisvesting- en Gebouwzaken");
				            
			            
			                aryKostenplaatsen[229] = new Array("2980", "27", "Institute for Environmental Studies (IVM)");
				            
			            
			                aryKostenplaatsen[230] = new Array("2912", "27", "Instrumentmakerij Aardwetenschappen");
				            
			            
			                aryKostenplaatsen[231] = new Array("2932", "27", "ISES");
				            
			            
			                aryKostenplaatsen[232] = new Array("2910", "27", "IT");
				            
			            
			                aryKostenplaatsen[233] = new Array("2927", "27", "Klimaat & Landschap");
				            
			            
			                aryKostenplaatsen[234] = new Array("3003", "27", "Klimaatcentrum");
				            
			            
			                aryKostenplaatsen[235] = new Array("2936", "27", "Laboratorium Geochemische Analyse");
				            
			            
			                aryKostenplaatsen[236] = new Array("2937", "27", "Laboratorium Massaspectrometrie");
				            
			            
			                aryKostenplaatsen[237] = new Array("2938", "27", "Laboratorium Microanalyse");
				            
			            
			                aryKostenplaatsen[238] = new Array("2939", "27", "Laboratorium Sedimentanalyse");
				            
			            
			                aryKostenplaatsen[239] = new Array("2909", "27", "Mark. & werving");
				            
			            
			                aryKostenplaatsen[240] = new Array("2956", "27", "MC/subgroep Kooijman");
				            
			            
			                aryKostenplaatsen[241] = new Array("2955", "27", "MC/subgroep Schat");
				            
			            
			                aryKostenplaatsen[242] = new Array("2906", "27", "Onderwijsbureau");
				            
			            
			                aryKostenplaatsen[243] = new Array("2915", "27", "Onderwijsdirectie");
				            
			            
			                aryKostenplaatsen[244] = new Array("2919", "27", "Opl Aarde&Econ");
				            
			            
			                aryKostenplaatsen[245] = new Array("2914", "27", "Opl. gez & lev");
				            
			            
			                aryKostenplaatsen[246] = new Array("2905", "27", "P&O");
				            
			            
			                aryKostenplaatsen[247] = new Array("3010", "27", "Programmabureau Klimaatonderzoek");
				            
			            
			                aryKostenplaatsen[248] = new Array("2918", "27", "School for Earth and Environmental Sciences");
				            
			            
			                aryKostenplaatsen[249] = new Array("2917", "27", "School for Life Sciences");
				            
			            
			                aryKostenplaatsen[250] = new Array("2903", "27", "Secretar.van bestuur,directie en bureaus");
				            
			            
			                aryKostenplaatsen[251] = new Array("2962", "27", "sectie Functionele Genoomanalyse");
				            
			            
			                aryKostenplaatsen[252] = new Array("2948", "27", "sectie Gezondheid en Levenswetenschappen Zwolle");
				            
			            
			                aryKostenplaatsen[253] = new Array("2944", "27", "sectie Gezondheidseconomie- en Doelmatigheidsond");
				            
			            
			                aryKostenplaatsen[254] = new Array("2947", "27", "Sectie Infectieziekten");
				            
			            
			                aryKostenplaatsen[255] = new Array("2961", "27", "sectie Integratieve Neurofysiologie");
				            
			            
			                aryKostenplaatsen[256] = new Array("2949", "27", "sectie Methodologie en Toegepaste Biostatistiek");
				            
			            
			                aryKostenplaatsen[257] = new Array("2963", "27", "sectie Moleculaire en Cellulaire Neurobiologie");
				            
			            
			                aryKostenplaatsen[258] = new Array("2945", "27", "sectie Preventie en Volksgezondheid");
				            
			            
			                aryKostenplaatsen[259] = new Array("2946", "27", "sectie Voeding en Gezondheid");
				            
			            
			                aryKostenplaatsen[260] = new Array("2941", "27", "subafdeling Biologie en Samenleving");
				            
			            
			                aryKostenplaatsen[261] = new Array("2971", "27", "subafdeling Dierecologie");
				            
			            
			                aryKostenplaatsen[262] = new Array("2954", "27", "subafdeling Genetica");
				            
			            
			                aryKostenplaatsen[263] = new Array("2991", "27", "subafdeling Geoarcheologie");
				            
			            
			                aryKostenplaatsen[264] = new Array("2926", "27", "subafdeling Hydrologie en Geo-Milieuwetenschappe");
				            
			            
			                aryKostenplaatsen[265] = new Array("2929", "27", "subafdeling Isotopengeochemie");
				            
			            
			                aryKostenplaatsen[266] = new Array("2952", "27", "subafdeling Moleculaire Celfysiologie");
				            
			            
			                aryKostenplaatsen[267] = new Array("2951", "27", "subafdeling Moleculaire Microbiologie");
				            
			            
			                aryKostenplaatsen[268] = new Array("2953", "27", "subafdeling Structuurbiologie");
				            
			            
			                aryKostenplaatsen[269] = new Array("2957", "27", "subafdeling Systeembioinformatica");
				            
			            
			                aryKostenplaatsen[270] = new Array("2972", "27", "subafdeling Systeemecologie");
				            
			            
			                aryKostenplaatsen[271] = new Array("2925", "27", "subafdeling Tektoniek");
				            
			            
			                aryKostenplaatsen[272] = new Array("2942", "27", "subafdeling Wetenschapscommunicatie");
				            
			            
			                aryKostenplaatsen[273] = new Array("3005", "27", "Universitair Proefdiercentrum");
				            
			            
			                aryKostenplaatsen[274] = new Array("2934", "27", "Veldwerkmagazijn");
				            
			            
			                aryKostenplaatsen[275] = new Array("3001", "27", "Vervallen (CIMO)");
				            
			            
			                aryKostenplaatsen[276] = new Array("2973", "27", "Vervallen (EFP)");
				            
			            
			                aryKostenplaatsen[277] = new Array("2964", "27", "Vervallen (OGN)");
				            
			            
			                aryKostenplaatsen[278] = new Array("2407", "18", "Afdeling Bewegingsgedrag");
				            
			            
			                aryKostenplaatsen[279] = new Array("2406", "18", "Afdeling Kinesi");
				            
			            
			                aryKostenplaatsen[280] = new Array("24AA", "18", "Bijzonder hoogleraren Bewegingswetensch.");
				            
			            
			                aryKostenplaatsen[281] = new Array("2402", "18", "Bureau");
				            
			            
			                aryKostenplaatsen[282] = new Array("2408", "18", "EXPOSZ opleiden in sport en zorg");
				            
			            
			                aryKostenplaatsen[283] = new Array("2401", "18", "Huisdrukkerij");
				            
			            
			                aryKostenplaatsen[284] = new Array("2403", "18", "IFKB (onderzoek");
				            
			            
			                aryKostenplaatsen[285] = new Array("2404", "18", "Onderwijsraad");
				            
			            
			                aryKostenplaatsen[286] = new Array("2706", "21", "Accounting");
				            
			            
			                aryKostenplaatsen[287] = new Array("2792", "21", "AMBER");
				            
			            
			                aryKostenplaatsen[288] = new Array("2755", "21", "Bedrijfswetenschappen");
				            
			            
			                aryKostenplaatsen[289] = new Array("27AA", "21", "Bijzonder hoogleraren FEWEB");
				            
			            
			                aryKostenplaatsen[290] = new Array("2708", "21", "Doctoraal Accountancy");
				            
			            
			                aryKostenplaatsen[291] = new Array("2750", "21", "Econometrie");
				            
			            
			                aryKostenplaatsen[292] = new Array("2704", "21", "Economics");
				            
			            
			                aryKostenplaatsen[293] = new Array("2701", "21", "Faculteitsbureau");
				            
			            
			                aryKostenplaatsen[294] = new Array("2713", "21", "Faculteitsbureau - oud");
				            
			            
			                aryKostenplaatsen[295] = new Array("2705", "21", "Finance");
				            
			            
			                aryKostenplaatsen[296] = new Array("2702", "21", "I,L&I");
				            
			            
			                aryKostenplaatsen[297] = new Array("2703", "21", "Management en Organisatiekunde");
				            
			            
			                aryKostenplaatsen[298] = new Array("2709", "21", "Marketing");
				            
			            
			                aryKostenplaatsen[299] = new Array("2776", "21", "PGO ACBA");
				            
			            
			                aryKostenplaatsen[300] = new Array("2760", "21", "PGO Accountancy");
				            
			            
			                aryKostenplaatsen[301] = new Array("2765", "21", "PGO CMA/CFM");
				            
			            
			                aryKostenplaatsen[302] = new Array("2770", "21", "PGO Compl&IntMg");
				            
			            
			                aryKostenplaatsen[303] = new Array("2761", "21", "PGO Controllers");
				            
			            
			                aryKostenplaatsen[304] = new Array("2777", "21", "PGO ExecuTeamCo");
				            
			            
			                aryKostenplaatsen[305] = new Array("2773", "21", "PGO Executive Coaching");
				            
			            
			                aryKostenplaatsen[306] = new Array("2772", "21", "PGO ExecutivEdu");
				            
			            
			                aryKostenplaatsen[307] = new Array("2775", "21", "PGO FinProBnkng");
				            
			            
			                aryKostenplaatsen[308] = new Array("2771", "21", "PGO Health Care Management");
				            
			            
			                aryKostenplaatsen[309] = new Array("2767", "21", "PGO InvestmtMgt");
				            
			            
			                aryKostenplaatsen[310] = new Array("2762", "21", "PGO IT Audit");
				            
			            
			                aryKostenplaatsen[311] = new Array("2763", "21", "PGO MCO");
				            
			            
			                aryKostenplaatsen[312] = new Array("2774", "21", "PGO Risk Management for Financial Instit");
				            
			            
			                aryKostenplaatsen[313] = new Array("2766", "21", "PGO Treasury Ma");
				            
			            
			                aryKostenplaatsen[314] = new Array("2768", "21", "PGO Verandermgt");
				            
			            
			                aryKostenplaatsen[315] = new Array("2769", "21", "PGO ZijlstraCnt");
				            
			            
			                aryKostenplaatsen[316] = new Array("2707", "21", "Ruimtelijke Economie");
				            
			            
			                aryKostenplaatsen[317] = new Array("2791", "21", "St. Onderzoek Wereldvoedselvoorziening");
				            
			            
			                aryKostenplaatsen[318] = new Array("2819", "26", "Algemene Vorming");
				            
			            
			                aryKostenplaatsen[319] = new Array("2870", "26", "Algemene Vorming");
				            
			            
			                aryKostenplaatsen[320] = new Array("2842", "26", "Analyse");
				            
			            
			                aryKostenplaatsen[321] = new Array("2865", "26", "Astro- & Deeltjesfysica");
				            
			            
			                aryKostenplaatsen[322] = new Array("2864", "26", "Atomen, Moleculen en Lasers");
				            
			            
			                aryKostenplaatsen[323] = new Array("2802", "26", "Bedrijfsvoering FEW");
				            
			            
			                aryKostenplaatsen[324] = new Array("28AA", "26", "Bijzonder hoogleraren Exacte Wetenschap.");
				            
			            
			                aryKostenplaatsen[325] = new Array("2882", "26", "Biochem&Mol.Bio");
				            
			            
			                aryKostenplaatsen[326] = new Array("2869", "26", "Biofotonica en Medische Beeldverwerking");
				            
			            
			                aryKostenplaatsen[327] = new Array("2861", "26", "Biofysica, Fotosynthese & Energie");
				            
			            
			                aryKostenplaatsen[328] = new Array("2826", "26", "Bioinformatica");
				            
			            
			                aryKostenplaatsen[329] = new Array("2881", "26", "Biomoleculaire Analyse en Spectroscopie");
				            
			            
			                aryKostenplaatsen[330] = new Array("2825", "26", "Business, Web en Media");
				            
			            
			                aryKostenplaatsen[331] = new Array("2821", "26", "Computersystemen");
				            
			            
			                aryKostenplaatsen[332] = new Array("2808", "26", "Elektronica Bèta-VU");
				            
			            
			                aryKostenplaatsen[333] = new Array("2801", "26", "Faculteitsbureau");
				            
			            
			                aryKostenplaatsen[334] = new Array("2883", "26", "Farmacochemie");
				            
			            
			                aryKostenplaatsen[335] = new Array("2810", "26", "FEW Algemeen");
				            
			            
			                aryKostenplaatsen[336] = new Array("2807", "26", "Fijnmechanische en Glastechnische Instrumentmake");
				            
			            
			                aryKostenplaatsen[337] = new Array("2805", "26", "Finance & Control");
				            
			            
			                aryKostenplaatsen[338] = new Array("2867", "26", "Fotoconversie Materialen");
				            
			            
			                aryKostenplaatsen[339] = new Array("2868", "26", "Fysica van Levende Systemen");
				            
			            
			                aryKostenplaatsen[340] = new Array("2884", "26", "Fysische Chemie");
				            
			            
			                aryKostenplaatsen[341] = new Array("2820", "26", "Informatica");
				            
			            
			                aryKostenplaatsen[342] = new Array("2829", "26", "Informatica Onderwijs");
				            
			            
			                aryKostenplaatsen[343] = new Array("2822", "26", "InformatieManagement & Software Engineering");
				            
			            
			                aryKostenplaatsen[344] = new Array("2809", "26", "IT-groep");
				            
			            
			                aryKostenplaatsen[345] = new Array("2823", "26", "Kunstmatige Intelligentie");
				            
			            
			                aryKostenplaatsen[346] = new Array("2806", "26", "Marketing & Communicatie Bèta-VU");
				            
			            
			                aryKostenplaatsen[347] = new Array("2841", "26", "Meetkunde");
				            
			            
			                aryKostenplaatsen[348] = new Array("2887", "26", "Moleculaire en Computationele Toxicologie");
				            
			            
			                aryKostenplaatsen[349] = new Array("2860", "26", "Natuur- & Sterrenkunde");
				            
			            
			                aryKostenplaatsen[350] = new Array("2863", "26", "Natuurkundige Informatica");
				            
			            
			                aryKostenplaatsen[351] = new Array("2862", "26", "Natuurkundige Practica en Didaktiek");
				            
			            
			                aryKostenplaatsen[352] = new Array("2804", "26", "Onderwijsbureau");
				            
			            
			                aryKostenplaatsen[353] = new Array("2885", "26", "Organische Chemie");
				            
			            
			                aryKostenplaatsen[354] = new Array("2803", "26", "Personeel & Organisatie");
				            
			            
			                aryKostenplaatsen[355] = new Array("2832", "26", "Projecten Bestuur");
				            
			            
			                aryKostenplaatsen[356] = new Array("2880", "26", "Scheikunde en Farmaceutische Wetenschappen ");
				            
			            
			                aryKostenplaatsen[357] = new Array("2888", "26", "Science Business & Innovation");
				            
			            
			                aryKostenplaatsen[358] = new Array("2889", "26", "SFW Onderwijs");
				            
			            
			                aryKostenplaatsen[359] = new Array("2843", "26", "Stochastiek");
				            
			            
			                aryKostenplaatsen[360] = new Array("2886", "26", "Theoretische Chemie");
				            
			            
			                aryKostenplaatsen[361] = new Array("2824", "26", "Theoretische Informatica");
				            
			            
			                aryKostenplaatsen[362] = new Array("2866", "26", "Theoretische Natuurkunde");
				            
			            
			                aryKostenplaatsen[363] = new Array("2840", "26", "Wiskunde");
				            
			            
			                aryKostenplaatsen[364] = new Array("2849", "26", "Wiskunde Onderwijs");
				            
			            
			                aryKostenplaatsen[365] = new Array("1010", "8", "Bijbelwetensch");
				            
			            
			                aryKostenplaatsen[366] = new Array("1070", "8", "Bijbelwetensch");
				            
			            
			                aryKostenplaatsen[367] = new Array("10AA", "8", "Bijzonder hoogleraren Godgeleerdheid");
				            
			            
			                aryKostenplaatsen[368] = new Array("1002", "8", "Bureau der Fac");
				            
			            
			                aryKostenplaatsen[369] = new Array("1099", "8", "Docenten Joint Bachelor (PThU)");
				            
			            
			                aryKostenplaatsen[370] = new Array("1030", "8", "Dogmat & Oecum");
				            
			            
			                aryKostenplaatsen[371] = new Array("1005", "8", "Finance&Control");
				            
			            
			                aryKostenplaatsen[372] = new Array("1050", "8", "GF & VGW");
				            
			            
			                aryKostenplaatsen[373] = new Array("1020", "8", "Islamit Theol");
				            
			            
			                aryKostenplaatsen[374] = new Array("1040", "8", "Kerkgeschiedenis");
				            
			            
			                aryKostenplaatsen[375] = new Array("1007", "8", "Marketing&Comm");
				            
			            
			                aryKostenplaatsen[376] = new Array("1003", "8", "Onderwijsbureau");
				            
			            
			                aryKostenplaatsen[377] = new Array("1004", "8", "Onderzoeksbur.");
				            
			            
			                aryKostenplaatsen[378] = new Array("1006", "8", "P&O");
				            
			            
			                aryKostenplaatsen[379] = new Array("1060", "8", "Praxis");
				            
			            
			                aryKostenplaatsen[380] = new Array("1080", "8", "Seminaries");
				            
			            
			                aryKostenplaatsen[381] = new Array("1001", "8", "Wetenschappelijk personeel Godgeleerdh.");
				            
			            
			                aryKostenplaatsen[382] = new Array("1306", "10", "Archeologie en Prehistorie");
				            
			            
			                aryKostenplaatsen[383] = new Array("1301", "10", "Bestuur en Raad");
				            
			            
			                aryKostenplaatsen[384] = new Array("13AA", "10", "Bijzonder hoogleraren Letteren");
				            
			            
			                aryKostenplaatsen[385] = new Array("1308", "10", "Engelse Taal en Cultuur");
				            
			            
			                aryKostenplaatsen[386] = new Array("1302", "10", "Faculteitsbureau");
				            
			            
			                aryKostenplaatsen[387] = new Array("1335", "10", "Geschiedenis");
				            
			            
			                aryKostenplaatsen[388] = new Array("1310", "10", "Geschiedenis");
				            
			            
			                aryKostenplaatsen[389] = new Array("1351", "10", "Hendrik Brunsting Stichting");
				            
			            
			                aryKostenplaatsen[390] = new Array("1334", "10", "Kunst en cultuur");
				            
			            
			                aryKostenplaatsen[391] = new Array("1336", "10", "Literatuur en Cultuur");
				            
			            
			                aryKostenplaatsen[392] = new Array("1331", "10", "Moderne talen en culturen");
				            
			            
			                aryKostenplaatsen[393] = new Array("1332", "10", "Oudheid");
				            
			            
			                aryKostenplaatsen[394] = new Array("1333", "10", "Taal en communicatie");
				            
			            
			                aryKostenplaatsen[395] = new Array("1352", "10", "Taalcentrum VU");
				            
			            
			                aryKostenplaatsen[396] = new Array("1317", "10", "Toegepaste Taalwetenschap (TTW)");
				            
			            
			                aryKostenplaatsen[397] = new Array("1323", "10", "VASVU");
				            
			            
			                aryKostenplaatsen[398] = new Array("1322", "10", "VU-NT2 (Nederlands als tweede taal)");
				            
			            
			                aryKostenplaatsen[399] = new Array("2543", "19", "Afd. Arbeids-& Organisatiepsychologie");
				            
			            
			                aryKostenplaatsen[400] = new Array("2542", "19", "Afd. Biologisch");
				            
			            
			                aryKostenplaatsen[401] = new Array("2548", "19", "Afd. Cognit Psy");
				            
			            
			                aryKostenplaatsen[402] = new Array("2544", "19", "Afd. Klin. Psy.");
				            
			            
			                aryKostenplaatsen[403] = new Array("2549", "19", "Afd. Kl.Neu.Psy");
				            
			            
			                aryKostenplaatsen[404] = new Array("2539", "19", "Afd. Methoden");
				            
			            
			                aryKostenplaatsen[405] = new Array("2559", "19", "Afd Ond.NeuroWs");
				            
			            
			                aryKostenplaatsen[406] = new Array("2547", "19", "Afd. Ontw. Psyc");
				            
			            
			                aryKostenplaatsen[407] = new Array("2553", "19", "Afd. Ontw.ped.");
				            
			            
			                aryKostenplaatsen[408] = new Array("2541", "19", "Afd. Soc&OrgPsy");
				            
			            
			                aryKostenplaatsen[409] = new Array("2545", "19", "Afd. Theor. Psy");
				            
			            
			                aryKostenplaatsen[410] = new Array("2555", "19", "Afdeling Onderwijspedagogiek");
				            
			            
			                aryKostenplaatsen[411] = new Array("2546", "19", "Afdeling Sociale Psychologie");
				            
			            
			                aryKostenplaatsen[412] = new Array("2552", "19", "Afdeling Theoretische & Historische Pedagogiek");
				            
			            
			                aryKostenplaatsen[413] = new Array("2531", "19", "Bureau Faculteit");
				            
			            
			                aryKostenplaatsen[414] = new Array("2530", "19", "Faculteit FPP A");
				            
			            
			                aryKostenplaatsen[415] = new Array("2532", "19", "Inf,Techn&Media");
				            
			            
			                aryKostenplaatsen[416] = new Array("2551", "19", "Learn!");
				            
			            
			                aryKostenplaatsen[417] = new Array("2556", "19", "OCVU");
				            
			            
			                aryKostenplaatsen[418] = new Array("2560", "19", "Onderwijsbureau");
				            
			            
			                aryKostenplaatsen[419] = new Array("2554", "19", "Onderwijswetenschappen & Theoretische Pedagogiek");
				            
			            
			                aryKostenplaatsen[420] = new Array("2538", "19", "Sec.Cogn_neurps");
				            
			            
			                aryKostenplaatsen[421] = new Array("2537", "19", "Secretariaat Ontwikkelingspsychologie & Pedagogi");
				            
			            
			                aryKostenplaatsen[422] = new Array("25AA", "19", "Verv (Bijz.hgl)");
				            
			            
			                aryKostenplaatsen[423] = new Array("1490", "11", "Afdeling notarieel en fiscaal recht");
				            
			            
			                aryKostenplaatsen[424] = new Array("1460", "11", "Afdeling sociaal recht");
				            
			            
			                aryKostenplaatsen[425] = new Array("14AA", "11", "Bijzonder hoogleraren Rechtsgeleerdheid");
				            
			            
			                aryKostenplaatsen[426] = new Array("1410", "11", "Bureau van de faculteit");
				            
			            
			                aryKostenplaatsen[427] = new Array("1402", "11", "Bureau van de faculteit");
				            
			            
			                aryKostenplaatsen[428] = new Array("1401", "11", "Faculteitsraad en bestuur");
				            
			            
			                aryKostenplaatsen[429] = new Array("1420", "11", "IT en recht");
				            
			            
			                aryKostenplaatsen[430] = new Array("1495", "11", "NSCR");
				            
			            
			                aryKostenplaatsen[431] = new Array("1450", "11", "Privaatrecht");
				            
			            
			                aryKostenplaatsen[432] = new Array("1430", "11", "Rechtstheorie en rechtsgeschiedenis");
				            
			            
			                aryKostenplaatsen[433] = new Array("1470", "11", "Staats- en bestuursrecht");
				            
			            
			                aryKostenplaatsen[434] = new Array("1480", "11", "Strafrecht en Criminologie");
				            
			            
			                aryKostenplaatsen[435] = new Array("1440", "11", "Transnational Legal Studies");
				            
			            
			                aryKostenplaatsen[436] = new Array("2609", "20", "Afd. Cultuur, Organisatie en Management");
				            
			            
			                aryKostenplaatsen[437] = new Array("2607", "20", "Afd. Sociale en Culturele Antropologie");
				            
			            
			                aryKostenplaatsen[438] = new Array("2652", "20", "Afdeling Bestuurswetenschap en Politicologie");
				            
			            
			                aryKostenplaatsen[439] = new Array("2605", "20", "Afdeling Bestuurswetenschappen");
				            
			            
			                aryKostenplaatsen[440] = new Array("2656", "20", "Afdeling Communicatiewetenschap");
				            
			            
			                aryKostenplaatsen[441] = new Array("2606", "20", "Afdeling Methoden & Technieken");
				            
			            
			                aryKostenplaatsen[442] = new Array("2658", "20", "Afdeling Organisatiewetenschap");
				            
			            
			                aryKostenplaatsen[443] = new Array("2654", "20", "Afdeling Organisatiewetenschappen");
				            
			            
			                aryKostenplaatsen[444] = new Array("2655", "20", "Afdeling Politicologie");
				            
			            
			                aryKostenplaatsen[445] = new Array("2604", "20", "Afdeling Sociologie");
				            
			            
			                aryKostenplaatsen[446] = new Array("2653", "20", "Afdeling Sociologie");
				            
			            
			                aryKostenplaatsen[447] = new Array("26AA", "20", "Bijzonder hoogleraren Fac.Soc-Cult.Wet.");
				            
			            
			                aryKostenplaatsen[448] = new Array("2657", "20", "CAMeRA");
				            
			            
			                aryKostenplaatsen[449] = new Array("2612", "20", "Centre of Comparative Social Studies");
				            
			            
			                aryKostenplaatsen[450] = new Array("2621", "20", "Comm PRV");
				            
			            
			                aryKostenplaatsen[451] = new Array("2601", "20", "Directie");
				            
			            
			                aryKostenplaatsen[452] = new Array("2610", "20", "Faculteitsbestuur FSW");
				            
			            
			                aryKostenplaatsen[453] = new Array("2644", "20", "FIL");
				            
			            
			                aryKostenplaatsen[454] = new Array("2623", "20", "Fin & Contr");
				            
			            
			                aryKostenplaatsen[455] = new Array("2603", "20", "ICT");
				            
			            
			                aryKostenplaatsen[456] = new Array("2622", "20", "Internat Office");
				            
			            
			                aryKostenplaatsen[457] = new Array("2602", "20", "Onderwijsbureau");
				            
			            
			                aryKostenplaatsen[458] = new Array("2620", "20", "Onderz bureau");
				            
			            
			                aryKostenplaatsen[459] = new Array("2624", "20", "P&O");
				            
			            
			                aryKostenplaatsen[460] = new Array("2611", "20", "Vervallen (SCW AIO\'s)");
				            
			            
			                aryKostenplaatsen[461] = new Array("11AA", "9", "Bijzonder hoogleraren Wijsbegeerte");
				            
			            
			                aryKostenplaatsen[462] = new Array("1102", "9", "Bureau der faculteit");
				            
			            
			                aryKostenplaatsen[463] = new Array("1105", "9", "Finance & Control");
				            
			            
			                aryKostenplaatsen[464] = new Array("1130", "9", "Historische filosofie");
				            
			            
			                aryKostenplaatsen[465] = new Array("1107", "9", "Marketing&Comm");
				            
			            
			                aryKostenplaatsen[466] = new Array("1103", "9", "Onderwijsbureau");
				            
			            
			                aryKostenplaatsen[467] = new Array("1104", "9", "Onderzoeksbureau");
				            
			            
			                aryKostenplaatsen[468] = new Array("1106", "9", "Personeel & Organisatie");
				            
			            
			                aryKostenplaatsen[469] = new Array("1110", "9", "Praktische filosofie");
				            
			            
			                aryKostenplaatsen[470] = new Array("1120", "9", "Theoretische filosofie");
				            
			            
			                aryKostenplaatsen[471] = new Array("1101", "9", "Wetenschappelijk personeel Wijsbegeerte");
				            
			            
			                aryKostenplaatsen[472] = new Array("7220", "2086227", "Audit");
				            
			            
			                aryKostenplaatsen[473] = new Array("7207", "2086227", "Corporate Finance");
				            
			            
			                aryKostenplaatsen[474] = new Array("7210", "2086227", "Directie");
				            
			            
			                aryKostenplaatsen[475] = new Array("7204", "2086227", "Financiële Administratie Diensten");
				            
			            
			                aryKostenplaatsen[476] = new Array("7203", "2086227", "FSC");
				            
			            
			                aryKostenplaatsen[477] = new Array("7206", "2086227", "Functioneel Beheer ERP-systemen");
				            
			            
			                aryKostenplaatsen[478] = new Array("7208", "2086227", "Inkoopmanagement");
				            
			            
			                aryKostenplaatsen[479] = new Array("7201", "2086227", "P&C");
				            
			            
			                aryKostenplaatsen[480] = new Array("7202", "2086227", "Staf en secretariaat");
				            
			            
			                aryKostenplaatsen[481] = new Array("0522", "828426", "Homij");
				            
			            
			                aryKostenplaatsen[482] = new Array("7180", "2086226", "Arbo & Milieu");
				            
			            
			                aryKostenplaatsen[483] = new Array("7160", "2086226", "Beleid en Organisatieontwikkeling");
				            
			            
			                aryKostenplaatsen[484] = new Array("7106", "2086226", "Beleid en organisatieontwikkeling");
				            
			            
			                aryKostenplaatsen[485] = new Array("7110", "2086226", "Bureau Projecten");
				            
			            
			                aryKostenplaatsen[486] = new Array("7150", "2086226", "Centrum voor loopbaan en ontwikkeling");
				            
			            
			                aryKostenplaatsen[487] = new Array("7101", "2086226", "Directie");
				            
			            
			                aryKostenplaatsen[488] = new Array("7120", "2086226", "Directie en Staf");
				            
			            
			                aryKostenplaatsen[489] = new Array("7140", "2086226", "Expertisecentrum");
				            
			            
			                aryKostenplaatsen[490] = new Array("7103", "2086226", "Juridische en Beleidszaken");
				            
			            
			                aryKostenplaatsen[491] = new Array("7105", "2086226", "Loopbaancentrum");
				            
			            
			                aryKostenplaatsen[492] = new Array("7102", "2086226", "Personeel en Organisatie");
				            
			            
			                aryKostenplaatsen[493] = new Array("7130", "2086226", "Personeelsadvies en -beheer");
				            
			            
			                aryKostenplaatsen[494] = new Array("7104", "2086226", "Personeelsvoorzieningen");
				            
			            
			                aryKostenplaatsen[495] = new Array("7170", "2086226", "Secretariaat");
				            
			            
			                aryKostenplaatsen[496] = new Array("6005", "42", "Afdeling Adviesdiensten (vervallen)");
				            
			            
			                aryKostenplaatsen[497] = new Array("6007", "42", "Afdeling Exploitatiecentrum (vervallen)");
				            
			            
			                aryKostenplaatsen[498] = new Array("6008", "42", "Afdeling Informatiesystemen (vervallen)");
				            
			            
			                aryKostenplaatsen[499] = new Array("6006", "42", "Afdeling Netwerkinfrastructuur (vervallen)");
				            
			            
			                aryKostenplaatsen[500] = new Array("6004", "42", "Afdeling Servicedesk (vervallen)");
				            
			            
			                aryKostenplaatsen[501] = new Array("6011", "42", "Directie en staf");
				            
			            
			                aryKostenplaatsen[502] = new Array("6015", "42", "Funct Beheer");
				            
			            
			                aryKostenplaatsen[503] = new Array("6017", "42", "Functioneel Beheer ERP-systemen");
				            
			            
			                aryKostenplaatsen[504] = new Array("6016", "42", "Programma\'s");
				            
			            
			                aryKostenplaatsen[505] = new Array("6014", "42", "Proj & Innov");
				            
			            
			                aryKostenplaatsen[506] = new Array("6012", "42", "Service & Expl");
				            
			            
			                aryKostenplaatsen[507] = new Array("6013", "42", "Servicecentrum");
				            
			            
			                aryKostenplaatsen[508] = new Array("6099", "42", "UC-IT Algemeen (vervallen)");
				            
			            
			                aryKostenplaatsen[509] = new Array("0525", "7861579", "Mega Elektra");
				            
			            
			                aryKostenplaatsen[510] = new Array("1495", "10034888", "NSCR");
				            
			            
			                aryKostenplaatsen[511] = new Array("0502", "128886", "Olifantje \'t");
				            
			            
			                aryKostenplaatsen[512] = new Array("5301", "34", "Algemeen Bureau");
				            
			            
			                aryKostenplaatsen[513] = new Array("5303", "34", "Centrum voor Studie en Loopbaan");
				            
			            
			                aryKostenplaatsen[514] = new Array("5305", "34", "Cultuurcentrum VU Griffioen");
				            
			            
			                aryKostenplaatsen[515] = new Array("5306", "34", "International Office");
				            
			            
			                aryKostenplaatsen[516] = new Array("5308", "34", "Onderw&Kwalit");
				            
			            
			                aryKostenplaatsen[517] = new Array("5304", "34", "Sportcentrum VU");
				            
			            
			                aryKostenplaatsen[518] = new Array("5302", "34", "Studentenadministratie en Studentenbalie");
				            
			            
			                aryKostenplaatsen[519] = new Array("0520", "764852", "Technology Transfer Office VU & VUmc (TTO)");
				            
			            
			                aryKostenplaatsen[520] = new Array("4511", "30", "Bijzondere Collecties eenheid");
				            
			            
			                aryKostenplaatsen[521] = new Array("4519", "30", "Bureau AVC");
				            
			            
			                aryKostenplaatsen[522] = new Array("4512", "30", "Digitale Diensten");
				            
			            
			                aryKostenplaatsen[523] = new Array("4501", "30", "Directie & Staf");
				            
			            
			                aryKostenplaatsen[524] = new Array("4530", "30", "Divisie Bedrijfsvoering");
				            
			            
			                aryKostenplaatsen[525] = new Array("4520", "30", "Divisie Relatiebeheer");
				            
			            
			                aryKostenplaatsen[526] = new Array("4509", "30", "Documentverw");
				            
			            
			                aryKostenplaatsen[527] = new Array("4513", "30", "Elektronische Bronnen");
				            
			            
			                aryKostenplaatsen[528] = new Array("4504", "30", "FPC");
				            
			            
			                aryKostenplaatsen[529] = new Array("4503", "30", "HDC");
				            
			            
			                aryKostenplaatsen[530] = new Array("4505", "30", "Huisv & Mat Zkn");
				            
			            
			                aryKostenplaatsen[531] = new Array("4508", "30", "ICT");
				            
			            
			                aryKostenplaatsen[532] = new Array("4510", "30", "Informatie-/collectiemanagement");
				            
			            
			                aryKostenplaatsen[533] = new Array("4522", "30", "Mediaproducties");
				            
			            
			                aryKostenplaatsen[534] = new Array("4502", "30", "Medische Bibliotheek");
				            
			            
			                aryKostenplaatsen[535] = new Array("4540", "30", "Onderwijsadvisering");
				            
			            
			                aryKostenplaatsen[536] = new Array("4507", "30", "Publieksdnstn");
				            
			            
			                aryKostenplaatsen[537] = new Array("4506", "30", "Saneringsteam");
				            
			            
			                aryKostenplaatsen[538] = new Array("4523", "30", "Technische service");
				            
			            
			                aryKostenplaatsen[539] = new Array("4524", "30", "Verhuurservice");
				            
			            
			                aryKostenplaatsen[540] = new Array("4521", "30", "VUMediaXperience");
				            
			            
			                aryKostenplaatsen[541] = new Array("9114", "14937803", "Alumni");
				            
			            
			                aryKostenplaatsen[542] = new Array("9111", "14937803", "Leiding & Secretariaat");
				            
			            
			                aryKostenplaatsen[543] = new Array("9113", "14937803", "Marketing & Communicatie");
				            
			            
			                aryKostenplaatsen[544] = new Array("9112", "14937803", "Programmering");
				            
			            
			                aryKostenplaatsen[545] = new Array("9101", "14937803", "Raad van Toezicht");
				            
			            
			                aryKostenplaatsen[546] = new Array("0521", "828421", "Zuidas Academie");
				            
			            

					function eventVUEenheid(event)
					{
						// Fix for IE's broken event model: hardcode it
						firedSelect = document.getElementById("vu_eenheid");
						currentRUID = firedSelect[firedSelect.selectedIndex].className;
						kostenplaatsen = document.getElementById("kostenplaatscode");

						kostenplaatsen.options.length = 0;
						for (i = 0; i < aryKostenplaatsen.length ; i++)
						{
							if (aryKostenplaatsen[i][1] == currentRUID)
							{
								kostenplaatsen.options[kostenplaatsen.length] = new Option(aryKostenplaatsen[i][2], aryKostenplaatsen[i][0]);
							}
						}
					}
					</script>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Uw referentie:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="referentie" tabindex="9" size="27" value="" maxlength="20">
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Opmerkingen:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<textarea cols="30" rows="5" tabindex="10" name="omschrijving"></textarea>
						</td>
					</tr>
				</tbody></table>
				</td>
				</tr>	
				<tr class="cellLichtGrijs">
					<td colspan="3" class="pageText" align="left">&nbsp;</td>
					
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_mobiele_telefonie_form.submit()">Verzend</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_mobiele_telefonie_form.reset()">Wis</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="home.cfm?menuID=2">Sluiten</a>
					</td>
				</tr>
				<tr>
						</tr><tr><td class="pageText" colspan="6"><hr></td>
				</tr>
				<tr>
					<td colspan="6" class="pageText" valign="top"><span class="valerror" align="center">&nbsp;</span></td>
				</tr>
			</tbody></table>
			</td>
			</tr>
			</tbody></table>
			</form>
			
		



			
			
			

	

	
			
			
			



			
			</td>
			</tr>
			</tbody></table>