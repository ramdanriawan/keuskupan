<?php include "header.php"; ?>

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
					<legend>Login User:</legend>
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