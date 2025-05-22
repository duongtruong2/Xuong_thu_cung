<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;
    public $modelDonHang;
    public $modelSanPham;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
        $this->modelDonHang = new AdminDonHang();
        $this->modelSanPham = new AdminSanPham();
    }

    public function danhSachQuanTri()
    {
        $listTaiKhoan = $this->modelTaiKhoan->getAllTaiKhoan();
        require_once './views/taikhoan/listTaiKhoan.php';
    }

    public function formAddQuanTri()
    {
       require_once './views/taikhoan/quantri/addQuanTri.php';

       deleteSessionError();
    }

    public function postAddQuanTri(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $ho_ten =$_POST['ho_ten'];
            $email = $_POST['email'];

            $errors=[];
            if (empty($ho_ten)){
                $errors['ho_ten'] = 'Tên không được để trống';
            }
            if (empty($email)){
                $errors['email'] = 'Email không được để trống';
            }
            $_SESSION['errors'] = $errors;
            if (empty($errors)){
                $password =password_hash('123@123ab', PASSWORD_BCRYPT);

                $chuc_vu_id = 1;
                $this->modelTaiKhoan->insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id);

                header("Location: " . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
                exit();
            }else{
                $_SESSION['flash']=true;

                header("Location: " . BASE_URL_ADMIN . '?act=form-them-quan-tri');
                exit();
            }
        }
    }
    

}
