<?php

class Model_desa extends CI_Model
{
   public function getAlldesa()
   {
      $query = "SELECT * from tb_desa";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_desa', ['id_desa' => $id]);
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