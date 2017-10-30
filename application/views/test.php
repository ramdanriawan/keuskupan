<?php 
$query = $this->db->query("select * from login where username='user1' AND password='user1'");

print_r($query->result());

?>