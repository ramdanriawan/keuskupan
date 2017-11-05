
<?php 
if($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "edit_anggota_keluarga_user")
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	$this->db->where("id", $_POST["id"]);

	if($this->db->update("list_anggota_keluarga", $_POST))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: user");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: user");
	}

}
elseif($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "edit_anggota_keluarga_admin")
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	$this->db->where("id", $_POST["id"]);

	if($this->db->update("list_anggota_keluarga", $_POST))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
	}

}
elseif($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "edit_admin")
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	setcookie("id_anggota_keluarga_edit",  $_POST["id_anggota_keluarga_edit"], time() + 1000000, "/");
	setcookie("id_edit",  $_POST["id_edit"], time() + 1000000, "/");
	unset($_POST["id_anggota_keluarga_edit"]);
	unset($_POST["id_edit"]);

	$this->db->where("id", $_GET["id"]);

	if($this->db->update("list_anggota_keluarga", $_POST))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}

}
elseif($_GET["table"] == "list_anggota_keluarga" && $_GET["media"] == "delete")
{

	$this->db->where("id", $_GET["id"]);

	if($this->db->delete("list_anggota_keluarga"))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Penghapusan Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Penghapusan Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}
}

elseif($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "tambah_anggota_keluarga_admin" && $_POST["id_anggota_keluarga"])
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	foreach ($_POST as $key => $value) {
		if(!$_POST["$key"])
		{
			setcookie("pesan_insert", "Semua Form Wajib diisi", time() + 1000000, "/");
		}
	}

	$query = $this->db->insert("list_anggota_keluarga", $_POST);

	if($query)
	{
		setcookie("pesan_insert", "Berhasil Menambah Data Anggota Keluarga", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");

	}
}
elseif($_POST["table"] == "list_anggota_keluarga")
{
	$_POST["id_anggota_keluarga"] = $_COOKIE["id_anggota_keluarga"];
	unset($_POST["table"]);
	$query = $this->db->insert("list_anggota_keluarga", $_POST);

	foreach ($_POST as $key => $value) {
		if($_POST["$key"] || empty($_POST["$key"]))
		{
			setcookie("pesan_insert", "Gagal Menambah Anggota Keluarga", time() + 1000000, "/");
				header("Location: user");
		}
	}
	
	if($query)
	{
		setcookie("pesan_insert", "Berhasil Menambah Anggota Keluarga", time() + 1000000, "/");
				header("Location: user");
	}else
	{
		setcookie("pesan_insert", "Gagal Menambah Anggota Keluarga", time() + 1000000, "/");
				header("Location: user");
	}
}


 ?>