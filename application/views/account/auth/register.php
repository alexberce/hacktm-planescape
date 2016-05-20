<div class="wrapper">
	<div class="register-form">

		<div class="brand">
			<h2>First time?</h2>
		</div>

		<div class="regp pull-left">
			<form action="<?=base_url()?>account/register" method="post" id="register-form">
				<div class="oauth-content">
					<ul>
						<li>
							<div class="facebook">
								<a class="btn" href=""><i class="fa fa-lg fa-facebook-square"></i> Sign up with Facebook</a>
							</div>
						</li>
						<li>
							<div class="twitter">
								<button class="btn social-btn"><i class="fa fa-lg fa-twitter-square"></i> Sign up with
									Twitter
								</button>
							</div>
						</li>
						<li>
							<div class="google">
								<button class="btn social-btn"><i class="fa fa-lg fa-google-plus-square"></i> Sign up
									with Google
								</button>
							</div>
						</li>
				</div>
				<hr/>
				<div class="form-group email-form">
					<input type="text" id="email-field" class="form-control" placeholder="Email" name="email">
					<span class="form-control-feedback glyphicon " aria-hidden="true" id="email-check"></span>
				</div>

				<div class="form-group username-form">
					<input type="text" id="username-field" class="form-control" placeholder="Username" name="username">
					<span class="form-control-feedback glyphicon " aria-hidden="true" id="username-check"></span>
				</div>

				<div class="form-group password-form">
					<input type="password" id="password-field" class="form-control" placeholder="Password"
						   name="password">
				</div>

				<div class="form-group retype-password-form" style="position:relative;">
					<input type="password" id="retype-password-field" class="form-control"
						   placeholder="Re-type password" name="retype-password">
					<div class="password-control">
						<button type="button" class="btn-mini" id="show-hide">Show</button>
					</div>
				</div>


				<div class="form-group">
					<button style="width:100%;" class="btn btn-success" id="register-btn">Create account</button>
				</div>
				<div class="register-link">
					Wanna back? <a href="<?= base_url(); ?>account/login">Back to login!</a>
				</div>

			</form>
		</div>


	</div>
</div>
</div>