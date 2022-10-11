<?php 
/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
 function sanpham_insert($tenloai){
    $sql= "INSERT INTO `loai`(ten_loai) VALUES ('$tenloai')";
    pdo_execute($sql);
 }
 function sanpham_delete($ma_loai){
    $sql = "delete from loai where ma_loai=".$ma_loai;
    pdo_execute($sql);
 }
 function sanpham_loadil(){
    $sql = "select * from loai order by ma_loai desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
 }
 function sanpham_loadone($ma_loai){
    $sql="select * from loai where ma_loai=".$ma_loai;
    $loai=pdo_query_one($sql);
    return $loai;
 }
 function sanpham_update($ma_loai,$ten_loai){
    $sql = "UPDATE loai SET ten_loai='".$ten_loai."' WHERE ma_loai='".$ma_loai."'";
    pdo_execute($sql, $ten_loai, $ma_loai);
 }
?>