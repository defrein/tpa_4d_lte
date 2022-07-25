<?php
class M_bendahara extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    //=============================== SANTRI ===============================
    public function dt_santri()
    {
        $this->db->select('s.id_santri, s.nama_santri, k.nama_kelas, s.nama_alias, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru', 'left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dt_santri_detil($id)
    {
        $this->db->select('s.id_santri, s.nama_santri, k.nama_kelas, s.nama_alias, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru', 'left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas', 'left');
        $this->db->where('id_santri', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    //=============================== dropdown santri ===============================
    public function dropdown_santri()
    {
        $query = $this->db->get('santri');
        $result = $query->result();

        $id_santri = array('-Pilih-');
        $nama_santri = array('-Pilih-');

        for ($i = 0; $i < count($result); $i++) {
            array_push($id_santri, $result[$i]->id_santri);
            array_push($nama_santri, $result[$i]->nama_santri);
        }
        return array_combine($id_santri, $nama_santri);
    }

    //=============================== GURU ===============================
    public function dt_guru($id = FALSE)
    {
        $this->db->select('s.id_guru, s.nama_guru');
        $this->db->from('guru s');
        $query = $this->db->get();
        return $query->result_array();
    }

    //=============================== kelas ===============================
    public function dropdown_kelas()
    {
        $query = $this->db->get('kelas');
        $result = $query->result();

        $id_kelas = array('-Pilih-');
        $nama_kelas = array('-Pilih-');

        for ($i = 0; $i < count($result); $i++) {
            array_push($id_kelas, $result[$i]->id_kelas);
            array_push($nama_kelas, $result[$i]->nama_kelas);
        }
        return array_combine($id_kelas, $nama_kelas);
    }

    public function dt_kelas($id = FALSE)
    {
        $this->db->select('s.id_kelas, s.nama_kelas');
        $this->db->from('kelas s');
        $query = $this->db->get();
        return $query->result_array();
    }


    //=============================== DATA SANTRI PER KELAS===============================
    public function dt_santri_per_kelas($id)
    {
        $this->db->select('s.id_santri, s.nama_santri, s.nama_alias, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru', 'left');
        $this->db->where('s.id_kelas', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    //=============================== DATA SUMBANGAN ===============================
    public function dt_sumbangan()
    {
        $this->db->select('*');
        $this->db->from('sumbangan smb');
        $this->db->join('santri s', 's.id_santri = smb.id_santri', 'left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas', 'left');
        $this->db->join('users u', 'u.username = smb.username', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dt_sumbangan_filter($id)
    {
        $this->db->select('*');
        $this->db->from('sumbangan smb');
        $this->db->join('santri s', 's.id_santri = smb.id_santri', 'left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas', 'left');
        $this->db->join('users u', 'u.username = smb.username', 'left');
        $this->db->where('s.id_santri', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function dt_sumbangan_detil($id)
    {
        $this->db->select('*');
        $this->db->from('sumbangan smb');
        $this->db->join('santri s', 's.id_santri = smb.id_santri', 'left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas', 'left');
        $this->db->join('users u', 'u.username = smb.username', 'left');
        $this->db->join('guru g', 'g.id_guru = s.id_guru', 'left');
        $this->db->where('id_sumbangan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function dt_sumbangan_tambah()
    {
        $data = array(
            'id_santri' => $this->input->post('id_santri'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            'username' => $this->input->post('username')
        );
        return $this->db->insert('sumbangan', $data);
    }

    public function dt_sumbangan_edit($id)
    {
        $data = array(
            'id_santri' => $this->input->post('id_santri'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            'username' => $this->input->post('username')
        );
        $this->db->where('id_sumbangan', $id);
        return $this->db->update('sumbangan', $data);
    }
}