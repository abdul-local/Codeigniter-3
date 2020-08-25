<?php
// buat sub classs
class Blog extends CI_Controller{
    //karena kita selalu mengguanak load database makanya kita gunakan megic method constructor
    public function __construct(){
        parent::__construct();
        // kita buatkan akses ke databasennya
        // $this->load->database();
        // $this->load->helper('url');
        // karena menggunakan model di kontrol kita maka kita load dia
        $this->load->model('Blog_model');
        // kita load helper form
        // $this->load->helper('form');
    }


        // kita buat method sendiri
         public function index($offset = 0){

             $this->load->library('pagination');
             $config['base_url']= site_url('Blog/index');
             $config['total_rows'] = $this->Blog_model->getTotalBlog();
             $config['per_page'] =3;
             $this->pagination->initialize($config);
             $data['blog']= $this->Blog_model->getBlog($config['per_page'],$offset);
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
            if($this->input->post())
            {
                $this->form_validation->set_rules('title', 'Judul', 'required');
                $this->form_validation->set_rules('url', 'URL', 'required|alpha_dash');
                $this->form_validation->set_rules('content', 'Konten', 'required');
                if($this->form_validation->run()===TRUE)
                {
                    $data['title']=$this->input->post('title');
                    $data['content']=$this->input->post('content');
                    $data['url']=$this->input->post('url');
                    //konfigurasi upload
                    $config['upload_path']         = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 2000;
                    $config['max_width']            = 2000;
                    $config['max_height']           = 2000;
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('cover'))
                    {
                        echo $this->upload->display_errors();
                    }
                    else
                    {
                        $data['cover'] = $this->upload->data('file_name');
                    }
                    $id=$this->Blog_model->insert($data);
                    if($id)
                    {
                        echo "Data berhasil disimpan";
                        redirect('/');
                    }
                    else
                    {
                        echo "Data gagal disimpan";
                    }
                }
            }
            $this->load->view('form_add');
        }


         // buat method baru untuk edit data guys


         public function edit($id)
         {
             $query=$this->Blog_model->getSingleBlog('id', $id);
             $data['blog']=$query->row_array();
             // mau nangkap data yang tadi saya ubah
             if($this->input->post())
             {
                 //kita gunakan form_validation
                 $this->form_validation->set_rules('title','judul','required');
                 $this->form_validation->set_rules('url','URL','required|alpha_dash');
                 $this->form_validation->set_rules('content','Konten','required');
                 $post['title'] =$this->input->post('title');
                 $post['content'] =$this->input->post('content');
                 $post['url']=$this->input->post('url');
                 if($this->form_validation->run() === TRUE)
                 {
                 
                $config['upload_path'] = './uploads';
                $config['allowed_types'] ='gif|jpg|png';
                $config['max_size']    = 2000;
                $config['max_width']   =2000;
                $config['max_heigh']  =2000;
                $this->load->library('upload', $config);
                // saya mau ngecek nilai dari upload itu
                $this->upload->do_upload('cover');
                if(!empty($this->upload->data('file_name')))
                {
                    $post['cover']= $this->upload->data('file_name');
                }

                $id = $this->Blog_model->updateBlog($id, $post);

                if($id){
                    echo " Data berhasil di simpan";
                    redirect('/');
                }else{
                    echo "Data gagal di simpan";
                    redirect('/');


                }
                   
            }
        }
            $this->load->view('form_edit',$data);
         }

         // buat method yang berfungsi untuk menghapus data
         public function delete($id){
             $this->Blog_model->deleteBlog($id);
             // kita redirect ke awal
             redirect('/');
        


         }
         
        
     }








?>