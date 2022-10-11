<?php
if(is_array($loai)){
    extract($loai);
}
?>
<div class="new mg">
            <div class="new mg themm">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="new mg contaito">
                <form action="index.php?act=updatedm" method="post">
                    <div class="new mg10">
                        Mã Loại <br>
                        <input type="text" name="maloai" id="" >
                    </div>
                    <div class="new mg10">
                        Tên Loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai?>" >
                    </div>
                    <div class="new mg10">
                        <input type="hidden" name="ma_loai" value="<?php if(isset($ma_loai)&&($ma_loai>0)) echo $ma_loai?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao
                    ?>
                </form>
            </div>
        </div>
    </div>    