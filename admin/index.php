<?php 
   include "./model/pdo.php";
   include "header.php";
   include "./model/danhmuc.php";
   //controller
   if(isset($_GET['act'])){
      $act=$_GET['act'];
      switch ($act) {
         case 'adddm':
            //kiểm tra người dùng có click vào nút thêm hay không 
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
               $tenloai=$_POST['tenloai'];
               loai_insert($tenloai);
               $thongbao="Thêm thông báo thành công";
            }
           
            include "danhmuc/add.php";
            break;
         case 'listdm':
            $listdanhmuc=loai_loadil();
            include "danhmuc/list.php";
            break;

          case 'xoadm':
            if(isset($_GET['maloai'])&&($_GET['maloai']>0)){
               loai_delete($_GET['maloai']);
            }
            $listdanhmuc=loai_loadil();
            include "danhmuc/list.php";
            break;  
         case 'suadm':
            if(isset($_GET['maloai'])&&($_GET['maloai']>0)){
               $loai=loai_loadone($_GET['maloai']);
            }  
            include "danhmuc/update.php";
            break;  
          case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
               $ten_loai=$_POST['tenloai'];
               $ma_loai=$_POST['ma_loai'];
               loai_update($ma_loai,$ten_loai);
               // $sql= "update loai set tenloai='".$ten_loai."' where ma_loai=".$ma_loai;
               // pdo_execute($sql);
               $thongbao="Cập nhật thành công";
            }
            $listdanhmuc=loai_loadil();
            include "danhmuc/list.php";
            break;   
         default:
         include "home.php";
            break;
      }
   }else{
      include "home.php";
   }
   include "foodter.php";
?>
