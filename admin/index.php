 <?php
include "./model/pdo.php";
include "header.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
//controller
if (isset($_GET['act'])) {
   $act = $_GET['act'];
   switch ($act) {
      case 'adddm':
         //kiểm tra người dùng có click vào nút thêm hay không 
         if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $tenloai = $_POST['tenloai'];
            loai_insert($tenloai);
            $thongbao = "Thêm thông báo thành công";
         }

         include "danhmuc/add.php";
         break;
      case 'listdm':
         $listdanhmuc = loai_loadil();
         include "danhmuc/list.php";
         break;

      case 'xoadm':
         if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
            loai_delete($_GET['maloai']);
         }
         $listdanhmuc = loai_loadil();
         include "danhmuc/list.php";
         break;
      case 'suadm':
         if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
            $loai = loai_loadone($_GET['maloai']);
         }
         include "danhmuc/update.php";
         break;
      case 'updatedm':
         if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $ten_loai = $_POST['tenloai'];
            $ma_loai = $_POST['ma_loai'];
            loai_update($ma_loai, $ten_loai);
            // $sql= "update loai set tenloai='".$ten_loai."' where ma_loai=".$ma_loai;
            // pdo_execute($sql);
            $thongbao = "Cập nhật thành công";
         }
         $listdanhmuc = loai_loadil();
         include "danhmuc/list.php";
         break;
         //hanghoas

      case 'newhh':

         //check click button
         if (isset($_POST['add'])) {
            $ma_loai = $_POST['maloai'];
            $tenhanghoa = $_POST['tenhanghoa'];
            $giasanpham = $_POST['giahanghoa'];
            $mota = $_POST['motahanghoa'];
            $hinhhanghoa = $_FILES['hinhhanghoa']['name'];
            $target_dir = "./upload/";
            $target_file = $target_dir . basename($_FILES["hinhhanghoa"]['name']);
            if (move_uploaded_file($_FILES["hinhhanghoa"]['tmp_name'], $target_file)) {

            }
            else {

            }
            hanghoa_insert($tenhanghoa, $giasanpham, $hinhhanghoa, $mota, $ma_loai);

            $mess = "thêm thành công";
         }
         $listdanhmuc = loai_loadil();
         include "hang-hoa/new.php";
         break;


      case 'listhh':
         if (isset($_POST['listsearch'])) {
            $ky = $_POST['ky'];
            $maloai = $_POST['maloai'];

         }
         else {
            $ky = '';
            $maloai = 0;
         }
         $listdanhmuc = loai_loadil();
         $listhanghoa = hanghoa_select_all($ky, $maloai);

         include "hang-hoa/list.php";

         break;


      case 'deletehh':
         if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
            hanghoa_delete($_GET['ma_hh']);
            $mess = "Xóa thành công";
         }
         $listhanghoa = hanghoa_select_all("", 0);
         include "hang-hoa/list.php";
         break;

      case 'edithh':
         if (isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)) {
            $hanghoa = hanghoa_select_by_id($_GET['ma_hh']);

         }
         include "hang-hoa/edit.php";
         break;

      // case 'updatehh':
      //    if(isset($_POST['capnhat'])){
      //       $maloai=$_POST['maloai'];
      //       $tenhanghoa=$_POST['tenhanghoa'];
      //       $giahanghoa=$_POST['giahanghoa'];
      //       $mota=$_POST['motahanghoa'];

      //        hanghoa_update($maloai,$tenhanghoa,$giahanghoa,$mota);
      //       $mess="Cập nhật thành công";
      //    }
      //                $listhanghoa=hanghoa_select_all("",0);
      //    include "hang-hoa/list.php";
      //    break;

      default:
         include "home.php";
         break;
   }
}
else {
   include "home.php";
}
include "foodter.php";
?>