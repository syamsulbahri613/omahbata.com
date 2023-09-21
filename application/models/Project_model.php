<?php
    class Project_model extends CI_Model{

        public function getDataProject()
        {
            return $this->db->get('TblMsCustomerProject')->result_array();
        }
        public function getDataProjectClient()
        {
            return $this->db->get('TblWebCilent')->result_array();
        }
        public function getDataProjectLastUpdate()
        {
           
            return $this->db->order_by("CustomerProjectDate desc")->limit(12)->get('TblMsCustomerProject')->result_array();
        }
        public function getDataProjectById($id)
        {
            $this->db->from('TblMsCustomerProject');
            $this->db->where('CustomerProjectId', $id);
            return $this->db->get()->result_array();

        }
        public function getDataProjectGallery($id)
        {
            $this->db->from('TblMsCustomerProjectGallery');
            $this->db->where('CustomerProjectGalleryRef', $id);
            return $this->db->get()->result_array();

        }
        public function getDataProjectItem($id)
        {

            return $this->db->join("TblMsItem", "TblMsItem.MsItemId=TblMsCustomerProjectItem.CustomerProjectItemType", "left")->join('TblMsItemSubImage', 'TblMsItemSubImage.ItemSubImageRef = TblMsItem.MsItemId', 'left')->group_by("MsItemId")
            ->where("CustomerProjectItemRef", $id)->get("TblMsCustomerProjectItem")
            ->result_array();

        }

        // public function getDataModalProjectItem($id)
        // {
        //     return $this->db->join("TblMsItem", "TblMsItem.MsItemId=TblMsCustomerProjectItem.CustomerProjectItemType", "left")
        //     ->where("CustomerProjectItemRef", $id)->get("TblMsCustomerProjectItem")
        //     ->result_array();
        // }

        public function insertProjectGallery($data, $id)
        {
            $data = array(
                "CustomerProjectGalleryImage" => $data['upload_data']['file_name'],
                "CustomerProjectGalleryRef" => $id,
                
            );
            var_dump($data);
            $this->db->insert('TblMsCustomerProjectGallery', $data);
        }

        public function insertProjectImg($data, $id)
        {
            $data = array(
                "CustomerProjectHeaderImg" => $data['upload_data']['file_name']
            );
            var_dump($data);

            $this->db->where('CustomerProjectId', $id);
            $this->db->update('TblMsCustomerProject', $data);
        }

        public function addCustomerProject($data)
        {
            $this->db->insert('TblMsCustomerProject',$data);
        }
    }
?>