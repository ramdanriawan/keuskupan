<?php include 'header.php'; ?>
<div class="container" style="margin: 20px;">
	<div class="row">
		<div class="col-md-12">
		<form class="" action="insert" method="post" ">

			<?php 
				$query = $this->db->query("select * from list_anggota_keluarga where id_anggota_keluarga=$_GET[id_anggota_keluarga] AND id=$_GET[id]");
				$data = $query->result()[0];

			 ?>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="" name="nama" placeholder="Nama" value="<?php echo $data->nama;?>" required>
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
						<input class="form-control" type="" name="tempat_dan_tgl_lahir" placeholder="Tempat Dan Tgl Lahir" value="<?php echo $data->tempat_dan_tgl_lahir ?>"  required>
					</div>
					<div class="form-group">
						<select class="form-control" name="jenis_kelamin" required>
							<option value="">--Jenis Kelamin--</option>
							<?php 
								$query = $this->db->query("select * from jenis_kelamin");

								foreach ($query->result() as $key => $value) {$key += 1;
								if($value->jenis_kelamin == $data->jenis_kelamin)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->jenis_kelamin' $selected>$key. $value->jenis_kelamin</option>";
								}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="hub_dngn_kepala_rt" required>
							<option value="">--Hubungan Dengan Kepala Rt--</option>
							<?php 
							$query = $this->db->query("select * from hub_dngn_kepala_rt");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->hub_dngn_kepala_rt == $data->hub_dngn_kepala_rt)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->hub_dngn_kepala_rt' $selected>$value->hub_dngn_kepala_rt</option>";
							}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="suku_bangsa" required>
							<option value="">--Kode Suku Bangsa--</option>
							<?php 
							$query = $this->db->query("select * from kode_suku_bangsa");
							foreach ($query->result() as $key => $value) {$key += 1;
							if($value->etnis == $data->suku_bangsa)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->etnis' $selected>$key. $value->etnis</option>";
							}


							?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="pendidikan" required>
							<option value="">--Pendidikan--</option>
							<optgroup label="Jika Tamat">
								<?php 
								$query = $this->db->query("select * from pendidikan where kategory='tamat'");

								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->pendidikan == $data->pendidikan)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->pendidikan' $selected>$key. $value->pendidikan</option>";
								}
								?>
							</optgroup>
							<optgroup label="Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik">
								<?php 
								$query = $this->db->query("select * from pendidikan where kategory='masih_belajar'");
								foreach ($query->result() as $key => $value) {$key += 1;
								if($value->pendidikan == $data->pendidikan)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='{$key}. $value' $selected>$key. $value->pendidikan</option>";
								}
								?>
							</optgroup>
							<optgroup label="Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik">
								<?php 
								$query = $this->db->query("select * from pendidikan where kategory='masih_belajar_non'");
								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->pendidikan == $data->pendidikan)
									{
										$selected = "selected";
									}else{
										$selected = "";
									}
									echo "<option value='{$key}. $value' $selected>$key. $value->pendidikan</option>";
								}
								?>
							</optgroup>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="bidang_studi" required>
							<option value="">--Kode Bidang Studi--</option>
							
							<?php 
								$query = $this->db->query("select * from kode_bidang_studi");

								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->bidang_studi == $data->bidang_studi)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->bidang_studi' $selected>$key. $value->bidang_studi</option>";
								}

							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="pekerjaan" required>
							<option value="">--Kode Pekerjaan--</option>
							
							<?php 
							$query = $this->db->query("select * from kode_pekerjaan");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->jenis_pekerjaan == $data->pekerjaan)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->jenis_pekerjaan' $selected>{$value->kode}. $value->jenis_pekerjaan</option>";
							}

							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="golongan_darah" required>
							<option value="">--Golongan Darah--</option>
						<?php 
						$query = $this->db->query("select * from golongan_darah");

						foreach ($query->result() as $key => $value) {$key += 1;
							if($value->golongan_darah == $data->golongan_darah)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
							echo "<option value='$value->golongan_darah' $selected>$key. $value->golongan_darah</opttion>";
						}

						 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="status_kesehatan" required>
							<option value="">--Status Kesehatan--</option>
							<?php 

							$query = $this->db->query("select * from status_kesehatan");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->status_kesehatan == $data->status_kesehatan)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->status_kesehatan' $selected>{$value->kode}. $value->status_kesehatan</option>";
							}
							 ?>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="waktu_baptis" required>
							<option value="">--Waktu Baptis--</option>
							<?php 

							$query = $this->db->query("select * from waktu_baptis");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->waktu_baptis == $data->waktu_baptis)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->waktu_baptis' $selected>{$value->id}. $value->waktu_baptis</option>";
							}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="tempat_dan_tgl_baptis" placeholder="Tempat Dan Tanggal Baptis" value="<?php echo $data->tempat_dan_tgl_baptis; ?>" required>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="tempat_dan_tahun_penguatan" placeholder="Tempat Dan Tahun Penguatan" value="<?php echo $data->tempat_dan_tahun_penguatan; ?>" required>
					</div>
					<div class="form-group">
						<select class="form-control" name="status_perkawinan" required>
							<option value="">--Status Perkawinan--</option>

							<?php 

								$query = $this->db->query("select * from status_perkawinan");

								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->status_perkawinan == $data->status_perkawinan)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->status_perkawinan' $selected>$key. $value->status_perkawinan</option>";
								}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="jabatan_sosial" required>
							<option value="">--Jabatan Sosial--</option>
							<?php 
								$query = $this->db->query("select * from jabatan_sosial");

								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->jabatan_sosial == $data->jabatan_sosial)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->jabatan_sosial' $selected>$key. $value->jabatan_sosial</option>";
								}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="tempat_tinggal" required>
							<option value="">--Tempat Tinggal--</option>
							<optgroup label="Di Luar Paroki di Dalam Keuskupan Setempat">
								<option value="">gk tau yg mana tabel yg di maksud</option>
							</optgroup>
							<optgroup label="Di Luar Keuskupan Setempat">
							<?php 

							$query = $this->db->query("select * from kode_keuskupan");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->nama_keuskupan == $data->tempat_tinggal)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->nama_keuskupan' $selected>{$value->kode}. $value->nama_keuskupan</option>";
							}
							 ?>
							</optgroup>
							<optgroup label="Lainnya">
								<option value="Kos di dalam paroki">Kos Di Dalam Paroki</option>
							</optgroup>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="komuni_pertama" required>
							<option value="">--Komuni Pertama--</option>
							
							<?php 

								$query = $this->db->query("select * from komuni_pertama");

								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->komuni_pertama == $data->komuni_pertama)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->komuni_pertama' $selected>$key. $value->komuni_pertama</option>";
								}
							 ?>

						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="status_gerejawi" required>
							<option value="">--Status Gerejawi--</option>
							
							<?php 

								$query = $this->db->query("select * from status_gerejawi");

								foreach ($query->result() as $key => $value) {$key += 1;
									if($value->status_gerejawi == $data->status_gerejawi)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
									echo "<option value='$value->status_gerejawi' $selected>$key. $value->status_gerejawi</option>";
								}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="keterlibatan" required>
							<option value="">--Keterlibatan--</option>
							<?php 

							$query = $this->db->query("select * from keterlibatan");

							foreach ($query->result() as $key => $value) {$key += 1;
								if($value->keterlibatan == $data->keterlibatan)
								{
									$selected = "selected";
								}else{
									$selected = "";
								}
								echo "<option value='$value->keterlibatan' $selected>$key. $value->keterlibatan</option>";
							}
							 ?>
						</select>
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="catatan" value="<?php echo $data->catatan; ?>" placeholder="catatan">
					</div>
					<div class="form-group">
						<input class="form-control" type="number" name="liber_baptizatorum" placeholder="Liber Baptizatorum (Tulis Nomor Buku Baptis)" value="<?php echo $data->liber_baptizatorum; ?>" required>
					</div>
					
					<input type="hidden" name="table" value="list_anggota_keluarga">
					<input type="hidden" name="media" value="edit_anggota_keluarga_admin">
					<input type="hidden" name="id_anggota_keluarga" value="<?php echo $_GET["id_anggota_keluarga"] ?>">
					<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-primary btn-block" type="submit">
									<span class="glyphicon glyphicon-floppy-save"></span>
									Simpan
								</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger btn-block" type="reset">
									<span class="glyphicon glyphicon-refresh"></span>
									Reset
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	</div>
</div>

<?php include "footer.php"; ?>
