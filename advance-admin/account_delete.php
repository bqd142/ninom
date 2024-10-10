<?php
 include('../model/control_user.php');
 $id = $_GET['id'];
 $data=new data_account();
 $del=$data->del_profile($id);
 echo "<script> window.location.href = '../advance-admin/account_select.php';</script>;";
 ?>