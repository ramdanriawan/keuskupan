<?php include 'header.php'; error_reporting(0) ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<form class="form-inline" style="margin: 20px;">
				<input class="form-control" type="search" name="cari" placeholder="Cari berdasarkan nama..." required minlength="2" value="<?php echo $_GET["cari"] ?>">
				<button class="btn btn-primary">
					<span class="glyphicon glyphicon-search"></span> 
					Cari
				</button>
			</form>
		</div>
		<div class="col-md-8 col-md-offset-4">
			<form class="form-inline">
				<input id="filter_table" class="form-control input-lg" type="search" placeholder="filter table..." style="margin: 20px;">
			</form>
		</div>

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					 <div class="table-responsive">
					 	<table id="data_anggota_keluarga" class="table table-responsive table-hover table-striped table-condensed">
					 		<tr>
								<th>#id_anggota_keluarga</th>
								<th>Nama</th>
								<th>Agama</th>
								<th>Alamat</th>
								<th>Telp.</th>
								<th>Wilayah/Lingkungan</th>
								<th>Status Nikah</th>
								<th>Tempat/Tgl Nikah</th>
								<th>Liber Matrimonium</th>
								<th>Kondisi Ekonomi</th>
								<th>Jenis Rumah Tangga</th>
								<th>Actions</th>
							</tr>

							<tr>
								<?php 

								$mulai = ($_GET["page"] * 20) - 20;

								if(!$_GET["page"])
								{
									$mulai = 0;
								}

								if($_GET["cari"])
								{
									$query = $this->db->query("select * from list_kepala_keluarga where nama like '%$_GET[cari]%' limit $mulai,20");
									
								}
								foreach ($query->result() as $key => $value): echo "<tr>";?>

								<td><a href="./list_anggota_keluarga_admin?id_anggota_keluarga=<?php echo $value->id_anggota_keluarga; ?>"><?php echo $value->id_anggota_keluarga; ?></a></td>
								<td><?php echo $value->nama; ?></td>
								<td><?php echo $value->agama; ?></td>
								<td><?php echo $value->alamat; ?></td>
								<td><?php echo $value->telp; ?></td>
								<td><?php echo $value->wilayah_atau_lingkungan; ?></td>
								<td><?php echo $value->status_nikah; ?></td>
								<td><?php echo $value->tempat_atau_tgl_nikah; ?></td>
								<td><?php echo $value->liber_matrimonium; ?></td>
								<td><?php echo $value->kondisi_ekonomi; ?></td>
								<td><?php echo $value->jenis_rumah_tangga; ?></td>
								<td>
									<div class="btn-group btn-group-sm">
										<a href="cari?media=delete&id_anggota_keluarga=<?php echo $value->id_anggota_keluarga; ?>&cari=<?php echo $_GET["cari"] ?>" class="delete btn btn-warning btn-sm" type="button">
											<span class="glyphicon glyphicon-trash"></span>
										</button>
										<a href="edit_kepala_keluarga_admin?id_anggota_keluarga=<?php echo $value->id_anggota_keluarga; ?>" class="btn btn-info btn-sm" type="button">
											<span class="glyphicon glyphicon-edit"></span>
										</a>
									</div>
								</td>

							<?php echo "</tr>"; endforeach; ?>
							</tr>
					 	</table>
					 		<div class="col-md-12">
								<ul class="pagination pagination-sm">
								<li ><a style="background: #333; color: white; font-weight: bolder; cursor: default;">Page::</a></li>

								<?php 
								$query_row = $this->db->query("select * from list_kepala_keluarga where nama like '%$_GET[cari]'");

								if($_GET["page"] > 1)
								{
									$prev = $_GET["page"] - 1;

									echo "<li ><a href='cari?cari=$_GET[cari]&page=$prev' style='background: #333; color: white; font-weight: bolder;'>&lArr;</a></li>";
								}

								 ?>

								<?php 


									for($i = 1; $i <= ceil($query_row->num_rows() / 20); $i++)
									{
										if($_GET["page"] == $i)
										{
											echo "<li   class='active'><a href='cari?cari=$_GET[cari]&page=$i'>$i</a></li>";
											
										}
										else
										{
											echo "<li><a href='cari?cari=$_GET[cari]&page=$i'>$i</a></li>";
										}
									}

								 ?>
					
								
								<?php 

								if($_GET["page"] * 20 < $query_row->num_rows())
								{
									$next = $_GET["page"] + 1;
									echo "<li ><a href='cari?cari=$_GET[cari]&page=$next' style='background: #333; color: white; font-weight: bolder;'>&rArr;</a></li>";
								}

								 ?>
								<li ><a style="background: #333; color: white; font-weight: bolder; cursor: default;">Of: <?php echo ceil($query_row->num_rows() / 20) ?>, Total <?php echo $query_row->num_rows() ?> Data</a></li>
							</ul>
						</div>
					 </div>
				</div>
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
	
	
    $(".delete").click(function(){
    	return confirm("apakah kamu akan menghapus kepala keluarga beserta anggota untuk id ini?");
    })
  })
</script>

<?php include 'footer.php'; ?>

<?php 
if($_GET["media"] == "delete")
{
	$query = $this->db->query("delete from list_kepala_keluarga where id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	$query2 = $this->db->query("delete from list_anggota_keluarga where id_anggota_keluarga=$_GET[id_anggota_keluarga]");

	if($query && $query2)
	{
		//ini alertnya gak jalan
		echo "<script> alert('berhasil menghapus kepala keluarga beserta anggotanya id $_GET[id_anggota_keluarga]');</script>";

		header("location: cari?cari=$_GET[cari]");
	}
	else
	{
		echo "<script> alert('Gagal menghapus kepala keluarga beserta anggotanya id $_GET[id_anggota_keluarga]');</script>";

	}
}