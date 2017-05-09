<?php include('header.php') ?>
		<?php 

			/* NEED PHP MAILER */
			require_once "libphp-phpmailer/PHPMailerAutoload.php";
			
			if (isset($_POST['submit'])) {
				
				/* Get Value from User*/
				$name = $_POST['name'];
				$ph_num = $_POST['ph_num'];
				$email = $_POST['email'];
				$message = $_POST['message'];

				$from = $email;
				$to = "mr.k0ll3r1@gmail.com"; /* The Email Address You want to sent data to */
				$subject = "Suggestion For SITA";
				$body = "<p>From: $name<br> E-Mail: $email<br> Phone Number: $ph_num<br>  Message:<br> $message</p>";

				
				/* Check Name */
				if(!$name)
				{
					$Errname = "Please Enter Your Name";
				}

				/* Check Ph no*/
				if (!$ph_num) {
					$Errphno = "Please Enter Your Phone Number";
				}
				else {
					is_int($ph_num) ? '' : $Errphno = "Please Enter Number";
				}

				/* Check Email */
				if (!$email || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
					$Erremail = "Please Enter a valid email address";
				}

				/* Check Message*/
				if (!$_POST['message']) {
					$Errmessage = 'Please enter your message';
				}

				/*$mail = $smtp->send($to, $headers, $body);*/

				$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com'; /* SMTP MAIL SERVER*/
				$mail->Port = 465;  /*SMTP SERVER PORT */
				$mail->SMTPSecure = 'ssl'; /* SMTP PROTOCOL*/
				$mail->SMTPAuth = true;
				$mail->Username = "User_NAME"; /* User Name of Email*/
				$mail->Password = "PASSWORD"; /* Password of Email */
				$mail->addAddress($to); 
				$mail->Subject = $subject;
				$mail->msgHTML($body);


				

				if (!$Errname && !$Erremail && !$Errmessage && !$Errphno) {
					if ($mail->send()) {
						$result='<div class="alert alert-success alert-dismissable">Thank You! I will be in touch<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
					} else {
						$result='<div class="alert alert-danger alert-dismissable">Sorry there was an error sending your message. Please try again later<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
					}
				}
			}
			
		?>
			

		<div class="nav-link">
			<ul class="breadcrumb">
				<li class="underline"><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</div>
		<div class="about">
			<div class="row">
				<div class="container">
					<div class="col-md-12 col-sm-12">
						<div class="about-story">
							<div class="row">								
								<div class="col-md-12 col-sm-12">
									<h2 class="text-center">Company Profile</h2>
									<div class="col-md-5 col-sm-12">
										<div class="about-img wow zoomIn">
											<img src="img/img1.jpg" class="img-responsive">
										</div>
									</div>
									<div class="col-md-7 col-sm-12">
										<div class="about-p wow zoomIn">
											<p class="text-justify">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</div>					
									</div>
								</div>
							</div>
						</div>
						<div class="about-story">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2 class="text-center">Our Background </h2>								
									<div class="col-md-5 col-sm-12 col-md-push-7">
										<div class="about-img wow zoomIn">
											<img src="img/img1.jpg" class="img-responsive">
										</div>
									</div>
									<div class="col-md-7 col-sm-12 col-md-pull-5">
										<div class="about-p  wow zoomIn">
											<p class="text-justify">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</div>					
									</div>
								</div>
							</div>
							<div class="row" style="padding-top: 30px; padding-bottom: 30px;">
								<div class="container">
									<div class="col-md-12 col-sm-12">
									  	<div class="col-md-6 col-sm-6  wow zoomIn">
									       <h2>VISION</h2>
									        <p class="text-justify">To contribute for the sustainable business development of Myanmar.</p>
									    </div>
									  	<div class="col-md-6 col-sm-6 wow zoomIn">
									       <h2>Mission</h2>
									       <p class="text-justify">To provide one-stop secretarial and consultation services by young Myanmar business expertise for local and international firms with competitive cost, while supporting corporate social responsibility in the country.</p>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 wow zoomIn">
					<!-- Google MAp -->
					<div id="map">
						
					</div>
				</div>
			</div>
			<div id="contact_contact" class=" wow zoomIn">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-10">
							<ul style="list-style-type: none;padding-left: 0px;">
							    <h2>Contact Information</h2>
							    <li style="font-size: 20px"><i class="fa fa-home fa-lg" style="padding-right: 15px;"></i>freewebsit.com</li><br>
								<li style="font-size: 20px"><i class="fa fa-map-marker fa-lg" style="padding-right: 15px;"></i>
								198 West 21th Street, Suite 721 New York NY 10016</li><br>
								<li style="font-size: 20px";><i class="fa fa-phone fa-lg" style="padding-right: 15px;"></i>+1234567890</li><br>
								<li style="font-size: 20px"><i class="fa fa-envelope fa-lg" style="padding-right: 15px;"></i>info@yoursite.com</li><br>
							</ul>
						</div>
						<form method="POST" action="about.php?page=about.php&#contact_contact" row="form">
							<div class="col-md-4 col-sm-10">
							    <h2>Contact Information</h2>
								<div class="row">
									<div class="col-md-12 col-sm-10">
			    						<div class="input-group" style=" box-shadow: 0px 4px 5px 1px rgba(0, 0, 0, 0.3)");>
			     						<span class="input-group-btn">
			        						<button class="btn btn-secondary" type="button"><i class="fa fa-user fa-lg"></i></button>
			     						</span>
			     					    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name..." style="height: 52px;" value="<?php echo htmlspecialchars($_POST['name']); ?>"></input>
			   						 	</div>
			   						 	<?php echo "<p class='text-danger'>$Errname</p>"; ?>
			  						</div>
								</div><br>
								<div class="row">
									<div class="col-md-12 col-sm-10">
			    						<div class="input-group" style=" box-shadow: 0px 4px 5px 1px rgba(0, 0, 0, 0.3)");>
			     						 <span class="input-group-btn">
			        						<button class="btn btn-secondary" type="button"><i class="fa fa-phone fa-lg"></i></button>
			     						 </span>
			     					    <input type="text" class="form-control" id= "ph_num" name="ph_num" placeholder="Enter Contact Number..." style="height: 52px;" value="<?php echo htmlspecialchars($_POST['ph_num']); ?>">
			   						 	</div>
			   						 	<?php echo "<p class='text-danger'>$Errphno</p>"; ?>
			  						</div>
								</div><br>
								<div class="row">
									<div class="col-md-12 col-sm-10">
			    						<div class="input-group" style=" box-shadow: 0px 4px 5px 1px rgba(0, 0, 0, 0.3)");>
			     						 <span class="input-group-btn">
			        						<button class="btn btn-secondary" type="button"><i class="fa fa-envelope fa-lg"></i></button>
			     						 </span>
			     					    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address..." style="height: 52px;" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			   						 	</div>
			   						 	<?php echo "<p class='text-danger'>$Erremail</p>"; ?>
			  						</div>
								</div><br>
								<div class="row">
									<div class="col-md-12 col-sm-10">
			    						<div class="input-group" style=" box-shadow: 0px 4px 5px 1px rgba(0, 0, 0, 0.3)");>
			     						 <span class="input-group-btn">
			        						<button style="height: 71px;" class="btn btn-secondary" 
			        						type="button"><i class="fa fa-reply fa-lg"></i></button>
			     						 </span>
			     						 <textarea style=" color:#000; font-size: 15px;max-width:444px; max-height: 70.86px;" class="form-control" name="message" cols="6" placeholder="Message"></textarea>
			     					    </div>
			     					    <?php echo "<p class='text-danger'>$Errmessage</p>"; ?>
			  						</div>
								</div><br>
								<input class="btn btn-default" type="submit" name="submit" value="Submit" id="submit"></input>
								<?php echo $result;?>	
							</div>
						</form>
						<div class="col-md-3 col-sm-10">
							<h2>Our Social Profile</h2>
							<button class="btn btn-primary" style="margin:5px;"><i style="font-size: 30px;" class="fa fa-facebook fa-lg"></i>
							</button>
							<button class="btn btn-info" style="margin:5px;"><i style="font-size: 30px;" class="fa fa-twitter fa-lg"></i></button>
							<button class="btn btn-warning" style="margin:5px;"><i style="font-size: 30px;" class="fa fa-google fa-lg"></i></button>
							<button class="btn btn-success" style="margin:5px;"><i style="font-size: 30px;" class="fa fa-linkedin fa-lg"></i></button>
							<button class="btn btn-warning" style="margin:5px;"><i style="font-size: 30px;"class="fa fa-youtube fa-lg"></i></button>		                
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- container -->
<?php include('footer.php') ?>