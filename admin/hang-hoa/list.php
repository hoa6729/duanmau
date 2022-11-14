<div class="new mg">
            <div class="new mg themm mb">
                <h1>DANH SÁCH HÀNG HÓA</h1>
            </div>
            <div class="new mg contaito">

                    <div class="new mg10 fromdanhsach">


            <form action="index.php?act=listhh" method="post">
            <input type="text" name="ky">
            <select name="maloai" id="">
                <option value="0" selected>Tất cả</option>
                            <?php 
                            foreach($listloaihang as $loai){
                            extract($loai);
                            echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';

                                }
                            ?>
                            
                        </select>  
                        <input type="submit" name="listsearch" value="Search">
                        </form>
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã loại</th>
                                <th>Tên Loại</th>
                                <th>Hình Ảnh</th>
                                <th>Giá</th>
                                <th>Mô tả</th>
                               


                                <th></th>
                            </tr>
                            <?php
                            foreach ($listhanghoa as  $hang_hoa) {
                                extract($hang_hoa);
                                $edithh="index.php?act=edithh&ma_hh=".$ma_hh;
                                $deletehh="index.php?act=deletehh&ma_hh=".$ma_hh;
                                $hinhpart="./upload/.$hinh";
                                if(is_file($hinhpart)){
                                    $img="<img src='".$hinhpart."' height='80'>";
                                }else{
                                        $img="khong co hinh";
                                    
                                }

                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$ma_hh.'</td>
                                <td>'.$ten_hh.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$don_gia.'</td>
                                <td>'.$mo_ta.'</td>

                               

                                <td><a href="'.$edithh.'"><input type="button" value="Sửa"></a> 
                                    <a href="'.$deletehh.'"><input type="button" value="Xoá"></a> 
                                </td>
                            </tr>';
                            }
                            ?>
                           
                        </table>
                    </div>
                    <div class="new mg10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xoá các mục đã chọn">
                        <a href="index.php?act=newhh"><input type="button" value="Nhập thêm "></a>
                        <a href=""></a>
                      

                    </div>
                    <?php
                    if(isset($mess)){
                        echo $mess;
                    }
                    ?>
           
            </div>
        </div>