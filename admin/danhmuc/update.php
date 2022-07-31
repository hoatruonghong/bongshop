<?php
    if(is_array($danhmuc)){
        extract($danhmuc);
    }
?>

<div class="row">
            <div class="row header"><h1>Cập nhật loại hàng hóa</h1></div>
            <div class="row">
                <form action="index.php?act=updatedm" method="post">
                    Mã loại <br>
                    <input type="text" name="maloai"> <br>
                    Tên loại <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>"> <br>
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $id;?>">
                    <input type="submit" value="Cập nhật" name="capnhat" id="">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>