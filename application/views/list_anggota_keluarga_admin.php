<?php include 'header.php'; ?>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - List Anggota Keluarga <?php echo $_GET["id_anggota_keluarga"]; ?></h4>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
		
			<div class="col-md-6">
				<button class="btn btn-small btn-primary" data-toggle="modal" data-target="#tambah_anggota_keluarga">
					<span class="glyphicon glyphicon-plus"></span>
					Tambah Anggota Keluarga
				</button>
			</div>
			<div class="col-md-6">
				<input id="filter_table" class="form-control" type="search" placeholder="filter table...">
			</div>
			<div class="col-md-12" style="margin: 10px;">
				<div class="table-responsive">
					<table id="data_anggota_keluarga" class="table table-hover table-bordered table-condensed">
						<tr>
							<th>#ID</th>
							<th>Nama Anggota Rumah Tangga (RT)</th>
							<th>Agama</th>
							<th>Tempat & Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Hub dngn Kepala RT</th>
							<th>Suku Bangsa</th>
							<th>Pendidikan</th>
							<th>Bidang Studi</th>
							<th>Pekerjaan</th>
							<th>Golongan Darah</th>
							<th>Status Kesehatan</th>
							<th>Waktu Baptis</th>
							<th>Tempat & Tanggal Baptis</th>
							<th>Tempat & Tahun Penguatan</th>
							<th>Status Perkawinan</th>
							<th>Jabatan Sosial</th>
							<th>Tempat Tinggal</th>
							<th>Komuni Pertama</th>
							<th>Status Gerejawi</th>
							<th>Keterlibatan</th>
							<th>Liber Baptizatorum</th>
							<th>Catatan</th>
							<th>Actions</th>
						</tr>

						<?php 

						$mulai = ($_GET["page"] * 20) - 20;

						if(!$_GET["page"])
						{
							$mulai = 0;
						}

						$query = $this->db->query("select * from list_anggota_keluarga where id_anggota_keluarga=$_GET[id_anggota_keluarga] limit $mulai,20");

						if($query->num_rows() < 1):
							echo "<tr><td colspan=23 class=text-center><h3>Data Belum Ada</h3></td>";
						
						else:
						

						

						foreach ($query->result() as $key => $value): ?>
							<tr>
								<td><?php echo $value->id; ?></td>
								<td><?php echo $value->nama; ?></td>
								<td><?php echo $value->agama; ?></td>
								<td><?php echo $value->tempat_dan_tgl_lahir; ?></td>
								<td><?php echo $value->jenis_kelamin; ?></td>
								<td><?php echo $value->hub_dngn_kepala_rt; ?></td>
								<td><?php echo $value->suku_bangsa; ?></td>
								<td><?php echo $value->pendidikan; ?></td>
								<td><?php echo $value->bidang_studi; ?></td>
								<td><?php echo $value->pekerjaan; ?></td>
								<td><?php echo $value->golongan_darah; ?></td>
								<td><?php echo $value->status_kesehatan; ?></td>
								<td><?php echo $value->waktu_baptis; ?></td>
								<td><?php echo $value->tempat_dan_tgl_baptis; ?></td>
								<td><?php echo $value->tempat_dan_tahun_penguatan; ?></td>
								<td><?php echo $value->status_perkawinan; ?></td>
								<td><?php echo $value->jabatan_sosial; ?></td>
								<td><?php echo $value->tempat_tinggal; ?></td>
								<td><?php echo $value->komuni_pertama; ?></td>
								<td><?php echo $value->status_gerejawi; ?></td>
								<td><?php echo $value->keterlibatan; ?></td>
								<td><?php echo $value->liber_baptizatorum; ?></td>
								<td><?php echo $value->catatan; ?></td>
								<td>
									<a href="edit_anggota_keluarga_admin?id_anggota_keluarga=<?php echo $value->id_anggota_keluarga; ?>&id=<?php echo $value->id; ?>" class="btn btn-warning">
										<span class="glyphicon glyphicon-edit"></span> 
										Edit
									</a>
									<a href="insert?table=list_anggota_keluarga&id_anggota_keluarga=<?php echo $value->id_anggota_keluarga; ?>&id=<?php echo "{$value->id}&media=delete"; ?>" class="btn btn-danger delete" onclick="return confirm('Yakin ingin menghapus data ini?')">
										<span class="glyphicon glyphicon-trash"></span> 
										Delete
									</a>
								</td>
							</tr>
						 <?php endforeach; endif;?>
					</table>
				</div>

			</div>

			<div class="col-md-12">
					<ul class="pagination pagination-sm">
						<li ><a style="background: #333; color: white; font-weight: bolder; cursor: default;">Page::</a></li>

						<?php 
						$query_row = $this->db->query("select * from list_anggota_keluarga where id_anggota_keluarga=$_GET[id_anggota_keluarga]");

						if($_GET["page"] > 1)
						{
							$prev = $_GET["page"] - 1;

							echo "<li ><a href='list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]&page=$prev' style='background: #333; color: white; font-weight: bolder;'>&lArr;</a></li>";
						}

						 ?>

						<?php 


							for($i = 1; $i <= ceil($query_row->num_rows() / 20); $i++)
							{
								if($_GET["page"] == $i)
								{
									echo "<li   class='active'><a href='list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]&page=$i'>$i</a></li>";
									
								}
								else
								{
									echo "<li><a href='list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]&page=$i'>$i</a></li>";
								}
							}

						 ?>
			
						
						<?php 

						if($_GET["page"] * 20 < $query_row->num_rows())
						{
							$next = $_GET["page"] + 1;
							echo "<li ><a href='list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]&page=$next' style='background: #333; color: white; font-weight: bolder;'>&rArr;</a></li>";
						}

						 ?>
						<li ><a style="background: #333; color: white; font-weight: bolder; cursor: default;">Of: <?php echo ceil($query_row->num_rows() / 20) ?>, Total <?php echo $query_row->num_rows() ?> Data</a></li>
					</ul>
				</div>
		</div>
	</div>

