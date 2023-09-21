<?php
class Cart_model extends CI_Model
{
    function get_all_produk($token)
    {   
        $this->db->join('TblMsItem', 'TblMsItem.MsItemId = TblMsItemCart.MsItemRef', 'left');
        $this->db->where('MsCustomerTokenGmailref', $token);
        $hasil=$this->db->get('TblMsItemCart');
        return $hasil->result();
    }

    function get_test()
    {
        $this->db->join('TblMsProduk', 'TblMsProduk.MsProdukId = TblMsItemCart.MsItemRef', 'left');
        $this->db->join('TblMsItemCategory', 'TblMsItemCategory.MsItemCatId = TblMsProduk.MsProdukCatId', 'left');
        $this->db->join('TblMsItemCartDetail', 'TblMsItemCartDetail.CartDetailRef = TblMsItemCart.MsItemCartId', 'left');
        $this->db->join('TblMsProdukDetail', 'TblMsProdukDetail.MsProdukDetailId = TblMsItemCartDetail.CartProdukDetailVarianRef', 'left');
        $this->db->join('TblMsSatuan', 'TblMsSatuan.SatuanId = TblMsProdukDetail.SatuanId', 'left');
        $hasil=$this->db->get('TblMsItemCart');
        return $hasil->result();
    }

    function get_all_produk_wishlist($token)
    {   
        $this->db->join('TblMsItem', 'TblMsItem.MsItemId = TblMsitemWishlist.MsItemRef', 'left');
        $this->db->where('MsCustomerTokenGmailref', $token);
        $hasil=$this->db->get('TblMsitemWishlist');
        return $hasil->result();
    }

    function check_item($idItem, $token)
    {
		$id = str_replace("'", "''", $idItem);
        $idtoken = str_replace("'", "''", $token);
		$query = $this->db->query("SELECT * FROM TblMsItemCart where MsItemRef='" . $id . "' AND MsCustomerTokenGmailref='".$idtoken."'");
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
    }
}

?>
