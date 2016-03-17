<section>
	<div class="inner-pages-main">
		<div class="container">
			<div class="sign-in-area">
				<div class="star-title slab-title purple" data-effect="pop">
					<h1>Let's get started !</h1>
				</div>
				<div class="title-description" data-effect="slide-bottom">
					<div class="title-des-inner">
						<p>First, you need to Signup for Going through.</p>
					</div>
				</div>
				<div class="signup-section" data-effect="fall">
					<div class="star-signup-form-main">
					  <div class="star-signup-tabs">
					    <ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#group-signup" aria-controls="group-signup" role="tab" data-toggle="tab">Group Sign Up</a></li>
							<li role="presentation"><a href="#individual-signup" aria-controls="individual-signup" role="tab" data-toggle="tab">Individual Sign Up</a></li>
						  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="group-signup">


						<form class="user-sign-form" method="post" action="/StarRegisteration">
							<input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" name="fullname" class="form-control" placeholder="Full Name..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" name="displayname" class="form-control" placeholder="Display Name..." required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
										<input type="email" name="email" class="form-control" placeholder="Email..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" name="username" class="form-control" placeholder="User Name..." required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" name="password" class="form-control" placeholder="Password..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" name="repassword" class="form-control" placeholder="Repeat Password..." required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-phone"></i></div>
										<input type="text" name="contact_no" class="form-control" placeholder="Contact No..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area s-menu">
										<div class="input-group-addon"><i class="fa fa-question"></i></div>
										<select id="lunch" class="selectpicker form-control" name="about_us" title="Please select a lunch ...">
											<option>How did you hear about Us?</option>
											<option>Search Engine Ad</option>
											<option>Search Engine Results</option>
											<option>Friend</option>
											<option>Blog or Forum</option>
											<option>Newspaper or Magazine</option>
											<option>Event or Conference</option>
											<option>Radio</option>
											<option>Television</option>
											<option>Other</option>
										</select>
									</div>
								</div>
							</div>
							<div class="rem-me tc">
								<div class="btn-group chk-box" data-toggle="buttons">
									<label class="btn remember-check active">
										<input type="checkbox" autocomplete="off" checked>
									</label>
								</div>
								<div class="t-and-c">
									<p>Yes I accept the <a href="javascript:void(0);">terms and conditions</a> of signing up to this service and have read the <a href="javascript:void(0);">privacy policy</a> regarding the storing my information.</p>
								</div>
							</div>
							<input type="submit" class="btn-sign-up" value="submit">
						</form>

							</div>
							<div role="tabpanel" class="tab-pane" id="individual-signup">

						<form class="user-sign-form" method="post" action="/StarRegisteration">
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" name="fullname" class="form-control" placeholder="Full Name..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" name="displayname" class="form-control" placeholder="Display Name..." required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
										<input type="email" name="email" class="form-control" placeholder="Email..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-user"></i></div>
										<input type="text" name="username" class="form-control" placeholder="User Name..." required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" name="password" class="form-control" placeholder="Password..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-key"></i></div>
										<input type="password" name="repassword" class="form-control" placeholder="Repeat Password..." required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area"  id='datetimepicker2'>
										<div class="input-group-addon"><i class="fa fa-calendar-check-o"></i></div>
										<input type="text" name="DOB" class="form-control" placeholder="Date of Birth" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-transgender"></i></div>
										<ul class="form-control sex">
											<div class="btn-group radio-btn" data-toggle="buttons">
												<label class="btn radio-icon active">
													<input type="radio" name="gender" id="option1" autocomplete="off" checked>
													Male </label>
												<label class="btn radio-icon">
													<input type="radio" name="gender" id="option2" autocomplete="off">
													Female </label>
											</div>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group field-area">
										<div class="input-group-addon"><i class="fa fa-phone"></i></div>
										<input type="text" class="form-control" name="contact_no" placeholder="Contact No..." required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group field-area s-menu">
										<div class="input-group-addon"><i class="fa fa-question"></i></div>
										<select id="lunch" class="selectpicker form-control" name="about_us" title="Please select a lunch ...">
											<option>How did you hear about Us?</option>
											<option>Search Engine Ad</option>
											<option>Search Engine Results</option>
											<option>Friend</option>
											<option>Blog or Forum</option>
											<option>Newspaper or Magazine</option>
											<option>Event or Conference</option>
											<option>Radio</option>
											<option>Television</option>
											<option>Other</option>
										</select>
									</div>
								</div>
							</div>
							<div class="rem-me tc">
								<div class="btn-group chk-box" data-toggle="buttons">
									<label class="btn remember-check active">
										<input type="checkbox" autocomplete="off" checked>
									</label>
								</div>
								<div class="t-and-c">
									<p>Yes I accept the <a href="javascript:void(0);">terms and conditions</a> of signing up to this service and have read the <a href="javascript:void(0);">privacy policy</a> regarding the storing my information.</p>
								</div>
							</div>
							<input type="submit" class="btn-sign-up" value="Submit">
						</form>
							</div>
						  </div>
					  </div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
