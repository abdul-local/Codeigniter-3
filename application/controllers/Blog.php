<?php
// buat sub classs
class Blog extends CI_Controller{

        // kita buat method sendiri
         public function index(){
            // kita akses object database
            $this->load->database();
            // akses data di mysqlnya
            $query = $this->db->query(" SELECT * FROM blog ");
            // kita ambil method yang bernama result dari query
            $data['blogs']=$query->result_array();
             $this->load->view('blog',$data);

        }
     }








?>