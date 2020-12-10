<?php

class Paket_model extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
//tambah data paket
    public function insert_data($data,$table)
    {
    $this->db->insert($table,$data);
    }

    public function update_paket($table, $data, $where)
    {
        $this->db->update($table, $data, $where );
    }

    public function delete_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_paket($id)
    {
        $hasil = $this->db->where('id_paket', $id)->get('paket_cukur');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function update_customer($table, $data, $where)
    {
        $this->db->update($table, $data, $where );
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');
        
        
        $result = $this->db->where('username',$username)
                            ->where('password',md5($password))                            
                            ->limit(1)
                            ->get('customer');

        if($result->num_rows() > 0)
        {
            return $result->row();
        }else{
            return FALSE;
        }
    }

    public function downloadbayar($id)
    {
        $query = $this->db->get_where('transaksi', array('id_order' => $id));
        return $query->row_array();
    }

}

?>