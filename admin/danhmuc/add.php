<div class="row">
            <div class="row header"><h1>Thêm mới loại hàng hóa</h1></div>
            <div class="row">
                <form action="index.php?act=adddm" method="post">
                    Mã loại <br>
                    <input type="text" name="maloai"> <br>
                    Tên loại <br>
                    <input type="text" name="tenloai"> <br>
                    <input type="submit" value="Thêm mới" name="themmoi" id="">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>