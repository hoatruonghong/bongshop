<?php
/**
 * Chứa các function liên quan
 */
function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(name) values ('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($tenloai){
    $sql="delete from danhmuc where id=".$tenloai;
    pdo_execute($sql);
}
function loadAll_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    return pdo_query($sql);
}
function loadOne_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
    return pdo_query_one($sql);
}
function update_danhmuc($tenloai, $id){
    $sql="update danhmuc set name='".$tenloai."'where id=".$id;
    pdo_execute($sql);                
}
?>