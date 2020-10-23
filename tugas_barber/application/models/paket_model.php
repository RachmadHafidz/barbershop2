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

}

?>