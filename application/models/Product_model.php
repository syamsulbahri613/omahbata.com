<?php
class Product_model extends CI_Model
{

    public function getDataProduct()
    {
        return $this->db->get('TblMsItem')->result_array();
        $this->db->from('TblMsItem');
        $this->db->join('TblMsItemCategoryDetail', 'TblMsItemCategoryDetail.CategoryDetailId = TblMsItem.MsItemCatId', 'left');
        $this->db->where('CategoryDetailVisible', '1');
        $query = $this->db->get();
    }
    public function getDataProductById($id)
    {
        $this->db->where('MsItemCatId', $id);
        return $this->db->get('TblMsItem')->result_array();
    }

    public function getDataProductKategori()
    {
        return $this->db->where('MsItemCatIsActive', 1)->get('TblMsItemCategory')->result_array();
    }

    public function getDataProductKategoriById($id)
    {
        $this->db->from('TblMsItemCategoryDetail');
        $this->db->where('CategoryRef', $id);
        return $this->db->get()->result_array();
    }
    public function getDataItemById($id)
    {
        $this->db->from('TblMsProduk');
        $this->db->join('TblMsItemCategory', 'TblMsItemCategory.MsItemCatId = TblMsProduk.MsProdukCatId', 'left');
        $this->db->where('MsProdukId', $id);
        return $this->db->get()->result_array();
    }

    public function getDataItemOrderById($id, $detail)
    {
        $this->db->from('TblMsProduk');
        $this->db->join('TblMsItemCategory', 'TblMsItemCategory.MsItemCatId = TblMsProduk.MsProdukCatId', 'left');
        $this->db->join('TblMsProdukDetail', 'TblMsProdukDetail.MsProdukDetailRef = TblMsProduk.MsProdukId', 'left');
        $this->db->join('TblMsSatuan', 'TblMsSatuan.SatuanId = TblMsProdukDetail.SatuanId', 'left');
        $this->db->where('MsProdukId', $id);
        $this->db->where('MsProdukDetailId', $detail);
        return $this->db->get()->result_array();
    }

    public function getDataItemDeskripsiById($id)
    {
        $this->db->from('TblMsItemDeskripsi');
        $this->db->where('MsItemDeskripsiRef', $id);
        return $this->db->get()->result_array();
    }

    public function getDataProjectItem($id)
    {
        $this->db->from('TblMsCustomerProject');
        $this->db->join('TblMsCustomerProjectItem', 'TblMsCustomerProjectItem.CustomerProjectItemRef = TblMsCustomerProject.CustomerProjectId', 'left');
        $this->db->where('CustomerProjectItemType', $id);
        return $this->db->get()->result_array();
    }

    // public function getDataItemGallery($id)
    // {
    //     $this->db->from('TblMsItemGallery');
    //     $this->db->where('MsItemGalleryRef', $id);
    //     return $this->db->get()->result_array();
    // }

    public function getDataItemSubImgFirstById($id)
    {
        $this->db->from('TblMsItemSubImage');
        $this->db->where('ItemSubImageRef', $id);
        return $this->db->get()->row_array();
    }

    // public function getDataItemSubImgById($id)
    // {
    //     $this->db->from('TblMsItemSubImage');
    //     $this->db->where('ItemSubImageRef', $id);
    //     return $this->db->get()->result_array();
    // }

    public function getDataItemSubImgById($id)
    {
        $this->db->from('TblMsProdukDetail');
        $this->db->join('TblMsProduk', 'TblMsProduk.MsProdukId = TblMsProdukDetail.MsProdukDetailRef', 'left');
        $this->db->where('MsProdukDetailRef', $id);
        return $this->db->get()->result_array();
    }

    public function getDataProductNext($category, $index)
    {
        if ($category != "0") $this->db->where('MsProdukCatId', $category);
        return $this->db->join('TblMsItemCategory', 'TblMsItemCategory.MsItemCatId = TblMsProduk.MsProdukCatId', 'left')->join('TblMsProdukDetail', 'TblMsProdukDetail.MsProdukDetailRef = TblMsProduk.MsProdukId', 'left')->group_by("MsProdukId")->order_by("MsProdukName asc")->get("TblMsProduk", 20, $index)->result();
    }

    // public function getDataProductNext($category, $index)
    // {
    //     if ($category != "0") $this->db->where('MsItemCatId', $category);
    //     return $this->db->join('TblMsItemDeskripsi', 'TblMsItemDeskripsi.MsItemDeskripsiRef = TblMsItem.MsItemId', 'left')->
    //     join('TblMsItemSubImage', 'TblMsItemSubImage.ItemSubImageRef = TblMsItem.MsItemId', 'left')->where('MsItemDeskripsiVisible', '1')->group_by("MsItemId")->order_by("MsItemName asc")->get("TblMsItem", 20, $index)->result();
    // }

    function get_base_64_by_item($id)
    {
        $configfile = "asset/image/product/"; //untuk server
        //$configfile = "/omahbata/asset/image/"; //untuk lokal
        try {
            if (file_exists($configfile .   $id)) {
                $path = FCPATH . $configfile .  $id;
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                return $base64;
            } else {
                $path = FCPATH .  $configfile . 'img-not-available.png';
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                return $base64;
            }
        } catch (Exception $e) {
            $path = FCPATH .  $configfile . '/img-not-available.png';
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }
    }

    function insertProductImage($data, $id)
    {
        $data = array(
            "ItemSubImageFileName" => $data['upload_data']['file_name'],
            "ItemSubImageRef" => $id
        );
        $this->db->insert('TblMsItemSubImage', $data);
    }
}
