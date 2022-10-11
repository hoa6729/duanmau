<div class="new mg">
            <div class="new mg themm">
                <h1>THÊM MỚI DANH MỤC</h1>
            </div>
            <div class="new mg contaito">

                    <div class="new mg10 fromdanhsach">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã loại</th>
                                <th>Tên Loại</th>
                                <th></th>
                            </tr>
                            <?php 
                                foreach ($listdanhmuc as $loai){
                                    extract ($loai);
                                    $suadm="index.php?act=suadm&maloai=".$ma_loai;
                                    $xoadm="index.php?act=xoadm&maloai=".$ma_loai;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$ma_loai.'</td>
                                    <td>'.$ten_loai.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xoá"></a></td>
                                </tr>';
                                }
                            ?>

                        </table>
                    </div>
                    <div class="new mg10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xoá các mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm "></a>
                    </div>
                </form>
            </div>
        </div>