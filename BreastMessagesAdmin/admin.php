<?php 
include '../boilerplate.php';
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('head.php');?>
	<?php include('sidebar.php');?>
		<!--page wrapper start-->
		<div id="page-wrapper">
			<div class="graphs">
				<div class="col_3">
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-thumbs-up icon-rounded"></i>
							<div class="stats">
							  <h5><strong>45%</strong></h5>
							  <span>New Orders</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-users user1 icon-rounded"></i>
							<div class="stats">
							  <h5><strong>1019</strong></h5>
							  <span>New Visitors</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-comment user2 icon-rounded"></i>
							<div class="stats">
							  <h5><strong>1012</strong></h5>
							  <span>New Users</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
							<div class="stats">
							  <h5><strong>$450</strong></h5>
							  <span>Profit Today</span>
							</div>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<div class="col_1">
					<div class="col-md-4 span_7">
						<?php include('calendar.php');?>
					</div>
					<div class="col-md-4 span_8">
						<div class="activity_box">
							<div class="scrollbar" id="style-2">
								<div class="activity-row">
									<div class="col-xs-1">
										<i class="fa fa-thumbs-up text-info icon_13"></i>
									</div>
									<div class="col-xs-3 activity-img">
										<img src="template/images/5.png"/>
									</div>
									<div class="col-xs-8 activity-desc">
										<h5>
											<a href="#">Lorem Ipsum</a> liked 
											<a href="#">random</a>
										</h5>
										<p>Lorem Ipsum is silly dummy</p>
										<h6>8:03</h6>
									</div>
									<div class="clearfix">
									</div>
								</div>
								<div class="activity-row">
									<div class="col-xs-1">
										<i class="fa fa-comment text-info"></i>
									</div>
									<div class="col-xs-3 activity-img">
										<img src="template/images/3.png"/>
									</div>
									<div class="col-xs-8 activity-desc">
										<h5>
											<a href="#">Simply Random</a> liked
											<a href="#">passages</a>
										</h5>
										<p>Lorem Ipsum is silly dummy</p>
										<h6>8:03</h6>
									</div>
									<div class="clearfix">
									</div>
								</div>
								<div class="activity-row">
									<div class="col-xs-1">
										<i class="fa fa-check text-info icon_11"></i>
									</div>
									<div class="col-xs-3 activity-img">
										<img src="template/images/1.png" alt="">
									</div>
									<div class="col-xs-8 activity-desc">
										<h5>
											<a href="#">standard chunk</a> liked <a href="#">model</a>
										</h5>
										<p>Lorem Ipsum is simply dummy</p>
										<h6>8:03</h6>
									</div>
								<div class="clearfix"> </div>
								</div>
								<div class="activity-row1">
									<div class="col-xs-1">
										<i class="fa fa-user text-info icon_12"></i>
									</div>
									<div class="col-xs-3 activity-img">
										<img src="template/images/4.png" alt="">
									</div>
									<div class="col-xs-8 activity-desc">
										<h5><a href="#">perspiciatis</a> liked <a href="#">donating</a></h5>
										<p>Lorem Ipsum is simply dummy</p>
										<h6>8:03</h6>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 stats-info">
						<div class="panel-heading">
							<h4 class="panel-title">Browser Stats</h4>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled">
								<li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
								<li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
								<li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
								<li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
								<li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
								<li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
								<li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
							</ul>
						</div>
					</div>

					<div class="clearfix">
					</div>
				</div>
			</div>
		</div>
		<!--page wrapper end-->
	</body>
</html>