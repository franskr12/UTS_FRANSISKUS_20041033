<?php

class tbsiswaModel extends CI_Model
{
    private $_table = "tbsiswa";

    public function viewMurid()
    {
        return $this->db->get($this->_table)->result_array();
    }
    public function tambahMurid()
    {
        $data = array(
            'nis' => $this->input->post('nis', true), 
            'namasiswa' => $this->input->post('namasiswa', true),
            'alamatsiswa' => $this->input->post('alamatsiswa', true),   
            'namabapak' => $this->input->post('namabapak', true),
            'namaibu' => $this->input->post('namaibu', true),
        );
    
        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    } 
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function ubahMurid()
    {
        $data = array(
            
            'nis' => $this->input->post('nis'), 
            'namasiswa' => $this->input->post('namasiswa'),
            'alamatsiswa' => $this->input->post('alamatsiswa'),   
            'namabapak' => $this->input->post('namabapak'),
            'namaibu' => $this->input->post('namaibu'),
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    } 
   
    
}