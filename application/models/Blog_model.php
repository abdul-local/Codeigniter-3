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
    public function getSingleBlog($url)
    {
        $this->db->where('url', $url);

        $query= $this->db->get('blog');
        
        return $query->row_array();

    }

}





?>