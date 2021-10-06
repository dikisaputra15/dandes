<?php

class Model_lbkb extends CI_Model
{
    // var $table = 'lbkb';
    // var $column_order = array('NOMOR','IDPEL','ALAMAT','BLTH','NAMA','TARIF','DAYA','KDBACA','KODE_RBM','TGLBACA','STAN_METER','STAN_BACA','PEMKWH','JAMNYALA','MUTASI','UNITAP','UNITUP'); //set column field database for datatable orderable
    // var $column_search = array('NOMOR','IDPEL','ALAMAT','BLTH','NAMA','TARIF','DAYA','KDBACA','KODE_RBM','TGLBACA','STAN_METER','STAN_BACA','PEMKWH','JAMNYALA','MUTASI','UNITAP','UNITUP'); //set column field database for datatable searchable 
    // var $order = array('NOMOR' => 'asc'); // default order 
 
    // function select()
    // {
    //  $this->db->order_by('NOMOR', 'DESC');
    //  $query = $this->db->get('tb_lbkb');
    //  return $query;
    // }

//     public function getAlllbkb()
//    {
//       $query = "SELECT * from tb_lbkb";
//       return $this->db->query($query)->result_array();
//    }

    // function getlbkb($postData=null)
    // {

    //     $response = array();
   
    //     ## Read value
    //     $draw = $postData['draw'];
    //     $start = $postData['start'];
    //     $rowperpage = $postData['length']; // Rows display per page
    //     $columnIndex = $postData['order'][0]['column']; // Column index
    //     $columnName = $postData['columns'][$columnIndex]['data']; // Column name
    //     $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
    //     $searchValue = $postData['search']['value']; // Search value
   
    //     ## Search 
    //     $searchQuery = "";
    //     if($searchValue != ''){
    //        $searchQuery = " (IDPEL like '%".$searchValue."%' or NAMA like '%".$searchValue."%' or DAYA like'%".$searchValue."%' ) ";
    //     }
   
    //     ## Total number of records without filtering
    //     $this->db->select('count(*) as allcount');
    //     $records = $this->db->get('tb_lbkb')->result();
    //     $totalRecords = $records[0]->allcount;
   
    //     ## Total number of record with filtering
    //     $this->db->select('count(*) as allcount');
    //     if($searchQuery != '')
    //        $this->db->where($searchQuery);
    //     $records = $this->db->get('tb_lbkb')->result();
    //     $totalRecordwithFilter = $records[0]->allcount;
   
    //     ## Fetch records
    //     $this->db->select('*');
    //     if($searchQuery != '')
    //        $this->db->where($searchQuery);
    //     $this->db->order_by($columnName, $columnSortOrder);
    //     $this->db->limit($rowperpage, $start);
    //     $records = $this->db->get('tb_lbkb')->result();
   
    //     $data = array();
   
    //     foreach($records as $record ){
   
    //        $data[] = array( 
    //           "NOMOR"=>$record->NOMOR,
    //           "IDPEL"=>$record->IDPEL,
    //           "ALAMAT"=>$record->ALAMAT,
    //           "BLTH"=>$record->BLTH,
    //           "NAMA"=>$record->NAMA,
    //           "TARIF"=>$record->TARIF,
    //           "DAYA"=>$record->DAYA,
    //           "KDBACA"=>$record->KDBACA,
    //           "KODE_RBM"=>$record->KODE_RBM,
    //           "TGLBACA"=>$record->TGLBACA,
    //           "STAN_METER"=>$record->STAN_METER,
    //           "STAN_BACA"=>$record->STAN_BACA,
    //           "PEMKWH"=>$record->PEMKWH,
    //           "JAMNYALA"=>$record->JAMNYALA,
    //           "MUTASI"=>$record->MUTASI,
    //           "UNITAP"=>$record->UNITAP,
    //           "UNITUP"=>$record->UNITUP
    //        ); 
    //     }
   
    //     ## Response
    //     $response = array(
    //        "draw" => intval($draw),
    //        "iTotalRecords" => $totalRecords,
    //        "iTotalDisplayRecords" => $totalRecordwithFilter,
    //        "aaData" => $data
    //     );
   
    //     return $response; 

    // }

    // private function _get_datatables_query()
    // {
         
    //     $this->db->from($this->table);
 
    //     $i = 0;
     
    //     foreach ($this->column_search as $item) // loop column 
    //     {
    //         if($_POST['search']['value']) // if datatable send POST for search
    //         {
                 
    //             if($i===0) // first loop
    //             {
    //                 $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
    //                 $this->db->like($item, $_POST['search']['value']);
    //             }
    //             else
    //             {
    //                 $this->db->or_like($item, $_POST['search']['value']);
    //             }
 
    //             if(count($this->column_search) - 1 == $i) //last loop
    //                 $this->db->group_end(); //close bracket
    //         }
    //         $i++;
    //     }
         
    //     if(isset($_POST['order'])) // here order processing
    //     {
    //         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } 
    //     else if(isset($this->order))
    //     {
    //         $order = $this->order;
    //         $this->db->order_by(key($order), $order[key($order)]);
    //     }
    // }

    // function get_datatables()
    // {
    //     $this->_get_datatables_query();
    //     if($_POST['length'] != -1)
    //     $this->db->limit($_POST['length'], $_POST['start']);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
   
    // function count_filtered()
    // {
    //     $this->_get_datatables_query();
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }
 
    // public function count_all()
    // {
    //     $this->db->from($this->table);
    //     return $this->db->count_all_results();
    // }

    function insertRecord($data)
    {
        $this->db->insert_batch('tb_lbkb', $data);
    }

    public function getlbkb($bulta,$kdbaca)
   {
      $query = "SELECT * from tb_lbkb where BLTH='$bulta' and KDBACA='$kdbaca'";
      return $this->db->query($query)->result_array();
   }

   public function insertwo($data, $table)
   {
      $this->db->insert($table, $data);
   }

}

?>