<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
</head>
<body class="login-body">
	<div class="container">
		<div class="row login-row justify-content-center align-items-center">
			<div class="col-sm-4">
				<div class="login-panel panel panel-primary">
					<div class="panel-heading" style="text-align:center">
						<h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login
						</h3>
					</div>
					<hr>
					<div class="panel-body">
						<form method="POST" action="<?php echo base_url(); ?>admin/login">
							<fieldset>
								<div class="form-group mb-3">
									<input class="form-control" placeholder="Email" type="email" name="email" required>
								</div>
								<div class="form-group mb-3">
									<input class="form-control" placeholder="Password" type="password" name="password" required>
								</div>
								<div class="form-group">									
									<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<!-- <?php
					if($this->session->flashdata('error')){
						?>
						<div class="alert alert-danger text-center" style="margin-top:20px;">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
						<?php
					}
				?> -->
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>