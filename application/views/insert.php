
<?php 

if($_POST["table"] == "list_anggota_keluarga")
{
	$_POST["id_anggota_keluarga"] = $_COOKIE["id_anggota_keluarga"];
	unset($_POST["table"]);
	$query = $this->db->insert("list_anggota_keluarga", $_POST);
	
	if($query)
	{
		setcookie("pesan_insert", "Berhasil Menambah Anggota Keluarga", time() + 1000000000, "/");
		header("Location: user");
	}else
	{
		setcookie("pesan_insert", "Gagal Menambah Anggota Keluarga", time() + 1000000000, "/");
		header("Location: user");
	}
}


 ?>