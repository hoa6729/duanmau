<div class="new mg">
            <div class="new mg themm">
                <h1>THÊM MỚI  HÀNG HÓA</h1>
            </div>
            <div class="new mg contaito">
                <form action="index.php?act=newhh" method="post" enctype= multipart/form-data>
                    <div class="new mg10">

                        Hàng Hóa <br>
                        <select name="maloai" id="">
                            <?php 
                            foreach($listdanhmuc as $loai){
                            extract($loai);
                            echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';

                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="new mg10">
                        Tên Hàng Hóa <br>
                        <input type="text" name="tenhanghoa" >
                    </div>
                    <div class="new mg10">
                        Đơn giá <br>
                        <input type="text" name="giahanghoa" >
                    </div>
                    <div class="new mg10">
                       Hình Ảnh <br>
                        <input type="file" name="hinhhanghoa"  >
                    </div>
                    <div class="new mg10">
                       Mô Tả<br>
                       <textarea name="motahanghoa" cols="30" rows="10"></textarea>
                    </div>
                    <div class="new mg10">
                        <input type="submit" value="THÊM MỚI" name="add">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listhh"><input type="button" value="DANH SÁCH"></a>

                    </div>
                    <?php
                    if(isset($mess)){
                        echo $mess;
                    }
                  
                    ?>
                </form>
            </div>
        </div>