<?php
class M_landing extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    //=============================== SANTRI ===============================
    public function dt_santri()
    {
        $sql = "select santri.nama_alias, guru.nama_guru, sumbangan.tanggal, sumbangan.jumlah from santri, guru, sumbangan, (select id_santri, max(tanggal) as smb_terakhir from sumbangan group by id_santri) rcd_terakhir
        where sumbangan.id_santri = rcd_terakhir.id_santri and
        sumbangan.tanggal = rcd_terakhir.smb_terakhir and santri.id_guru = guru.id_guru and
        sumbangan.id_santri = santri.id_santri;";

        // $this->db->group_by('s.id_santri', 'desc');

        $query = $this->db->query($sql);
        return $query->result_array();
    }
}