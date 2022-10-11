<div class="new mg">
            <div class="new mg themm">
                <h1>THÊM MỚI LOẠI HÀNG</h1>
            </div>
            <div class="new mg contaito">
                <form action="index.php?act=adddm" method="post">
                    <div class="new mg10">
                        Mã Loại <br>
                        <input type="text" name="maloai" id="" >
                    </div>
                    <div class="new mg10">
                        Tên Loại <br>
                        <input type="text" name="tenloai" id="" >
                    </div>
                    <div class="new mg10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
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