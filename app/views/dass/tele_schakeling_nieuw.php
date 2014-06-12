<table border="0" width="500" cellspacing="0" cellpadding="0">
				<tbody><tr><td>
					<img src="gfx/x.gif" alt="" width="500" height="26" align="top">
				</td></tr>
				
			<!-- begin hoofdkop -->
			<tr><td class="pageTD">
				<div class="pageH1">
					Schakeling nieuw
				</div>
				<br>				
				

				
				
				</td></tr>
		<!-- einde hoofdkop -->
		
		
		
		
		<!-- einde inpage paginanavigatie -->
		
		
		<tr>
		<td>
		

		

			
			
			

	

	
			
			
			
 						
			
 			
			
			

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

	

	
			
			
			
			
			
				<script language="JavaScript" type="text/JavaScript">
				<!--
				
				function ConfirmOntkoppelen(isChecked)
					{
					if(isChecked)
						{
						ConfirmChecked = confirm("Weet u zeker dat u het telefoonnummer van deze persoon wilt ontkoppelen? \n\r \n\r U moet deze persoon opnieuw aan een telefoonnummer koppelen \n\r voordat deze toegang heeft tot de VIP applicatie.");
						if(!ConfirmChecked)
							{
							document.forms[0].elements['telefoonOntkoppelen'].checked = false;
							}
						}
					}
				function openOrganisationEdit(fieldName,action){
					var xPos = findPosX(document.images[fieldName+'_b'])+ self.screenLeft;
					var yPos = findPosY(document.images[fieldName+'_b'])+ self.screenTop;
					var xMarge = 0;
					var yMarge = 50;
					var maxX = screen.width-550-xMarge;
					var maxY = screen.height-650-yMarge;
					var optX = xPos+34;
					var optY = yPos-135;
					if(optX < xMarge)optX = xMarge;
					if(optY < yMarge)optY = yMarge;
					if(optX > maxX){
						optX = maxX;
						if (optY > 200){
							optY -= 135;
						}else{
							optY += 170;
						}
					}
					if(optY > maxY)optY = maxY;
					
					var theURL = '/content.cfm?action='+action+'&fieldName='+fieldName;
					MM_openBrWindow(theURL,'nameEditWindow','width=525,height=570,left='+optX+',top='+optY+',scrollbars=1,status=1');
				}
				
				function openNameEdit(fieldName,action){
					var xPos = findPosX(document.images[fieldName+'_b'])+ self.screenLeft;
					var yPos = findPosY(document.images[fieldName+'_b'])+ self.screenTop;
					var xMarge = 10;
					var yMarge = 60;
					var maxX = screen.width-550-xMarge;
					var maxY = screen.height-450-yMarge;
					var optX = xPos+34;
					var optY = yPos-135;
					if(optX < xMarge)optX = xMarge;
					if(optY < yMarge)optY = yMarge;
					if(optX > maxX){
						optX = maxX;
						if (optY > 200){
							optY -= 135;
						}else{
							optY += 170;
						}
					}
					if(optY > maxY)optY = maxY;
					
					var theURL = '/content.cfm?action='+action+'&fieldName='+fieldName;
					MM_openBrWindow(theURL,'nameEditWindow','width=500,height=430,left='+optX+',top='+optY+',scrollbars=1,status=1');
				}
				
				function updateForm(fieldName,roepnaam,inits,vvoeg_enaam,enaam,vvoeg_pnaam,pnaam,titelsv,titelsa,voorkeur,voornaam){
					document.forms[0].roepnaam.value 		=roepnaam;	
					document.forms[0].initialen.value		=inits;
					document.forms[0].voorvoegsel_eigennaam.value=vvoeg_enaam;
					document.forms[0].eigennaam.value		=enaam;
					document.forms[0].voorvoegsel_partnernaam.value=vvoeg_pnaam;
					document.forms[0].partnernaam.value	=pnaam;
					document.forms[0].voor_titulatuur.value	=titelsv;
					document.forms[0].achter_titulatuur.value	=titelsa;
					document.forms[0].naamsvoorkeur.value		=voorkeur;
					document.forms[0].voornaam.value		=voornaam;
					dspName(fieldName);
				}
				function insertOrgRow(vakgroep,faculteit,kamernummer,gbw_ruid,fte_ruid,vakgroep_naam,faculteit_naam,datum_einde,identificatie,functieaanduiding,dagen_werkzaam_vu_eenheid,url,url_toelichting,werkterrein_vakgebied,identificatie_sapaanstl)
					{
					
					var oldHTML =  document.getElementById("org_table").innerHTML;
					var newHTML = "";			
					
					//HTML nieuw record toevoegen
					newHTML = newHTML + '<div id="dsp_row_org_'+global_organization_rows+'">';			
					newHTML = newHTML + '<table width="100%"><tr>';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_datum_einde" value="'+datum_einde+'">';
//					newHTML = newHTML + '<input type="hidden"name="a_'+global_organization_rows+'_datum_einde_maand" value="'+einddatum_maand+'">';
//					newHTML = newHTML + '<input type="hidden"name="a_'+global_organization_rows+'_datum_einde_jaar" value="'+einddatum_jaar+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_identificatie" value="'+identificatie+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_identificatie_sapaanstl" value="'+identificatie_sapaanstl+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_roltype" value="external">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_vakgroep_ruid" value="'+vakgroep+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_faculteit_ruid" value="'+faculteit+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_kamernummer" value="'+kamernummer+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_functieaanduiding" value="'+functieaanduiding+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_dagen_werkzaam_vu_eenheid" value="'+dagen_werkzaam_vu_eenheid+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_url" value="'+url+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_url_toelichting" value="'+url_toelichting+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_werkterrein_vakgebied" value="'+werkterrein_vakgebied+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_gbw_ruid" value="'+gbw_ruid+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_fte_ruid" value="'+fte_ruid+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_sap_functie" value="">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_faculteit_naam" value="'+faculteit_naam+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_organization_rows+'_vakgroep_naam" value="'+vakgroep_naam+'">';
					newHTML = newHTML + '<td class="pageText"><div id="dsp_org_'+global_organization_rows+'">- '+faculteit_naam+' &nbsp;/&nbsp;'+vakgroep_naam+'</div></td>';
					newHTML = newHTML + '<td class="pageText" width="25" valign="bottom"><a href="Javascript:openOrganisationEdit(\'name\',\'EditOrganizationEmployee&row='+global_organization_rows+'\');"><img src="images/edit.gif" width="15" height="14" alt="organisatiegegevens bewerken" border="0" name="name_b"></a></td>';
					newHTML = newHTML + '<td class="pageText" width="25" valign="bottom"><a href="Javascript:deleteOrganizationRow(\''+global_organization_rows+'\')"><img src="/images/del.gif" width="13" height="12" alt="verwijderen" border="0" name="name_b"></a></td>';
					newHTML = newHTML + '</tr></table></div>';
					
					document.getElementById("org_table").innerHTML = oldHTML + newHTML;
					global_organization_rows = parseInt(global_organization_rows) + 1;
					document.forms['editEmployeeForm'].elements['no_organizations'].value=global_organization_rows;
					}
				function dspOrg(OrgValue, FieldNumber)
					{
					document.getElementById('dsp_org_'+FieldNumber).innerHTML = OrgValue;
					}
					
				function deleteOrganizationRow (FieldNumber)
					{
					resConfirm = confirm("Weet u zeker dat u deze organisatie wilt verwijderen?");
					if(resConfirm)
						{
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_faculteit_ruid'].value = "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_kamernummer'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_fte_ruid'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_gbw_ruid'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_vakgroep_ruid'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_functieaanduiding'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_dagen_werkzaam_vu_eenheid'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_url'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_url_toelichting'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_werkterrein_vakgebied'].value =  "-1";
						//document.all["dsp_row_org_"+FieldNumber].style.display = "none"; 
						document.getElementById("dsp_row_org_"+FieldNumber).style.display = "none";
						}
					}
				
				function dspName(fieldName){
					var roepnaam = 		document.forms[0].roepnaam.value;
					var inits = 		document.forms[0].initialen.value;
					var vnamen = 		document.forms[0].voornaam.value;
					var vvoeg_enaam = 	document.forms[0].voorvoegsel_eigennaam.value;
					var enaam = 		document.forms[0].eigennaam.value;
					var vvoeg_pnaam = 	document.forms[0].voorvoegsel_partnernaam.value;
					var pnaam = 		document.forms[0].partnernaam.value;
					var titelsv = 		document.forms[0].voor_titulatuur.value;
					var titelsa = 		document.forms[0].achter_titulatuur.value;
					var voorkeur = 		document.forms[0].naamsvoorkeur.value;
					var nameString='';
					if(titelsv.length != 0) nameString += titelsv+' ';
					nameString += inits+' ';
					if(voorkeur == 2){
						if(vvoeg_pnaam.length != 0) nameString += vvoeg_pnaam+' ';
						nameString += pnaam;
					}else if(voorkeur == 1){
						if(vvoeg_pnaam.length != 0) nameString += vvoeg_pnaam+' ';
						nameString += pnaam+' - ';
						if(vvoeg_enaam.length != 0) nameString += vvoeg_enaam+' ';
						nameString += enaam;
					}else if(voorkeur == 3){
						if(vvoeg_enaam.length != 0) nameString += vvoeg_enaam+' ';
						nameString += enaam+' - ';
						if(vvoeg_pnaam.length != 0) nameString += vvoeg_pnaam+' ';
						nameString += pnaam;
					}else{
						if(vvoeg_enaam.length != 0) nameString += vvoeg_enaam+' ';
						nameString += enaam;
					}
					if(titelsa.length != 0) nameString += ', '+titelsa;
					document.getElementById(fieldName+'_display').innerHTML = nameString;
				}
				
				
				
				function emptyForm(fieldName){
					document.getElementById(fieldName+'_display').innerHTML = '';
				}
				
				
				
				function findPosX(obj){
					var curleft = 0;
					if (obj.offsetParent){
						while (obj.offsetParent){
							curleft += obj.offsetLeft
							obj = obj.offsetParent;
						}
					}else if (obj.x)curleft += obj.x;
					return curleft;
				}
				
				
				
				function findPosY(obj){
					var curtop = 0;
					if (obj.offsetParent){
						while (obj.offsetParent){
							curtop += obj.offsetTop
							obj = obj.offsetParent;
						}
					}else if (obj.y)curtop += obj.y;
					return curtop;
				}
				
				function MM_openBrWindow(theURL,winName,features) { //v2.0
				  window.open(theURL,winName,features);
				}
				
				function insertEmailRow(email,emailtype,email_toelichting,email_ind_publicatie,email_einddatum)
					{
					
					var oldHTML =  document.getElementById("email_table").innerHTML;
					var newHTML = "";			
					
					//HTML nieuw record toevoegen
					newHTML = newHTML + '<div id="dsp_row_email_'+global_email_rows+'">';			
					newHTML = newHTML + '<table width="100%"><tr>';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email_ruid" value="">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email_oud" value="">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email" value="'+email+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_emailtype" value="'+emailtype+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email_toelichting" value="'+email_toelichting+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email_ind_publicatie" value="'+email_ind_publicatie+'">';
					newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email_einddatum" value="'+email_einddatum+'">';
					// een nieuwe email
					//newHTML = newHTML + '<input type="hidden" name="a_'+global_email_rows+'_email_insert" value="J">';
					newHTML = newHTML + '<td class="pageText"><div id="dsp_email_'+global_email_rows+'">- '+email+'</div></td>';
					newHTML = newHTML + '<td class="pageText" width="25" valign="bottom"><a href="Javascript:openNameEdit(\'name\',\'EditEmailEmployee&row='+global_email_rows+'\');"><img src="images/edit.gif" width="15" height="14" alt="e-mailgegevens bewerken" border="0" name="name_b"></a></td>';
					newHTML = newHTML + '<td class="pageText" width="25" valign="bottom"><a href="Javascript:deleteEmailRow(\''+global_email_rows+'\')"><img src="/images/del.gif" width="13" height="12" alt="verwijderen" border="0" name="name_c"></a></td>';
					newHTML = newHTML + '</tr></table></div>';
					
					document.getElementById("email_table").innerHTML = oldHTML + newHTML;
					global_email_rows = parseInt(global_email_rows) + 1;
					document.forms['editEmployeeForm'].elements['no_email'].value=global_email_rows;
					}
				function dspEmail(EmailValue, FieldNumber)
					{
					document.getElementById('dsp_email_'+FieldNumber).innerHTML = EmailValue;
					}
					
				function deleteEmailRow (FieldNumber)
					{
					resConfirm = confirm("Weet u zeker dat u deze e-mail wilt verwijderen?");
					if(resConfirm)
						{
						//document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_email_ruid'].value = "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_email'].value = "-1";
						//document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_email_oud'].value = "-1";
						//document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_emailtype'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_email_toelichting'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_email_ind_publicatie'].value =  "-1";
						document.forms['editEmployeeForm'].elements['a_' + FieldNumber + '_email_einddatum'].value =  "-1";
						//document.all["dsp_row_email_"+FieldNumber].style.display = "none";
						document.getElementById("dsp_row_email_"+FieldNumber).style.display = "none";
						}
					}
				
				
				function insertDeelnemerRow()
					{
						var tbl = document.getElementById('tblDeelnemer');
						var lastRow = tbl.rows.length;
						// if there's no header row in the table, then iteration = lastRow + 1
						var iteration = lastRow;
						// insert een nieuwe regel in de tabel
  						var row = tbl.insertRow(lastRow);
						
						// cell 1
						//var cell1 = row.insertCell(0);
  						//var el1 = document.createElement('input');
  						//	el1.setAttribute('type', 'text');
  						//	el1.setAttribute('name', 'a_' + iteration + '_volgorde');
  						//	el1.setAttribute('id', 'a_' + iteration + '_volgorde');
  						//	el1.setAttribute('size', '3');
						//	el1.setAttribute('maxlength', '2');
						//	el1.setAttribute('colspan', '1');
						//	el1.setAttribute('align', 'left');
  						//cell1.appendChild(el1);
						
						// cell 2
						var cell2 = row.insertCell(0);
  						var el2 = document.createElement('input');
  							el2.setAttribute('type', 'text');
  							el2.setAttribute('name', 'a_' + iteration + '_telefoonnummer');
  							el2.setAttribute('id', 'a_' + iteration + '_volgorde');
  							el2.setAttribute('size', '8');
							el2.setAttribute('maxlength', '7');
							el2.setAttribute('colspan', '1');
							el2.setAttribute('align','left');
  						cell2.appendChild(el2);
						
						// cell 3
						var cell3 = row.insertCell(1);
  						var el3 = document.createElement('input');
  							el3.setAttribute('type', 'hidden');
  							el3.setAttribute('name', 'a_' + iteration + '_regel_verwijderen');
  							el3.setAttribute('id', 'a_' + iteration + '_regel_verwijderen');
  							el3.setAttribute('value', '0');
							el3.setAttribute('colspan', '1');
							el3.setAttribute('align', 'left');
  						cell3.appendChild(el3);
						
						global_deelnemer_rows = parseInt(global_deelnemer_rows) + 1;
						document.forms['telecom_aansluiting_wijzigen_schakeling_form'].elements['no_deelnemer'].value=global_deelnemer_rows;
					}
					
				function removeRowFromTable ()
					{
						var tbl = document.getElementById('tblDeelnemer');
					 	var lastRow = tbl.rows.length;
						if (lastRow > 1.1) tbl.deleteRow(lastRow - 1);
						
						global_deelnemer_rows = parseInt(global_deelnemer_rows) - 1;
						document.forms['telecom_aansluiting_wijzigen_schakeling_form'].elements['no_deelnemer'].value=global_deelnemer_rows;
					}
				
				function deleteDeelnemerRow (FieldNumber)
					{
					resConfirm = confirm("Weet u zeker dat u deze deelnemer wilt verwijderen?");
					if(resConfirm)
						{
						//document.forms['telecom_aansluiting_wijzigen_schakeling_form'].elements['a_' + FieldNumber + '_volgorde'].value =  "-1";
						document.forms['telecom_aansluiting_wijzigen_schakeling_form'].elements['a_' + FieldNumber + '_telefoonnummer'].value =  "-1";
						document.forms['telecom_aansluiting_wijzigen_schakeling_form'].elements['a_' + FieldNumber + '_regel_verwijderen'].value =  "-1";
						document.getElementById("dsp_row_deelnemer_"+FieldNumber).style.display = "none";
						}
					}
				//-->
			</script>	
			
		

			
			
			
			
			<script type="text/javascript">
			function checkSubmit()
			{
				document.telecom_aansluiting_wijzigen_schakeling_form.submit();
			}
			</script>
			<form action="/content.cfm?action=telecom_aansluiting_wijzigen_schakeling" method="post" name="telecom_aansluiting_wijzigen_schakeling_form" onsubmit="checkSubmit()">
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
					<td colspan="1" class="pageText" align="left">&nbsp;</td>
					
						<td colspan="1" class="pageText" align="left">&nbsp;</td>
					
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
									<td class="pageText">Type schakeling:</td>
								</tr>
							</tbody></table>
						</td>
						
							<td colspan="5" align="left" class="pageText">
								<select name="type_schakeling" tabindex="1" onchange="document.telecom_aansluiting_wijzigen_schakeling_form.submit();">
									<option value="">Kies een schakeling...</option>
									
										<option value="Chef/secretaresse">Chef/secretaresse</option>
									
										<option value="Call pickup">Call pickup</option>
									
										<option value="Hunt groep">Hunt groep</option>
									
								</select>
							</td>
						
					</tr>
					<tr>
					
					</tr></tbody></table>
					</td>
				</tr>	
				<tr class="cellLichtGrijs">
					<td colspan="3" class="pageText" align="left">&nbsp;</td>
					<td colspan="1" class="pageText" align="left">&nbsp;</td>
					
						<td colspan="1" class="pageText" align="left">&nbsp;</td>
					
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