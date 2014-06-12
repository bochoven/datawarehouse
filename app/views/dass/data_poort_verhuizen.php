<table border="0" width="500" cellspacing="0" cellpadding="0">
				<tbody><tr><td>
					<img src="gfx/x.gif" alt="" width="500" height="26" align="top">
				</td></tr>
				
			<!-- begin hoofdkop -->
			<tr><td class="pageTD">
				<div class="pageH1">
					Aansluiting verhuizen
				</div>
				<br>				
				

				
				
				</td></tr>
		<!-- einde hoofdkop -->
		
		
		
		
		<!-- einde inpage paginanavigatie -->
		
		
		<tr>
		<td>
		

		

			
			
			

	

	
			
			
			
 						
			
 			
			
			

			
			
			
			
			
			
			
			
			
			
			
			

			
			<form action="/content.cfm?action=submit_aansluiting_verhuizen_form" method="post" name="aansluiting_verhuizen_form">
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
						<a href="Javascript:document.aansluiting_verhuizen_form.submit()">Verzend</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.aansluiting_verhuizen_form.reset()">Wis</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="home.cfm?menuID=1">Sluiten</a>
					</td>
				</tr>
				<tr>
				<td colspan="6">
				<table border="0" cellspacing="0" cellpadding="0" align="center" width="460">
					<tbody><tr class="cell3TD">
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
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Huidige aansluitpunt:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<table border="0" cellspacing="0" width="100%">
								<tbody><tr align="left">
									
									<td align="left" class="pageText" width="35%" valign="middle"><input type="text" name="aansluitpunt" tabindex="1" size="16" value="" maxlength="10"></td>
									<td align="left" class="pageText" width="3%" valign="middle">&nbsp;&nbsp;&nbsp;</td>
									<td align="left" class="pageText" width="35%" valign="middle"><input type="text" name="a_nummer" tabindex="2" value="" size="3" maxlength="3"></td>
									<td align="left" class="pageText" width="27%" valign="middle">
										<a onclick="window.open('content.cfm?action=viewaansluitpunt&amp;pagelet=true&amp;aansluitpunt=' + document.aansluiting_verhuizen_form.aansluitpunt.value + '&amp;a_nummer=' + document.aansluiting_verhuizen_form.a_nummer.value, '', 'scrollbars,menubar=no,toolbar=no,width=530,height=450');"><img src="images/info-knop2.gif" width="28" height="27" alt="" border="0"></a>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Nieuwe aansluitpunt:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<table border="0" cellspacing="0" width="100%">
								<tbody><tr align="left">
									
									<td align="left" class="pageText" width="35%" valign="middle"><input type="text" name="nieuwe_aansluitpunt" tabindex="3" size="16" value="" maxlength="10"></td>
									<td align="left" class="pageText" width="3%" valign="middle">&nbsp;&nbsp;&nbsp;</td>
									<td align="left" class="pageText" width="35%" valign="middle"><input type="text" name="nieuwe_a_nummer" tabindex="4" value="" size="3" maxlength="3"></td>
									<td align="left" class="pageText" width="27%" valign="middle">
										<a onclick="window.open('content.cfm?action=viewaansluitpunt&amp;pagelet=true&amp;aansluitpunt=' + document.aansluiting_verhuizen_form.nieuwe_aansluitpunt.value + '&amp;a_nummer=' + document.aansluiting_verhuizen_form.nieuwe_a_nummer.value, '', 'scrollbars,menubar=no,toolbar=no,width=530,height=450');"><img src="images/info-knop2.gif" width="28" height="27" alt="" border="0"></a>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<tr>
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Uw referentie:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="referentie" tabindex="5" size="27" value="" maxlength="20">
						</td>
					</tr>
					<tr class="cell3TD">
						<td colspan="1" align="left" class="pageText">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tbody><tr>
									<td class="pageText">Datum uitvoering:</td>
								</tr>
							</tbody></table>
						</td>
						<td colspan="5" align="left" class="pageText">
							<input type="text" name="uitvoerdatum" tabindex="6" size="16" value="" maxlength="10"> &nbsp;(dd-mm-jjjj)
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
							<textarea cols="30" rows="5" tabindex="7" name="omschrijving"></textarea>
						</td>
					</tr>
				</tbody></table>
				</td>
				</tr>	
				<tr class="cellLichtGrijs">
					<td colspan="3" class="pageText" align="left">&nbsp;</td>
					
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.aansluiting_verhuizen_form.submit()">Verzend</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="Javascript:document.aansluiting_verhuizen_form.reset()">Wis</a>
					</td>
					<td colspan="1" class="pageText" align="right">
						<a href="home.cfm?menuID=1">Sluiten</a>
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