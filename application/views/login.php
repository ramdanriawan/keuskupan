

<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- style default -->
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../js/script.php"></script>
	<script src="../gspinner/dist/js/g-spinner.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../gspinner/dist/css/gspinner.min.css">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<script type="text/javascript" src="../assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->
</head>

<div class="container">
	<div class="">
		<div class="col-md-6 col-md-offset-3">
			<form class="" action="" method="post">

				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-center">Login user dan admin</h2>
						</div>
					</div>
				</div>

				<fieldset>
					<legend>Login Form:</legend>
					<div class="form-group">
						<input class="form-control" type="" name="username" placeholder="Username" maxlength="30">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="Password" maxlength="30">
					</div>


					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-primary btn-block" type="submit">
									Login
									<span class="glyphicon glyphicon-log-in"></span>
								</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-warning btn-block" type="reset">
									Reset
									<span class="glyphicon glyphicon-refresh"></span>
								</button>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>
<?php 
if($_COOKIE["username"] && $_COOKIE["session"])
{
	setcookie("username", "login", time() - 1, "/");
	setcookie("session", "login", time() - 1, "/");
}
elseif($_POST["username"] && $_POST["password"])
{
	$query = $this->db->query("select * from login where username='$_POST[username]' AND password='$_POST[password]'");
	
	if($query->num_rows() > 0)
	{
		setcookie("username", $query->result()[0]->username, time() + 100000000, "/");
		setcookie("session", $query->result()[0]->session, time() + 10000000, "/");
		setcookie("id_anggota_keluarga", $query->result()[0]->id_anggota_keluarga, time() + 100000000, "/");


		if(strtolower($query->result()[0]->session) == "admin")
		{
			header("Location: ./admin");
		}
		elseif(strtolower($query->result()[0]->session) == "list_kepala_keluarga")
		{
			echo "<script>alert('{$query->result()[0]->session}');</script>";
			header("Location: ./user");
		}
	}
}


?>

		</div>
	</div>

	<!-- /page container -->
</html>