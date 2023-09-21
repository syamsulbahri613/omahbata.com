<?php
class User_model extends CI_Model
{
    function getChackout($sessionid)
    {
        // $this->db->join('TblMsItem', 'TblMsItem.MsItemId = TblMsItemCart.MsItemRef', 'left');
        $this->db->where('MsCustomerId', $sessionid);
        $hasil=$this->db->get('TblCheckout');
        
        return $hasil->result();
    }

    public function getDataCheckout($category, $index, $sessionid)
    {
        if ($category != "0") $this->db->where('statusCheckout', $category);
        return $this->db->where('MsCustomerId', $sessionid)->get("TblCheckout", 20, $index)->result();
    }

    public function getAlamatById($id)
    {
        return $this->db->where('customerRef', $id)->get("TblMsCustomerAddress")->result();
    }

    public function getDataProvince()
    {
        return $query = $this->db->get('TblMsProvince')->result_array();
    }

    public function getDataCity($id)
    {
        $this->db->where('MsProvinceId', $id);
        return $query = $this->db->get('TblMsRegency')->result_array();
    }

    public function getDatagetsub_district($id)
    {
        $this->db->where('MsRegencyId', $id);
        return $query = $this->db->get('TblMsDistrict')->result_array();
    }

    public function getDataUrban($id)
    {
        $this->db->where('MsDistrictId', $id);
        return $query = $this->db->get('TblMsVillage')->result_array();
    }

    public function getDataKodePos($id)
    {
        $this->db->where('MsVillageId', $id)->group_by('MsVillageKodePos');
        return $query = $this->db->get('TblMsVillage')->result_array();
    }

    // public function getDataCity($id)
    // {
    //     $this->db->where('MsProvinceId', $id)->group_by('city');
    //     return $query = $this->db->get('db_postal_code_data')->result_array();
    // }

    // public function getDatagetsub_district($id)
    // {
    //     $this->db->where('city', $id)->group_by('sub_district');
    //     return $query = $this->db->get('db_postal_code_data')->result_array();
    // }

    // public function getDataUrban($id)
    // {
    //     $this->db->where('sub_district', $id)->group_by('urban');
    //     return $query = $this->db->get('db_postal_code_data')->result_array();
    // }

    // public function getDataKodePos($id)
    // {
    //     $this->db->where('urban', $id)->group_by('postal_code');
    //     return $query = $this->db->get('db_postal_code_data')->result_array();
    // }

    public function addCustomerAddress($data)
    {
        $this->db->insert('TblMsCustomerAddress',$data);
    }
}

?>