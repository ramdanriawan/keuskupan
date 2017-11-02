<?php include "header.php"; ?>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
			</div>
		</div>
	</div>


	<!-- code added by ramdan -->
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-heading">
				<h2 class="text-center">Registrasi Kepala Keluarga</h2>
			</div>
			<div class="panel-body">
			<form id="registrasi_kepala_keluarga" class="" action="" method="post">

				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
				</div>

				<fieldset>
					<legend>Data Login</legend>
					<div class="form-group">
						<input id="username" class="form-control" type="" name="username" placeholder="Username" maxlength="30" required value="<?php echo $_POST["username"];?>">
					</div>
					<div class="form-group">
						<input id="password1" class="form-control" type="password" name="password1" placeholder="Password" maxlength="30" required value="<?php echo $_POST["password1"];?>">
					</div>
					<div class="form-group">
						<input id="password2" class="form-control" type="password" name="password2" placeholder="Input Lagi Password" maxlength="30" required value="<?php echo $_POST["password2"];?>">
					</div>
				</fieldset>

				<fieldset>
					<legend style="margin-bottom: -10px">Data Pribadi</legend>
					<div class="form-group">
						<label></label>
						<input class="form-control" type="" name="nama" placeholder="Nama" required value="<?php echo $_POST["nama"];?>">
					</div>
					<div class="form-group">
						<select class="form-control" required name="agama">
							<option value="">--Agama--</option>
							<option value="islam" <?php if($_POST["agama"] == "islam"){echo "selected";} ?>>islam</option>
							<option value="kristen" <?php if($_POST["agama"] == "kristen"){echo "selected";} ?>>kristen</option>
							<option value="katolik" <?php if($_POST["agama"] == "katolik"){echo "selected";} ?>>katolik</option>
							<option value="hindu" <?php if($_POST["agama"] == "hindu"){echo "selected";} ?>>hindu</option>
							<option value="budha" <?php if($_POST["agama"] == "budha"){echo "selected";} ?>>budha</option>
							<option value="khonghucu" <?php if($_POST["agama"] == "khonghucu"){echo "selected";} ?>>khonghucu</option>
							<option value="lainnya" <?php if($_POST["agama"] == "lainnya"){echo "selected";} ?>>lainnya</option>
							<option value="kato_non_kato" <?php if($_POST["agama"] == "kato_non_kato"){echo "selected";} ?>>Kato -> Non Kato</option>
							<option value="kato_kristen" <?php if($_POST["agama"] == "kato_kristen"){echo "selected";} ?>>Kato -> Kristen</option>
							<option value="katekumen" <?php if($_POST["agama"] == "katekumen"){echo "selected";} ?>>katekumen</option>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="alamat" placeholder="Alamat" required maxlength="200" value="<?php echo $_POST["alamat"];?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="number" name="telp" placeholder="Telp (max: 15)" required value="<?php echo $_POST["telp"];?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="wilayah_atau_lingkungan" placeholder="Wilayah atau Lingkungan" required value="<?php echo $_POST["wilayah_atau_lingkungan"];?>">
					</div>
					<div class="form-group">
						<select class="form-control" name="status_nikah" required>
							<option value="">--Status Nikah--</option>
							<?php 
								$query = $this->db->query("select * from status_perkawinan");

								foreach ($query->result() as $key => $value) {
									echo "<option value='$value->status_perkawinan'>$value->status_perkawinan</option>";
								}

							 ?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="tempat_atau_tgl_nikah" placeholder="Tempat/tgl Nikah" required maxlength="50" value="<?php echo $_POST["tempat_atau_tgl_nikah"];?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="liber_matrimonium" placeholder="Liber Matrimonium" required value="<?php echo $_POST["liber_matrimonium"];?>">
					</div>
					<div class="form-group">
						<select class="form-control" required name="kondisi_ekonomi">
							<option value="">--Kondisi Ekonomi--</option>
							<option value="bisa_membantu" <?php if($_POST["kondisi_ekonomi"] == "bisa_membantu"){echo "selected";} ?>>Bisa Membantu</option>
							<option value="biasa" <?php if($_POST["kondisi_ekonomi"] == "biasa"){echo "selected";} ?>>Biasa</option>
							<option value="perlu_dibantu" <?php if($_POST["kondisi_ekonomi"] == "perlu_dibantu"){echo "selected";} ?>>Perlu dibantu</option>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="jenis_rumah_tangga" placeholder="Jenis Rumah Tangga" required value="<?php echo $_POST["jenis_rumah_tangga"];?>">
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-primary btn-block" type="submit">
									Register
									<span class="glyphicon glyphicon-user"></span>
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
</div>
	<!-- code ended  -->
</div>

<?php include "footer.php"; ?>

<?php
if($_POST)
{
	$id_anggota_keluarga = rand(1000000, 9999999);

	foreach ($_POST as $key => $value) {
		if(empty($_POST["$key"]) || !isset($_POST["$key"]))
		{
			die("<script>alert('Semua Data Wajib Diisi!')</script>");
		}elseif($this->db->query("select username from login where username='$_POST[username]'")->num_rows() > 0){
			die("<script>alert('Username Sudah Terdaftar');</script>");
		}
	}

	$data_kepala_keluarga = array(
		"id_anggota_keluarga" => $id_anggota_keluarga,
		"nama" => $_POST["nama"],
		"agama" => $_POST["agama"],
		"alamat" => $_POST["alamat"],
		"telp" => $_POST["telp"],
		"wilayah_atau_lingkungan" => $_POST["wilayah_atau_lingkungan"],
		"status_nikah"  => $_POST["status_nikah"],
		"tempat_atau_tgl_nikah" => $_POST["tempat_atau_tgl_nikah"],
		"liber_matrimonium" => $_POST["liber_matrimonium"],
		"kondisi_ekonomi" => $_POST["kondisi_ekonomi"],
		"jenis_rumah_tangga" => $_POST["jenis_rumah_tangga"]
	);

	if($this->db->insert("list_kepala_keluarga", $data_kepala_keluarga))
	{
		echo "<script>alert('Berhasil Memasukkan Data Kepala Keluarga')</script>";
	}else
	{
		echo "<script>alert('Gagal Memasukkan Data Kepala Keluarga')</script>";
	}

	$data_login = array(
		"username" => $_POST["username"],
		"password" => $_POST["password1"],
		"session" => "list_kepala_keluarga",
		"id_anggota_keluarga" => $id_anggota_keluarga
	);

	if($this->db->insert("login", $data_login))
	{
		echo "<script>alert('Berhasil Memasukkan Data Login Sebagai Session Kepala Keluarga')</script>";
	}else
	{
		echo "<script>alert('Gagal Memasukkan Data Login Sebagai Session Kepala Keluarga')</script>";
	}


}


?>