 <?php
   defined('BASEPATH') or exit('No direct script access allowed');

   class Datatable_admin extends CI_Controller
   {
      function __construct()
      {
         parent::__construct();
         $this->load->model('Datatable');
         $this->load->model('Product_model');
         $this->load->model('Project_model');
         date_default_timezone_set('Asia/Jakarta');
      }
      function get_data_kategory()
      {
         // SETUP DATATABLE
         $this->Datatable->table = 'TblMsItemCategoryDetail';
         // $this->m_master->tablejoin = array(
         //    array(0 => 'TblMsVendor', 1 => 'ifnull(TblInvStock.MsVendorId,0) = TblMsVendor.MsVendorId'),
         //    array(0 => 'TblMsItem', 1 => 'TblMsItem.MsItemId=TblInvStock.MsItemId'),
         //    array(0 => 'TblMsItemCategory', 1 => 'TblMsItem.MsItemCatId=TblMsItemCategory.MsItemCatId'),
         //    array(0 => 'TblMsWorkplace', 1 => 'TblMsWorkplace.MsWorkplaceId=TblInvStock.MsWorkplaceId')
         // );
         $this->Datatable->column_order = array(
            null,
            'CategoryDetailHeader',
            'CategoryDetailText',
            'CategoryDetailVisible',
            'CategoryDetailImg',
         ); //set column field database for datatable orderable
         $this->Datatable->column_search = array('CategoryDetailHeader', 'CategoryDetailText'); //set column field database for datatable searchable
         $this->Datatable->order = array('CategoryDetailHeader' => 'asc'); // default order 
         // PROSES DATA
         $list = $this->Datatable->get_datatables();
         $data = array();
         $no = $_POST['start'];
         foreach ($list as $master) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $master->CategoryDetailHeader;
            $row[] = $master->CategoryDetailText;
            $row[] = ($master->CategoryDetailVisible == 1 ? '<span class="badge rounded-pill text-bg-success">Aktif</span>' : '<span class="badge rounded-pill text-bg-danger">Tidak Aktif</span>');
            $row[] = '<img src="' . base_url("asset/image/headerProduct/" . $master->CategoryDetailImg) . '"  alt="..." width=300 height=50 style="object-fit: cover;">';
            $row[] = ' <div class="d-flex flex-row"><a class="me-2 text-primary pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i> Edit</a></div>';
            $row[] = $master->CategoryDetailId;
            $data[] = $row;
         }
         $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Datatable->count_all(),
            "recordsFiltered" => $this->Datatable->count_filtered(),
            "data" => $data,
         );
         //output to json format
         echo json_encode($output);
      }

      function get_data_produk()
      {
         // SETUP DATATABLE
         $this->Datatable->table = 'TblMsItem';
         $this->Datatable->tablejoin = array(array(0 => 'TblMsItemDeskripsi', 1 => 'MsItemDeskripsiRef = MsItemId'));
         $this->Datatable->column_order = array(
            null,
            'MsItemCode',
            'MsItemName',
            'MsItemPrice',
            'MsItemUoM',
            'MsItemImage',
            'MsItemDeskripsiVisible',
         ); //set column field database for datatable orderable
         $this->Datatable->column_search = array('MsItemCode', 'MsItemName'); //set column field database for datatable searchable
         $this->Datatable->order = array('MsItemCode' => 'asc'); // default order

         // PROSES DATA
         $list = $this->Datatable->get_datatables();
         $data = array();
         $no = $_POST['start'];
         foreach ($list as $master) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $master->MsItemCode;
            $row[] = $master->MsItemName;
            $row[] = $master->MsItemPrice;
            $row[] = $master->MsItemUoM;
            $row[] = '<img src="' . base_url("upload.php?kode=") . $master->MsItemCode . '"  alt="..." style="object-fit: contain; width: 100%; height: 200px;">';
            $row[] = ($master->MsItemDeskripsiVisible == 1 ? '<span class="badge rounded-pill text-bg-success">Aktif</span>' : '<span class="badge rounded-pill text-bg-danger">Tidak Aktif</span>');
            $row[] = ' <div class="d-flex flex-row"><a style="text-decoration: none;" class="me-2 text-primary pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i> Edit</a></div>';
            $row[] = $master->MsItemId;
            $row[] = $master->MsItemDeskripsiText;
            $row[] = $master->MsItemColor;
            $row[] = $master->MsItemMaterial;
            $row[] = $master->MsItemDeskripsiRef;
            $row[] = $this->Product_model->getDataProjectItem($master->MsItemId);
            $row[] = $this->Product_model->getDataItemSubImgById($master->MsItemId);
            $row[] = $this->Product_model->getDataItemSubImgFirstById($master->MsItemId);
            $data[] = $row;
         }
         $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Datatable->count_all(),
            "recordsFiltered" => $this->Datatable->count_filtered(),
            "data" => $data,
         );

         //output to json format
         echo json_encode($output);
      }

      function get_data_project()
      {
         // SETUP DATATABLE
         $this->Datatable->table = 'TblMsCustomerProject';
         $this->Datatable->column_order = array(
            null,
            'CustomerProjectTitle',
            'CustomerProjectDate',
            // 'CustomerProjectDeskripsi',
            'CustomerProjectAddress',
            'CustomerProjectHeaderImg',
            'CostumerProjectVisible',
         ); //set column field database for datatable orderable
         $this->Datatable->column_search = array('CustomerProjectTitle', 'CustomerProjectDate'); //set column field database for datatable searchable
         $this->Datatable->order = array('CustomerProjectTitle' => 'asc'); // default order

         // PROSES DATA
         $list = $this->Datatable->get_datatables();
         $data = array();
         $no = $_POST['start'];
         foreach ($list as $master) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $master->CustomerProjectTitle;
            $row[] = $master->CustomerProjectDate;
            $row[] = $master->CustomerProjectAddress;
            $row[] = '<img src="' . base_url("asset/image/project/" . $master->CustomerProjectHeaderImg) . '"  alt="..." style="object-fit: cover; width: 70%; height: 100%;">';
            $row[] = ($master->CostumerProjectVisible == 1 ? '<span class="badge rounded-pill text-bg-success">Aktif</span>' : '<span class="badge rounded-pill text-bg-danger">Tidak Aktif</span>');
            $row[] = ' <div class="d-flex flex-row"><a style="text-decoration: none;" class="me-2 text-primary pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i> Edit</a></div>';
            $row[] = $master->CustomerProjectId;
            $row[] = $this->Project_model->getDataProjectGallery($master->CustomerProjectId);
            $row[] = $this->Project_model->getDataProjectItem($master->CustomerProjectId);
            $row[] = $master->CustomerProjectDeskripsi;
            $row[] = $this->Project_model->getDataProjectById($master->CustomerProjectId);
            $data[] = $row;
         }
         $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Datatable->count_all(),
            "recordsFiltered" => $this->Datatable->count_filtered(),
            "data" => $data,
         );

         //output to json format
         echo json_encode($output);
      }

      // function get_project($id)
      // {
      //    $this->db->from('TblMsCustomerProject');
      //    $this->db->join('TblMsCustomerProjectItem', '');
      //    $this->db->select('*');
      //    $this->db->where('CustomerProjectItemType', $id);
      //    $query = $this->db->get();
      //    return $query->result();
      // }
   }
