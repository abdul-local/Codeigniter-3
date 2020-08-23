<?php
// buat sub classs
class Blog extends CI_Controller{
    //karena kita selalu mengguanak load database makanya kita gunakan megic method constructor
    public function __construct(){
        parent::__construct();
        // kita buatkan akses ke databasennya
        $this->load->database();
        $this->load->helper('url');
    }


        // kita buat method sendiri
         public function index(){
            // kita akses object database
            // $this->load->database();
            // akses data di mysqlnya
            // $query = $this->db->query(" SELECT * FROM blog ");
            // kita gunakan query builder 
            $query=$this->db->get('blog');
            // kita ambil method yang bernama result dari query
            $data['blogs']=$query->result_array();
             $this->load->view('blog',$data);

        }
        // buat method baru
        public function detail($url){
            // akses databasenya
            // $this->load->database();
            // kita ambil data dari database dan di simpan dalam variabel query
            // $query = $this->db->query('SELECT * FROM blog WHERE url="'.$url.'"');

            // kita filter nama colom url dengan nilaie url
            $this->db->where('url',$url);

            // kita gunakan metod yang di sediakan sama codeigniter
            $query= $this->db->get('blog');

            // kita buat kan sebuah varibel dengan nama data dan index nya blog dan kita gunakan row untuk satu baris saja
            $data['blog']=$query->row_array();
            // print_r($data);
            //kita panggil data detail
            $this->load->view('detail',$data);
            

        }
     }








?>