<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FunctionAdmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
    }
    function projectAdd()
    {
        if ($this->input->post('title')) {
            $data = array(
                'CustomerProjectTitle' => $this->input->post('title'),
                'CustomerProjectDeskripsi' => $this->input->post('deskripsi'),
                'CustomerProjectAddress' => $this->input->post('address'),
                'CustomerProjectDate' => $this->input->post('date'),
                'CostumerProjectVisible' => $this->input->post('visible')
            );
            $this->Project_model->addCustomerProject($data);
        }
    }

    function product_edit($id)
    {
        
        $data = $this->input->post();
        $this->db->where('MsItemDeskripsiRef', $id);
        $this->db->update('TblMsItemDeskripsi', $data);
    }

    function project_edit($id)
    {
        $data = $this->input->post();

        $this->db->where('CustomerProjectId', $id);
        $this->db->update('TblMsCustomerProject', $data);
    }

    function projectItem_delete($id)
    {
        $this->db->where("CustomerProjectItemId", $id);
        $this->db->delete('TblMsCustomerProjectItem');
    }

    function productSubImage_delete($id)
    {
        $this->db->where("ItemSubImageId", $id);
        $this->db->delete('TblMsItemSubImage');
    }

    function customerProjectGalleryDelete($id)
    {
        $this->db->where("CustomerProjectGalleryId", $id);
        $this->db->delete('TblMsCustomerProjectGallery');
    }
}
