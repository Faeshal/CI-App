<?php 

class Mahasiswa_model extends CI_model{
    public function getAllMahasiswa(){
        return $query=$this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa(){
        $data = array(
        'nama' => $this->input->post('nama',true),
        'nrp' => $this->input->post("nrp",true),
        'email' => $this->input->post('email',true),
        'jurusan' => $this->input->post('jurusan',true  )
        );

        $this->db->insert('mahasiswa',$data);
    }

    public function hapusDataMahasiswa($id){
        // boleh juga style ini
        // $this->db->where('id',$id);
        $this->db->delete('mahasiswa',['id'=>$id]);
    }

    public function getMahasiswaById($id){
       return $this->db->get_where('mahasiswa',['id'=>$id])->row_array(); 
    }

    public function ubahDataMahasiswa($id){
        $data = array(
        'nama' => $this->input->post('nama',true),
        'nrp' => $this->input->post("nrp",true),
        'email' => $this->input->post('email',true),
        'jurusan' => $this->input->post('jurusan',true  )
        );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa',$data);
    }

}


?>