<?php
// buat sub classs
class Blog extends CI_Controller{
    //karena kita selalu mengguanak load database makanya kita gunakan megic method constructor
    public function __construct(){
        parent::__construct();
        // kita buatkan akses ke databasennya
        $this->load->database();
        $this->load->helper('url');
        // karena menggunakan model di kontrol kita maka kita load dia
        $this->load->model('Blog_model');
    }


        // kita buat method sendiri
         public function index(){
            $data['blogs'] = $this->Blog_model->getBlog();
             $this->load->view('blog',$data);

        }
        // buat method baru
        public function detail($url){

            // kita buat kan sebuah varibel dengan nama data dan index nya blog dan kita gunakan row untuk satu baris saja
            $data['blog']=$this->Blog_model->getSingleBlog($url);
        
            $this->load->view('detail',$data);
            

        }
     }








?>