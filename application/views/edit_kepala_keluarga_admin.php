<?php include "header.php"; ?>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Edit Kepala Keluarga <?php echo $_GET["id_anggota_keluarga"] ?></h4>
			</div>
		</div>
	</div>


	<!-- code added by ramdan -->
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-heading">
				<h2 class="text-center">Edit Kepala Keluarga <?php echo $_GET["id_anggota_keluarga"] ?></h2>
			</div>
			<div class="panel-body">
			<form id="registrasi_kepala_keluarga" class="" action="" method="post">
				<?php 
				$query = $this->db->query("select * from list_kepala_keluarga where id_anggota_keluarga=$_GET[id_anggota_keluarga]");
				$data = $query->result()[0];
				$query2 = $this->db->query("select * from login where id_anggota_keluarga=$_GET[id_anggota_keluarga]");
				$data2 = $query2->result()[0];

				 ?>
				<div class="form-group">
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
				</div>

				<fieldset>
					<legend>Data Login</legend>
					<div class="form-group">
						<input id="username" class="form-control" type="" name="username" placeholder="Username" maxlength="30" required value="<?php echo $data2->username ?>" disabled>
					</div>
					<div class="form-group">
						<input id="password1" class="form-control" type="password" name="password1" placeholder="Password" maxlength="30" required value="<?php echo $data2->password ?>">
					</div>
					<div class="form-group">
						<input id="password2" class="form-control" type="password" name="password2" placeholder="Input Lagi Password" maxlength="30" required value="<?php echo $data2->password ?>">
					</div>
				</fieldset>

				<fieldset>
					<legend style="margin-bottom: -10px">Data Pribadi</legend>
					<div class="form-group">
						<label></label>
						<input class="form-control" type="" name="nama" placeholder="Nama" required value="<?php echo $data->nama ?>">
					</div>
					<div class="form-group">
						<select class="form-control" required name="agama">
							<option value="">--Agama--</option>
							<?php 
							$query = $this->db->query("select * from agama");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->agama == $data->agama)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->agama' $selected>$key. $value->agama</option>";
							}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="alamat" placeholder="Alamat" required maxlength="200" value="<?php echo $data->alamat ?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="number" name="telp" placeholder="Telp (max: 15)" required value="<?php echo $data->telp ?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="wilayah_atau_lingkungan" placeholder="Wilayah atau Lingkungan" required value="<?php echo $data->wilayah_atau_lingkungan ?>">
					</div>
					<div class="form-group">
						<select class="form-control" name="status_nikah" required>
							<option value="">--Status Nikah--</option>
							<?php 
								$query = $this->db->query("select * from status_perkawinan");

								foreach ($query->result() as $key => $value) {
								if($value->status_perkawinan == $data->status_nikah)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->status_perkawinan' $selected>$value->status_perkawinan</option>";
								}

							 ?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="tempat_atau_tgl_nikah" placeholder="Tempat/tgl Nikah" required maxlength="50" value="<?php echo $data->tempat_atau_tgl_nikah ?>">
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="liber_matrimonium" placeholder="Liber Matrimonium" required value="<?php echo $data->liber_matrimonium ?>">
					</div>
					<div class="form-group">
						<select class="form-control" required name="kondisi_ekonomi">
							<option value="">--Kondisi Ekonomi--</option>
							<?php 
								$query = $this->db->query("select * from kondisi_ekonomi");

								foreach ($query->result() as $key => $value) {
								if($value->kondisi_ekonomi == $data->kondisi_ekonomi)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->kondisi_ekonomi' $selected>$value->kondisi_ekonomi</option>";
								}

							 ?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="jenis_rumah_tangga" placeholder="Jenis Rumah Tangga" required value="<?php echo $data->jenis_rumah_tangga ?>">
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-primary btn-block" type="submit">
									Save
									<span class="glyphicon glyphicon-floppy-save"></span>
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

	foreach ($_POST as $key => $value) {
		if(empty($_POST["$key"]) || !isset($_POST["$key"]))
		{
			die("<script>alert('Semua Data Wajib Diisi!')</script>");
		}
	}

	$data_kepala_keluarga = array(
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

	$this->db->where("id_anggota_keluarga", $_GET["id_anggota_keluarga"]);
	if($this->db->update("list_kepala_keluarga", $data_kepala_keluarga))
	{
		echo "<script>alert('Berhasil Mengupdate Data Kepala Keluarga')</script>";
	}else
	{
		echo "<script>alert('Gagal Mengupdate Data Kepala Keluarga')</script>";
	}

	$data_login = array(
		"password" => $_POST["password1"],
		"session" => "list_kepala_keluarga"
	);

	$this->db->where("id_anggota_keluarga", $_GET["id_anggota_keluarga"]);
	if($this->db->update("login", $data_login))
	{
		setcookie("pesan_insert", "berhasil melakukan pengeditan data kepala keluarga untuk $_GET[id_anggota_keluarga]", time() + 1000000, "/");
		header("location: list_kepala_keluarga");
	}else
	{
		setcookie("pesan_insert", "Gagal melakukan pengeditan data kepala keluarga untuk $_GET[id_anggota_keluarga]", time() + 1000000, "/");
		header("location: list_kepala_keluarga");
	}


}


?>