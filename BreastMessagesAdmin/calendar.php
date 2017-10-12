						<div class="cal1 cal_2">
							<div class="clndr" id="calendar">
								<div class="clndr-controls">
									<div class="clndr-control-button">
										<p class="clndr-previous-button">previous
										</p>
									</div>
									<div class="month"><?php echo(date('F Y')) ?>
									</div>
									<div class="clndr-control-button rightalign">
										<p class="clndr-next-button">next
										</p>
									</div>
								</div>
								<table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
									<thead>
										<tr class="header-days">
											<td class="header-day">S</td>
											<td class="header-day">M</td>
											<td class="header-day">T</td>
											<td class="header-day">W</td>
											<td class="header-day">T</td>
											<td class="header-day">F</td>
											<td class="header-day">S</td>
										</tr>
									</thead>
									<tbody class="clndr-body">
										<?php 
											$today=date('d');
											$cMonth=date('m');
											$cYear=date('Y');
											$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
											$maxday = date("t",$timestamp);
											$thismonth = getdate ($timestamp);
											$startday = $thismonth['wday'];
											$quot='"';
											$divClose="</div>";
											for ($i=0; $i<($maxday+$startday); $i++) {
												$t=(($i - $startday + 1)==$today)?'today event'.$quot:'past'.$quot;
												if(($i % 7) == 0 ) echo "<tr>";
												if($i < $startday) echo "<td></td>";
												else echo "<td class='day $t><div class='day-contents'>". ($i - $startday + 1) . $divClose."</td>";
												if(($i % 7) == 6 ) echo "</tr>";
											}
											?>
									</tbody>
								</table>
							</div>
						</div>
