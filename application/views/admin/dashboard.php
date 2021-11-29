<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="page-header text-center">CodeIgniter Login with Flashdata</h1>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<?php
					$user = $this->session->userdata('user');
					extract($user);
				?>
				<h2>Welcome to Homepage </h2>
				<h4>User Info:</h4>
				<p>Fullname: <?php echo $fname; ?></p>
				<p>Email: <?php echo $email; ?></p>
				<p>Password: <?php echo $password; ?></p>
				<a href="<?php echo base_url(); ?>admin/logout" class="btn btn-danger">Logout</a>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
