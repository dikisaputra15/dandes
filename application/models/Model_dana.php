<?php

class Model_dana extends CI_Model
{
   public function getalldanamasuk()
   {
      $query = "SELECT tb_dana_masuk.*, tb_instansi.id_instansi,tb_instansi.nama_instansi, tb_desa.id_desa,tb_desa.nama_desa FROM tb_dana_masuk JOIN tb_instansi ON tb_dana_masuk.id_instansi=tb_instansi.id_instansi join tb_desa on tb_dana_masuk.id_desa=tb_desa.id_desa";
      return $this->db->query($query)->result_array();
   }

    public function getalldanakeluar()
   {
           
     $query = "SELECT tb_dana_keluar.*, tb_desa.id_desa,tb_desa.nama_desa FROM tb_dana_keluar JOIN   tb_desa on tb_dana_keluar.id_desa=tb_desa.id_desa";
      return $this->db->query($query)->result_array();
   }

    public function insertdanamasuk($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insertdanakeluar($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function deletedanamasuk($id)
   {
      $this->db->delete('tb_dana_masuk', ['id_dana_masuk' => $id]);
   }

  public function getdesaById($id_desa)
   {
      return $this->db->get_where('tb_desa', ['id_desa' => $id_desa])->row_array();
   }

	public function updatedesa()
   {
      $nama_desa = $this->input->post('nama_desa');
      $alamat = $this->input->post('alamat');
      $kepala_desa = $this->input->post('kepala_desa');

      $data = [
        'nama_desa' => $nama_desa,
        'alamat' => $alamat,
      	'kepala_desa' => $kepala_desa
      ];

      $this->db->update('tb_desa', $data, ['id_desa' => $this->input->post('id_desa')]);
   }


}

?>