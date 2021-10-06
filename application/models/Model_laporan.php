<?php

class Model_laporan extends CI_Model
{
   public function getalllaporan()
   {
           
      $query = "SELECT tb_dana_masuk.*, tb_instansi.id_instansi,tb_instansi.nama_instansi, tb_desa.id_desa,tb_desa.nama_desa FROM tb_dana_masuk JOIN tb_instansi ON tb_dana_masuk.id_instansi=tb_instansi.id_instansi join tb_desa on tb_dana_masuk.id_desa=tb_desa.id_desa";
      return $this->db->query($query)->result_array();
   }

   public function getlaporanbyid($id)
   {
       $query = "SELECT * from tb_dana_keluar where id_desa='$id'";
      return $this->db->query($query)->result_array();
   }

    public function lpj()
   {
           
     $query = "SELECT tb_lpj.*, tb_desa.id_desa,tb_desa.nama_desa FROM tb_lpj JOIN tb_desa ON tb_lpj.id_desa=tb_desa.id_desa";
      return $this->db->query($query)->result_array();

   }

    public function insertlpj($data, $table)
   {
      $this->db->insert($table, $data);
   }


}

?>