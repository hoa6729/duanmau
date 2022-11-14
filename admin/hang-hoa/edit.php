<?php
if(is_array($hanghoa)){
    extract($hanghoa);
}
?>
<div class="new mg">
            <div class="new mg themm">
                <h1>CẬP NHẬT HÀNG</h1>
            </div>
            <div class="new mg contaito">
            <form action="index.php?click=edithh" method="post" enctype= multipart/form-data>
                    <div class="new mg10">
                       
                    </div>
                    <div class="new mg10">
                        Tên Hàng Hóa <br>
                        <input type="text" name="tenhanghoa" value="<?php echo $tenhh?>">
                    </div>
                    <div class="new mg10">
                        Đơn giá <br>
                        <input type="text" name="giahanghoa"value="<?=$don_gia?>" >
                    </div>
                    <div class="new mg10">
                       Hình Ảnh <br>
                        <input type="file" name="hinhhanghoa"  >
                    </div>
                    <div class="new mg10">
                       Mô Tả<br>
                       <textarea name="motahanghoa" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                    <div class="new mg10">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?click=listhh"><input type="button" value="DANH SÁCH"></a>

                    </div>
                    <?php
                    if(isset($mess)){
                        echo $mess;
                    }
                  
                    ?>
                </form>
            </div>
        </div>