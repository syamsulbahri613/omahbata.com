<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FunctionUser extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function alamatAdd()
    {
        if ($this->input->post('detailCustomerAddress')) {
            $data = array(
                'namaCustomerAddress' => $this->input->post('namaCustomerAddress'),
                'customerAddressTlp' => $this->input->post('customerAddressTlp'),
                'detailCustomerAddress' => $this->input->post('detailCustomerAddress'),
                'noteCustomerAddress' => $this->input->post('noteCustomerAddress'),
                'domisiliCustomerAddress' => $this->input->post('domisiliCustomerAddress'),
                'customerRef' => $this->input->post('customerRef'),
                'customerAddressType' => 1
            );
            
            $this->User_model->addCustomerAddress($data);
        }
    }

    function deleteProdukCart()
    { 
        $id = $this->input->post('idProdukCart');
        $this->db->where('MsItemCartId', $id);
        $this->db->delete('TblMsItemCart');

        $response['message'] = 'Produk berhasil dihapus dari keranjang';
        echo json_encode($response);
    }

    function getAlamatCustomerById($id)
    {
        $query = $this->db->query("SELECT * FROM TblMsCustomerAddress WHERE customerRef='{$id}' AND customerAddressType='1'")->result();

        echo json_encode($query);
        exit;
    }

    function getAlamatCustomerByActv($id)
    {
        $query = $this->db->query("SELECT * FROM TblMsCustomerAddress WHERE idCustomerAddress='{$id}'")->result();

        echo json_encode($query);
        exit;
    }

    function getAlamatCustomerByIdAll($id)
    {
        $query = $this->db->query("SELECT * FROM TblMsCustomerAddress WHERE customerRef='{$id}'")->result();

        echo json_encode($query);
        exit;
    }

    function getItemVarian($id)
    {
        $color = $this->input->post('varcolor');
        $size = $this->input->post('varsize');

        $query = $this->db->query("SELECT * FROM TblMsProdukDetail JOIN TblMsSatuan ON TblMsProdukDetail.SatuanId = TblMsSatuan.SatuanId WHERE MsProdukDetailRef='{$id}' AND MsProdukDetailVarian LIKE '%Warna:{$color}%' AND MsProdukDetailVarian LIKE '%Ukuran:{$size}%'")->row();
        
        $response = array();
        $response[] = $query->MsProdukDetailPrice;
        $response[] = $query->SatuanName;
        $response[] = $query->MsProdukDetailId;
        
        echo json_encode($response);
        exit;
    }

    function getItemVarianSelected($id)
    {
        // $color = $this->input->post('varcolor');
        // $size = $this->input->post('varsize');

        // $query = $this->db->query("SELECT * FROM TblMsProdukDetail JOIN TblMsSatuan ON TblMsProdukDetail.SatuanId = TblMsSatuan.SatuanId WHERE MsProdukDetailRef='{$id}' AND MsProdukDetailVarian LIKE '%Warna:{$color}%' AND MsProdukDetailVarian LIKE '%Ukuran:{$size}%'")->row();
        
        // $response = array(
        //     'MsProdukDetailVarian' => $produkdetail
        // );
        
        // echo json_encode($response);
        // exit;

        $color = $this->input->post('warna');
        $size = $this->input->post('ukuran');
    
        $query = $this->db->query("SELECT * FROM TblMsProdukDetail JOIN TblMsSatuan ON TblMsProdukDetail.SatuanId = TblMsSatuan.SatuanId WHERE MsProdukDetailRef='{$id}' AND MsProdukDetailVarian LIKE '%Warna:{$color}%' AND MsProdukDetailVarian LIKE '%Ukuran:{$size}%'")->row();
    
        $response = array(
            'MsProdukDetailVarian' => $query // Menggunakan $query daripada $produkdetail
        );
    
        echo json_encode($response);
        exit;

    }
}