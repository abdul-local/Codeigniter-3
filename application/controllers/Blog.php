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
            $query=$this->Blog_model->getSingleBlog('url' ,$url);
            $data['blog']=$query->row_array();
        
            $this->load->view('detail',$data);
            

        }

        //buat method baru untuk menambahkan artikel

        public function add()
        
        {
        // kita tangkap dgn menggunakan method yang sudah di sediakan ama CI
        // $this->input->get();
        if($this->input->post()){
        $data['title']=$this->input->post('judul');
        $data['content']=$this->input->post('content');
        $data['url']=$this->input->post('url');
        $id= $this->Blog_model->insert($data);
        if($id){
            echo " Data Berhasil di simpan";
        }else

            echo" Data gagal di simpan ";
            
        }


        $this->load->view('form_add');

         }


         // buat method baru untuk edit data guys


         public function edit($id)
         {
             $query=$this->Blog_model->getSingleBlog('id', $id);
             $data['blog']=$query->row_array();
             // mau nangkap data yang tadi saya ubah
             if($this->input->post()){
                 $post['title'] =$this->input->post('title');
                 $post['content'] =$this->input->post('content');
                 $post['url']=$this->input->post('url');

                $id= $this->Blog_model->updateBlog($id, $post);

                if($id){
                    echo " Data berhasil di simpan";
                }else{
                    echo "Data gagal di simpan";


                }
                   
            }
            $this->load->view('form_edit',$data);
         }
        
     }








?>