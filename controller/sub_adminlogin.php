<?php
include "../model/control_user.php";
session_start();
if(isset($_POST['txtsub'])){
    if(empty($_POST['txtname']) || empty($_POST['txtpass'])){
        echo"Vui lòng nhập đủ thông tin";
    }
    else{
        $model = new data_account();
        $tmp = $model->sl_username($_POST['txtname']);
        $tmp = $tmp->fetch_assoc(); 
        if($_POST['txtpass'] == $tmp['pass'] && $tmp['type'] == 1){
            $_SESSION['user_name'] = $_POST['txtname'];
            echo"
            <script>window.location.href = '../advance-admin/index.php' ; </script>";
        }
        else{
            echo"<script>alert('Sai tài khoản hoặc mật khẩu!');
            window.location.href = '../Guest/login.php'; 
            </script>";
        }
    }
}

?>