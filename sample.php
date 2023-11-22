	<div class="col-md-9 col-sm-12 content-container">
			<div class="clearfix">
				<h2 class="small-heading">List of Projects </h2>
					<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
					<div class="row">
					<?php while($row = mysqli_fetch_array($res))
					{
						array_push($result,array());
					echo "
						<div class=\"col-md-4 col-sm-12\">
							<div class=\"faq-desc-item\">
								<div class=\"text-center flip-container\">
									<div class=\"flipper front\"><i class=\"fa fa-mobile\"></i>
										<h4></h4>
										<h5>" . $row[3] . "</h5>
										
									</div>
									<div class=\"flipper back\">
										<h5></h5>
										<p>Date:$row[4]</p><p>From time:$row[1]</p><p>To time:$row[2]</p><p>No.Of.Students:$row[5]</p><p><$row[8]</p> </div>
								</div>
							</div>
					</div>";}?>
				
					</div>
				</div>
				</div>
				</div>