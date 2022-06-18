<?php

class Mahasiswa_m extends CI_Model {

    public function getDataMhs (){
        return $this->db->get('mahasiswa')->result_array();
    }

    public function postData($data){
        $this->db->insert('mahasiswa', $data);
    }

    public function deleteData($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
    }
}