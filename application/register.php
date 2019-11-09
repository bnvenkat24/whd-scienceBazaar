<?php
error_reporting(0);
session_start();
if ($_SESSION['logged_in'] == true) {
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Font-->
		<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
		<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- Main Style Css -->
		<link rel="stylesheet" href="css/style.css" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>

	<body>
		<div class="page-content">
			<div class="form-v1-content">
				<div class="wizard-form">
					<form class="form-register" action="application_register.php" method="post">
						<div id="form-total">
							<!-- SECTION 1 -->
							<h2>
								<p class="step-icon"><span>1</span></p>
								<span class="step-text">Personal Information</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Personal Information</h3>
										<p>Please enter your information and proceed to the next step so we can build your account. </p>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>First Name</legend>
												<input type="text" class="form-control" id="first-name" name="first-name" value="<?php echo $_SESSION['fname'] ?>" disabled>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Last Name</legend>
												<input type="text" class="form-control" id="last-name" name="last-name" value="<?php echo $_SESSION['lname'] ?>" disabled>
											</fieldset>
										</div>
									</div>
									<div class="form-row form-row-date">
										<div class="form-holder form-holder-2">
											<label class="special-label">DOB <text style="color:red">*</text></label>
											<select name="date" id="date" required>
												<option value="DD" disabled selected>DD</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
											<select name="month" id="month" required>
												<option value="MM" disabled selected>MM</option>
												<option value="Jan">Jan</option>
												<option value="Feb">Feb</option>
												<option value="Mar">Mar</option>
												<option value="Apr">Apr</option>
												<option value="May">May</option>
												<option value="Jun">Jun</option>
												<option value="Jul">Jul</option>
												<option value="Aug">Aug</option>
												<option value="Sep">Sep</option>
												<option value="Oct">Oct</option>
												<option value="Nov">Nov</option>
												<option value="Dec">Dec</option>
											</select>
											<select name="year" id="year" required>
												<option value="YYYY" disabled selected>YYYY</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
											</select>
										</div>
									</div>
									<div class="gen">
										<div class="form-row">
											<div class="form-holder">
												<!--<fieldset>-->
												<legend>Gender <text style="color:red">*</text></legend>
												<!--<input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" >-->
												<select name="gender" id="gender" required>
													<option value="Gender" disabled selected>Gender</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
													<option value="other">Other</option>
												</select>
												<!--</fieldset>-->
											</div>

											<div class="form-holder">
												<fieldset>
													<legend>Nationality <text style="color:red">*</text></legend>
													<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality" required>
												</fieldset>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Address</legend>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Address Line 1 <text style="color:red">*</text></legend>
															<input type="text" name="temp_address1" id="temp_address1" class="form-control" placeholder="Address" required>
														</fieldset>
													</div>
												</div>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Address Line 2</legend>
															<input type="text" name="temp_address2" id="temp_address2" class="form-control" placeholder="Address">
														</fieldset>
													</div>
												</div>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Address Line 3</legend>
															<input type="text" name="temp_address3" id="temp_address3" class="form-control" placeholder="Address">
														</fieldset>
													</div>
												</div>
											</fieldset>
										</div>
									</div>

									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>City <text style="color:red">*</text></legend>
												<input type="text" class="form-control" id="city" name="city" placeholder="City" required>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Pincode <text style="color:red">*</text></legend>
												<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Your Email</legend>
												<input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" value="<?php echo $_SESSION['email']; ?>" disabled>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Phone Number <text style="color:red">*</text></legend>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
											</fieldset>
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 2 -->
							<h2>
								<p class="step-icon"><span>2</span></p>
								<span class="step-text">Academic Information</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Academic Information</h3>
										<p>Please enter your information and proceed to the next step so we can build your account.</p>
									</div>

									<div class="gen">
										<div class="form-row">
											<div class="form-holder form-holder-2">
												<select name="gender" id="gender" required>
													<option value="Gender" disabled selected>Are you a student? <text style="color:red">*</text></option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Institute Name <text style="color:red">*</text></legend>
												<input type="text" name="inst_name" id="inst_name" class="form-control" placeholder="Institute Name" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>City <text style="color:red">*</text></legend>
												<input type="text" name="inst_city" id="inst_city" class="form-control" placeholder="City" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<legend>Year of joining <text style="color:red">*</text></legend>
											<select name="year_of_joining" id="gender" required>
												<option value="year" disabled selected>Year of joining</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
											</select>
										</div>
										<div class="form-holder">
											<legend>Year of completion <text style="color:red">*</text></legend>
											<select name="year_of_completion" id="gender" required>
												<option value="year" disabled selected>Year of completion</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Degree <text style="color:red">*</text></legend>
												<input type="text" name="degree" id="degree" class="form-control" placeholder="Degree" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Branch</legend>
												<input type="text" name="branch" id="branch" class="form-control" placeholder="Branch(Only for students with UG)">
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Highest Qualification <text style="color:red">*</text></legend>
												<input type="text" name="qual" id="qual" class="form-control" placeholder="Highest Qualification" required>
											</fieldset>
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 3 -->
							<h2>
								<p class="step-icon"><span>3</span></p>
								<span class="step-text">Team Information</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Team Information</h3>
										<p>Please enter your information and proceed to the next step so we can build your account.</p>
									</div>

									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Name<text style="color:red">*</text></legend>
												<input type="text" name="team_name" id="team_name" class="form-control" placeholder="Team Name" required>
											</fieldset>
										</div>
									</div>
									<label class="special-label">Team Members</label>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Member1</legend>
												<input type="text" name="team_mem1" id="team_mem1" class="form-control" placeholder="Team Member1" value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname'] ?>" disabled>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Member2</legend>
												<input type="text" name="team_mem2" id="team_mem2" class="form-control" placeholder="Team Member2">
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Member3</legend>
												<input type="text" name="team_mem3" id="team_mem3" class="form-control" placeholder="Team Member3">
											</fieldset>
										</div>
									</div>
									<label class="special-label">Other team members contact information</label>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Member 2</legend>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Mail ID</legend>
															<input type="text" name="mail1" id="mail1" class="form-control" placeholder="Member1 Mail ID">
														</fieldset>
													</div>
												</div>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Phone Number</legend>
															<input type="text" name="phone1" id="phone1" class="form-control" placeholder="Member1 Phone Number">
														</fieldset>
													</div>
												</div>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Member 3</legend>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Mail ID</legend>
															<input type="text" name="mail2" id="mail2" class="form-control" placeholder="Member2 Mail ID">
														</fieldset>
													</div>
												</div>
												<div class="form-row">
													<div class="form-holder form-holder-2">
														<fieldset>
															<legend>Phone Number</legend>
															<input type="text" name="phone2" id="phone2" class="form-control" placeholder="Member2 Phone Number">
														</fieldset>
													</div>
												</div>
											</fieldset>
										</div>
									</div>
								</div>
							</section>



							<!-- SECTION 4 -->
							<h2>
								<p class="step-icon"><span>4</span></p>
								<span class="step-text">Project Information</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Project Information</h3>
										<p>Please enter your information and proceed to the next step so we can build your account.</p>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>Project Name <text style="color:red">*</text></legend>
												<input type="text" class="form-control" id="proj" name="proj" placeholder="Project Name" required>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Domain<text style="color:red">*</text></legend>
												<input type="text" class="form-control" id="domain" name="domain" placeholder="Domain" required>
											</fieldset>
										</div>
									</div>
									<label class="special-label">Team Introduction</label>
									<p>Do a self introduction video about your team and team members which should not exceed 30 secs. Upload the video in youtube under unlisted category and post the link here in the text box.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Team Introduction<text style="color:red">*</text></legend>
												<input type="text" name="intro_link" id="intro_link" class="form-control" placeholder="Team Introduction" required>
											</fieldset>
										</div>
									</div>
									<label class="special-label">Project Description</label>
									<p>Do a video about your project that should describe the idea of your project and it should not exceed 90 secs. Upload the video in youtube under unlisted category and post the link here in the text box.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Project Description<text style="color:red">*</text></legend>
												<input type="text" name="desc_link" id="desc_link" class="form-control" placeholder="Project Description" required>
											</fieldset>
										</div>
									</div>
									<p>Upload your project report or protocol here . Only pdf formats are accepted.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Project Report <text style="color:red">*</text></legend>
												<input type="text" name="report" id="report" class="form-control" placeholder="Project Report" required>
											</fieldset>
										</div>
									</div>
									<label class="special-label">Target Audience<text style="color:red">*</text></label>
									<p>Explain who your audience is. Consider targeted platforms, geography, and demographics. If you can estimate the size of your target audience please do so and cite your source for the estimated data.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Explanation</legend>
												<input type="text" name="aud" id="aud" class="form-control" placeholder="Target Audience" required>
											</fieldset>
										</div>
									</div>
									<label class="special-label">Competition<text style="color:red">*</text></label>
									<p>Mention that if u found any replica of your project or your idea was done already by someone and mention that if u had participated any of the competitions or science fair programmes with this idea/project before.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Competition</legend>
												<input type="text" name="comp" id="comp" class="form-control" placeholder="Competition" required>
											</fieldset>
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 5 -->
							<h2>
								<p class="step-icon"><span>5</span></p>
								<span class="step-text">Core Technologies</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Core Technologies</h3>
										<p>Please enter your information and proceed to the next step so we can build your account.</p>
									</div>
									<p>This includes your key platform(s) as well as specific technologies such as the Kinect SDK, the Unity game engine, or other elements that you believe will be critical to your project’s success.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Platform <text style="color:red">*</text></legend>
												<input type="text" name="plat" id="plat" class="form-control" placeholder="Platform" required>
											</fieldset>
										</div>
									</div>
									<label class="special-label">Personas</label>
									<p>Create one or two personas who represent your likely users.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Personas</legend>
												<input type="text" name="personas" id="personas" class="form-control" placeholder="Personas">
											</fieldset>
										</div>
									</div>
									<label class="special-label">Early Feedback <text style="color:red">*</text></label>
									<p>Pitch your core concept to a few people who would be in your audience or who have expertise in the kind of project you are making. Note here what you learned from them. The more sources of early feedback you include, the better.</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Feedback</legend>
												<input type="text" name="feedback" id="feedback" class="form-control" placeholder="Feedback" required>
											</fieldset>
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 5 -->
							<h2>
								<p class="step-icon"><span>6</span></p>
								<span class="step-text">Terms and Conditions</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Terms and Conditions</h3>
									</div>
									<p>Up to three (3) eligible students may submit a single entry as a team.</p>
									<p>• You may have assistance with your project from additional students beyond the three who are your official team. Such assistance is typically in specific disciplines such as graphic design or business plan development. Any such additional students are not considered members of your team for purposes of these rules and they will not be eligible for any prizes, nor will they be recognized in official communications such as press releases. Only the three team members you officially register with us are eligible for prizes, and official communications.</p>
									<p>• Team members may come from different academic institutions and from different places.</p>
									<p>• Each competitor may belong to only one team within the competition.</p>
									<p>• Each Team is solely responsible for its own cooperation and teamwork. In no event will Sponsor officiate in any dispute regarding the conduct or cooperation of any Team or its members.</p>
									<p>The intent and spirit of the Competition is to test the skills and creativity of the student entrants. Anyone acting as a team Mentor, or in any mentorship role, where allowed (for example, local, regional, or global sponsors), must limit the level of support provided to student entrants to general guidance and must not contribute in any way that may be considered original authorship, or in a way that may enable claims of rights or ownership to the submitted entries. In no event will work-on-behalf of teams or individuals be allowed.</p>
									<br />

									<input type="checkbox" required> I agree to the Terms and Conditions.<text style="color:red"> *</text><br /><br />
									<center>
										<button class="btn btn-success" type="submit">Submit your application</button>
										<div style="font-size:10px; color:grey;"><i>(Check if your have filled all the required fields if not submitted)</i></div>
									</center>
								</div>
							</section>
						</div>

					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
	</body>

	</html>
<?php
} else {
	header("Location: ../auth/sign-up.php");
}
?>