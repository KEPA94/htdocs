			<!-- -->
			<div style="padding-top:30px;padding-bottom:30px;">
				<div class="container">
					
					<div class="row">

						<div class="col-md-4 col-md-offset-4">

							<!-- ALERT 
							<div class="alert alert-mini alert-danger margin-bottom-30">
								<strong>Oh snap!</strong> Login Incorrect!
							</div><!-- /ALERT -->

							<div class="box-static box-border-top padding-10">
									<h3 style="text-align:center;margin-bottom:10px;">Sign in</h3>

								<form class="nomargin" method="post" action="{BASE_URL}/verify/" autocomplete="off">
									<div class="clearfix">
										
										<!-- Username -->
										<div class="form-group">
											<input type="text" name="username" class="form-control" placeholder="Username" required="">
										</div>
										
										<!-- Password -->
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password" required="">
										</div>

										<label class="checkbox ">
										<input type="checkbox" name="keep_logged_in">
										<i></i> Keep me logged in
										</label>											
									</div>
									<div align="center" class="row">
										<input type="submit" value="Sign in" class="btn btn-3d btn-reveal btn-green">		
										<!-- Inform Tip -->                                        
											<div class="form-tip pt-20"><i>
												<a class="no-text-decoration size-13 margin-top-10 block" href="{BASE_URL}/account/reset_password/">Forgot your password?</a></i>
											</div>								
									</div>
									
									<div class="heading-title heading-line-single text-center">
										<h6>or</h6>
									</div>
											<a class="btn btn-block btn-social btn-facebook">
												<i class="fa fa-facebook"></i> Sign in with Facebook
											</a>		
								</form>
							</div>
						</div>
						{message}
					</div>
					
				</div>
			</div>

<!-- BUTTON CALLOUT -->
			<a href="{BASE_URL}/signup/" rel="nofollow" class="btn btn-xlg btn-success size-20 fullwidth nomargin noradius padding-40">
				<span class="font-lato size-30">
					New here? 
					<strong>Sign up &raquo;</strong>
				</span>
			</a>
<!-- /BUTTON CALLOUT -->


