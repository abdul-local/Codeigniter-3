<?php

// subclas 
class Blog_model extends CI_Model {

    // buat method yang berfungsi untuk mengambil semua data
    public function getBlog($limit,$offset)
    {
        // kita gunakan query builder untuk mengembalikan semua nilai blog
        $filter=$this->input->get('cari');
        // menggunakan method like untuk mencari atau kata yang paling tepat di temukan
        $this->db->like('title',$filter);
        $this->db->limit($limit,$offset);
        // proses pengurutannya
        $this->db->order_by('date','desc');
         $query = $this->db->get('blog');
         return $query->result_array();

    }
    public function getTotalBlog()
    {
        // kita gunakan query builder untuk mengembalikan semua nilai blog
        $filter=$this->input->get('cari');
        // menggunakan method like untuk mencari atau kata yang paling tepat di temukan
        $this->db->like('title',$filter);
          return  $this->db->count_all_results('blog');
         

    }
    // buat method yang berfungsi untuk mengambil single data 
    public function getSingleBlog($field, $value)
    {
        $this->db->where($field, $value);

        return $this->db->get('blog');

        // return $query->row_array();

    }
    // buat method baru untuk menyimpan data ke dalam database
    public function insert($data){

    $this->db->insert('blog',$data);
    // mengguakan method insert_id untuk mengembalikan id terakhirnya
    return $this->db->insert_id();

    }

    public function updateBlog($id, $post){
        $this->db->where('id', $id);
        $this->db->update('blog', $post);
        // gunakan method affected_rows sejumlah yang di kembalikan
        return $this->db->affected_rows();
    }
    // buat method untuk delet 
    public function deleteBlog($id){
        $this->db->where('id',$id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }

}





?>