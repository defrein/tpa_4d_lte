<?php
class M_landing extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
//=============================== SANTRI ===============================
    public function dt_santri()
    {
        $this->db->select('s.id_santri, s.nama_alias, k.nama_kelas, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru','left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas','left');
        $query = $this->db->get();
        return $query->result_array();        
    }
}
?>