</div>

<!-- modal edit -->

<div class="modal fade" id="modal_edit">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="text-center text-semibold">Edit Data</h3>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal_delete">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="text-center text-semibold">Edit Data</h3>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div>
</div>

<!-- modal tambah anggota keluarga -->

<div id="tambah_anggota_keluarga" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close btn btn-danger" data-dismiss="modal" type="button">&times;</button>
				<h3 class="text-center modal-title">Tambah Anggota Keluarga</h3>
			</div>

			<div class="modal-body">
				<form class="" action="insert" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" type="" name="nama" placeholder="Nama" value="<?php echo $_POST["nama"];?>" required>
							</div>
							<div class="form-group">
								<select class="form-control" required name="agama">
									<option value="">--Agama--</option>
									<?php 
									$query = $this->db->query("select * from agama");

									foreach ($query->result() as $key => $value) {$key += 1;
										echo "<option value='$value->agama'>$key. $value->agama</option>";
									}
									 ?>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="" name="tempat_dan_tgl_lahir" placeholder="Tempat Dan Tgl Lahir" value="<?php echo $_POST["tempat_dan_tgl_lahir"]; ?>"  required>
							</div>
							<div class="form-group">
								<select class="form-control" name="jenis_kelamin" required >
									<option value="">--Jenis Kelamin--</option>
									<?php 
										$query = $this->db->query("select * from jenis_kelamin");

										foreach ($query->result() as $key => $value) {$key += 1;
											echo "<option value='$value->jenis_kelamin'>$key. $value->jenis_kelamin</option>";
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
										echo "<option value='$value->hub_dngn_kepala_rt'>$value->hub_dngn_kepala_rt</option>";
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
										echo "<option value='$value->etnis'>$key. $value->etnis</option>";
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
											echo "<option value='$value->pendidikan'>$key. $value->pendidikan</option>";
										}
										?>
									</optgroup>
									<optgroup label="Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik">
										<?php 
										$query = $this->db->query("select * from pendidikan where kategory='masih_belajar'");

										foreach ($query->result() as $key => $value) {$key += 1;
											echo "<option value='$value->pendidikan'>$key. $value->pendidikan</option>";
										}
										?>
									</optgroup>
									<optgroup label="Jika Masih Belajar di Sekolah/Perguruan Tinggi Katolik">
										<?php 
										$query = $this->db->query("select * from pendidikan where kategory='masih_belajar_non'");

										foreach ($query->result() as $key => $value) {$key += 1;
											echo "<option value='$value->pendidikan'>$key. $value->pendidikan</option>";
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
											echo "<option value='$value->bidang_studi'>$key. $value->bidang_studi</option>";
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
										echo "<option value='$value->jenis_pekerjaan'>{$value->kode}. $value->jenis_pekerjaan</option>";
									}

									 ?>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control" name="golongan_darah"  required>
									<option value="">--Golongan Darah--</option>
								<?php 
								$query = $this->db->query("select * from golongan_darah");

								foreach ($query->result() as $key => $value) {$key += 1;
									echo "<option value='$value->golongan_darah'>$key. $value->golongan_darah</opttion>";
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
										echo "<option value='$value->status_kesehatan'>{$value->kode}. $value->status_kesehatan</option>";
									}
									 ?>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<select class="form-control" name="waktu_baptis"  required>
									<option value="">--Waktu Baptis--</option>
									<?php 

									$query = $this->db->query("select * from waktu_baptis");

									foreach ($query->result() as $key => $value) {$key += 1;
										echo "<option value='$value->waktu_baptis'>{$value->id}. $value->waktu_baptis</option>";
									}
									 ?>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="" name="tempat_dan_tgl_baptis" placeholder="Tempat Dan Tanggal Baptis" value="<?php echo $_POST["tempat_dan_tgl_baptis"]; ?>" required>
							</div>
							<div class="form-group">
								<input class="form-control" type="" name="tempat_dan_tahun_penguatan" placeholder="Tempat Dan Tahun Penguatan" value="<?php echo $_POST["tempat_dan_tahun_penguatan"]; ?>" required>
							</div>
							<div class="form-group">
								<select class="form-control" name="status_perkawinan" required>
									<option value="">--Status Perkawinan--</option>

									<?php 

										$query = $this->db->query("select * from status_perkawinan");

										foreach ($query->result() as $key => $value) {$key += 1;
											echo "<option value='$value->status_perkawinan'>$key. $value->status_perkawinan</option>";
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
											echo "<option value='$value->jabatan_sosial'>$key. $value->jabatan_sosial</option>";
										}
									 ?>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control" name="tempat_tinggal" required>
									<option value="">--Tempat Tinggal--</option>
									<!-- <optgroup label="Di Luar Paroki di Dalam Keuskupan Setempat">
										<option value="">gk tau yg mana tabel yg di maksud</option>
									</optgroup> -->
									<optgroup label="Di Luar Keuskupan Setempat">
									<?php 

									$query = $this->db->query("select * from kode_keuskupan");

									foreach ($query->result() as $key => $value) {$key += 1;
										echo "<option value='$value->nama_keuskupan'>{$value->kode}. $value->nama_keuskupan</option>";
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
											echo "<option value='$value->komuni_pertama'>$key. $value->komuni_pertama</option>";
										}
									 ?>

								</select>
							</div>
							<div class="form-group">
								<select class="form-control" name="status_gerejawi"  required>
									<option value="">--Status Gerejawi--</option>
									
									<?php 

										$query = $this->db->query("select * from status_gerejawi");

										foreach ($query->result() as $key => $value) {$key += 1;
											echo "<option value='$value->status_gerejawi'>$key. $value->status_gerejawi</option>";
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
										echo "<option value='$value->keterlibatan'>$key. $value->keterlibatan</option>";
									}
									 ?>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="" name="catatan" placeholder="catatan" required>
							</div>
							<div class="form-group">
								<input class="form-control" type="number" name="liber_baptizatorum" placeholder="Liber Baptizatorum (Tulis Nomor Buku Baptis)" value="<?php echo $_POST["liber_baptizatorum"]; ?>" required>
							</div>
							
							<input type="hidden" name="table" value="list_anggota_keluarga">
							<input type="hidden" name="media" value="tambah_anggota_keluarga_admin">
							<input type="hidden" name="id_anggota_keluarga" value="<?php echo $_GET["id_anggota_keluarga"] ?>">

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<button class="btn btn-primary btn-block" type="submit">
											<span class="glyphicon glyphicon-user"></span>
											Tambah Anggota Keluarga
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
</div>


<script>
  $(document).ready(function(){
    $("#filter_table").keyup(function(){
      text = $(this).val().toLowerCase();
      console.log(text);

      for (var i = $("#data_anggota_keluarga tr").length - 1; i >= 0; i--) 
      {
          var indexOf = $(`#data_anggota_keluarga tr`).eq(i).text().toLowerCase().indexOf(text);

          if(indexOf > -1)
          {
            $("#data_anggota_keluarga tr").eq(i).show();
          }
          else
          {
            $("#data_anggota_keluarga tr").eq(i).hide();
            $("#data_anggota_keluarga tr").eq(0).show();
          }
      }

    })
  })
</script>

<?php include 'footer'; ?>
<?php 
if(isset($_COOKIE["pesan_insert"]))
{
	echo "<script>alert('$_COOKIE[pesan_insert]');</script>";
	setcookie("pesan_insert", "", time() - 1, "/");
}

?>