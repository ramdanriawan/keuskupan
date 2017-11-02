<?php 

 class Halaman extends CI_Controller
 {
 	
 	function index()
 	{
        header('Location: Halaman/login');
 	}

 	function login()
 	{
 		$this->load->view("login");
 	}

 	function list_kepala_keluarga()
 	{
 		$this->load->view("list_kepala_keluarga");
 	}

 	function list_anggota_keluarga()
 	{
 		$this->load->view("list_anggota_keluarga");
 	}

 	function test()
 	{
 		$this->load->view("test");
 	}

 	function user()
 	{
 		$this->load->view("user");
 	}
    
    function insert()
    {
        $this->load->view("insert");
    }

    function admin()
    {
    	$this->load->view("admin");
    }

    function list_anggota_keluarga_admin()
    {
    	$this->load->view("list_anggota_keluarga_admin");
    }

    function edit_anggota_keluarga()
    {
    	$this->load->view("edit_anggota_keluarga");
    }

    function cari()
    {
        $this->load->view("cari");
    }

 }

 ?>