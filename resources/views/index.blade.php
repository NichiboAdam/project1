<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Front End Developer Test</title>
		<link rel="stylesheet" type="text/css" href="#">
		<style type="text/css">.fancybox-margin{margin-right:0px;}</style>
	</head>
	<body>
	<!-- Start Error Box -->
	<div id="ErrorMessageBox"></div>
	<!-- End Error Box -->
	<div class="titlebar" style="margin-bottom:10px;">{Customer Name Here}</div>
	<div style="padding:10px;">
		<form name="form1" method="post" action="" autocomplete="off" enctype="multipart/form-data">
			<div class="panel iPadCSS" id="panel1" style="display: block">
				<table width="1100" border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td width="10">&nbsp;</td>
							<td valign="bottom">
								<a href="#" id="tab1" class="TabOn">Overview</a>
								<a href="#" id="tab8" class="Tab">Statement</a>
								<a href="#" id="tab2" class="Tab">Agents Fee</a>
								<a href="#" id="tab3" class="Tab">Dealer Profile</a>
								<a href="#" id="tab4" class="Tab">Audits</a>
								<a href="#" id="tab5" class="Tab">Communication</a>
								<a href="#" id="tab6" class="Tab">Company</a>
								<a href="#" id="tab7" class="Tab">Settings</a>
								<a href="#" id="tab7aaf" class="Tab">AAF Settings</a>
								<a href="#" id="tab8" class="Tab">Admin</a>
								<a href="#" id="tab9" class="Tab">Recent Activity</a>
								<a href="#" id="tab10" class="Tab">SmartBuy</a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="PanelNew iPadCSS">
					<table width="100%" border="0" cellpadding="4" cellspacing="0">
						<tbody>
							<tr>
								<td colspan="6" align="center"></td>
							</tr>
						</tbody>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="10">
						<tbody>
							<tr>
								<td width="500" valign="top">
									<table width="500" border="0" cellpadding="4" cellspacing="0" class="CRMText">
										<tbody>
											<tr>
												<td width="140" align="right">Username</td>
												<td><font face="Arial, Helvetica, sans-serif" color="#000000" size="2"> <font color="#FF0000"><b>{username}</b></font></font></td>
											</tr>
											<tr>
												<td align="right">Password</td>
												<td>
													<a href="#"><img src="./autosearch_files/retrievepassword.gif" width="69" height="15" border="0" ></a> &nbsp;&nbsp;&nbsp;&nbsp;
													<label for="tlc_customer"> Low Grade Vehicle Dealer?</label>
													<input type="checkbox" name="tlc_customer" id="tlc_customer" value="1">
												</td>
											</tr>
											<tr>
												<td align="right">Consignee ID </td>
												<td><input name="customerID" id="customerID" value="" size="35" readonly="">
													<span class="verdana">(Kiri system)</span>
												</td>
											</tr>
											<tr>
												<td align="right">Website Access </td>
												<td><span class="verdana"><label><input type="checkbox" name="NZDisabled" value="NZDisabled">NZ Disabled</label>&nbsp;&nbsp;<input type="checkbox" name="NZ" value="NZ" checked="checked">NZ&nbsp;&nbsp;<label><input type="checkbox" name="Global" value="Global">Global</label>&nbsp;&nbsp;<label><input type="checkbox" name="AU" value="AU">Australia</label>&nbsp;</span>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="1">
														<div id="UserManagement"><center><a href="#" class="usersaccounts">View/Modify/Delete Account Users</a></center></div>
													</font>
												</td>
											</tr>
											<tr>
												<td colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="1">
													<div id="UserManagement"><center><a href="#" class="linkedaccounts">View/Modify/Delete Linked Accounts</a></center></div>
												</font></td>
											</tr>
											<tr>
												<td align="right">Company Name</td>
												<td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="1">
													<input name="CompanyName" id="CompanyName" value="" size="40">
												</font></td>
											</tr>
											<tr>
												<td align="right">Trading Name</td>
												<td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="1">
													<input name="TradingName" id="TradingName" value="" size="40">
												</font></td>
											</tr>
											<tr>
												<td align="right"><img src="./autosearch_files/spacer.gif" width="140" height="1"></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td align="right">Attention</td>
												<td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="1">
													<input name="Attention" id="Attention" value="" size="32">
												</font></td>
											</tr>
											<tr>
												<td align="right" id="rowAdd_Line1">Address</td>
												<td height="30"><input name="Add_Line1" id="Add_Line1" value="" size="40"></td>
											</tr>
											<tr>
												<td align="right">Suburb</td>
												<td height="30"><input name="Add_Suburb" id="Add_Suburb" value="" size="40"></td>
											</tr>
											<tr>
												<td align="right" id="rowAdd_City">City</td>
												<td height="15">
													<table border="0" cellspacing="0" cellpadding="0">
														<tbody>
															<tr>
																<td><input name="Add_City" id="Add_City" value="" size="40"></td>
																<td align="right" class="CRMText">&nbsp;&nbsp;&nbsp;Post&nbsp;Code&nbsp;&nbsp;</td>
																<td height="30" class="CRMText"><input name="Add_PostCode" id="Add_PostCode" value="" size="6"></td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td height="17" align="right" id="rowAdd_Country">Country</td>
												<td height="17">
													<select name="Country" id="Country">
														<option value="">Select Country</option>
														<option value="Australia">Australia</option>
														<option value="Cook Islands">Cook Islands</option>
														<option value="Japan">Japan</option>
														<option value="New Zealand" selected="">New Zealand</option>
														<option value="United Kingdom">United Kingdom</option>
														<option value="Other">Other</option>
													</select>
												</td>
											</tr>
											<tr>
												<td height="9" align="right">Postal Address</td>
												<td height="9"><input onclick="showPostalAddress();" name="PA_Same" type="checkbox" id="PA_Same" value="1" checked="">Same as physical address</td>
											</tr>
											<tr>
												<td height="9" align="right">&nbsp;</td>
												<td height="9">&nbsp;</td>
											</tr>
										</tbody>
									</table>

									<div id="PostalAddressBox">
										<table width="500" border="0" cellpadding="4" cellspacing="0" class="CRMText">
											<tbody><tr id="rowPostal_Line1">
												<td width="130" align="right">Postal Address</td>
												<td height="30"><input name="Postal_Line1" id="Postal_Line1" value="" size="40"></td>
											</tr>
											<tr>
												<td align="right">Postal Suburb</td>
												<td height="30"><input name="Postal_Suburb" id="Postal_Suburb" value="" size="40"></td>
											</tr>
											<tr id="rowPostal_City">
												<td align="right">Postal  City</td>
												<td height="15"><table border="0" cellspacing="0" cellpadding="0">
													<tbody><tr>
														<td><input name="Postal_City" id="Postal_City" value="" size="40"></td>
														<td align="right" class="CRMText">&nbsp;&nbsp;&nbsp;Post&nbsp;Code</td>
														<td height="30" class="CRMText"><input name="Postal_PostCode" id="Postal_PostCode" value="" size="6"></td>
													</tr>
												</tbody></table></td>
											</tr>
											<tr>
												<td align="right"><img src="./autosearch_files/spacer.gif" width="140" height="1"></td>
												<td height="15">&nbsp;</td>
											</tr>
										</tbody></table>
									</div>

									<table width="500" border="0" cellpadding="4" cellspacing="0" class="CRMText">
										<tbody>
											<tr>
												<td align="right" valign="top" style="vertical-align:top;">Region</td>
												<td>
													<table border="0" cellspacing="0" cellpadding="0">
														<tbody>
															<tr>
																<td>
																	<select name="Region" id="Region">
																		<option value=""> </option>
																		<option value="AUC">AUCKLAND</option>
																		<option value="BLE">BLENHEIM</option>
																		<option value="CHR">CHRISTCHURCH</option>
																		<option value="DUN">DUNEDIN</option>
																		<option value="GIS">GISBORNE</option>
																		<option value="GRE">GREYMOUTH</option>
																		<option value="HAM">HAMILTON</option>
																		<option value="INV">INVERCARGILL</option>
																		<option value="MAS">MASTERTON</option>
																		<option value="NAP">NAPIER</option>
																		<option value="NEL" selected="">NELSON</option>
																		<option value="NEW">NEW PLYMOUTH</option>
																		<option value="OAM">OAMARU</option>
																		<option value="PAL">PALMERSTON NORTH</option>
																		<option value="ROT">ROTORUA</option>
																		<option value="TPO">TAUPO</option>
																		<option value="TAU">TAURANGA</option>
																		<option value="THA">THAMES</option>
																		<option value="TIM">TIMARU</option>
																		<option value="WAN">WANGANUI</option>
																		<option value="WEL">WELLINGTON</option>
																		<option value="WES">WEST COAST</option>
																		<option value="WHA">WHANGAREI</option>
																		<option value="WORLDWIDE">WORLDWIDE</option>
																	</select>
																</td>
																<td align="right" class="CRMText">&nbsp;&nbsp;&nbsp;Account&nbsp;</td>
																<td height="30" class="CRMText">
																	<select name="AccountType" id="AccountType">
																		<option value="NICHIBO">NICHIBO</option>
																		<option value="SOUTH ISLAND" selected="">SOUTH ISLAND</option>
																		<option value="MAHINDRA">MAHINDRA</option>
																		<option value="STEFAN">STEFAN</option>
																		<option value="TARO">TARO</option>
																		<option value="NICHIBOSTAFF">NICHIBOSTAFF</option>
																	</select>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td align="right">Sales Team</td>
												<td>
													<select name="SalesTeamId">
														<option value="">N/A</option>
														<option value="7">NBJ</option>
														<option value="6">NZ</option>
														<option value="1">Team 1</option>
														<option value="2">Team 2</option>
														<option value="3">Team 3</option>
														<option value="4">Team 4</option>
														<option value="5">Team 5</option>
													</select>
													<b>Sales Person </b>
													<select name="SalesPerson">
														<option value=""></option>
														<option value="ANDY">ANDY</option>
														<option value="DAISUKE">DAISUKE</option>
														<option value="DEAN">DEAN</option>
														<option value="EBY">EBY</option>
														<option value="GOU">GOU</option>
														<option value="GUCHI">GUCHI</option>
														<option value="ISSA">ISSA</option>
														<option value="JACK">JACK</option>
														<option value="JAKE">JAKE</option>
														<option value="JOE">JOE</option>
														<option value="JUN">JUN</option>
														<option value="KAZU">KAZU</option>
														<option value="KEITA">KEITA</option>
														<option value="KENGO">KENGO</option>
														<option value="KENPEI">KENPEI</option>
														<option value="KUNI">KUNI</option>
														<option value="MARK">MARK</option>
														<option value="OKI">OKI</option>
														<option value="RONNIE">RONNIE</option>
														<option value="RYO">RYO</option>
														<option value="SEAN">SEAN</option>
														<option value="SUGI">SUGI</option>
														<option value="TAKE">TAKE</option>
													</select>
												</td>
											</tr>
											<tr>
												<td align="right">Receivable Staff</td>
												<td>
													<select name="StaffReceivables">
														<option value=""></option>
														<option value="yuko">yuko</option>
														<option value="karen">karen</option>
														<option value="sam">sam</option>
														<option value="tonym" selected="selected">tonym</option>
													</select>
												</td>
											</tr>
											<tr>
												<td align="right">Island Region</td>
												<td>
													<select name="AuditRegion" id="AuditRegion">
														<option value=""></option>
														<option value="North Island">North Island</option>
														<option value="South Island" selected="">South Island</option>
														<option value="NA">NA Other</option>
													</select>
												</td>
											</tr>
											<tr>
												<td align="right">Phone</td>
												<td><input name="Tel" id="Tel" value="" size="45" number="" #=""></td>
											</tr>
											<tr>
												<td align="right">Fax</td>
												<td><input name="Fax" id="Fax" value="" size="45" number="" #=""></td>
											</tr>
											<tr>
												<td align="right">Mobile</td>
												<td><input name="Mobile" id="Mobile" value="" size="45"></td>
											</tr>
											<tr>
												<td align="right" valign="top" style="vertical-align:top;"><a href="mailto:">Email Address</a></td>
												<td><textarea name="Email" cols="55" rows="3" id="Email"></textarea></td>
											</tr>
											<tr>
												<td align="right">Website</td>
												<td><input name="Website" id="Website" value="" size="32"></td>
											</tr>
											<tr>
												<td align="right">&nbsp;</td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td align="right" valign="top" style="vertical-align:top;">Notes</td>
												<td><a href="#" class="addnotelink">Add Note</a></td>
											</tr>
											<tr>
												<td></td>
												<td>
													<div id="general_notes">
														<div>
															<fieldset style="background-color:white;"></fieldset>
														</div>
														<br>
														<div></div>
														<br>
													</div>
												</td>
											</tr>
											<tr>
												<td align="center"><img src="./autosearch_files/spacer.gif" width="140" height="1"></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td align="center">
													<input name="Action" type="hidden" id="Action" value="UpdateProfile">
													<input name="autoSearchId" type="hidden" id="autoSearchId" value="247">
													<input name="GoHome" type="hidden" id="GoHome" value="{GoHome}">
												</td>
												<td><button type="submit" name="Save" class="submit_btn">Save profile</button></td>
											</tr>
										</tbody>
									</table>
								</td>
								<td width="500" valign="top">
									<table border="0" cellpadding="4" cellspacing="0" class="CRMText">
										<tbody>
											<tr class="SmartBuy-hide-header" style="display: none;">
												<td align="center" colspan="2"><a href="#" class="smartbuy_link">SmartBuy Customer</a>
													<a href="#"></a>
												</td>
											</tr>
											<tr id="rowAccChecked" class="SmartBuy-hide" style="display: table-row;">
												<td height="9" align="right">Customer&nbsp;Info&nbsp;Checked</td>
												<td height="9"><input name="AccChecked" type="checkbox" id="AccChecked" value="1" checked=""></td>
											</tr>
											<tr id="rowReleaseVehiclesTo" class="SmartBuy-hide" style="display: table-row;">
												<td align="right">Customs&nbsp;Agent&nbsp;/&nbsp;vehicles&nbsp;to</td>
												<td>
													<table width="0" border="0" cellspacing="0" cellpadding="0">
														<tbody>
															<tr>
																<td>
																	<select name="ReleaseVehiclesTo" id="ReleaseVehiclesTo">
																		<option value=""></option>
																		<option value="McCullough Ltd">McCullough Ltd</option>
																		<option value="TBA">T.B.A</option>
																		<option value="">=======================</option>
																		<option value="360 Logistics Group">360 Logistics Group</option>
																		<option value="AD Customs">AD Customs</option>
																		<option value="Anglo Pacific International">Anglo Pacific International</option>
																		<option value="Aorangi Customs">Aorangi Customs</option>
																		<option value="Armacup">Armacup</option>
																		<option value="Bay Customs">Bay Customs</option>
																		<option value="Clear Customs">Clear Customs</option>
																		<option value="Client">Client</option>
																		<option value="Control Global Logistics">Control Global Logistics</option>
																		<option value="Customs Services Limited">Customs Services Limited</option>
																		<option value="Dolphin Shipping Agencies">Dolphin Shipping Agencies</option>
																		<option value="Express Logistics">Express Logistics</option>
																		<option value="Greenwoods of Papatoetoe">Greenwoods of Papatoetoe</option>
																		<option value="International Freight Logistics">International Freight Logistics</option>
																		<option value="Jacanna Customs">Jacanna Customs</option>
																		<option value="Kiwi Car Carriers">Kiwi Car Carriers</option>
																		<option value="Mainfreight Owens International">Mainfreight Owens International</option>
																		<option value="Mondiale Freight">Mondiale Freight</option>
																		<option value="NCC Car Carriers" selected="">NCC Car Carriers</option>
																		<option value="Transport Brothers 1998 LTD">Transport Brothers 1998 LTD</option>
																	</select>
																</td>
																<td width="10">&nbsp;&nbsp;</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr class="SmartBuy-hide" style="display: table-row;">
												<td align="right">&nbsp;</td>
												<td><span style="font-weight:normal;"></span></td>
											</tr>
									        <tr id="rowReleaseDeregTo" class="SmartBuy-hide" style="display: table-row;">
									        	<td align="right">Release Dereg to</td>
									        	<td>
									        		<table width="0" border="0" cellspacing="0" cellpadding="0">
									        			<tbody>
									        				<tr>
									        					<td>
									        						<select name="ReleaseDeregTo" id="ReleaseDeregTo" disabled="">
									        							<option value=""></option>
									        							<option value="TBA">T.B.A</option>
									        							<option value="Client">Client</option>
									        							<option value="Client - Postal Address">Client - Postal Address</option>
									        							<option value="Fasttrack">Fasttrack</option>
									        							<option value="McCullough Ltd">McCullough Ltd</option>
									        							<option value="PICKUP">PICKUP</option>
									        							<option value="">=======================</option>
									        							<option value="VINZ">VINZ</option>
									        							<option value="VINZ Dunedin">VINZ Dunedin</option>
									        							<option value="VINZ Lower Hutt">VINZ Lower Hutt</option>
									        							<option value="VTNZ Levin">VTNZ Levin</option>
									        							<option value="VTNZ Lower Hutt">VTNZ Lower Hutt</option>
									        							<option value="VTNZ Masterton">VTNZ Masterton</option>
									        							<option value="VTNZ Nelson">VTNZ Nelson</option>
									        							<option value="Wellington Vehicle Compliance">Wellington Vehicle Compliance</option>
									        							<option value="Western Compliance Centre">Western Compliance Centre</option>
									        							<option value="Westside Compliance and Service Centre">Westside Compliance and Service Centre</option>
									        							<option value="Youngman Automotive Limited">Youngman Automotive Limited</option>
									        						</select>
									        					</td>
									        					<td width="10">&nbsp;&nbsp;</td>
									        				</tr>
									        			</tbody>
									        		</table>
									        	</td>
									        </tr>
									        <tr class="SmartBuy-hide" style="display: table-row;">
									        	<td align="right">&nbsp;</td>
									        	<td><span style="font-weight:normal;"></span></td>
									        </tr>
									        <tr class="SmartBuy-hide" style="display: table-row;">
									        	<td align="right" style="vertical-align:top;">Dereg&nbsp;Special&nbsp;Instructions</td>
									        	<td><input name="DeregSpecial" type="checkbox" id="DeregSpecial" value="1" >
									        		<div id="DeregDiv" style="display: none;">
									        			<a href="#" class="addderegnotelink">Add Dereg Special Instruction Note</a><br>
									        			<br>
									        			<div id="dereg_notes"></div>
									        		</div>
									        	</td>
									        </tr>
									        <tr>
									        	<td align="right">Send keys / parts to</td>
									        	<td>
									        		<table width="0" border="0" cellspacing="0" cellpadding="0">
									        		<tbody>
									        			<tr>
									        				<td>
									        					<select name="KeysPartsTo" id="KeysPartsTo">
									        						<option value="Client" selected="">Client</option>
									        						<option value="Client - Postal Address">Client - Postal Address</option>
									        						<option value="Autorama Compliance">Autorama Compliance</option>
									        						<option value="Eagle Auto Services (Premier Compliance)">Eagle Auto Services (Premier Compliance)</option>
									        						<option value="Magnum Compliance">Magnum Compliance</option>
									        						<option value="Nikao Systems Limited">Nikao Systems Limited</option>
									        						<option value="PICKUP">PICKUP</option>
									        						<option value="Quality Compliance Ltd">Quality Compliance Ltd</option>
									        						<option value="Superior Compliance">Superior Compliance</option>
									        						<option value="UMOTORS">UMOTORS</option>
									        						<option value="VINZ Palmerston North ">VINZ Palmerston North </option>
									        						<option value="VSS Christchurch">VSS Christchurch</option>
									        						<option value="VTAC">VTAC</option>
									        					</select>
									        				</td>
									        				<td width="10">&nbsp;&nbsp;</td>
									        			</tr>
									        		</tbody>
									        	</table>
									        </td>
									    </tr>
									    <tr>
									    	<td align="right" valign="top" style="vertical-align:top;">People&nbsp;To&nbsp;Deal&nbsp;With</td>
									    	<td><textarea name="PeopleToDealWith" cols="55" rows="5" id="PeopleToDealWith"></textarea></td>
									    </tr>
									    <tr>
									    	<td align="right"><a href="#" class="fancyinline">Payment Terms</a>
									    		<div id="paymentTermsDefinition" style="display:none;">
									    			<p><strong>FOB</strong></p>
									    			<ul>
									    				<li>New Nichibo customer or customers who do not require a credit facility. </li>
									    				<li>All new customers are required to pay a deposit which after 3mths will be used as payment towards a vehicle.</li>
									    				<li>Payment required varies from 5 days after Bill of Lading to payment on arrival at port.</li>
									    				<li>Dereg papers are not released until customer has paid in full.</li>
									    				<li>Vehicles not released from McCulloughs until customer has paid in full. When payment is not made within a few days after arrival at port, McCulloughs will put vehicles into storage and customer will be charged. </li>
									    				<li>Nichibo does not charge interest or late fees and no security is registered on the vehicles.</li>
									    			</ul>
									    			<p><strong>EXTENDED</strong></p>
									    			<ul>
									    				<li>These are customers who have a few years trading history with Nichibo.</li>
									    				<li>They are given extended payment terms up to 2mths after Bill of Lading.</li>
									    				<li>Dereg papers and vehicles are released without payment.</li>
									    				<li>Nichibo does not charge interest or late fees and no security is registered on the vehicles.</li>
									    			</ul>
									    			<p><strong>MR2A HELD - EXTENDED</strong></p>
									    			<ul>
									    				<li>They are given extended payment terms up to 2mths after Bill of Lading.</li>
									    				<li>Dereg papers and vehicles are released without payment.</li>
									    				<li>Nichibo does not charge interest or late fees and no security is registered on the vehicles.</li>
									    				<li>MR2A's are held in the Nichibo office or at an agreed compliance centre. They are released upon payment from customer.</li>
									    			</ul>
									    			<p><strong>DEREG HELD - EXTENDED</strong></p>
									    			<ul>
									    				<li>This is an FOB customer who is given extended time to pay after vehicles have arrived at port. Payment required no more than 2wks after arrival.</li>
									    				<li>Dereg papers are not released until customer has paid in full.</li>
									    				<li>Vehicles are released without payment from McCulloughs.</li>
									    				<li>Nichibo does not charge interest or late fees and no security is registered on the vehicles</li>
									    			</ul>
									    			<p><strong>TEMPORARY MANAGEMENT</strong></p>
									    			<ul>
									    				<li>These are customers who have applied for an AAF facility however do not have enough trading history with Nichibo.</li>
									    				<li>Customers are put on a 3mth trial period before we extend them an AAF facility.</li>
									    				<li>Security is registered on all vehicles.</li>
									    				<li>Physical stock audits to be performed monthly. </li>
									    				<li>Lates fees and interest charges apply which is direct debited monthly.</li>
									    				<li>Interest to be charged between 10%-12% and no interest free days will be given unless stated otherwise.</li>
									    				<li>MR2A's are held in the Nichibo office or at an agreed compliance centre. They are released upon request from customer and payment required within 3 business days.</li>
									    				<li>Customer will be charged monthly stock audit fee and PPSR fees.</li>
									    				<li>All vehicles to be paid in full 6mths after Bill of Lading irrespective of whether it has been sold.</li>
									    				<li>Customers to be invoiced in NZD</li>
									    			</ul>
									    			<p><strong>AAF</strong></p>
									    			<ul>
									    				<li>Customer has full floorplan facility with Nichibo. </li>
									    				<li>Interest rate and interest free days may vary according to each dealer.</li>
									    				<li>Security is registered on chosen dealers and vehicles. </li>
									    				<li>Physical stock audits to be performed bi-monthly. </li>
									    				<li>Lates fees, interest and default interest charges apply which is direct debited monthly.</li>
									    				<li>MR2A's are held in the Nichibo office or at an agreed compliance centre. They are released upon request from customer and payment required within 3 business days.</li>
									    				<li>Customer will be charged monthly stock audit fee and PPSR fees.</li>
									    				<li>All vehicles to be paid in full 6mths after Bill of Lading irrespective of whether it has been sold.</li>
									    				<li>Customers to be invoiced in NZD</li>
									    			</ul>
									    		</div>
									    	</td>
									    	<td>
									    		<span>
									    			<select name="PaymentTerms" id="PaymentTerms" disabled="">
									    				<option value="FOB">FOB</option>
									    				<option value="AAF" selected="">AutoAdvance</option>
									    				<option value="Extended">Extended</option>
									    				<option value="Temporary Management">Temporary Management</option>
									    				<option value="MR2A Held - Extended">MR2A Held - Extended</option>
									    				<option value="DEREG Held - Extended">DEREG Held - Extended</option>
									    			</select>
									    			&nbsp;&nbsp;&nbsp;&nbsp;Monitor
									    			<input name="Monitor" type="checkbox" id="Monitor" value="Yes">
									    			&nbsp;&nbsp;&nbsp;&nbsp;AAF Lite
									    			<input name="AAFLite" type="checkbox" id="AAFLite" value="1" checked="">
									    		</span>
									    	</td>
									    </tr>
									    <tr class="SmartBuy-hide" style="display: table-row;">
									    	<td align="right" valign="top" style="vertical-align:top;">Currency</td>
									    	<td>
									    		<select name="Currency" id="Currency">
									    			<option value="YEN">YEN</option>
									    			<option value="NZD" selected="">NZD</option>
									    		</select>
									    	</td>
									    </tr>
									    <tr class="SmartBuy-hide" style="display: table-row;">
									    	<td align="right">Exchange &nbsp;Rate Level</td>
									    	<td>
									    		<select name="ExchangeRateLevel" id="ExchangeRateLevel">
									    			<option value="1">NZD LEVEL 1</option>
									    			<option value="2">NZD LEVEL 2</option>
									    			<option value="3" selected="">NZD LEVEL 3 (Standard)</option>
									    			<option value="4">NZD LEVEL 4</option>
									    			<option value="5">NZD LEVEL 5</option>
									    			<option value="AU1">AUD LEVEL 1</option>
									    			<option value="AU2">AUD LEVEL 2</option>
									    			<option value="AU3">AUD LEVEL 3 (Standard)</option>
									    			<option value="AU4">AUD LEVEL 4</option>
									    			<option value="AU5">AUD LEVEL 5</option>
									    		</select>
									    	</td>
									    </tr>
									    <tr>
									    	<td align="right" valign="top">Payment Due</td>
									    	<td>
									    		<table border="0" cellpadding="2" cellspacing="0">
									    			<tbody>
									    				<tr>
									    					<td class="style16">
									    						<select name="PaymentDueTime" id="PaymentDueTime">
									    							<option value=""></option>
									    							@for ($i = 1; $i < 32; $i++)
									    								<option value="{{$i}}">{{$i}} Day</option>
									    							@endfor
									    							<option value="35">35 Days</option>
									    							<option value="45">45 Days</option>
									    							<option value="51">51 Days</option>
									    							<option value="60">60 Days</option>
									    							<option value="135">135 Days</option>
									    							<option value="1 Month">1 Month</option>
									    							<option value="2 Month">2 Months</option>
									    							<option value="3 Month">3 Months</option>
									    							<option value="4 Month">4 Months</option>
									    							<option value="5 Month" selected="">5 Months</option>
									    							<option value="6 Month">6 Months</option>
									    							<option value="8 Month">8 Months</option>
									    							<option value="9 Month">9 Months</option>
									    							<option value="12 Month">12 Months</option>
									    							<option value="18 Month">18 Months</option>
									    						</select>
									    					</td>
									    					<td>
									    						<select name="PaymentDue" id="PaymentDue" onchange="AAFCheckBoxes();">
									    							<option value="PriorToBLDate">Prior To BL Date</option>
									    							<option value="AfterBLDate" selected="">After BL Date</option>
									    							<option value="PriorToArrival">Prior To Arrival</option>
									    							<option value="AfterArrival">After Arrival</option>
									    						</select>
									    						<div id="paymentduemessage" style="background-color:red;display:inline;color:#FFFFFF"></div></td></tr>
									    						<tr>
									    							<td colspan="2"><a href="#" class="paymentduelink">Update Current Shipments</a></td>
									    						</tr>
									    					</tbody>
									    				</table>
									    			</td>
									    		</tr>
									    		<tr>
									    			<td align="right" valign="top" style="vertical-align:top;">Flag Account</td>
									    			<td>
									    				<input onclick="ShowFlaggedBox();" name="Flagged" type="checkbox" id="Flagged" value="1">
									    				<div id="BoxFlagged">
									    					<table border="0" cellpadding="2" cellspacing="0">
									    						<tbody>
									    							<tr>
									    								<td align="right" valign="top" style="vertical-align:top;">Flagged&nbsp;Notes</td>
									    								<td><textarea name="FlaggedNotes" cols="40" rows="5" id="FlaggedNotes" class="FlagAcc"></textarea></td>
									    							</tr>
									    							<tr>
									    								<td align="right">McCulloughs&nbsp;Debt</td>
									    								<td><input name="DebtNotesMcLtd" id="DebtNotesMcLtd" value="" size="20" maxlength="30" class="FlagAcc"></td>
									    							</tr>
									    							<tr>
									    								<td align="right">FastTrack&nbsp;Debt</td>
									    								<td><input name="DebtNotesFastTrack" id="DebtNotesFastTrack" value="" size="20" maxlength="30" class="FlagAcc"></td>
									    							</tr>
									    							<tr>
									    								<td align="right">Other&nbsp;Debt</td>
									    								<td><input name="DebtNotesOther" id="DebtNotesOther" value="" size="20" maxlength="30" class="FlagAcc"></td>
									    							</tr>
									    						</tbody>
									    					</table>
									    				</div>
									    			</td>
									    		</tr>
									    		<tr>
									    			<td align="right">&nbsp;</td>
									    			<td>&nbsp;</td>
									    		</tr>
									    		<tr>
									    			<td align="right">Release MR2A from compliance center <br><small>(required for online MR2A release - selected compliance centre must also have valid email address and Max MR2A released without payment must be set)</small></td>
									    			<td valign="top">
									    				<select name="ReleaseMR2ATo" id="ReleaseMR2ATo">
									    					<option value=""></option>
									    					<option value="Fasttrack">Fasttrack</option>
									    					<option value="">=======================</option>
									    					<option value=""></option>
									    					<option value=""></option>
									    					<option value="2 Cheap Cars">2 Cheap Cars</option>
									    					<option value="AA Compliance ">AA Compliance </option>
									    					<option value="AA Compliance &amp; Inspection Centre">AA Compliance &amp; Inspection Centre</option>
									    					<option value="AA Dunedin">AA Dunedin</option>
									    					<option value="coven">coven</option>
									    					<option value="Craig Gilbert ">Craig Gilbert </option>
									    					<option value="Curson Motors">Curson Motors</option>
									    					<option value="Deluxe Compliance Kelston">Deluxe Compliance Kelston</option>
									    					<option value="Deluxe Compliance Otahuhu">Deluxe Compliance Otahuhu</option>
									    					<option value="Don Thompson ">Don Thompson </option>
									    					<option value="Drive Sure Vehicle Testing">Drive Sure Vehicle Testing</option>
									    					<option value="Fasttrack">Fasttrack</option>
									    					<option value="Fasttrack">Fasttrack</option>
									    					<option value="John Bradley Hyundai / VINZ">John Bradley Hyundai / VINZ</option>
									    					<option value="Magnum Compliance">Magnum Compliance</option>
									    					<option value="Motorsafe">Motorsafe</option>
									    				</select>
									    			</td>
									    		</tr>
									    		<tr class="ProfileText">
									    			<td align="right">Release MR2A to</td>
									    			<td>
									    				<span>
									    					<input name="DefaultMR2AReleasedTo" type="text" id="DefaultMR2AReleasedTo" value="MR2A" size="25">
									    				</span>
									    			</td>
									    		</tr>
        <tr>
        </tr><tr class="ProfileText">
          <td align="right">Auto Release MR2A on full payment</td>
          <td><span>
            <input name="MR2AAutoRelease" type="checkbox" id="MR2AAutoRelease" value="1">
            </span></td>
          </tr>
        <tr>
          <td align="right" valign="top" style="vertical-align:top;">Special Instructions</td>
          <td><a href="#" class="addmr2aspecialinstructionnotelink">Add MR2A Special Instruction Note</a><br>
          <br>
          <div id="mr2a_notes"></div>
          </td>
          </tr>
        <tr>
          <td align="right">AFD Customer</td>
          <td><input name="AFD" type="checkbox" id="AFD" value="1"></td>
          </tr>
        <tr>
        </tr><tr><td colspan="2">
			<table><tbody><tr>
			  <td>Average Trading Zone</td>
			  <td>Credit Ceiling</td>
			  </tr>
			<tr>
			</tr><tr>
			  <td align="right">&nbsp;JPY&nbsp;<input name="AverageTradingZoneJPY" id="AverageTradingZoneJPY" value="0" size="20" disabledformboxes="DISABLEDFORMBOXES" disabled=""></td>
			  <td align="right">&nbsp;JPY&nbsp;<input name="StatementLimitYEN" id="StatementLimitYEN" value="0" size="20" disabledformboxes="DISABLEDFORMBOXES" disabled=""></td>
			  </tr>
			<tr>
			  <td align="right"> &nbsp;NZD&nbsp;<input name="AverageTradingZoneNZD" id="AverageTradingZoneNZD" value="250,000" size="20" disabledformboxes="DISABLEDFORMBOXES" disabled=""></td>
			  <td align="right"> &nbsp;NZD&nbsp;<input name="StatementLimitNZD" id="StatementLimitNZD" value="375000" size="20" disabledformboxes="DISABLEDFORMBOXES" disabled=""></td>
			  </tr>
			  </tbody></table>
	</td></tr>
        <tr>
          <td align="right">DO NOT send Credit Limit Warning email</td>
          <td><input name="CreditWarningOptOut" type="checkbox" id="CreditWarningOptOut" value="1"></td>
          </tr>
        <tr>
          <td align="right">Standard&nbsp;Interest&nbsp;Rate</td>
          <td><input name="StandardInterestRate" id="StandardInterestRate" value="9" size="20"></td>
          </tr>
        <tr>
          <td align="right">Default Interest Rate</td>
          <td><input name="DefaultInterestRate" id="DefaultInterestRate" value="20" size="20"></td>
          </tr>
        <tr>
          <td align="right">Interest Free Days</td>
          <td><input name="IntFreeDays" id="IntFreeDays" value="0" size="10"></td>
          </tr>

        <tr>
          <td align="right" valign="top" style="vertical-align:top;">Payment / Credit Terms</td>
          <td><a href="#" class="addpaymentcredittermsnotelink">Add Payment / Credit Term Note</a><br>
          	<br>
          	<div id="paymentcreditterms_notes"></div>
          </td>
          </tr>
      </tbody></table></td>
      </tr>
  </tbody></table>
</div>
</div>


</form>
</div>
<div class="copybar">{{date('Y')}} Nichibo Japan Trading Co., Ltd. All Rights Reserved. </div>


</body></html>