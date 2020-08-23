<?php

// subclas 
class Blog_model extends CI_Model {

    // buat method yang berfungsi untuk mengambil semua data
    public function getBlog()
    {
        // kita gunakan query builder untuk mengembalikan semua nilai blog
         $query = $this->db->get('blog');
         return $query->result_array();

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