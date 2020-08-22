<?php
// buat sub classs
class Blog extends CI_Controller{

    // buat method baru
    public function index($nama,$gol,$alamat){
       $data=[
           'nama'=>$nama,
           'gol'=>$gol,
           'alamat'=>$alamat
       ];
        $this->load->view('blog' ,$data);

    
    }

}







?>