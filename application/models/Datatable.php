<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatable extends CI_Model
{

   var $table = 'TblName'; //SET NAMA TABLE
   var $tablejoin = array(); // SET TABLE JOIN JIKA KOSONG MAKA BERIKAN NULL
   var $column_search = array(); //set column field database for datatable searchable 
   var $order = array();
   var $order_by = array();
   var $group = array(); // default order 
   var $select = array('*');
   public function __construct()
   {
      parent::__construct();
      $this->load->database();
   }

   private function _get_datatables_query()
   {
      $this->db->close();
      $this->db->initialize();
      $this->db->from($this->table);
      foreach ($this->tablejoin as $row) {
         $this->db->join($row[0], $row[1], ((isset($row[2])) ? $row[2] : "left"));
      }
      $this->db->select($this->select);

      if (isset($_POST['search']['store'])) {
         if ($_POST['search']['store'] != "-")
            $this->db->where($this->table . ".MsWorkplaceId", $_POST['search']['store']);
      }

      if (isset($_POST['search']['statuslike'])) {
         if ($_POST['search']['statuslike'] != "-")
            $this->db->like($_POST['search']['colstatuslike'], $_POST['search']['status']);
      }
      if (isset($_POST['search']['status'])) {
         if ($_POST['search']['status'] != "-")
            $this->db->where_in($_POST['search']['colstatus'], $_POST['search']['status']);
      }

      if (isset($_POST['search']['status1'])) {
         if ($_POST['search']['status1'] != "-")
            $this->db->where_in($_POST['search']['colstatus1'], $_POST['search']['status1']);
      }

      if (isset($_POST['search']['status2'])) {
         if ($_POST['search']['status2'] != "-")
            $this->db->where_in($_POST['search']['colstatus2'], $_POST['search']['status2']);
      }

      if (isset($_POST['search']['statusnull'])) {
         if ($_POST['search']['statusnull'] != "") {
            $where = $_POST['search']['colstatusnull'] . " is " . (($_POST['search']['statusnull'] == 1) ? "not" : "") . " null";
            $this->db->where($where);
         }
      }

      if (isset($_POST['search']['coltanggal'])) {
         if ($_POST['search']['coltanggal'] != "") {
            $this->db->where($_POST['search']['coltanggal'] . ' >= "' . $_POST['search']['tanggalstart'] . '"');
            $this->db->where($_POST['search']['coltanggal'] . ' <= "' . $_POST['search']['tanggalend'] . '"');
         }
      }
      $this->db->group_by($this->group);
      $i = 0;
      foreach ($this->column_search as $item) // loop column 
      {
         if ($_POST['search']['value']) // if datatable send POST for search
         {
            if ($i === 0) // first loop
            {
               $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
               $this->db->like($item, $_POST['search']['value']);
            } else {
               $this->db->or_like($item, $_POST['search']['value']);
            }
            if (count($this->column_search) - 1 == $i) //last loop
               $this->db->group_end(); //close bracket
         }
         $i++;
      }
      if (isset($_POST['order'])) // here order processing
      {
         $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      } else if (isset($this->order)) {
         foreach ($this->order as $key => $value) {
            $this->db->order_by($key, $value);
         }
      }
   }

   function get_datatables()
   {
      $this->_get_datatables_query();
      if ($_POST['length'] != -1)
         $this->db->limit($_POST['length'], $_POST['start']);
      $query = $this->db->get();
      return $query->result();
   }

   function count_filtered()
   {
      $this->_get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
   }

   public function count_all()
   {
      $this->db->close();
      $this->db->initialize();
      $this->db->from($this->table);
      foreach ($this->tablejoin as $row) {
         $this->db->join($row[0], $row[1], ((isset($row[2])) ? $row[2] : "left"));
      }

      if (isset($_POST['search']['store'])) {
         if ($_POST['search']['store'] != "-")
            $this->db->where($this->table . ".MsWorkplaceId", $_POST['search']['store']);
      }
      if (isset($_POST['search']['coltanggal'])) {
         if ($_POST['search']['coltanggal'] != "") {
            $this->db->where($_POST['search']['coltanggal'] . ' >= "' . $_POST['search']['tanggalstart'] . '"');
            $this->db->where($_POST['search']['coltanggal'] . ' <= "' . $_POST['search']['tanggalend'] . '"');
         }
      }
      $this->db->group_by($this->group);
      $query = $this->db->get();
      return $query->num_rows();
   }
}
