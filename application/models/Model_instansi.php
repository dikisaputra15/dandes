<?php

class Model_instansi extends CI_Model
{
   public function getAllinstansi()
   {
      $query = "SELECT * from tb_instansi";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_instansi', ['id_instansi' => $id]);
   }

  public function getinstansiById($id_instansi)
   {
      return $this->db->get_where('tb_instansi', ['id_instansi' => $id_instansi])->row_array();
   }

	public function updateinstansi()
   {
      $nama_instansi = $this->input->post('nama_instansi');

      $data = [
      	'nama_instansi' => $nama_instansi
      ];

      $this->db->update('tb_instansi', $data, ['id_instansi' => $this->input->post('id_instansi')]);
   }


}

?>