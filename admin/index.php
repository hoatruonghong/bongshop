<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "header.php";
    //controller : nhận yêu cầu, xử lý, trả về
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                //kiểm tra xem user có click vào nút add hay không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "./danhmuc/add.php";
                break;
            case "listdm":
                $list = loadAll_danhmuc();
                include "./danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                };
                $list = loadAll_danhmuc();
                include "./danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){                    
                    $danhmuc = loadOne_danhmuc($_GET['id']);
                };
                include "./danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($tenloai, $id);
                    $thongbao = "Cập nhật thành công";
                }
                $list = loadAll_danhmuc();
                include "./danhmuc/list.php";
                break;
            case 'addsp':
                include "./sanpham/add.php";
                break;
            default:
                include "home.php";
                break;
        }
    }
    else{
        include "home.php";
    }


    include "footer.php";
?>