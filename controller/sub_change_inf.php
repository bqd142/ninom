<?php 
include "../model/control_user.php";
session_start();
if(isset($_POST['txtsub'])){
        $data = new data_account();
        move_uploaded_file($_FILES['txtavatar']['tmp_name'],'../upload/'.$_FILES['txtavatar']['name']);
        $update=$data->update_profile($_SESSION['user_name'],$_POST['txtaddress'], $_FILES['txtavatar']['name'],$_POST['txtgender'],  $_POST['txthobby'],  $_POST['txtemail']);
        if($update){
            echo "<script>alert('Đã cập nhật thông tin');
             window.location.href = '../Guest/profile.php';
            </script>;";
        } 
        else {echo "<script>alert('Chưa thực hiện được');</script>";}
    }



?>