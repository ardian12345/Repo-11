<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 class SiswaModel extends CI_Model {
    public function view(){
         return $this->db->get('tbl_produk')->result(); // Tampilkan semua data yang ada di tabel siswa
            }
               public function search($keyword){
                         $this->db->like('nama_produk', $keyword);       

                         $result = $this->db->get('tbl_produk')->result(); // Tampilkan data siswa berdasarkan keyword     
                         return $result;    
                     } 
                     }