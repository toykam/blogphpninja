<div class="container">

	<form method="POST" class="form col" action="<?php echo site_url()?>users/loginuser">
		<h3>Login Here</h3>
		<?php foreach($login_credentials as $lc):?>
			<div class="form-group">
				<label for="email"><?php echo ucfirst($lc)?></label>
				<?php echo "<input type='".$lc."'  name='".$lc."' class='form-control' placeholder='Enter Your ".ucfirst($lc)."'/>"; ?>
			</div>
		<?php endforeach;?>
		<div class="form-group">
			<input type="submit" name="login_btn" value="Login" class="btn btn-primary" />
		</div>
		<div class="form-group">
			<p>Don't have an account? <a href="<?php echo site_url()?>users/register">Register</a></p>
			<p><a href="<?php echo site_url()?>users/forgot_password">forgot password</a></p>
		</div>
	</form>

</div>