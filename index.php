<?php
session_start();
error_reporting(1);

require_once __DIR__.'/variables.php';
require_once __DIR__.'/handle.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Laravel Project Installer</title>
	<style>
		#wrapper {
			padding: 10px;
			width: 500px;
			height: 400px;
			margin: auto;
			float: none;
		}
		h4, h5 {
			text-transform: uppercase;
			text-align: center;
		}
		input {
			padding: 2px;
			width: 100%;
		}
		table {
			width: 100%;
		},
		#formWrapper {
		
		}
		.field_set{
		  border-color: #F00;
		  border-style: solid;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<h4>Simple Laravel Project Installer</h4>
		<h5>V <?php echo VERSION; ?></h5>
		<div id="formWrapper">
			<div>
				<?php if($_SESSION['errors'] != null) : ?>
				<p style="padding: 8px; text-align: center; background-color: red; color: #fff;">
					<?php echo $_SESSION['errors']; ?>
				</p>
				<?php endif; ?>
			</div>
			<?php require __DIR__.'/step.php'; ?>
		</div>
		<?php require __DIR__.'/req.php'; ?>
		<p>
			<form action="" method="POST">
				<input type="hidden" name="retry" value="retry">
				<button type="submit">
					Ulang
				</button>
			</form>
		</p>
	</div>
</body>
</html>