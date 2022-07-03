<?php
class M_admin extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
//=============================== SANTRI ===============================
    public function dt_santri()
    {
        $this->db->select('s.id_santri, s.nama_santri, k.nama_kelas, s.nama_alias, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru','left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas','left');
        $query = $this->db->get();
        return $query->result_array();        
    }

    public function dt_santri_detil($id)
    {
        $this->db->select('s.id_santri, s.nama_santri, k.nama_kelas, s.nama_alias, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru','left');
        $this->db->join('kelas k', 'k.id_kelas = s.id_kelas', 'left');
        $this->db->where('id_santri',$id);
        $query = $this->db->get();
        return $query->row_array();           
    }

    public function dt_santri_tambah()
    {
        $data = array(
            'nama_santri' => $this->input->post('nama_santri'),
            'nama_alias' => $this->input->post('nama_alias'),
            'id_guru' => $this->input->post('id_guru'),
            'id_kelas' => $this->input->post('id_kelas')
        );
        return $this->db->insert('santri', $data);
    }

    public function dt_santri_edit($id)
    {
        $data = array(
            'nama_santri' => $this->input->post('nama_santri'),
            'nama_alias' => $this->input->post('nama_alias'),
            'id_guru' => $this->input->post('id_guru'),
            'id_kelas' => $this->input->post('id_kelas')
        );
        $this->db->where('id_santri', $id);
        return $this->db->update('santri', $data);
    }

//=============================== GURU ===============================
    public function dropdown_guru()
    {
        $query = $this->db->get('guru');
        $result = $query->result();

        $id_guru = array('-Pilih-');
        $nama_guru = array('-Pilih-');

        for ($i = 0; $i < count($result); $i++) {
            array_push($id_guru, $result[$i]->id_guru);
            array_push($nama_guru, $result[$i]->nama_guru);
        }
        return array_combine($id_guru, $nama_guru);
    }

    public function dt_guru($id = FALSE)
    {
        $this->db->select('s.id_guru, s.nama_guru');
        $this->db->from('guru s');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function guru_tambah()
    {
        $data = array(
            'nama_guru' => $this->input->post('nama_guru'),
        );

        return $this->db->insert('guru', $data);
    }  

    public function dt_guru_edit($id)
    {
        $data = array(
            'nama_guru' => $this->input->post('nama_guru'),
        );
        $this->db->where('id_guru', $id);
        return $this->db->update('guru', $data);        
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

    public function kelas_tambah()
    {
        $data = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
        );

        return $this->db->insert('kelas', $data);
    }

    public function dt_kelas_edit($id)
    {
        $data = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
        );
        $this->db->where('id_kelas', $id);
        return $this->db->update('kelas', $data);
    }
    //=============================== DATA SANTRI PER KELAS===============================
    public function dt_santri_per_kelas($id)
    {
        $this->db->select('s.id_santri, s.nama_santri, s.nama_alias, g.nama_guru');
        $this->db->from('santri s');
        $this->db->join('guru g', 's.id_guru = g.id_guru', 'left');
        $this->db->where('s.id_kelas',$id);
        $query = $this->db->get();
        return $query->result_array();
    }


}