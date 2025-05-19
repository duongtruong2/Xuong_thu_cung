<?php 

class HomeController
{

    public $modelSanPham;
    public function __construct()
    {
         $this->modelSanPham = new SanPham();
    }
    public function home()
    {
        echo "Đây là homehome";
       
    }
    public function trangChu()
    {

        echo "Đây là trang chu cua toitoi";
    }
       public function danhSachSanPham()
    {
        // echo "Đây là danh sach san pham";
        $listProduct = $this->modelSanPham->getAllProduct();
        // var_dump($listProduct);die();
        require_once './views/listProduct.php';
    }

}