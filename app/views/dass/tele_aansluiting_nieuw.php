<table border="0" width="500" cellspacing="0" cellpadding="0">
				<tbody><tr><td>
					<img src="gfx/x.gif" alt="" width="500" height="26" align="top">
				</td></tr>
				
			<!-- begin hoofdkop -->
			<tr><td class="pageTD">
				<div class="pageH1">
					Aansluiting nieuw
				</div>
				<br>				
				

				
				
				</td></tr>
		<!-- einde hoofdkop -->
		
		
		
		
		<!-- einde inpage paginanavigatie -->
		
		
		<tr>
		<td>
		

		

			
			
			

	

	
			
			
			
 						
			
 			
			
			

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<form action="/content.cfm?action=telecom_submit_aansluiting_nieuw_form" method="post" name="telecom_aansluiting_nieuw_form">
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
						<a href="Javascript:document.telecom_aansluiting_nieuw_form.submit()">Verzend</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_aansluiting_nieuw_form.reset()">Wis</a>
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
									<td class="pageText">Telefoonnummer:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="telefoonnummer" tabindex="1" value="" size="8" maxlength="7">
							&nbsp;&nbsp;&nbsp;<a onclick="window.open('content.cfm?action=viewtel&amp;pagelet=true&amp;searchword=' + document.telecom_aansluiting_nieuw_form.telefoonnummer.value, '', 'scrollbars,menubar=no,toolbar=no,width=530,height=450');"><img src="images/info-knop2.gif" width="28" height="27" alt="" border="0"></a>
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">&nbsp;</td>
						<td colspan="5" align="left" class="pageText">
						<table border="0" cellspacing="0" width="100%">
								<tbody><tr align="left">
									<td align="left" class="pageText" width="35%">Locatie</td>
									<td align="left" class="pageText" width="3%">&nbsp;&nbsp;&nbsp;</td>
									<td align="left" class="pageText" width="35%">Nr.</td>
									<td align="left" class="pageText" width="27%">&nbsp;</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Aansluitpunt:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<table border="0" cellspacing="0" width="100%">
								<tbody><tr align="left">
									
									<td align="left" class="pageText" width="35%" valign="middle"><input type="text" name="aansluitpunt" tabindex="2" size="16" value="" maxlength="10"></td>
									<td align="left" class="pageText" width="3%" valign="middle">&nbsp;&nbsp;&nbsp;</td>
									<td align="left" class="pageText" width="35%" valign="middle"><input type="text" name="a_nummer" tabindex="3" value="" size="3" maxlength="3"></td>
									<td align="left" class="pageText" width="27%" valign="middle">
										<a onclick="window.open('content.cfm?action=viewaansluitpunt&amp;pagelet=true&amp;aansluitpunt=' + document.telecom_aansluiting_nieuw_form.aansluitpunt.value + '&amp;a_nummer=' + document.telecom_aansluiting_nieuw_form.a_nummer.value, '', 'scrollbars,menubar=no,toolbar=no,width=530,height=450');"><img src="images/info-knop2.gif" width="28" height="27" alt="" border="0"></a>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Lijn type:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							
							<select name="lijntype" tabindex="4">
								
									
										
											<option value="Fax analoog">Fax analoog</option>
										
									
								
									
										
											<option value="Modem analoog">Modem analoog</option>
										
									
								
									
										
											<option value="Telefoon analoog" selected="">Telefoon analoog</option>
										
									
								
									
										
											<option value="Telefoon digitaal">Telefoon digitaal</option>
										
									
								
							</select>
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Digitaal toesteltype:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							
							<select name="digitaal_toesteltype" tabindex="5">
								
									
										
											<option value="Geen digitaal toesteltype" selected="">Geen digitaal toesteltype</option>
										
									
								
									
										
											<option value="OptiPoint 500 advance">OptiPoint 500 advance</option>
										
									
								
									
										
											<option value="OptiPoint 500 advance met 1 key module">OptiPoint 500 advance met 1 key module</option>
										
									
								
									
										
											<option value="OptiPoint 500 advance met 2 key modules">OptiPoint 500 advance met 2 key modules</option>
										
									
								
									
										
											<option value="Optipoint 500 Standard">Optipoint 500 Standard</option>
										
									
								
									
										
											<option value="OptiPoint 500 standard met 1 key module">OptiPoint 500 standard met 1 key module</option>
										
									
								
									
										
											<option value="OptiPoint 500 standard met 2 key modules">OptiPoint 500 standard met 2 key modules</option>
										
									
								
									
										
											<option value="5340 IP telefoon Mitel">5340 IP telefoon Mitel</option>
										
									
								
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Verkeersklasse:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<select name="verkeersklasse" tabindex="6">
								
									
										
											<option value="intern">intern</option>
										
									
								
									
										
											<option value="regionaal">regionaal</option>
										
									
								
									
										
											<option value="nationaal" selected="">nationaal</option>
										
									
								
									
										
											<option value="europa">europa</option>
										
									
								
									
										
											<option value="wereld">wereld</option>
										
									
								
							</select>
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Uw referentie:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="referentie" tabindex="7" size="27" value="" maxlength="20">
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Datum uitvoering:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="uitvoerdatum" tabindex="8" size="16" value="" maxlength="10"> &nbsp;(dd-mm-jjjj)
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Opmerkingen:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<textarea cols="30" rows="5" tabindex="9" name="omschrijving"></textarea>
						</td>
					</tr>
				</tbody></table>
				</td>
				</tr>	
				<tr class="cellLichtGrijs">
					<td colspan="3" class="pageText" align="left">&nbsp;</td>
					
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_aansluiting_nieuw_form.submit()">Verzend</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.telecom_aansluiting_nieuw_form.reset()">Wis</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="home.cfm?menuID=2">Sluiten</a>
					</td>
				</tr>
						<tr><td class="pageText" colspan="6"><hr></td>
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